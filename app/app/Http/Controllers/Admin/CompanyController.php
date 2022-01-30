<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\notification;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = notification::orderBy('id', 'desc')->limit(15)->get();
        $notifications_count = notification::all()->count();
        $company = Company::orderBy('id', 'desc')->paginate(15);

        return view('admin.company.index', compact('company', 'notifications', 'notifications_count' ));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();

        $company->Company_name = $request->Company_name;
        $company->Description = $request->Description;
        $company->company_adress = $request->company_adress;
        $company->link_site = $request->link_site;
        $company->Email = $request->Email;
        $company->Contact_person = $request->Contact_person;
        $company->Requisites = $request->Requisites;
        $company->Note = $request->Note;
        $company->img = $request->img;

        $company->save();

        return redirect()->back();

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
    public function edit(Company $company )
    {
        $notifications = notification::orderBy('id', 'desc')->limit(5)->get();
        $notifications_count = notification::all()->count();

        return view('admin.company.update', compact('company', 'notifications', 'notifications_count' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company )
    {

        $company->Company_name = $request->Company_name;
        $company->Description = $request->Description;
        $company->company_adress = $request->company_adress;
        $company->link_site = $request->link_site;
        $company->Email = $request->Email;
        $company->Contact_person = $request->Contact_person;
        $company->Requisites = $request->Requisites;
        $company->Note = $request->Note;
        $company->img = $request->img;

        $company->save();

        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect('/company');

    }
}
