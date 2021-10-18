<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container" style="background-color:#bcbcbc">
                <center>
                    <h1 class="display-3">{{ $user->name }}</h1>
                    <p>{{ $user->about }}</p>
                    <div class="col-md-6">
                        <p>
                            <strong>Cell Phone:</strong>{{ $user->phone }}
                            <strong>Personal Email:</strong>{{ $user->email }}
                            <strong>Current Address:</strong> {{ $user->current_address }}
                            <strong>Permanent Address:</strong> {{ $user->permanent_address }}
                            <strong>Current City:</strong> {{ $user->current_city }}
                        </p>
                    </div>
                </center>
            </div>
        </div>

        <div class="container">
            <div style="float: right;margin-right:5%">
                <div class="col-md-6">
                    <h2>Experience</h2>
                    @foreach ($experience as $exp)
                        <label for="company_name"><b> Company:</b>{{ $exp->company_name }}</label>
                        <p>(<b>Designation:</b> {{ $exp->designation }})-<b>{{ $exp->city }}</b>&nbsp;
                            ({{ $exp->month_started }},{{ $exp->year_started }})
                            -({{ $exp->month_ended ? $exp->month_ended . ',' : '' }}{{ $exp->year_ended }})</p>
                        <label for="work_description"><b>Description:</b></label>
                        <p>{{ $exp->description }}</p>
                        <br>
                    @endforeach
                </div>
            </div>
            <div style="float: left;margin-left:5 %">
                <div class="col-md-6">
                    <h2>Education</h2>
                    @foreach ($education as $edu)
                        <label for="company_name"><b> Institute:</b> <u>{{ $edu->institute_name }}</u></label>
                        <p>(<b>Degree:</b> {{ $edu->program_name }})-{{ $edu->city }}&nbsp;
                            ({{ $edu->year_started }})-({{ $edu->year_ended ? $edu->year_ended : 'continued' }})
                        </p>
                        <label for="work_description"><b>Obtained marks/CGPA:</b></label>
                        <p>{{ $edu->cgpa ? $edu->cgpa : $edu->obtained_marks }}</p>
                        <br>
                    @endforeach
                </div>
            </div>
            <br><br><br>
        </div>
    </main>
    <div class="container" style="float: left;margin-top: 300px;">
        <h1>Project</h1>
        <br>
        @foreach ($project as $pro)
            <label for="project_name"><b>Project:</b> <u>{{ $pro->name }}</u></label>
            <br>
            <label for="project_description"><b>Description:</b>{{ $pro->description }}</label>
            <br>
            <br>
        @endforeach
    </div>


</body>

</html>
