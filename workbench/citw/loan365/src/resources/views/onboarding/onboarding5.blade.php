@include('header')
<link rel='stylesheet' href='{{URL::asset("css/loan365.css")}}'>
<body class="style-simple layout-full-width mobile-tb-left button-stroke no-content-padding header-creative header-open header-rtl minimalist-header sticky-white ab-show subheader-both-center menu-line-below-80-1 menuo-right footer-copy-center">
    @include('sidebar')
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
                        <h1 class="title">A big part of how much you can borrow is dependent on your income and your available savings.</h1>
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
                                <form id="contactform" class="incomeForm" method="post" action="{{url('onboarding')}}/{{$key}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                                    One Second (1/2) Column
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">How much do you earn each year?</span>
                                                <input type="text" name="earn_each_year" value="{{$fetchvalues['earn_each_year']}}" size="40" aria-required="true" aria-invalid="false" maxlength="7" class="data-number" required="required"/>
                                            </div>
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What can you put towards your deposit, stamp duty and fees?</span>
                                                <input type="text" name="stamp_duty" value="{{$fetchvalues['stamp_duty']}}" size="40" aria-required="true" aria-invalid="false" maxlength="7" class="data-number" required="required"/>
                                            </div>
                                            One Second (1/2) Column
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
        </div> --><br><br>
        <!--Container Start-->
        <div class="container">
             <form id="contactform" class="incomeForm" method="post" action="{{url('onboarding')}}/{{$key}}">
                                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                <div class="row border_btn">
                    <div class="card wizard-card" data-color="green" id="wizardProfile">
                        <div class="col-md-offset-1 col-md-10"><br><br>

                            <!--Progress Bar start-->
                            <div class="progress progress-line-info">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <!--Progress Bar End-->
                            <!--Earn each year div Start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>How much do you earn each year?</h2>
                                    <h5 style="color: #929292">Please enter your total income before tax</h5>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group border_form field_1">
                                        <span class="input-group-addon">
                                           <i class="material-icons">attach_money</i>
                                        </span>
                                        <input type="text" class="form-control validate_val data-number" onblur="validate_val('error_msg1','field_1','validate_val')" name="earn_each_year" value="{{$fetchvalues['earn_each_year']}}" placeholder="Earn each year" maxlength="10">
                                        <div>
                                            <span class="error_msg1"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!--End-->
                            <!--Stamp Duty div Start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What can you put towards your deposit, stamp duty and fees?</h2>
                                    <h5 style="color: #929292">Please share the total amount of savings you have available</h5>
                                </div>
                               <div class="col-sm-8">
                                    <div class="input-group border_form field_2">
                                        <span class="input-group-addon">
                                           <i class="material-icons">attach_money</i>
                                        </span>
                                        <input type="text" class="form-control validate_val1 data-number" onblur="validate_val('error_msg2','field_2','validate_val1')" name="stamp_duty" placeholder="stamp duty and fees" value="{{$fetchvalues['stamp_duty']}}" maxlength="10">
                                        <div>
                                            <span class="error_msg2"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!--End-->
                            <!--Form Submit button and back button start-->
                            <div class="col-sm-12">
                                <div class="col-md-12 col-md-offset-2"><br>
                                    <button type="button" class="sendto_back col-md-3">Back</button>
                                    <button type="submit" name="onboarding_upd" value="1" class="sendto_form col-md-3">Continue</button>
                                </div>
                            </div> 
                            <!--End-->
                        </div>
                    </div>
                </div>
            </form>
        </div><br><br>
         <!--Container End-->
        <!-- Footer-->
        @include('footer')
    </div>
    
    <!-- JS -->
    <script src="{{URL::asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/jquery.validate.js')}}"></script>
    <script src="{{URL::asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/material.min.js')}}"></script>
    <script src="{{URL::asset('js/loan365.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{URL::asset('assets/js/nouislider.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{URL::asset('assets/js/material-kit.js')}}" type="text/javascript"></script>
    <!--This function used for validate from keyup-->
    <script type="text/javascript">
        function validate_val(error_msg,border_class,validate_val)
        {
           var validate_value  = $('.'+validate_val).val().length;
           if(validate_value == 0)
           {
                $('.'+border_class).css("border","1px solid #FF7101")
                $('.'+error_msg).html("This field is required");
                $('.'+error_msg).css("color","red");
           }
           else
           {    
                $('.'+border_class).css("border","1px solid #F5E0AC")
                $('.'+error_msg).html("");
           }
        }
    </script>
    <!--End-->
    <!--Jquery validation start-->
    <script type="text/javascript">
        $('.incomeForm').validate({
            rules:{
                earn_each_year: {
                    required:true,
                    number:true,
                    maxlength: 10,
                },  
                stamp_duty:{
                    required:true,
                    number:true,
                    maxlength: 10,
                },         
            },
            messages:{
                earn_each_year: {
                    required: "Please enter the earn each year", 
                },
                stamp_duty: {

                    required: "Please enter the stamp duty", 
                },
            },
            highlight: function (element) {
            $(element).parent().addClass('error')
            $('.error').css("color","red")
        },
        });
    </script>
    <!--Jquery validation end-->
</body>

</html>