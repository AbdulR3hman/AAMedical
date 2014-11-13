<!DOCTYPE html>
<html>
    <head>
        <title>
        @section('title')
        AA Medical
        @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon"
            type="image/png"
            href={{asset('img/usa.png')}}>
            <!-- CSS are placed here -->
            {{ HTML::style('css/bootstrap.css?id=1') }}
            {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
            {{ HTML::style('css/style.css?id=1') }}
            {{ HTML::style('css/font-awesome.css') }}
            
        </head>
        <body>
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">All Americans' Medical</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href='/logout'> sign out</a></li>
                            <li><a href="/#">Profile</a></li>
                            <a class="navbar-brand" href="#">Hi, {{ Auth::user()->first_name }}</a>
                            <li><a href="/#"><img src="{{asset('img/avatar.png')}}" width='24' height='24'></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-md-2 sidebar">
                        <div id="accordian">
                            <ul>
                                <li @if(Request::segments()[0] == 'dashboard')
                                    class="active"
                                    @endif>
                                    <h3><span class="glyphicon glyphicon-th-large"></span>Dashboard</h3>
                                    <ul>
                                        <li><a href="/dashboard">Dashboard</a></li>
                                        <li><a href="#">Search</a></li>
                                        <li><a href="#">Graphs</a></li>
                                        <li><a href="#">Settings</a></li>
                                    </ul>
                                </li>
                                <!-- we will keep this LI open by default -->
                                <li @if(Request::segments()[0] == 'patients')
                                    class="active"
                                    @endif>
                                    <h3><span class="glyphicon glyphicon-user"></span>Patients</h3>
                                    <ul>
                                        <li><a href="/patients/add">Add</a></li>
                                        <li><a href="/patients/all">Manage</a></li>
                                    </ul>
                                </li>
                                <li @if(Request::segments()[0] == 'medics')
                                    class="active"
                                    @endif>
                                    <h3><span class="fa fa-user-md"></span>Medics</h3>
                                    <ul>
                                        <li><a href="/medics/add">Add</a></li>
                                        <li><a href="/medics/all">Manage</a></li>
                                        <li><a href="/medics/now">Check Available</a></li>
                                    </ul>
                                </li>
                                <li @if(Request::segments()[0] == 'ambs')
                                    class="active"
                                    @endif>
                                    <h3><span class="fa fa-ambulance"></span>Ambulances</h3>
                                    <ul>
                                        <li><a href="/ambs/add">Add</a></li>
                                        <li><a href="/ambs/all">Manage</a></li>
                                        <li><a href="/ambs/now">Check Available</a></li>
                                    </ul>
                                </li>
                                <li @if(Request::segments()[0] == 'Calender')
                                    class="active"
                                    @elseif(Request::segments()[0] == 'appointments')
                                    class="active"
                                    @endif>
                                    <h3 ><span class="glyphicon glyphicon-calendar"></span>Calendar</h3>
                                    <ul  >
                                        <li><a href="/Calender/CM">Current Month</a></li>
                                        <li><a href="/Calender/CW">Current Week</a></li>
                                        <li><a href="/Calender/PM">Previous Month</a></li>
                                        <li><a href="/Calender/PW">Previous Week</a></li>
                                        <li><a href="/Calender/NM">Next Month</a></li>
                                        <li><a href="/Calender/NW">Next Week</a></li>
                                        <!-- <li><a href="#">Team Calendar</a></li>
                                        <li><a href="#">Private Calendar</a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main" id="main">
                        
                        @yield('main')

                    </div>
                </div>
            </div>
        </body>
        <footer>
            <!-- Scripts are placed here -->
            {{ HTML::script('js/jquery-1.11.0.js') }}
            {{ HTML::script('js/bootstrap.min.js') }}
            {{ HTML::script('js/aam.js') }}
            {{ HTML::script('js/timer/bootstrap-datetimepicker.min.js') }}
            {{ HTML::script('js/Chart.js') }}
            {{ HTML::script('js/reports.js') }}
        </footer>
        
    </html>
