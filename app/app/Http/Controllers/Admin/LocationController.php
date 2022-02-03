<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branches;
use App\Models\Location;
use App\Models\notification;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(15)->get();
        $notifications_count = notification::all()->count();

        $location = Location::orderBy('id', 'desc')->paginate(15);


        return view('admin.location.index', compact('location',
            'notifications', 'notifications_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(15)->get();
        $notifications_count = notification::all()->count();

        $branches = Branches::orderBy('id', 'desc')->paginate(15);

        return view('admin.location.create', compact('notifications',
            'notifications_count', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = new Location();
        $location->local = $request->local;
        $location->id_branches = $request->id_branches;
        $location->Description = $request->Description;
        $location->Accountant_code = $request->Accountant_code;
        $location->phone = $request->phone;
        $location->Adress = $request->Adress;
        $location->Cordinates = $request->Cordinates;
        $location->Site = $request->Site;
        $location->Email = $request->Email;
        $location->Contact_person = $request->Contact_person;
        $location->Requisites = $request->Requisites;
        $location->Note = $request->Note;
        $location->img = $request->img;
        $location->save();
        return redirect('/location');
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
    public function edit(Location $location)
    {
        $notifications = notification::orderBy('id', 'desc')->limit(15)->get();
        $notifications_count = notification::all()->count();

        $branches = Branches::orderBy('id', 'desc')->paginate(15);

        return view('admin.location.update', compact('notifications',
        'notifications_count', 'branches', 'location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $location->local = $request->local;
        $location->id_branches = $request->id_branches;
        $location->Description = $request->Description;
        $location->Accountant_code = $request->Accountant_code;
        $location->phone = $request->phone;
        $location->Adress = $request->Adress;
        $location->Cordinates = $request->Cordinates;
        $location->Site = $request->Site;
        $location->Email = $request->Email;
        $location->Contact_person = $request->Contact_person;
        $location->Requisites = $request->Requisites;
        $location->Note = $request->Note;
        $location->img = $request->img;
        $location->save();

        return redirect('/location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect('/location');
    }
}
