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
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Jumbotron Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">


        <!-- MAIN -->
        <main role="main">

            <!-- Main jumbotron -->
            <div class="jumbotron">
                <div class="container" style="background-color: grey">
                    <center>
                        <h1 class="display-3">{{ $user->name }}</h1>
                        <p>{{ $user->about }}</p>
                    </center>
                    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
                </div>
            </div>

            <div class="container">
                <!-- Example row of columns -->
                <div style="float: right;margin-right:5%">
                    <div class="col-md-6">
                        <h2>Experience</h2>
                        @foreach ($experience as $exp)
                            <label for="company_name">Company:{{ $exp->company_name }}</label>
                            <p>(Designation: {{ $exp->designation }})-{{ $exp->city }}&nbsp;
                                ({{ $exp->month_started }},{{ $exp->year_started }})
                                -({{ $exp->month_ended }},{{ $exp->year_ended }})</p>
                            <label for="work_description">Description:</label>
                            <p>{{ $exp->description }}</p>
                            <br>
                        @endforeach
                    </div>
                </div>
                <div style="float: left;margin-left:5 %">

                    <div class="col-md-6">
                        <h2>Education</h2>
                        @foreach ($education as $edu)
                            <label for="company_name">Institute: <u>{{ $edu->institute_name }}</u></label>
                            <p>(Degree: {{ $edu->program_name }})-{{ $edu->city }}&nbsp;
                                ({{ $edu->year_started }})-({{ $edu->year_ended }})</p>
                            <label for="work_description">Obtained marks/CGPA:</label>
                            <p>{{ $edu->cgpa ? $edu->cgpa : $edu->obtained_marks }}</p>
                            <br>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <h2>Personal Information</h2>
                    <p>
                        <li><strong>Address:</strong> 1821 Broadview Place, Fort Collins, CO, 80521
                        <li><strong>Cell Phone:</strong>{{ $user->phone }}
                        <li><strong>Personal Email:</strong>{{ $user->email }}
                        <li><strong>Current Address:</strong> {{ $user->current_address }}
                        <li><strong>Permanent Address:</strong> {{ $user->permanent_address }}
                    </p>
                </div> --}}

                <hr>

            </div> <!-- /container -->

        </main>
</body>

</html>
