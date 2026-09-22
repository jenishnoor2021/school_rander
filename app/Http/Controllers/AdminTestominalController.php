<?php

namespace App\Http\Controllers;

use App\Models\Testomonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class AdminTestominalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testomonial = Testomonial::orderBy('id', 'DESC')->get();
        return view('admin.testomonial.index', compact('testomonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testomonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'file' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $input = $request->all();
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('testomonialimg', $name);

            $input['file'] = "$name";

        }

        Testomonial::create($input);
        return redirect('/admin/testomonial');
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
        $testomonial = Testomonial::findOrFail($id);
        $view_data = [
            'header' => [
                'title' => 'Testomonial Edit',
            ],
            'body' => [
                'id' => '',
                'testomonial' => $testomonial,
            ],
            'footer' => [
                'js' => [],
            ],
        ];

        return view('admin.testomonial.edit', $view_data);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $push = Testomonial::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('testomonialimg', $name);

            $input['file'] = "$name";

            if ($push->file == "/testomonialimg/") {

            } else {
                if (file_exists(public_path() . $push->file)) {
                    unlink(public_path() . $push->file);
                }
            }

        }

        $push->update($input);

        return redirect('/admin/testomonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $backimg = Testomonial::findOrFail($id);
        if ($backimg->file == '/testomonialimg/') {
        } else {
            if (file_exists(public_path() . $backimg->file)) {
                unlink(public_path() . $backimg->file);
            }
        }
        $backimg->delete();

        return Redirect::back();
    }

    public function searchTestomonial(Request $request)
    {
        $data = $request->quer;
        $testomonial = Testomonial::where('name', 'like', '%' . $data . '%')->orderBy('id', 'DESC')->paginate(10);
        return view('admin.testomonial.index', compact('testomonial'));
    }

    public function statusUpdate(Request $request, $id)
    {
        $token = Testomonial::findOrFail($id);
        $tokenstatus = $token->is_approved;
        if ($tokenstatus == 0) {
            $token->is_approved = 1;
        } else {
            $token->is_approved = 0;
        }
        $token->save();
        return Redirect::back();
    }

    public function deleteTestomonialAll(Request $request)
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
                $item = Testomonial::find($id);
                if ($item) {
                    if (!empty($item->file) && $item->file !== '/testomonialimg/' && file_exists(public_path($item->file))) {
                        @unlink(public_path($item->file));
                    }
                    $item->delete();
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
