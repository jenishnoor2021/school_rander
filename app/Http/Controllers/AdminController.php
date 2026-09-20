<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use App\Models\Activity;
use App\Models\Event;
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
use Illuminate\Support\Facades\Redirect;
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
        return view('frontend.index');
    }

    public function aboutUs(Request $request)
    {
        return view('frontend.about');
    }

    public function management(Request $request)
    {
        return view('frontend.management');
    }

    public function principleMessage(Request $request)
    {
        return view('frontend.principle-message');
    }

    public function branchHead(Request $request)
    {
        return view('frontend.branch-head');
    }

    public function inchargeMessage(Request $request)
    {
        return view('frontend.incharge-message');
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
        return view('frontend.fees-pay');
    }

    public function policy(Request $request)
    {
        return view('frontend.policy');
    }

    public function career(Request $request)
    {
        return view('frontend.careers');
    }

    public function academicActivities(Request $request)
    {
        return view('frontend.academic-activities');
    }
    
    public function extraActivities(Request $request)
    {
        return view('frontend.extra-activities');
    }

    public function event(Request $request)
    {
        return view('frontend.event');
    }
    
    public function academicActivitiesSub(Request $request, $name)
    {
        $activities = Activity::where('category', $name)->orderBy('id', 'desc')->get();
        $name = ucfirst($name);
        return view('frontend.academic-activities-sub', compact('activities', 'name'));
    }

    public function eventSub(Request $request, $name)
    {
        $events = Event::where('category', $name)->orderBy('id', 'desc')->get();
        $name = ucfirst(str_replace('_', ' ', $name)) . ' Day';
        return view('frontend.event-sub', compact('events', 'name'));
    }

    public function achievementsSub(Request $request, $name)
    {
        $achivements = Achivement::where('category', $name)->orderBy('id', 'desc')->get();
        $name = ucfirst($name);
        return view('frontend.achievements-sub', compact('achivements', 'name'));
    }
    
    public function achievements(Request $request)
    {
        return view('frontend.achievements');
    }

    public function gallery(Request $request)
    {
        return view('frontend.gallery');
    }

    public function videoGallery(Request $request)
    {
        return view('frontend.video-gallery');
    }
    public function mediaGallery(Request $request)
    {
        return view('frontend.news-gallery');
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect()->back()->with('alert', 'Messange send Successfully');
    }

    public function storeInquiry(Request $request)
    {
        $input = $request->all();
        Enquirey::create($input);
        return redirect()->back()->with('alert', 'Enqiry Message send Successfully');
    }

    public function storeCareer(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('careerimg', $name);

            $input['file'] = "$name";
        }
        Career::create($input);
        return redirect()->back()->with('alert', 'Career Message send Successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function showEmployee(Request $request)
    {

    }

    public function search(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

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
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function deleteAll(Request $request)
    {

    }
}
