<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studio;

class StudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard-admin.studio.index', [
            'studios' => Studio::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.studio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:studios',
        ]);

        Studio::create($validatedData);

        return redirect('/dashboard-admin/studios')->with('success', 'New studio has been added!');
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
    public function edit(Studio $studio)
    {
        return view('dashboard-admin.studio.edit', [
            'studio' => $studio
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        $rules = [
            'name' => 'required|max:255|unique:studios',
        ];

        $validatedData = $request->validate($rules);

        Studio::where('id', $studio->id)->update($validatedData);

        return redirect('/dashboard-admin/studios')->with('success', 'Studio has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        Studio::destroy($studio->id);

        return redirect('/dashboard-admin/studios')->with('success', 'Studio has been deleted!');
    }
}
