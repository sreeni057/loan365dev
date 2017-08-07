@include('header')
 <link rel='stylesheet' href='{{URL::asset("css/loan365.css")}}'>
<body class="style-simple layout-full-width mobile-tb-left button-stroke no-content-padding header-creative header-open header-rtl minimalist-header sticky-white ab-show subheader-both-center menu-line-below-80-1 menuo-right footer-copy-center">
    @include('loan365::sidebar')
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper" class="bg-parallax" data-stellar-background-ratio="0.5" ma>
            <!-- Header -->
            <header id="Header"></header>
            <!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Select Mortgage Type</h1>
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
                                <form id="mortgage_typeForm" method="post" action="{{url('onboarding')}}/{{$key}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                                <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                                    One Second (1/2) Column
                                    <div class="column">
                                      <label style="font-size: 30px; text-align: center;">Are you looking for a new mortgage or a remortgage?</label>
                                    </div>
                                    <div class="column one">
                                        <div class="column one-second">
                                            <span>New mortgage</span>
                                            <input type="radio" name="mortgage_type" checked="" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['mortgage_type'] == '1' ? 'checked' : '' }} required="required"/>
                                        </div>
                                        One Second (1/2) Column
                                        <div class="column one-second">
                                            <span>Remortgage</span>
                                            <input type="radio" name="mortgage_type" id="remortgage" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['mortgage_type'] == '2' ? 'checked' : '' }}/>
                                        </div>
                                    </div>
                                    <div class="newremortgage_btn">
                                        <div class="column">
                                          <label style="font-size: 30px; text-align: center;">What kind of buyer are you?</label>
                                        </div>
                                        <div class="column one">
                                            <div class="column">
                                                <span>First Time</span>
                                                <input checked type="radio" name="buyer_type" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['buyer_type']=="1" ? 'checked' : '' }} required="required"/>
                                            </div>
                                            One Second (1/2) Column
                                            <div class="column">
                                                <span>Home Mover</span>
                                                <input type="radio" value="2" name="buyer_type" id="remortgage" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['buyer_type']=="2" ? 'checked' : '' }}/>
                                            </div>
                                            <div class="column">
                                                <span>Buy To Let</span>
                                                <input type="radio" value="3" name="buyer_type" id="remortgage" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['buyer_type']=="3" ? 'checked' : '' }}/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="remortgage_btn">
                                        <div class="column">
                                          <label style="font-size: 30px; text-align: center;">What kind of remortgage are you looking for?</label>
                                        </div>
                                        <div class="column one">
                                            <div class="column one-second">
                                                <span>Residential</span>
                                                <input checked type="radio" name="remortgage_type" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['buyer_type']=="1" ? 'checked' : '' }} />
                                            </div>
                                            One Second (1/2) Column
                                            <div class="column one-second">
                                                <span>Buy To Let</span>
                                                <input type="radio" name="remortgage_type" id="remortgage_type" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['buyer_type']=="2" ? 'checked' : '' }}/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <button type="button" class="">Back</button>
                                        <button type="submit" name="onboarding_upd" value="1">Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- <div class="image-container set-full-height" style="background-image: url('banners/loan365banner1.jpg'); background-color: transparent;">
