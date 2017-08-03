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
                        <h1 class="title">Lastly, we need some personal details..</h1>
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
                                <form id="contactform" method="post" class="onboarding8Form" action="{{url('onboarding')}}/{{$key}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                                    One Second (1/2) Column
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What's your name?</span>
                                                <input type="text" name="user_name" id="newmortgage" value="{{$fetchvalues['user_name']}}" aria-required="true" aria-invalid="false" class="data-name" maxlength="50" required="required" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                            </div>
                                            One Second (1/2) Column
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What's your email address?</span>
                                                <input type="text" name="user_email" id="newmortgage" value="{{$fetchvalues['user_email']}}" aria-required="true" aria-invalid="false" required="required" data-rule="email" data-msg="Please enter a valid email"/>
                                            </div>
                                            One Second (1/2) Column
                                        </div>
                                        <div class="column">
                                          <label>What is your date of birth?</label>
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">dd</span>
                                                <input type="text" maxlength="2" name="day" id="newmortgage" value="{{$fetchvalues['day']}}" aria-required="true" aria-invalid="false" class="data-number" required="required"/>
                                            </div>
                                            One Second (1/2) Column
                                            <div class="column">
                                                <span style="font-weight: bold;">mm</span>
                                                <input type="text" value="{{$fetchvalues['month']}}" maxlength="2" name="month" id="remortgage" aria-required="true" aria-invalid="false" class="data-number" required="required"/>
                                            </div>
                                            <div class="column">
                                                <span style="font-weight: bold;">yyyy</span>
                                                <input type="text" maxlength="4" value="{{$fetchvalues['year']}}" name="year" id="remortgage" aria-required="true" aria-invalid="false" class="data-number" required="required"/>
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
            <!--Form Start-->
            <form id="contactform" method="post" action="{{url('onboarding')}}/{{$key}}" class="poperty_form">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                <div class="row border_btn">
                    <div class="card wizard-card" data-color="green" id="wizardProfile">
                        <div class="col-md-offset-1 col-md-10">
                        <br><br>
                            <!--Progress Bar start-->
                            <div class="progress progress-line-info">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                            <!--Progress Bar End-->
                            <!-- value of your home Textbox start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What's your name?</h2>
                                    <h5 style="color: #929292"></h5>
                                </div>
                               <div class="col-sm-8">
                                    <div class="input-group border_form field_1">
                                        <span class="input-group-addon">
                                           <i class="material-icons">account_box</i>
                                        </span>
                                        <input type="text" class="form-control validate_val data-name" onblur="validate_val('error_msg1','field_1','validate_val')" name="user_name" value="{{$fetchvalues['user_name']}}" placeholder="Name" maxlength="50">
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
                                    <h2>What's your email address?</h2>
                                    <h5 style="color: #929292">We will never share this with any third party. Ever.</h5>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group border_form field_2">
                                        <span class="input-group-addon">
                                           <i class="material-icons">email</i>
                                        </span>
                                        <input type="email" class="form-control validate_val1" onblur="validate_val('error_msg2','field_2','validate_val1')" name="user_email" placeholder="E-mail" value="{{$fetchvalues['user_email']}}" maxlength="50" data-rule="email" data-msg="Please enter a valid email">
                                        <div>
                                            <span class="error_msg2"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- Monthly mortgage repayments Textbox End-->
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
                                        <input type="text" name="date" class="datepicker form-control date_vald" value="{{$fetchvalues['date']}}"  placeholder="mm/dd/yyyy" />
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
                                    <button type="submit" name="onboarding_upd" value="1" class="sendto_form col-md-3">Continue</button>
                                </div>
                            </div> 
                            <!--Form submit buttons End-->
                        </div>
                    </div>
                </div>
            </form>
            <!--Form Close-->
        </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            if($(".fixed_val").is(":checked")) {
                $('.lifetime').hide();
            }
            else
            {   
                $('.7years').hide();
            }
            $('.fixed_val').click(function(){
                $('.lifetime').hide();
                $('.7years').show();
            });
            $('.variables_val').click(function(){
                $('.7years').hide();
                $('.lifetime').show();
            });
        });
        $(document).on('blur','.date_vald',function(){ 
            var isValid = isValidDate($(this).val());
            if (isValid) {
            } else {
                $(this).val("");
                alert('InValid date');
            }
        });
        function isValidDate(input) {
            var regexes = [
                /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/,
                /^(\d{1,2})\-(\d{1,2})\-(\d{4})$/
            ];

            for (var i = 0; i < regexes.length; i++) {
                var r = regexes[i];
                if(!r.test(input)) {
                  continue;
                }
                var a = input.match(r), d = new Date(a[3],a[1] - 1,a[2]);
                if(d.getFullYear() != a[3] || d.getMonth() + 1 != a[1] || d.getDate() != a[2]) {
                  continue;
                }
                // All checks passed:
                return true;
            }

            return false;
        }
    </script>
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
    <script type="text/javascript">
        $('#contactform').validate({
            rules:{
                user_name: {
                    required:true,
                },  
                user_email: {
                    required: true,
                    email: true
                }, 
                date:{
                    required:true,
                },
            },
            messages:{
                user_name: {
                    required: "Please enter your name", 
                },
                user_email: {
                    required: "Please enter your email",
                    email: "Invaild email"
                },
                capital_type:{
                    required: "Please choose an option",
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
</body>

</html>