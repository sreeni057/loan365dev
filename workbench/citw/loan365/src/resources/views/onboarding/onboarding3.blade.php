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
                        <h1 class="title">Let’s do a quick health check on your current mortgage.</h1>
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
                                <form id="contactform" method="post" action="{{url('onboarding')}}/{{$key}}" class="poperty_form">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$fetchvalues->id}}">
                                <input type="hidden" name="type" value="{{$fetchvalues->mortgage_type}}">
                                    One Second (1/2) Column
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What's the value of your home?</span>
                                                <input type="text" name="value_of_home" placeholder="Value of your home" value="${{$fetchvalues->value_of_home}}" size="40" aria-required="true" aria-invalid="false" required="required" class="data-number" maxlength="7" />
                                            </div>
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What are your current monthly mortgage repayments?</span>
                                                <input type="text" name="monthly_mortages_repay" value="${{$fetchvalues->monthly_mortages_repay}}" size="40" aria-required="true" placeholder="Monthly repayments" aria-invalid="false" class="data-number" required="required" maxlength="7"/>
                                            </div>
                                            One Second (1/2) Column
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">How long in total do you have left on your mortgage? (in years)</span>
                                                <input type="text" name="total_years_mortages" id="newmortgage" value="${{$fetchvalues->total_years_mortages}}" placeholder="Left on your mortgage" class="data-number" aria-required="true" aria-invalid="false" required="required" maxlength="7"/>
                                            </div>
                                            One Second (1/2) Column
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What is the balance of your current mortgage?</span>
                                                <input type="text" name="balance_current_mortages" id="newmortgage" value="${{$fetchvalues->balance_current_mortages}}" placeholder="Current mortgage" aria-required="true" class="data-number" aria-invalid="false" required="required" maxlength="7"/>
                                            </div>
                                            One Second (1/2) Column
                                        </div>
                                        <div class="column">
                                          <label>What is the end date of your current mortgage introductory deal?</label>
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <input checked type="text" maxlength="2" name="day" id="newmortgage" value="{{$fetchvalues->day}}" aria-required="true" aria-invalid="false" placeholder="dd" class="data-number" required="required"/>
                                            </div>
                                            One Second (1/2) Column
                                            <div class="column">
                                                <input type="text" value="{{$fetchvalues->month}}" maxlength="2" name="month" id="remortgage" aria-required="true" aria-invalid="false" placeholder="mm" class="data-number" required="required"/>
                                            </div>
                                            <div class="column">
                                                <input type="text" maxlength="4" value="{{$fetchvalues->year}}" name="year" id="remortgage" aria-required="true" aria-invalid="false" required="required" placeholder="yyyy" class="data-number"/>
                                            </div>
                                        </div>
                                    <div class="column one">
                                        <button type="submit" name="onboarding_upt" value="1">Continue</button>
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
            <!--Form Start-->
            <form id="contactform" method="post" action="{{url('onboarding')}}/{{$key}}" class="poperty_form">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$fetchvalues->id}}">
                <input type="hidden" name="type" value="{{$fetchvalues->mortgage_type}}">
                <div class="row border_btn">
                    <div class="card wizard-card" data-color="green" id="wizardProfile">
                        <div class="col-md-offset-1 col-md-10">
                        <br><br>
                            <!--Progress Bar start-->
                            <div class="progress progress-line-info">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <!--Progress Bar End-->
                            <!-- value of your home Textbox start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What's the value of your home?</h2>
                                    <h5 style="color: #929292">Don't worry if you don't know exactly, an estimate is fine right now</h5>
                                </div>
                               <div class="col-sm-8">
                                    <div class="input-group border_form field_1">
                                        <span class="input-group-addon">
                                           <i class="material-icons">attach_money</i>
                                        </span>
                                        <input type="text" class="form-control validate_val data-number" onblur="validate_val('error_msg1','field_1','validate_val')" name="value_of_home" value="{{$fetchvalues->value_of_home}}" placeholder="value of your home" maxlength="10">
                                        <div>
                                            <span class="error_msg1"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- value of your home Textbox End-->

                            <!-- monthly mortgage repayments Textbox start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What are your current monthly mortgage repayments?</h2>
                                    <h5 style="color: #929292"></h5>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group border_form field_2">
                                        <span class="input-group-addon">
                                           <i class="material-icons">attach_money</i>
                                        </span>
                                        <input type="text" class="form-control validate_val1 data-number" onblur="validate_val('error_msg2','field_2','validate_val1')" name="monthly_mortages_repay" placeholder="monthly mortgage repayments" value="{{$fetchvalues->monthly_mortages_repay}}" maxlength="10">
                                        <div>
                                            <span class="error_msg2"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- Monthly mortgage repayments Textbox End-->

                            <!-- have left on your mortgage Textbox start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>How long in total do you have left on your mortgage?</h2><h2>(in years)</h2>
                                    <h5 style="color: #929292"></h5>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group border_form field_3">
                                        <span class="input-group-addon">
                                           <!-- <i class="material-icons">attach_money</i> -->
                                        </span>
                                        <input type="text" class="form-control validate_val2 data-number" onblur="validate_val('error_msg3','field_3','validate_val2')" name="total_years_mortages" placeholder="How long your mortgage" value="{{$fetchvalues->total_years_mortages}}" maxlength="2">
                                        <div>
                                            <span class="error_msg3"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- have left on your mortgage Textbox End-->
                            <!-- your current mortgage Textbox start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What is the balance of your current mortgage?</h2>
                                    <h5 style="color: #929292"></h5>
                                </div>
                               <div class="col-sm-8">
                                    <div class="input-group border_form field_4">
                                        <span class="input-group-addon">
                                           <i class="material-icons">attach_money</i>
                                        </span>
                                        <input type="text" class="form-control validate_val3 data-number" onblur="validate_val('error_msg4','field_4','validate_val3')" name="balance_current_mortages" placeholder="your current mortgage" value="{{$fetchvalues->balance_current_mortages}}" maxlength="10">
                                        <div>
                                            <span class="error_msg4"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- your current mortgage Textbox End-->
                            <!-- current mortgage introductory deal Textbox start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What is the end date of your current mortgage introductory deal?</h2>
                                    <h5 style="color: #929292"></h5>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group border_form field_5">
                                    <span class="input-group-addon">
                                           <i class="material-icons">date_range</i>
                                        </span>
                                        <input type="text" name="date" class="datepicker form-control date_vald" value="{{$fetchvalues->end_date_mortgage_introductory}}"  placeholder="mm/dd/yyyy" />
                                        <div>
                                            <span class="error_msg5"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- current mortgage introductory deal Textbox End-->
                            <!--Form submit buttons Start-->
                            <div class="col-sm-12">
                                <div class="col-md-12 col-md-offset-2"><br>
                                    <button type="button" class="sendto_back col-md-3">Back</button>
                                    <button type="submit" name="onboarding_upt" value="1" class="sendto_form col-md-3">Continue</button>
                                </div>
                            </div> 
                            <!--Form submit buttons End-->
                        </div>
                    </div>
                </div>
            </form>
            <!--Form Close-->
        </div>
        <!--Container Start-->
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
    <script src="{{URL::asset('js/jquery.validate.js')}}"></script>
    <script src="{{URL::asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('js/loan365.js')}}"></script>

    <!--This script used for validation purpose keyup event Start-->
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

    <!--This script used for date-validation purpose keyup event-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.date_vald').keyup(function(){
                var dateval = $(this).val();
                var test    = dateval.split("/");
                if(test[0] != 2 && test[1] != 2 && test[2] != 4)
                {
                    $('.error_msg5').html("please enter valid date..");
                    $('.error_msg5').css("color","red");
                }

            });
        });
    </script>
    <!--End-->
    <!--This script used for validation purpose Start-->
    <script type="text/javascript">
        $('.poperty_form').validate({
            rules:{
                value_of_home: {
                    required:true,
                    number:true,
                    maxlength: 10,
                },  
                monthly_mortages_repay:{
                    required:true,
                    number:true,
                    maxlength: 10,
                },         
                total_years_mortages:{
                    required:true,
                    number:true,
                    maxlength: 2,
                }, 
                balance_current_mortages:{
                    required:true, 
                    number:true,
                    maxlength: 10,
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
                },
                date:{
                    required:true,
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

                    required: "Please enter the total year mortgage", 
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
                },
                date:{
                    required: "Please enter the date",
                }
            },
            highlight: function (element) {
            $(element).parent().addClass('error')
            $('.error').css("color","red")
        },
        });
    </script>
    <!--End-->
</body>

</html>