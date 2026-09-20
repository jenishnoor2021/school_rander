<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminAchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achivements = Achivement::orderBy('id', 'DESC')->Paginate(10);
        return view('admin.achivement.index', compact('achivements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achivement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $namef = time() . $str;

            $file->move('achivement', $namef);

        }

        $achivement = new Achivement([
            "category" => $request->category,
            "text" => $request->text,
            "file" => $namef,
            "is_show" => 1,
        ]);
        $achivement->save();

        return redirect('/admin/achivement');
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
        $achivement = Achivement::findOrFail($id);
        return view('admin.achivement.edit',compact('achivement'));
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
        $push = Achivement::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('file')){

            $str = $file->getClientOriginalName();
                $str = str_replace(' ', '_', $str);

                $name = time() . $str;

            $file->move('achivement', $name);

            $input['file'] = "$name";

            if(file_exists(public_path() . $push->file)) // make sure it exits inside the folder
            {
              unlink(public_path() . $push->file);
            }

        }
        $push->update($input);

        return redirect('admin/achivement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achivement = Achivement::findOrFail($id);

        if ($achivement->file == '/achivement/') {

        } else {

            if (file_exists(public_path() . $achivement->file)) // make sure it exits inside the folder
            {
                unlink(public_path() . $achivement->file);
            }

        }
        $achivement->delete();

        return Redirect::back();
    }
}
