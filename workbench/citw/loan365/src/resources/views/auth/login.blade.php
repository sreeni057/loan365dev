@include('header')
<body class="style-simple layout-full-width mobile-tb-left button-stroke no-content-padding header-creative header-open header-rtl minimalist-header sticky-white ab-show subheader-both-center menu-line-below-80-1 menuo-right footer-copy-center">
    @include('loan365::sidebar')
    <div class="section section-full-screen section-signup" style="background-image: url('assets/img/city.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
            <div class="container">          
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card card-signup">
                            <form class="form" method="post" action="{{url('authenticate')}}">
                            {{ csrf_field() }}
                                <div class="header header-info text-center">
                                    <h4>Login In</h4>
                                    @if(Session::has('message'))
                                     <b id="alerts"><p>{{ Session::get('message') }}</p></b>
                                    @endif
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <!-- <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a> -->
                                    </div>
                                </div>
                                <div class="content">

                                    <!-- <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                    </div>
                                     -->
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email...">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="password" placeholder="Password..." class="form-control" value="{{old('name')}}"/>
                                    </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked>
                                            Subscribe to newsletter
                                        </label>
                                    </div> -->
                                </div>
                                <div class="footer text-center">
                                    <button href="#pablo" class="btn btn-simple btn-primary btn-lg">Login</button>
                                </div>
                                    <a href="{{url('register')}}" class="btn btn-simple btn-primary btn-lg">Sign Up</a>
                                    <a href="{{url('forgot')}}" class="btn btn-simple btn-primary btn-lg pull-right">I've forgotten my password</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
        <!-- Footer-->
        @include('footer')
    </div>
    
    <!-- JS -->
    <!--   Core JS Files   -->
    <script src="{{URL::asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/jquery.validate.js')}}"></script>
   <script src="{{URL::asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/material.min.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{URL::asset('assets/js/nouislider.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{URL::asset('assets/js/material-kit.js')}}" type="text/javascript"></script>

   <!--  <script src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
   
   <script src="{{URL::asset('js/mfn.menu.js')}}"></script>
   <script src="{{URL::asset('js/jquery.plugins.js')}}"></script>
   <script src="{{URL::asset('js/jquery.jplayer.min.js')}}"></script>
   <script src="{{URL::asset('js/animations/animations.js')}}"></script>
   <script src="{{URL::asset('js/scripts.js')}}"></script>
  
   <script src="{{URL::asset('js/loan365.js')}}"></script> -->

    <script type="text/javascript">
        $('.poperty_form').validate({
            rules:{
                value_of_home: {
                    required:true,
                    number:true,
                    maxlength: 7,
                },  
                monthly_mortages_repay:{
                    required:true,
                    number:true,
                    maxlength: 7,
                },         
                total_years_mortages:{
                    required:true,
                    number:true,
                    maxlength: 2,
                }, 
                balance_current_mortages:{
                    required:true, 
                    number:true,
                    maxlength: 7,
                },
                day:{
                    required:true,
                    number:true,
                    maxlength: 2,
                },
                month:{
                    required:true,
                    number:true,
                    maxlength: 2,
                },
                year:{
                    required:true,
                    number:true,
                    maxlength: 4,
                }
            },
            messages:{
                value_of_home: {

                    required: "Please enter the value of home", 
                },
                monthly_mortages_repay: {

                    required: "Please enter the monthly mortgages repay", 
                },
                total_years_mortages: {

                    required: "Please enter the tota year mortgage", 
                },
                balance_current_mortages: {

                    required: "Please enter the current mortgage", 
                },
                day:{
                    required: "Please enter the day",
                },
                month:{
                    required: "Please enter the month",
                },
                year:{
                    required: "Please enter the year",
                }
            },
        });
    </script>    
    <script type="text/javascript">
        $('#alerts').delay(2000).fadeOut(2000);
    </script>
</body>

</html>