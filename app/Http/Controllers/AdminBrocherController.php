<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brocher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminBrocherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Brocher::orderBy('id','DESC')->Paginate(10);
        return view('admin.brocher.index',compact('gallerys'));
        // return view('admin.brocher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brocher.create');
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
            if($file = $request->file('file')){

                $str = $file->getClientOriginalName();
                $str = str_replace(' ', '_', $str);

                $name = time() . $str;
    
                $file->move('brocherpdf', $name);
    
                $input['file'] = "$name";
    
            }
    
            Brocher::create($input);
            Session::flash('message', "Image Save Successfully");
            return redirect('admin/brocher');
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
        $gallery = Brocher::findOrFail($id);
        return view('admin.brocher.edit',compact('gallery'));
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
        $push = Brocher::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('file')){

            $str = $file->getClientOriginalName();
                $str = str_replace(' ', '_', $str);

                $name = time() . $str;

            $file->move('brocherpdf', $name);

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
        return redirect('admin/brocher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $push = Brocher::findOrFail($id);
        if($push->file == '/brocherpdf/'){
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

    public function deleteBrocherAll(Request $request)
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
                $i = Brocher::find($id);
                if ($i) {
                    if (!empty($i->file) && $i->file !== '/brocherpdf/' && file_exists(public_path($i->file))) {
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
}
