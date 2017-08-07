@include('header')
<link rel='stylesheet' href='{{URL::asset("css/loan365.css")}}'>
<body class="style-simple layout-full-width mobile-tb-left button-stroke no-content-padding header-creative header-open header-rtl minimalist-header sticky-white ab-show subheader-both-center menu-line-below-80-1 menuo-right footer-copy-center">
    @include('loan365::sidebar')
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper" style="background-image:url(images/home_investment_subheader1.jpg);" class="bg-parallax" data-stellar-background-ratio="0.5">
            <!-- Header -->
            <header id="Header"></header>
            <!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Applying Type</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <!-- <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section column-margin-10px sections_style_2">
                            <div class="section_wrapper mcb-section-inner">
                                <form id="contactform" method="post" action="{{url('onboarding')}}/{{$key}}" class="applying_typeForm">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                                    One Second (1/2) Column
                                    <div class="column">
                                      <label style="font-size: 30px; text-align: center;">Are you applying on your own or with someone else?</label>
                                    </div>
                                    <div class="column one">
                                        <div class="column one-second">
                                            <span>On my own</span>
                                            <input type="radio" checked name="applying_type" checked="" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['applying_type'] == '1' ? 'checked' : '' }} required="required"/>
                                        </div>
                                        One Second (1/2) Column
                                        <div class="column one-second">
                                            <span>With someone</span>
                                            <input type="radio" name="applying_type" id="remortgage" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['applying_type'] == '2' ? 'checked' : '' }}/>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <button type="submit" name="onboarding_upd" value="1">Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<br><br>
        <!--Container Start-->
        <div class="container">
            <div class="row  border_btn">
                <div class="card wizard-card" data-color="green" id="wizardProfile"><br><br>
                    <div class="col-md-offset-1 col-md-10">

                        <!--Progress Bar start-->
                        <div class="progress progress-line-info">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                <span class="sr-only">50% Complete</span>
                            </div>
                        </div>
                        <!--Progress Bar End-->

                        <div class="col-md-12">
                            <h2>Are you applying on your own or with someone else?</h2>
                        </div>
                        <!--Applying type On-my-own start-->
                        <ul class="nav nav-pills col-md-offset-1" role="tablist">
                            <li class="col-md-4 newmortgage_field {{ $fetchvalues['applying_type']=='1' ? 'active' : '' }} ">
                                <a role="tab" data-toggle="tab" id="newmortgage" class="own_cls" >
                                    <!-- <i class="material-icons">done</i> -->On my own
                                </a>
                            </li>
                            <li class="col-md-4 col-md-offset-1 mortgage_field {{ $fetchvalues['applying_type']=='2' ? 'active' : '' }} " id="remortgage">
                                <a role="tab" href="#firsttime_desc" class="someone_cls" data-toggle="tab">
                                   <!-- <i class="material-icons">clear</i> -->With someone
                                </a>
                            </li>
                        </ul><br><br>
                        <!--End-->
                        <!--Applying type With someone Description start-->
                        <div class="col-md-12 col-md-offset-1 someone_msg">
                            <div class="col-md-1">
                                <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">favorite</i>
                                </button>
                            </div>
                            <div class="content col-md-4 " style="border:0.5px solid black;border-radius: 25px;padding: 2%">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="firsttime_desc">
                                        <p>"FYI, when applying with someone else, please combine all of your income and credit information in the upcoming pages."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End-->
                        <!--Form submit buttons Start-->
                        <div class="col-sm-12">
                            <div class="col-md-12 col-md-offset-1"><br>
                                <button type="button" class="sendto_back col-md-3">Back</button>
                                <button type="submit" name="onboarding_upt" value="1" class="sendto_form col-md-3">Continue</button>
                            </div>
                        </div> 
                        <!--End-->
                    </div>
                </div>
            </div><br><br>
        </div>
        <!--Container End-->
        <!-- Footer-->
        @include('footer')
    </div>
    <form id="mortgage_typeForm" method="post" action="{{url('onboarding')}}/{{$key}}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
        <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
        <input type="hidden" name="applying_type" value="{{ $fetchvalues['applying_type']}}" class="newmortgage_val" id="newmortgage" />
        <input type="hidden" name="onboarding_upd" value="1"/>
    </form>
    <!-- JS -->
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

    <!--Hide and show function and value pass for click function-->
    <script type="text/javascript">
        $(document).ready(function(){
            var val_1 = 1;
            var val_2 = 2;
            var someoneMsg_status = "{{$fetchvalues['applying_type']}}";
            if(someoneMsg_status == 1){
                $('.someone_msg').hide();
            }
            else if(someoneMsg_status == 2)
            {
                $('.someone_msg').show();
            }   
            else
            {
                $('.someone_msg').hide();   
            }
            $('.newmortgage_field').click(function(){
                 $('.newmortgage_val').val(val_1);
                 $('.onboarding_sub').val("");
            });
            $('.mortgage_field').click(function(){
                $('.newmortgage_val').val(val_2);
                $('.onboarding_sub').val("");
            });
            $('.sendto_form').click(function(){
                var applying_type = $('.newmortgage_val').val();

                $('#mortgage_typeForm').submit();
            });
            $('.own_cls').click(function(){
                $('.someone_msg').hide();
            });
            $('.someone_cls').click(function(){
                $('.someone_msg').show();
            });
        });
    </script>
    <!--End-->
    <!--Form Validation Start-->
    <script type="text/javascript">
        $('.applying_typeForm').validate({
            rules:{
                applying_type: {
                    required:true,
                },  
            },
            messages:{
                applying_type: {
                    required: "Please choose an option", 
                },
            },
        });
    </script>
    <!--Form Validation End-->
</body>

</html>