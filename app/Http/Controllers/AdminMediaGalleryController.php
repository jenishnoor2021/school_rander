<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mediagalleryimage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminMediaGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Mediagalleryimage::orderBy('id','DESC')->Paginate(10);
        return view('admin.mediagalleryimages.index',compact('gallerys'));
        // return view('admin.pushnotification.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mediagalleryimages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $str = $file->getClientOriginalName();
                $str = str_replace(' ', '_', $str);

                $name = time() . $str;

                $file->move('mediagalleryimg', $name);

                $input['file'] = "$name";
                Mediagalleryimage::create(['file' => $name]);
            }
        }
        
        Session::flash('message', "Image Save Successfully");
        return redirect('admin/mediagalleryimage');
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
        $gallery = Mediagalleryimage::findOrFail($id);
        return view('admin.mediagalleryimages.edit',compact('gallery'));
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
        $push = Mediagalleryimage::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('file')){

            $str = $file->getClientOriginalName();
                $str = str_replace(' ', '_', $str);

                $name = time() . $str;

            $file->move('mediagalleryimg', $name);

            $input['file'] = "$name";

            if(file_exists(public_path() . $push->file)) // make sure it exits inside the folder
            {
              unlink(public_path() . $push->file);
            }

            // unlink(public_path() . $push->file);
        }
        //  return $input;
        $push->update($input);
        // return Redirect::back();
        return redirect('admin/mediagalleryimage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $push = Mediagalleryimage::findOrFail($id);
        if($push->file == '/mediagalleryimg/'){
            $push->delete();
        }else{

            if(file_exists(public_path() . $push->file)) // make sure it exits inside the folder
            {
              unlink(public_path() . $push->file);
            }

            // unlink(public_path() . $push->file);
            $push->delete();
        }
       
        return  Redirect::back();
    }

    public function deleteMediaGalleryAll(Request $request)
    {
        $ids = $request->ids;
        $single_id = explode(",",$ids);
       foreach($single_id as $id){
        $i = Mediagalleryimage::findOrFail($id);
        if($i->file == '/mediagalleryimg/'){
        }else{
            unlink(public_path() . $i->file);
        }
        $i->delete();
       }
        return response()->json(['success'=>"Deleted successfully."]);
    }

    public function mediagalleryActive($id)
    {
        $slider = Mediagalleryimage::where('id',$id)->first();
        if($slider->is_show == 1)
        {
            $slider->is_show = 0;
        }else{
            $slider->is_show = 1;
        }
        $slider->save();
        return redirect()->back();
    }
}
