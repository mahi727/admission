<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Setting;
use Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::where('session', Setting::where('type', 'session_year')->first()->value)->get();
        return view('admins.applications', compact('applications'));
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
        if(Application::where('user_id', Auth::user()->id)->first() != null){
            return redirect()->route('home');
        }

        $application = new Application;
        $application->user_id = Auth::user()->id;

        $application->name = $request->name;
        $application->fatherName = $request->fatherName;
        $application->motherName = $request->motherName;
        $application->mailingAddress = $request->mailingAddress;
        $application->permanentAddress = $request->permanentAddress;
        $application->birthDate = strtotime($request->birthDate);
        $application->nationality = $request->nationality;
        $application->mobile = $request->mobile;

        $application->school_name = $request->school_name;
        $application->ssc_board = $request->ssc_board;
        $application->ssc_group = $request->ssc_group;
        $application->ssc_year = $request->ssc_year;
        $application->ssc_division = $request->ssc_division;
        $application->ssc_gpa = $request->ssc_gpa;

        $application->college_name = $request->college_name;
        $application->hsc_board = $request->hsc_board;
        $application->hsc_group = $request->hsc_group;
        $application->hsc_year = $request->hsc_year;
        $application->hsc_division = $request->hsc_division;
        $application->hsc_gpa = $request->hsc_gpa;

        $application->department = $request->department;
        $application->university = $request->university;
        $application->honors_year = $request->honors_year;
        $application->honors_class = $request->honors_class;
        $application->cgpa = $request->cgpa;

        if($request->hasFile('ssc_marksheet')){
            $application->ssc_marksheet = $request->ssc_marksheet->store('uploads');
        }
        if($request->hasFile('ssc_certificate')){
            $application->ssc_certificate = $request->ssc_certificate->store('uploads');
        }
        if($request->hasFile('hsc_marksheet')){
            $application->hsc_marksheet = $request->hsc_marksheet->store('uploads');
        }
        if($request->hasFile('hsc_certificate')){
            $application->hsc_certificate = $request->hsc_certificate->store('uploads');
        }
        if($request->hasFile('honors_marksheet')){
            $application->honors_marksheet = $request->honors_marksheet->store('uploads');
        }
        if($request->hasFile('honors_certificate')){
            $application->honors_certificate = $request->honors_certificate->store('uploads');
        }
        if($request->hasFile('photo')){
            $application->photo = $request->photo->store('uploads');
        }
        if($request->hasFile('sign')){
            $application->sign = $request->sign->store('uploads');
        }

        $application->application_id = Application::all()->last()->application_id + 1;

        $application->session = Setting::where('type', 'session_year')->first()->value;

        if($application->save()){
            return redirect()->route('home');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Application::destroy($id);
        return redirect()->route('applications.index');
    }

    public function approve($id)
    {
        $application = Application::findOrFail($id);
        $application->approval_status = 'Eligible';
        $application->save();
        return redirect()->route('applications.index');
    }
}
