@extends('layout.main')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@section('content')
    <div class="row">
        <form action="{{ route('store_cv') }}" method="post">
            @csrf
            <h1> Create CV </h1>
            <input type="hidden" name="user_id" id="" value="{{ Session::get('user') }}">

            <fieldset>
                <legend><span class="number">1</span> Your Personal Info</legend>
                {{-- <div class="col-md-3">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div class="col-md-3">
                    <label for="email">Email:</label>
                    <input type="email" id="mail" name="user_email">
                </div> --}}
                <div class="col-md-6">
                    <label for="user_phone">Phone:</label>
                    <input type="number" id="user_phone" name="user_phone">
                </div>
                <div class="col-md-6">
                    <label for="current_city">Current City:</label>
                    <input type="text" id="current_city" name="current_city">
                </div>
                <div class="col-md-6">
                    <label for="permanent_address">Permanent Address:</label>
                    <textarea type="text" id="permanent_address" name="permanent_address"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="current_address">Current Address:</label>
                    <textarea type="text" id="current_address" name="current_address"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="user_about">About:</label>
                    <textarea type="text" id="user_about" name="user_about"></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend><span class="number">2</span> Education</legend>
                <div id="education">
                    <div class="education_row">
                        <div class="col-md-3">
                            <label for="institute_name">Institue/Board:</label>
                            <input type="text" name="institute_name[]" id="institute_name">
                        </div>
                        <div class="col-md-3">
                            <label for="program_name">Program:</label>
                            <input type="text" name="program_name[]" id="program_name">
                        </div>
                        <div class="col-md-3">
                            <label for="cgpa">CGPA:</label>
                            <input type="text" name="cgpa[]" id="cgpa">
                        </div>
                        <div class="col-md-3">
                            <label for="obtained_marks">Obtained Marks:</label>
                            <input type="text" name="obtained_marks[]" id="obtained_marks">
                        </div>
                        <div class="col-md-4">
                            <label for="city">City:</label>
                            <input type="text" name="city[]" id="city">
                        </div>
                        <div class="col-md-4">
                            <label for="year_started">Year Started:</label>
                            <input type="text" name="year_started[]" id="year_started">
                        </div>

                        <div class="col-md-4">
                            <label for="year_ended">Year Ended:</label>
                            <input type="text" name="year_ended[]" id="year_ended">
                        </div>
                    </div>
                    <a class="btn btn-lg btn-success" style="cursor: pointer;" onclick="add_educations(event, this)"><span
                            class="fa fa-add"></span>Add more</a>
                </div>
            </fieldset>
            <fieldset>
                <legend><span class="number">3</span>Experience</legend>
                <div id="experience">
                    <div class="experience_row">
                        <div class="col-md-4">
                            <label for="company_name">Company:</label>
                            <input type="text" name="company_name[]" id="company_name">
                        </div>
                        <div class="col-md-4">
                            <label for="designation">Designation:</label>
                            <input type="text" name="designation[]" id="designation">
                        </div>
                        <div class="col-md-4">
                            <label for="work_city">Work City:</label>
                            <input type="text" name="work_city[]" id="work_city">
                        </div>

                        <div class="col-md-3">
                            <label for="year_started">Year Started:</label>
                            <input type="text" name="work_year_started[]" id="year_started">
                        </div>
                        <div class="col-md-3">
                            <label for="year_ended">Year Ended:</label>
                            <input type="text" name="work_year_ended[]" id="year_ended">
                        </div>
                        <div class="col-md-3">
                            <label for="month_started">Month Started:</label>
                            <input type="text" name="work_month_started[]" id="month_started">
                        </div>
                        <div class="col-md-3">
                            <label for="month_ended">Month Ended:</label>
                            <input type="text" name="work_month_ended[]" id="month_ended">
                        </div>
                        <div class="col-md-12">
                            <label for="work_description">Description:</label>
                            <textarea type="text" name="work_description[]"></textarea>
                        </div>

                    </div>
                    <a class="btn btn-lg btn-success" style="cursor: pointer;" onclick="add_experiences(event, this)"><span
                            class="fa fa-add"></span>Add more</a>
                </div>
            </fieldset>
            <fieldset>
                <legend><span class="number">3</span>Projects</legend>
                <div id="project">
                    <div class="project_row">
                        <div class="col-md-12">
                            <label for="project_name">Project Name:</label>
                            <input style="width: 30%" type="text" name="project_name[]" id="project_name">
                        </div>
                        <div class="col-md-12">
                            <label for="project_description">Description:</label>
                            <textarea type="text" name="project_description[]"></textarea>
                        </div>

                    </div>
                    <a class="btn btn-lg btn-success" style="cursor: pointer;" onclick="add_projects(event, this)"><span
                            class="fa fa-add"></span>Add more</a>
                </div>
            </fieldset>




            <button type="submit">Submit</button>

        </form>
    </div>
@endsection
