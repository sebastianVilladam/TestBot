<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Administrator;

class AdministratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Administrator::all();
        return view('privateViews.administrators', ['list' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privateViews.adminRegister');
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
        Administrator::create($input);

        $admins = Administrator::all();
        return view('privateViews.administrators', ['list' => $admins]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Administrator::findOrFail($id);
        return view('privateViews.administrator', ['data' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Administrator::findOrFail($id);
        return view('privateViews.adminSettings', ['data' => $admin]);
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
        
        $admin = Administrator::findOrFail($id);
        $input = $request->all();
        $admin->fill($input)->save();
        
        return view('privateViews.administrator', ['data' => $admin]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Administrator::findOrFail($id);
        $admin->delete();

        $admins = Administrator::all();
        return view('privateViews.administrators', ['list' => $admins]);
    }
}
