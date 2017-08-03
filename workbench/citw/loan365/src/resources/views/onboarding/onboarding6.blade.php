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
                        <h1 class="title">Lenders also consider your other loans and credit arrangements when deciding how much you can borrow.</h1>
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
                                <form id="contactform" class="oboarding6Form" method="post" action="{{url('onboarding')}}/{{$key}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                                    One Second (1/2) Column
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What's the combined value of all your outstanding credit card balances?</span>
                                                <input type="text" name="outstanding_cc_balances" value="{{$fetchvalues['outstanding_cc_balances']}}"  aria-required="true" aria-invalid="false" class="data-number" maxlength="7" required="required"/>
                                            </div>
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span style="font-weight: bold;">What are your monthly repayments on any loans you have?</span>
                                                <input type="text" name="monthly_repay_loan" value="{{$fetchvalues['monthly_repay_loan']}}" aria-required="true" aria-invalid="false" maxlength="7" class="data-number" required="required"/>
                                            </div>
                                            One Second (1/2) Column
                                        </div>
                                         <div class="column">
                                      <label>Have you had any CCJs (County Court Judgements) or defaults on any of your accounts in the last 6 years?</label>
                                    </div>
                                    <div class="column one">
                                        <div class="column one-second">
                                            <span>Yes</span>
                                            <input type="radio" name="country_court_judegment" checked="" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['country_court_judegment'] == '1' ? 'checked' : '' }} required="required"/>
                                        </div>
                                        One Second (1/2) Column
                                        <div class="column one-second">
                                            <span>No</span>
                                            <input type="radio" name="country_court_judegment" id="remortgage" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['country_court_judegment'] == '2' ? 'checked' : '' }} />
                                        </div>
                                    </div>
                                     <div class="column">
                                      <label>Do you have an ongoing IVA (Individual Voluntary Arrangement) or have you experienced a bankruptcy in the last 12 months?</label>
                                    </div>
                                    <div class="column one">
                                        <div class="column one-second">
                                            <span>Yes</span>
                                            <input type="radio" name="iva" checked="" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['iva'] == '1' ? 'checked' : '' }} required="required"/>
                                        </div>
                                        One Second (1/2) Column
                                        <div class="column one-second">
                                            <span>No</span>
                                            <input type="radio" name="iva" id="remortgage" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['iva'] == '2' ? 'checked' : '' }}/>
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
             <form id="contactform" class="oboarding6Form" method="post" action="{{url('onboarding')}}/{{$key}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                <div class="row border_btn">
                    <div class="card wizard-card" data-color="green" id="wizardProfile">
                        <div class="col-md-offset-1 col-md-10">
                        <br><br>
                            <!-- Progress Bar start-->
                            <div class="progress progress-line-info">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <!-- Progress Bar End -->
                            <!-- C C blances div start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What's the combined value of all your outstanding credit card balances?</h2>
                                    <h5 style="color: #929292">Enter $0 if you have none</h5>
                                </div>
                               <div class="col-sm-8">
                                    <div class="input-group border_form field_1">
                                        <span class="input-group-addon">
                                           <i class="material-icons">attach_money</i>
                                        </span>
                                        <input type="text" class="form-control validate_val data-number" onblur="validate_val('error_msg1','field_1','validate_val')" name="outstanding_cc_balances" value="{{$fetchvalues['outstanding_cc_balances']}}" placeholder="outstanding credit card balances" maxlength="10">
                                        <div>
                                            <span class="error_msg1"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- Monthly repayments div Start-->
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>What are your monthly repayments on any loans you have?</h2>
                                    <h5 style="color: #929292">Please include a total of any personal loans, hire purchases, car finance etc, or enter £0 if you have none</h5>
                                </div>
                               <div class="col-sm-8">
                                    <div class="input-group border_form field_2">
                                        <span class="input-group-addon">
                                           <i class="material-icons">attach_money</i>
                                        </span>
                                        <input type="text" class="form-control validate_val1 data-number" onblur="validate_val('error_msg2','field_2','validate_val1')" name="monthly_repay_loan" value="{{$fetchvalues['monthly_repay_loan']}}" placeholder="monthly repay loan" maxlength="10">
                                        <div>
                                            <span class="error_msg2"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <!-- Monthly repayments div End-->
                            <!-- C C Js Status div Start-->
                            <div class="col-md-12"><br>
                                <h2>Have you had any CCJs (County Court Judgements) or defaults on any of your accounts in the last 6 years?</h2>
                            </div>
                            <div>               
                                <ul class="nav nav-pills col-md-offset-1" role="tablist">
                                    <li class="col-md-4 cc_judegment-1 {{ $fetchvalues['country_court_judegment'] == '1' ? 'active' : '' }}" onclick="valueadd('cc_judegment-1','cc_judegment_val')">
                                        <a role="tab" data-toggle="tab" id="newmortgage">
                                            Yes
                                        </a>
                                    </li>
                                    <input type="hidden" name="country_court_judegment" value="{{$fetchvalues['country_court_judegment']}}" class="cc_judegment_val">
                                    <li class="col-md-4 col-md-offset-1 cc_judegment-2 {{ $fetchvalues['country_court_judegment'] == '2' ? 'active' : '' }} {{ $fetchvalues['country_court_judegment'] == '' ? 'active' : '' }}" id="remortgage" onclick="valueadd('cc_judegment-2','cc_judegment_val')">
                                        <a role="tab" data-toggle="tab">
                                          No
                                        </a>
                                    </li>
                                </ul>
                            </div>  <br><br>
                            <!-- C C Js Status div End-->
                            <!-- IVA statu Status div Start-->
                            <div class="col-md-12"><br>
                                <h2>Do you have an ongoing IVA (Individual Voluntary Arrangement) or have you experienced a bankruptcy in the last 12 months?</h2>
                            </div>
                            <div>               
                                <ul class="nav nav-pills col-md-offset-1" role="tablist">
                                    <li class="col-md-4 iva-1 {{ $fetchvalues['iva'] == '1' ? 'active' : '' }}" onclick="valueadd('iva-1','iva_val')">
                                        <a role="tab" data-toggle="tab" id="newmortgage">
                                            Yes
                                        </a>
                                    </li>
                                     <input type="hidden" name="iva" value="{{$fetchvalues['iva']}}" class="iva_val">
                                    <li class="col-md-4 col-md-offset-1 iva-2 mortgage_field {{ $fetchvalues['iva'] == '2' ? 'active' : '' }} {{ $fetchvalues['iva'] == '' ? 'active' : '' }}" id="remortgage" onclick="valueadd('iva-2','iva_val')">
                                        <a role="tab" data-toggle="tab">
                                          No
                                        </a>
                                    </li>
                                </ul>
                            </div>  <br><br>
                            <!-- IVA statu Status div End-->
                            <!-- Form submit and back button div start-->
                            <div class="col-sm-12">
                                <div class="col-md-12 col-md-offset-2"><br>
                                    <button type="button" class="sendto_back col-md-3">Back</button>
                                    <button type="submit" name="onboarding_upd" value="1" class="sendto_form col-md-3">Continue</button>
                                </div>
                            </div> 
                            <!-- Form submit and back button div end-->
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
    <!-- Validation for keyup function-->
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
        /*Value set for click function*/
        function valueadd(class_name,name_val)
        {
            var clas_name = class_name.split('-');
            if(clas_name[1] == 1)
            {
                $('.'+name_val).val(1);
            }
            else if(clas_name[1] == 2)
            {
                $('.'+name_val).val(2);
            }
            else
            {
                $('.'+name_val).val(2);
            }
        }
    </script>
    <script type="text/javascript">
    /*validation function */
        $('.oboarding6Form').validate({
            rules:{
                outstanding_cc_balances: {
                    required:true,
                    number:true,
                    maxlength: 10,
                },  
                monthly_repay_loan:{
                    required:true,
                    number:true,
                    maxlength: 10,
                }, 
                country_court_judegment:{
                    required:true,
                },
                iva:{
                    required: true,
                },        
            },
            messages:{
                outstanding_cc_balances: {
                    required: "Please enter the outstanding credit card balances", 
                },
                monthly_repay_loan: {

                    required: "Please enter the monthly repay loan", 
                },
                country_court_judegment:{
                    required: "Please choose an option",
                },
                iva:{
                    required: "Please choose an option",
                },
            },
            highlight: function (element) {
            $(element).parent().addClass('error')
            $('.error').css("color","red")
        },
        });
    </script>
</body>

</html>