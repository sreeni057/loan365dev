@include('header')
    <body class="header" style="background-color: white">
    <!-- Tittle bar start -->
        <nav class="navbar navbar-info">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-primary">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">Loan 365</a>
                </div>

                <div class="collapse navbar-collapse" id="example-navbar-primary">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 {{$compact_array['user_email']}}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- <li class="dropdown-header">Dropdown header</li> -->
                                <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                                <li><a href="#">Calculator</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('logout')}}">Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Tittle bar end -->
        <!-- box start -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="brand">
                            <h2>Welcome to Loan365</h2>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5 class="col-md-offset-4">You can track each stage of your mortgage application here</h5>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                    <!-- Tabs with icons on Card -->
                        <!--Your Mortgage Illustration div start-->
                        <div class="card card-nav-tabs">
                            <div class="content">
                                <div class="col-md-10">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <p style="color: #ccc5c5">STEP 1(5-10 minutes, no credit checks)</p>
                                            <h3>Your Mortgage Illustration</h3>
                                            <p style="color: #ccc5c5;">We scan over 15,000 mortgage products to let you know how much we think you can borrow and how much it will cost.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-simple btn-danger">Start again</button>
                                    <button class="btn btn-danger">Resume<div class="ripple-container"></div></button>
                                </div>
                            </div>
                        </div>
                        <!--Your Mortgage Illustration div end-->
                        <!--About you div start-->
                        <div class="card card-nav-tabs">
                            <div class="content">
                                <div class="col-md-10">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <p style="color: #ccc5c5">STEP 2(10–15 minutes, no credit checks)</p>
                                            <h3>About you</h3>
                                            <p style="color: #ccc5c5;">To match you with the best mortgage, we first need some simple details about your income, employment and financial circumstances.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-simple btn-danger">Start again</button>
                                    <button class="btn btn-danger">Resume<div class="ripple-container"></div></button>
                                </div>
                            </div>
                        </div>
                        <!--About you div End-->
                        <!-- End Tabs with icons on Card -->

                    </div>
                </div>
            </div>
        </div>
        <!-- box end -->
        <!-- Footer-->
        @include('footer')
    </div>
    
    <!-- JS -->
    <script src="{{URL::asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/material.min.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{URL::asset('assets/js/nouislider.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{URL::asset('assets/js/material-kit.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        $('#alerts').delay(2000).fadeOut(2000);
    </script>
</body>

</html>