<br><br>
    <div class="container">
        <div class="row border_btn">
            <div class="col-sm-8 col-sm-offset-2">
               <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizardProfile"><br><br>
                        <div class="progress progress-line-danger col-md-10 col-md-offset-1">
                            <div class="progress-bar progress-bar-success" style="width: 35%">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" style="width: 20%">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width: 10%">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                        <div class="wizard-header">
                            <div class="col-md-10 col-md-offset-1">
                                <h2>Are you looking for a new mortgage or a remortgage?</h2>
                            </div>
                            <div class="col-md-10">                            
                                <ul class="nav nav-pills col-md-offset-3" role="tablist">
                                    <li class="col-md-6 newmortgage_field">
                                        <a role="tab" data-toggle="tab" id="newmortgage">
                                            New mortgage
                                        </a>
                                    </li>
                                    <li class="col-md-5 col-md-offset-1 mortgage_field" id="remortgage">
                                        <a role="tab" data-toggle="tab">
                                        Remortgage
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="newremortgage_btn">
                                <div class="col-md-10 col-md-offset-1">
                                <br>
                                    <h2>What kind of buyer are you?</h2>
                                </div>         
                                 <ul class="nav nav-pills col-md-12 col-md-offset-1" role="tablist">
                                    <li class="col-md-3 firsttime_field {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }} ">
                                        <a href="#firsttime_desc" role="tab" data-toggle="tab">
                                            First Time
                                        </a>
                                    </li>
                                    <li class="col-md-4 homemover_field {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}">
                                        <a href="#homemover_desc" role="tab" data-toggle="tab">
                                           Home Mover
                                        </a>
                                    </li>
                                    <li class="col-md-3 col-md-offset-1 buyto_field {{ $fetchvalues['buyer_type']=='3' ? 'active' : '' }}">
                                        <a href="#buy_toget_desc" role="tab" data-toggle="tab">
                                           Buy To Let
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="remortgage_btn">
                                <div class="col-md-10 col-md-offset-1"><br>
                                    <h2>What kind of remortgage are you looking for?</h2>
                                </div>         
                                 <ul class="nav nav-pills col-md-8 col-md-offset-3" role="tablist">
                                    <li class="col-md-5 residential_field {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }}">
                                        <a href="#residential" role="tab" data-toggle="tab">
                                            Residential
                                        </a>
                                    </li>
                                    <li class="col-md-5 buy_to_let {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}">
                                        <a href="#buy_to_let" role="tab" data-toggle="tab">
                                           Buy To Let
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-md-offset-1">
                                <div class="col-md-2"><br>
                                    <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                        <i class="material-icons">favorite</i>
                                    </button>
                                </div><br>
                                <div class="newremortgage_btn">
                                    <div class="content col-md-4" style="border:0.5px solid black;border-radius: 25px;padding: 2%;">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }} {{ $fetchvalues['buyer_type']=='' ? 'active' : '' }}" id="firsttime_desc">
                                                <p>"First up, it’s handy to establish what you can borrow and the estimated monthly costs of a mortgage. This should take less than 5 minutes"</p>
                                            </div>
                                            <div class="tab-pane {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}" id="homemover_desc">
                                                <p>"In less than 5 minutes you’ll have a clear picture of what your next mortgage will look like."</p>
                                            </div>
                                            <div class="tab-pane {{ $fetchvalues['buyer_type']=='3' ? 'active' : '' }}" id="buy_toget_desc">
                                                <p>"Whether it’s your first buy-to-let or you’re adding to your property portfolio, we’re here to help you out."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="remortgage_btn">
                                    <div class="content col-md-4" style="border:0.5px solid black;border-radius: 25px;padding: 2%;">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }} {{ $fetchvalues['buyer_type']=='' ? 'active' : '' }}" id="residential">
                                                <p>"Great! It’s really handy for us to know your current mortgage terms, but if you don’t have them to hand, approximations are OK at this point."</p>
                                            </div>
                                            <div class="tab-pane {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}" id="buy_to_let">
                                                <p>"Fantastic! It’s really handy for us to know your current mortgage terms and rental cover, but if you don’t have them to hand, approximations are OK at this point."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            <div class="col-md-10 col-md-offset-2"><br>
                                <button type="button" class="sendto_back col-md-5">Back</button>
                                <button type="button" class="sendto_form col-md-5">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
