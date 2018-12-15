<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Setting;
use App\Application;
use PDF;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type == 'program-chair'){
            if (Setting::where('type', 'circular_published')->first()->value == 0) {
                return view('admins.publish_circular');
            }
            else {
                return view('program-chair.home');
            }
        }
        elseif (Auth::user()->user_type == 'administrator') {
            return view('administrator.home');
        }

        elseif (Auth::user()->user_type == 'scrutinizer') {
            return redirect()->route('applications.index');
        }

        elseif (Auth::user()->user_type == 'applicant') {
            $application = Auth::user()->application;
            if($application != null && $application->payment_status == 'Unpaid'){
                return view('applications.payment');
            }
            elseif($application == null){
                return view('applicant.circular');
            }
            else{
                return view('applicant.home');
            }
        }
    }

    public function circular_publish(Request $request){
        $setting = Setting::where('type', 'circular_published')->first();
        $setting->value = 1;
        $setting->save();
        return view('program-chair.home');
    }

    public function circular_upload(Request $request){
        $setting = Setting::where('type', 'circular_link')->first();
        if($setting == null){
            $setting = new Setting;
            $setting->type = 'circular_link';
            $setting->value = $request->circular->store('uploads/circular');
            $setting->save();
        }
        else{
            $setting->value = $request->circular->store('uploads/circular');
            $setting->save();
        }


        $setting = Setting::where('type', 'session_year')->first();
        if($setting == null){
            $setting = new Setting;
            $setting->type = 'session_year';
            $setting->value = $request->session_year;
            $setting->save();
        }
        else{
            $setting->value = $request->session_year;
            $setting->save();
        }

        return back();
    }

    public function sign_upload(Request $request){
        $setting = Setting::where('type', 'sign_link')->first();
        if($setting == null){
            $setting = new Setting;
            $setting->type = 'sign_link';
            $setting->value = $request->sign->store('uploads/sign');
            $setting->save();
        }
        else{
            $setting->value = $request->sign->store('uploads/sign');
            $setting->save();
        }

        $setting = Setting::where('type', 'submission_date')->first();
        if($setting == null){
            $setting = new Setting;
            $setting->type = 'submission_date';
            $setting->value = strtotime($request->submission_date);
            $setting->save();
        }
        else{
            $setting->value = strtotime($request->submission_date);
            $setting->save();
        }

        $setting = Setting::where('type', 'exam_date')->first();
        if($setting == null){
            $setting = new Setting;
            $setting->type = 'exam_date';
            $setting->value = strtotime($request->exam_date);
            $setting->save();
        }
        else{
            $setting->value = strtotime($request->exam_date);
            $setting->save();
        }

        return back();
    }

    public function apply()
    {
        return view('applications.form');
    }

    public function show_application_form(Request $request)
    {
        $application = Auth::user()->application;
        return view('applications.show', compact('application'));
    }

    public function admitcard(Request $request)
    {
        return view('admins.admit');
    }

    public function publish_admit_card(Request $request)
    {
        $setting = Setting::where('type', 'admit_card_published')->first();
        $setting->value = 1;
        $setting->save();

        $roll = (int)Setting::where('type', 'session_year')->first()->value.'001';
        foreach (Application::where('session', Setting::where('type', 'session_year')->first()->value)->where('approval_status', 'Eligible')->get() as $key => $application) {
            $application->roll = $roll;
            $application->save();
            $roll++;
        }
        return back();
    }

    public function attendance_sheet()
    {
        return view('admins.attendance');
    }

    public function attendance_sheet_upload(Request $request){
        $setting = Setting::where('type', 'attendance_sheet_link')->first();
        if($setting == null){
            $setting = new Setting;
            $setting->type = 'attendance_sheet_link';
            $setting->value = $request->attendance->store('uploads/attendance');
            $setting->save();

            $setting = Setting::where('type', 'attendance_sheet_published')->first();
            $setting->value = 1;
            $setting->save();
        }
        else{
            $setting->value = $request->attendance->store('uploads/attendance');
            $setting->save();

            $setting = Setting::where('type', 'attendance_sheet_published')->first();
            $setting->value = 1;
            $setting->save();
        }

        return back();
    }


    public function result()
    {
        return view('admins.result');
    }

    public function result_upload(Request $request){
        $setting = Setting::where('type', 'result_link')->first();
        if($setting == null){
            $setting = new Setting;
            $setting->type = 'result_link';
            $setting->value = $request->result->store('uploads/result');
            $setting->save();

            $setting = Setting::where('type', 'result_published')->first();
            $setting->value = 1;
            $setting->save();
        }
        else{
            $setting->value = $request->result->store('uploads/result');
            $setting->save();

            $setting = Setting::where('type', 'result_published')->first();
            $setting->value = 1;
            $setting->save();
        }

        return back();
    }

    public function download_attendance(Request $request)
    {
        $applications = Application::where('session', Setting::where('type', 'session_year')->first()->value)->where('approval_status', 'Eligible')->get();
        $pdf = PDF::loadView('admins.attendance_sheet', compact('applications'));
        return $pdf->download('attendance_sheet.pdf');
    }


    public function download_admit(Request $request)
    {
        $application = Auth::user()->application;
        $pdf = PDF::loadView('applicant.admit_card', compact('application'));
        return $pdf->download('admit-'.$application->roll.'.pdf');
    }

    public function change_password()
    {
        return view('authentications.changePassword');
    }

    public function password_update(Request $request)
    {
        if($request->new_password == $request->confirm_password){
            $user = Auth::user();
            $user->password = Hash::make($request->new_password);
            $user->save();
        }

        return redirect()->route('home');
    }
}
