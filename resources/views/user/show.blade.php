@extends('layout.main')

@section('content')
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="jumbotron">
        <div class="container" style="background-color:#bcbcbc">
            <center>
                <h1 class="display-3">{{ $user->name }}</h1>
                <p>{{ $user->about }}</p>
                <br>
                <div class="col-md-6">
                    <p>
                        <li><strong>Address:</strong> 1821 Broadview Place, Fort Collins, CO, 80521
                        <li><strong>Cell Phone:</strong>{{ $user->phone }}
                        <li><strong>Personal Email:</strong>{{ $user->email }}
                        <li><strong>Current Address:</strong> {{ $user->current_address }}
                        <li><strong>Permanent Address:</strong> {{ $user->permanent_address }}
                    </p>
                </div>
            </center>
            <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
        </div>
    </div>

    <div class="container" style="background-color: white">
        <!-- Example row of columns -->
        <div style="float: right;margin-right:5%">
            <div class="col-md-6">
                <h2>Experience</h2>
                <br>
                @foreach ($experience as $exp)
                    <label for="company_name"><b> Company:</b>{{ $exp->company_name }}</label>
                    <p>(<b>Designation:</b> {{ $exp->designation }})-<b>{{ $exp->city }}</b>&nbsp;
                        ({{ $exp->month_started }},{{ $exp->year_started }})
                        -({{ $exp->month_ended ? $exp->month_ended . ',' : '' }}{{ $exp->year_ended }})</p>
                    <label for="work_description"><b>Description:</b></label>
                    <p>{{ $exp->description }}</p>
                    <br>
                    <br>
                @endforeach
            </div>
        </div>
        <div style="float: left;margin-left:5%">
            <div class="col-md-6">
                <h2>Education</h2>
                <br>
                @foreach ($education as $edu)
                    <label for="company_name"><b> Institute:</b> <u>{{ $edu->institute_name }}</u></label>
                    <p>(<b>Degree:</b> {{ $edu->program_name }})-{{ $edu->city }}&nbsp;
                        ({{ $edu->year_started }})-({{ $edu->year_ended ? $edu->year_ended : 'continued' }})</p>
                    <label for="work_description"><b>Obtained marks/CGPA:</b></label>
                    <p>{{ $edu->cgpa ? $edu->cgpa : $edu->obtained_marks }}</p>
                    <br>
                    <br>
                @endforeach
            </div>
        </div>
        <div style="float: left;margin-left:20%">
            <div class="col-md-6">
                <h2>Project</h2>
                <br>
                @foreach ($project as $pro)
                    <label for="project_name"><b>Project:</b> <u>{{ $pro->name }}</u></label>
                    <label for="project_description"><b>Description:</b>{{ $pro->description }}</label>
                    <br>
                    <br>
                @endforeach
            </div>
        </div>
    </div> <!-- /container -->
@endsection