</div> --><br>

        <!--Container Start-->
        <div class="container">
            <div class="row border_btn">
                <div class="card wizard-card" data-color="green" id="wizardProfile">
                    <div class="col-md-offset-1 col-md-10">
                    <br><br>
                        <!--Progress Bar start-->
                        <div class="progress progress-line-info">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <!--Progress Bar End-->

                        <!--Mortgage-type Button start-->
                        <div class="col-md-12">
                            <h2>Are you looking for a new mortgage or a remortgage?</h2>
                        </div>
                        <div>                            
                            <ul class="nav nav-pills col-md-offset-1" role="tablist">
                                <li class="col-md-4 newmortgage_field">
                                    <a role="tab" data-toggle="tab" id="newmortgage_btn">
                                        New mortgage
                                    </a>
                                </li>
                                <li class="col-md-4 col-md-offset-1 mortgage_field" id="remortgage">
                                    <a role="tab" data-toggle="tab" id="remortgage_atag">
                                      Remortgage
                                    </a>
                                </li>
                            </ul><br>
                            <!--Error-Msg start-->
                            <ul>
                                <li class="col-md-6 col-md-offset-2 errormsg mortgage_type_err"></li>
                            </ul>
                        <!--Error-Msg End-->
                        </div>
                        <!--Mortgage-type Button End-->
                        <br>

                        <!--Newremortgage Button Start-->
                        <div class="newremortgage_btn">
                            <div class="col-md-12">
                                <h2>What kind of buyer are you?</h2>
                            </div>         
                             <ul class="nav nav-pills col-md-offset-1" role="tablist">
                                <li class="col-md-2 firsttime_field {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }} ">
                                    <a href="#firsttime_desc" role="tab" data-toggle="tab" id="firsttime_btn">
                                        First Time
                                    </a>
                                </li>
                                <li class="col-md-3 homemover_field {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}">
                                    <a href="#homemover_desc" role="tab" data-toggle="tab" id="homemover_btn">
                                       Home Mover
                                    </a>
                                </li>
                                <li class="col-md-2 col-md-offset-1 buyto_field {{ $fetchvalues['buyer_type']=='3' ? 'active' : '' }}">
                                    <a href="#buy_toget_desc" role="tab" data-toggle="tab" id="buytolet_btn">
                                       Buy To Let
                                    </a>
                                </li>
                            </ul><br>
                            <!--Error-Msg start-->
                            <ul>
                                <li class="col-md-6 col-md-offset-2 errormsg buyer_type_err"></li>
                            </ul>
                            <!--Error-Msg End-->
                        </div>
                        <!--Newremortgage Button End-->

                        <!--Remortgage Button Start-->
                        <div class="remortgage_btn">
                        <div class="col-md-12">
                            <h2>What kind of remortgage are you looking for?</h2>
                        </div>         
                         <ul class="nav nav-pills col-md-offset-1" role="tablist">
                            <li class="col-md-4 residential_field {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }}">
                                <a href="#residential" role="tab" data-toggle="tab" id="residential_btn">
                                    Residential
                                </a>
                            </li>
                            <li class="col-md-4 buy_to_let {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}">
                                <a href="#buy_to_let" role="tab" data-toggle="tab" id="buy_to_let_btn">
                                   Buy To Let
                                </a>
                            </li>
                        </ul>
                        </div><br>
                        <ul>
                            <li class="col-md-6 col-md-offset-2 errormsg remortgage_type_err"></li>
                        </ul>
                        <!--Remortgage Button End-->
                          <br><br>
                        <!--Description Bux Start-->
                        <div class="col-md-12">
                            <div class="col-md-1">
                                <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">favorite</i>
                                </button>
                            </div>

                            <!--Newremortage Description Start-->
                            <div class="newremortgage_btn">
                                <div class="content col-md-4" style="border:0.5px solid black;border-radius: 25px;padding: 2%">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }} {{ $fetchvalues['buyer_type']=='' ? 'active' : '' }}" id="firsttime_desc">
                                            <p>"First up, it’s handy to establish what you can borrow and the estimated monthly costs of a mortgage. This should take less than 5 minutes"</p>
                                        </div>
                                        <div class="tab-pane {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}" id="homemover_desc">
                                            <p>"In less than 5 minutes you’ll have a clear picture of what your next mortgage will look like."</p>
                                        </div>
                                        <div class="tab-pane {{ $fetchvalues['buyer_type']=='3' ? 'active' : '' }}" id="buy_toget_desc">
                                            <p>"Whether it’s your first buy-to-let or you’re adding to your property portfolio, we’re here to help you out."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Newremortage Description End-->

                            <!--Remortage Description Start-->
                            <div class="remortgage_btn">
                                <div class="content col-md-4" style="border:0.5px solid black;border-radius: 25px;padding: 2%">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane {{ $fetchvalues['buyer_type']=='1' ? 'active' : '' }} {{ $fetchvalues['buyer_type']=='' ? 'active' : '' }}" id="residential">
                                            <p>"Great! It’s really handy for us to know your current mortgage terms, but if you don’t have them to hand, approximations are OK at this point."</p>
                                        </div>
                                        <div class="tab-pane {{ $fetchvalues['buyer_type']=='2' ? 'active' : '' }}" id="buy_to_let">
                                            <p>"Fantastic! It’s really handy for us to know your current mortgage terms and rental cover, but if you don’t have them to hand, approximations are OK at this point."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Remortage Description End-->

                        </div>
                        <!--Description Bux End-->

                        <!--Form submit buttons Start-->
                        <div class="col-md-12 col-md-offset-2"><br>
                            <button type="button" class="sendto_back col-md-3">Back</button>
                            <button type="button" class="sendto_form col-md-3">Continue</button>
                        </div>
                        <!--Form submit buttons End-->

                    </div>
                </div>
            </div>
        </div>
          <!--Stop Container-->
        <br><br>
        <!-- Footer-->
        @include('footer')
    </div>
    <form id="mortgage_typeForm" method="post" action="{{url('onboarding')}}/{{$key}}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
        <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
        <input type="hidden" name="mortgage_type" class="newmortgage_val" id="newmortgage" value="{{$fetchvalues['mortgage_type']}}" />
        <input type="hidden" class="buyer_type_val" value="{{$fetchvalues['buyer_type']}}" name="buyer_type" id="newmortgage" size="40"/>
        <input type="hidden" class="remortgage_type_val" value="{{$fetchvalues['buyer_type']}}" name="remortgage_type" id="newmortgage" size="40"/>
        <input type="hidden" name="onboarding_upd" class="onboarding_sub">
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
    <script type="text/javascript">
        $(document).ready(function(){
            var onboarding_sub = $('.onboarding_sub').val("");
            var id              = "{{$fetchvalues['mortgage_type']}}";
            var buyer_type      = "{{$fetchvalues['buyer_type']}}";
            var val_1           = "1";
            var val_2           = "2";
            var val_3           = "3";
            $('.mortgage_type_err').hide();
            $('.buyer_type_err').hide();
            $('.remortgage_type_err').hide();

            /*Document ready to Show and Hide Function for mortgage Type*/
            if(id == 1)
            {
                $('.remortgage_btn').hide();
                $('.newmortgage_field').addClass('active');
                $('.mortgage_field').removeClass('active');
            }
            else if(id == 2)
            {
                $('.newremortgage_btn').hide();
                $('.mortgage_field').addClass('active');
                $('.newmortgage_field').removeClass('active');
            }
            else
            {
                $('.remortgage_btn').hide();
            }
            /*This click function used  for hide the Remortgage Button*/
            $('.newmortgage_field').click(function(){
                 $('.newmortgage_val').val(val_1);
                 $('.onboarding_sub').val("");
                 $('.remortgage_btn').hide();
                 $('.newremortgage_btn').show();
                 $('.mortgage_type_err').hide();
                 $('.remortgage_type_err').hide();
            });
            /*This click function used for Hide & Show function for Newmortgage Button*/
            $('.mortgage_field').click(function(){
                $('.newmortgage_val').val(val_2);
                $('.onboarding_sub').val("");
                $('.mortgage_type_err').hide();
                $('.newremortgage_btn').hide();
                $('.remortgage_btn').show();
                $('.remortgage_type_err').hide();
            });
            /*This click function used for Buyyer button error message hide and show and active button*/
            /*Start*/
            $('.firsttime_field').click(function(){
                $('.buyer_type_val').val(val_1);
                $('.remortgage_type_val').val("");
                $('.onboarding_sub').val("");
                $('.buyer_type_err').hide();
            });
            $('.homemover_field').click(function(){
                $('.buyer_type_val').val(val_2);
                $('.remortgage_type_val').val("");
                $('.onboarding_sub').val("");
                $('.buyer_type_err').hide();
            });
            $('.buyto_field').click(function(){
                $('.buyer_type_val').val(val_3);
                $('.remortgage_type_val').val("");
                $('.onboarding_sub').val("");
                $('.buyer_type_err').hide();
            });
            /*End*/
            /*This click function used for Remortgage button error message hide and show and active button*/
            /*Start*/
            $('.residential_field').click(function(){
                $('.remortgage_type_val').val(val_1);
                $('.buyer_type_val').val("");
                $('.onboarding_sub').val("");
                $('.remortgage_type_err').hide();
            });
            $('.buy_to_let').click(function(){
                $('.remortgage_type_val').val(val_2);
                $('.buyer_type_val').val("");
                $('.onboarding_sub').val("");
                $('.remortgage_type_err').hide();
            });
            /*End*/

            /*This function used for form submit and error validation function*/
            /*Start*/
            $('.sendto_form').click(function(){
                $('.onboarding_sub').val(val_1);
                var mortgage_type       = $('.newmortgage_val').val();
                var buyer_type_val      = $('.buyer_type_val').val();
                var remortgage_type_val = $('.remortgage_type_val').val();
                var onboarding_sub      = $('.onboarding_sub').val();
                $('.newmortgage').val(mortgage_type);
                $('.buyer_type_val').val(buyer_type_val);
                $('.remortgage_type_val').val(remortgage_type_val);
                $('.onboarding_sub').val(onboarding_sub);
                if(!mortgage_type){
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('#newmortgage_btn').css('border','1px solid red');
                    $('#remortgage_atag').css('border','1px solid red');
                    $('.mortgage_type_err').show();
                    $('.mortgage_type_err').html("Please choose an option");
                    setTimeout("explode('newmortgage_btn','remortgage_atag','buytolet_btn')", 5000);
                    return ;
                }
                if(mortgage_type == 1)
                {
                    if(!buyer_type_val){
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        $('#firsttime_btn').css('border','1px solid red');
                        $('#homemover_btn').css('border','1px solid red');
                        $('#buytolet_btn').css('border','1px solid red');
                        $('.buyer_type_err').show();
                        $('.buyer_type_err').html("Please choose an option");
                         $("html, body").animate({ scrollTop: 0 }, "slow");
                        setTimeout("explode('firsttime_btn','homemover_btn','buytolet_btn')", 5000);
                      return;
                    }
                }
                else if(mortgage_type == 2)
                {
                    if(!remortgage_type_val){
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        $('#residential_btn').css('border','1px solid red');
                        $('#buy_to_let_btn').css('border','1px solid red');
                        $('.remortgage_type_err').show();
                        $('.remortgage_type_err').html("Please choose an option");
                        setTimeout("explode('residential_btn','buy_to_let_btn')", 5000);
                        return;
                    }
                }
               $('#mortgage_typeForm').submit();
            });
            /*End*/
        });
        /*This function used for timeout function. its apply the class for error message borrder return color*/
        function explode(btn_1,btn_2,btn_3){
           $('#'+btn_1).css('border','1px solid black');
           $('#'+btn_2).css('border','1px solid black');
           $('#'+btn_3).css('border','1px solid black');
        }
    </script>
</body>

</html>