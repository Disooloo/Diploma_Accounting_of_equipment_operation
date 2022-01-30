<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branches;
use App\Models\notification;
use Illuminate\Http\Request;

class BranchesConstoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        $branches = Branches::orderBy('id', 'desc')->paginate(15);

        return view('admin.branches.index', compact('notifications',
            'notifications_count', 'branches'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branches = new Branches();

        $branches->Branches_name = $request->Branches_name;
        $branches->Description = $request->Description;
        $branches->Phone = $request->Phone;
        $branches->Email = $request->Email;
        $branches->link_site = $request->link_site;
        $branches->Contact_person = $request->Contact_person;
        $branches->Adress = $request->Adress;
        $branches->Requisites = $request->Requisites;
        $branches->Note = $request->Note;
        $branches->img = $request->img;

        $branches->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Branches $branch)
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.branches.update', compact('branch', 'notifications', 'notifications_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branches $branches)
    {

        $branches->Branches_name = $request->Branches_name;
        $branches->Description = $request->Description;
        $branches->Phone = $request->Phone;
        $branches->Email = $request->Email;
        $branches->link_site = $request->link_site;
        $branches->Contact_person = $request->Contact_person;
        $branches->Adress = $request->Adress;
        $branches->Requisites = $request->Requisites;
        $branches->Note = $request->Note;
        $branches->img = $request->img;

        $branches->save();

        return redirect('/branches');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branches = Branches::findOrFail($id);
        $branches->delete();

        return redirect('/branches');
    }
}
