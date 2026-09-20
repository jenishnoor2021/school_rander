<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use App\Models\Activity;
use App\Models\Event;
use App\Models\Category;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Enquirey;
use App\Models\Galleryimage;
use App\Models\Mediagalleryimage;
use App\Models\Slider;
use App\Models\Testomonial;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function login(Request $req)
    {
        // return $req->input();
        $user = User::where(['username' => $req->username])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect()->back()->with('alert', 'Username or password is not matched');
            // return "Username or password is not matched";
        } else {
            Auth::loginUsingId($user->id);
            $req->session()->put('user', $user);
            return redirect('/admin/dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        $testomonial = Testomonial::count();
        $gallery = Galleryimage::count();
        $contact = Contact::count();
        $contactunshow = Contact::where('is_show', 0)->count();
        $enauiry = Enquirey::count();
        $enauiryunshow = Enquirey::where('is_show', 0)->count();
        $slider = Slider::count();
        $mediagallery = Mediagalleryimage::count();
        $career = Career::count();
        $video = Video::count();
        $achivement = Achivement::count();
        $activity = Activity::count();
        $event = Event::count();

        return view('admin.index', compact('gallery', 'contact', 'enauiry', 'testomonial', 'slider', 'mediagallery', 'contactunshow', 'enauiryunshow', 'career', 'video', 'achivement', 'activity', 'event'));
    }

    public function profiledit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile.edit', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        // $user = User::where('id',1)->first();
        // $user->password = Hash::make($request->new_password);
        // $user->save();
        // return redirect()->back()->with("success","Password changed successfully !");
        // return $request;
        $user = Session::get('user');
        if (!(Hash::check($request->get('current_password'), $user->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Session::get('user');
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function homePage(Request $request)
    {
        $galleries = Galleryimage::where('is_show', 1)->latest()->take(8)->get();
        return view('frontend.index', compact('galleries'));
    }

    public function aboutUs(Request $request)
    {
        return view('frontend.about');
    }

    public function management(Request $request)
    {
        return view('frontend.managing-director');
    }

    public function principleMessage(Request $request)
    {
        return view('frontend.principal-message');
    }

    public function branchHead(Request $request)
    {
        return view('frontend.branch-head');
    }

    public function inchargeMessage(Request $request)
    {
        return view('frontend.coordinator');
    }

    public function circular(Request $request)
    {
        return view('frontend.circular');
    }

    public function schoolFacilities(Request $request)
    {
        return view('frontend.school-facilities');
    }

    public function branches(Request $request)
    {
        $response = Http::post('https://sunrisegroupofschools.org/api/get_branch_data/adajancom');
        $allbranches = $response['data'];
        return view('frontend.branches', compact('allbranches'));
    }

    public function admissionCriteria(Request $request)
    {
        return view('frontend.admission-criteria');
    }

    public function admissionInquiry(Request $request)
    {
        return view('frontend.admission-inquiry');
    }

    public function feesPay(Request $request)
    {
        return view('frontend.fees-payment');
    }

    public function policy(Request $request)
    {
        return view('frontend.refund-cancel-policy');
    }

    public function career(Request $request)
    {
        return view('frontend.careers');
    }

    public function academicActivities(Request $request)
    {
        $categories = Category::where('type', 'activity')->orderBy('name')->get();
        return $this->openFirstCategory($categories, 'activities.category');
    }

    public function extraActivities(Request $request)
    {
        return view('frontend.extra-activities');
    }

    public function event(Request $request)
    {
        $categories = Category::where('type', 'event')->orderBy('name')->get();
        return $this->openFirstCategory($categories, 'events.category');
    }

    public function categoryPage($type, $slug)
    {
        $models = [
            'achievement' => Achivement::class,
            'activity' => Activity::class,
            'event' => Event::class,
        ];

        abort_unless(isset($models[$type]), 404);
        $category = Category::where('type', $type)->where('slug', $slug)->firstOrFail();
        $model = $models[$type];
        $items = $model::where(function ($query) use ($category) {
            $query->where('category_id', $category->id)
                ->orWhere('category', $category->slug);
        })->where('is_show', 1)->latest()->get();
        $categories = Category::where('type', $type)->orderBy('name')->get();

        return view('frontend.category', compact('category', 'categories', 'items', 'type'));
    }

    public function activityCategory($slug)
    {
        return $this->categoryPage('activity', $slug);
    }

    public function eventCategory($slug)
    {
        return $this->categoryPage('event', $slug);
    }

    public function achievementCategory($slug)
    {
        return $this->categoryPage('achievement', $slug);
    }

    public function achievements(Request $request)
    {
        $categories = Category::where('type', 'achievement')->orderBy('name')->get();
        return $this->openFirstCategory($categories, 'achievements.category');
    }

    private function openFirstCategory($categories, $routeName)
    {
        abort_if($categories->isEmpty(), 404, 'No categories are available.');
        return redirect()->route($routeName, $categories->first()->slug);
    }

    public function gallery(Request $request)
    {
        $galleries = Galleryimage::where('is_show', 1)->latest()->paginate(12);
        return view('frontend.photo-gallery', compact('galleries'));
    }

    public function videoGallery(Request $request)
    {
        return view('frontend.video-gallery');
    }
    public function mediaGallery(Request $request)
    {
        return view('frontend.media-gallery');
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|min:2|max:255',
            'phone'    => 'required|regex:/^[0-9]{10}$/',
            'email'    => 'required|email|max:255',
            'subject'  => 'required|string|max:255',
            'fdetail'  => 'required|string|min:5|max:2000',
        ], [
            'username.required' => 'Please enter your full name.',
            'phone.required'    => 'Please enter your 10-digit mobile number.',
            'phone.regex'       => 'Please enter a valid 10-digit mobile number.',
            'email.required'    => 'Please enter your email address.',
            'email.email'       => 'Please provide a valid email address.',
            'subject.required'  => 'Please select a preferred campus.',
            'fdetail.required'  => 'Please write your message or inquiry.',
        ]);

        $validated['is_show'] = 0;
        Contact::create($validated);

        if ($request->ajax() || $request->wantsJson() || $request->expectsJson()) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Thank you! Your message has been received. Our team will contact you shortly.'
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your message has been received. Our team will contact you shortly.');
    }

    public function storeInquiry(Request $request)
    {
        $validated = $request->validate([
            'fname'        => 'required|string|min:2|max:255',
            'dob'          => 'required|date',
            'cast'         => 'required|string|in:Boy,Girl',
            'subject'      => 'required|string|max:255',
            'media'        => 'required|string|max:255',
            'source'       => 'nullable|string|max:255',
            'taken_by'     => 'required|string|min:2|max:255',
            'phone'        => 'required|regex:/^[0-9]{10}$/',
            'email'        => 'required|email|max:255',
            'bus_facility' => 'nullable|string|max:50',
            'detail'       => 'required|string|min:5|max:2000',
        ], [
            'fname.required'        => "Please enter the child's full name.",
            'dob.required'          => "Please enter the child's date of birth.",
            'cast.required'         => "Please select the child's gender.",
            'subject.required'      => 'Please select the grade applying for.',
            'media.required'        => 'Please select the preferred campus.',
            'taken_by.required'     => "Please enter the father's or guardian's name.",
            'phone.required'        => 'Please enter a 10-digit mobile number.',
            'phone.regex'           => 'Please enter a valid 10-digit mobile number.',
            'email.required'        => 'Please enter a valid email address.',
            'email.email'           => 'Please enter a valid email address.',
            'detail.required'       => 'Please enter the residential address.',
        ]);

        $validated['is_show'] = 0;
        Enquirey::create($validated);

        if ($request->ajax() || $request->wantsJson() || $request->expectsJson()) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Thank you! Your admission inquiry has been submitted successfully. Our admissions counselor will contact you within 24 hours.'
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your admission inquiry has been submitted successfully. Our admissions counselor will contact you within 24 hours.');
    }

    public function storeCareer(Request $request)
    {
        $validated = $request->validate([
            'fname'   => 'required|string|min:2|max:255',
            'phone'   => 'required|regex:/^[0-9]{10}$/',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'detail'  => 'nullable|string|max:2000',
            'file'    => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ], [
            'fname.required'   => 'Please enter your full name.',
            'phone.required'   => 'Please enter your 10-digit mobile number.',
            'phone.regex'      => 'Please enter a valid 10-digit mobile number.',
            'email.required'   => 'Please enter your email address.',
            'email.email'      => 'Please enter a valid email address.',
            'subject.required' => 'Please select the position you are applying for.',
            'file.mimes'       => 'The resume must be a file of type: PDF, DOC, or DOCX.',
            'file.max'         => 'The resume must not be larger than 5MB.',
        ]);

        if ($file = $request->file('file')) {
            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);
            $filename = time() . '_' . $str;
            $destination = public_path('careerimg');
            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }
            $file->move($destination, $filename);
            $validated['file'] = $filename;
        }

        $validated['is_show'] = 0;
        Career::create($validated);

        if ($request->ajax() || $request->wantsJson() || $request->expectsJson()) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Thank you! Your job application has been submitted successfully. Our HR team will review your profile and contact you soon.'
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your job application has been submitted successfully. Our HR team will review your profile and contact you soon.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {}

    public function showEmployee(Request $request) {}

    public function search(Request $request) {}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {}

    public function deleteAll(Request $request) {}
}
