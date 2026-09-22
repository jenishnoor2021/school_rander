<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galleryimage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Galleryimage::orderBy('id','DESC')->Paginate(10);
        return view('admin.galleryimages.index',compact('gallerys'));
        // return view('admin.pushnotification.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleryimages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $files = is_array($request->file('file')) ? $request->file('file') : [$request->file('file')];
            foreach ($files as $file) {
                if ($file && $file->isValid()) {
                    $original = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $cleanName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $original);
                    $name = time() . '_' . uniqid() . '_' . $cleanName . '.' . $extension;

                    $file->move(public_path('galleryimg'), $name);

                    Galleryimage::create([
                        'file' => $name,
                        'text' => $request->text,
                        'is_show' => 1
                    ]);
                }
            }
            Session::flash('message', "Image(s) Saved Successfully");
        } else {
            Session::flash('error', "Please select an image to upload");
        }

        return redirect('admin/galleryimage');
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
        $gallery = Galleryimage::findOrFail($id);
        return view('admin.galleryimages.edit', compact('gallery'));
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
        $push = Galleryimage::findOrFail($id);

        $input = [
            'text' => $request->text,
        ];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            if ($file->isValid()) {
                $original = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $cleanName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $original);
                $name = time() . '_' . uniqid() . '_' . $cleanName . '.' . $extension;

                $file->move(public_path('galleryimg'), $name);

                $input['file'] = $name;

                if (!empty($push->file) && $push->file != '/galleryimg/' && file_exists(public_path($push->file))) {
                    @unlink(public_path($push->file));
                }
            }
        }

        $push->update($input);
        Session::flash('message', "Image Updated Successfully");
        return redirect('admin/galleryimage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $push = Galleryimage::findOrFail($id);
        if (!empty($push->file) && $push->file != '/galleryimg/' && file_exists(public_path($push->file))) {
            @unlink(public_path($push->file));
        }
        $push->delete();

        Session::flash('message', "Image Deleted Successfully");
        return Redirect::back(); 
    }

    public function deleteGalleryAll(Request $request)
    {
        $ids = $request->ids;
        if (is_string($ids)) {
            $ids = array_filter(explode(',', $ids), 'strlen');
        }
        if (empty($ids) || !is_array($ids)) {
            return response()->json(['error' => 'Please select at least one record to delete.'], 422);
        }

        try {
            \Illuminate\Support\Facades\DB::beginTransaction();
            $deletedCount = 0;
            foreach ($ids as $id) {
                $i = Galleryimage::find($id);
                if ($i) {
                    if (!empty($i->file) && $i->file !== '/galleryimg/' && file_exists(public_path($i->file))) {
                        @unlink(public_path($i->file));
                    }
                    $i->delete();
                    $deletedCount++;
                }
            }
            \Illuminate\Support\Facades\DB::commit();

            if ($deletedCount === 0) {
                return response()->json(['error' => 'No matching records found to delete.'], 404);
            }

            return response()->json(['success' => 'Selected records have been deleted successfully.']);
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\DB::rollBack();
            return response()->json(['error' => 'An error occurred while deleting: ' . $e->getMessage()], 500);
        }
    }

    public function galleryActive($id)
    {
        $slider = Galleryimage::where('id',$id)->first();
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