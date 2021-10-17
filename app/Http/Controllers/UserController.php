<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AcademicInfo;
use App\Models\ExperienceInfo;
use App\Models\ProjectInfo;
use Crypt;
use Session;
use PDF;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('index');
    }

    public function signin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $decrypted_password = Crypt::decrypt($user->password);
        if ($decrypted_password == $request->password) {
            $request->session()->put('user_name', $user->name);
            $request->session()->put('user', $user->id);
            return redirect('/');
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    public function signup(Request $request)
    {
        $user = new User;

        $user->name = $request->user;
        $user->email = $request->email;
        $user->password = Crypt::encrypt($request->password);
        $user->save();
        $request->session()->put('user_name', $request->user);
        $request->session()->put('user', $user->id);
        return redirect('/');
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
        $user = User::where('id', $request->user_id)->first();
        $user->current_address = $request->current_address;
        $user->permanent_address = $request->permanent_address;
        $user->phone = $request->user_phone;
        $user->about = $request->user_about;
        $user->current_city = $request->current_city;
        $user->save();

        foreach ($request->institute_name as $key => $value) {
            $education = new AcademicInfo;
            $education->user_id = $request->user_id;
            $education->year_started = $request->year_started[$key];
            $education->year_ended = $request->year_ended[$key];
            $education->city = $request->city[$key];
            $education->obtained_marks = $request->obtained_marks[$key];
            $education->cgpa = $request->cgpa[$key];
            $education->program_name = $request->program_name[$key];
            $education->institute_name = $value;
            $education->save();
        }
        foreach ($request->designation as $key => $value) {
            $experience = new ExperienceInfo;
            $experience->user_id = $request->user_id;
            $experience->year_started = $request->work_year_started[$key];
            $experience->year_ended = $request->work_year_ended[$key];
            $experience->designation = $value;
            $experience->month_started = $request->work_month_started[$key];
            $experience->month_ended = $request->work_month_ended[$key];
            $experience->company_name = $request->company_name[$key];
            $experience->city = $request->work_city[$key];
            $experience->description =$request->work_description[$key];
            $experience->save();
        }
        foreach ($request->project_name as $key => $value) {
            $project = new ProjectInfo;
            $project->user_id = $request->user_id;
            $project->name = $value;
            $project->description = $request->project_description[$key];
            $project->save();
        }

        return redirect('show/'.$request->user_id.'');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $education = AcademicInfo::where('user_id', $id)->get();
        $experience = ExperienceInfo::where('user_id', $id)->get();
        $project = ProjectInfo::where('user_id', $id)->get();
        return view('user.show', compact('user', 'education', 'experience', 'project'));
    }

    public function download_pdf($id)
    {
        $user = User::where('id', $id)->first();
        $education = AcademicInfo::where('user_id', $id)->get();
        $experience = ExperienceInfo::where('user_id', $id)->get();
        $project = ProjectInfo::where('user_id', $id)->get();
        $pdf = PDF::loadView('user.show', compact('user', 'education', 'experience', 'project'));
        return $pdf->download('cv.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        $education = AcademicInfo::where('user_id', $id)->get();
        $experience = ExperienceInfo::where('user_id', $id)->get();
        $project = ProjectInfo::where('user_id', $id)->get();
        return view('user.edit', compact('user', 'education', 'experience', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $user->current_address = $request->current_address;
        $user->permanent_address = $request->permanent_address;
        $user->phone = $request->user_phone;
        $user->about = $request->user_about;
        $user->current_city = $request->current_city;
        $user->save();

        AcademicInfo::where('user_id', $request->user_id)->delete();
        foreach ($request->institute_name as $key => $value) {
            if ($value) {
                $education = new AcademicInfo;
                $education->user_id = $request->user_id;
                $education->year_started = $request->year_started[$key];
                $education->year_ended = $request->year_ended[$key];
                $education->city = $request->city[$key];
                $education->obtained_marks = $request->obtained_marks[$key];
                $education->cgpa = $request->cgpa[$key];
                $education->program_name = $request->program_name[$key];
                $education->institute_name = $value;
                $education->save();
            }
        }
        ExperienceInfo::where('user_id', $request->user_id)->delete();
        foreach ($request->company_name as $key => $value) {
            if ($value) {
                $experience = new ExperienceInfo;
                $experience->user_id = $request->user_id;
                $experience->year_started = $request->work_year_started[$key];
                $experience->year_ended = $request->work_year_ended[$key];
                $experience->designation = $request->designation[$key];
                ;
                $experience->month_started = $request->work_month_started[$key];
                $experience->month_ended = $request->work_month_ended[$key];
                $experience->company_name = $value;
                $experience->city = $request->work_city[$key];
                $experience->description =$request->work_description[$key];
                $experience->save();
            }
        }
        ProjectInfo::where('user_id', $request->user_id)->delete();
        foreach ($request->project_name as $key => $value) {
            if ($value) {
                $project = new ProjectInfo;
                $project->user_id = $request->user_id;
                $project->name = $value;
                $project->description = $request->project_description[$key];
                $project->save();
            }
        }

        return redirect('show/'.$request->user_id.'');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
