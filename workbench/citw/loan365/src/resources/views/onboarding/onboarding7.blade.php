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
                        <h1 class="title">There are two primary products to choose between: fixed rate and variable rate.</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
       <!--  <div id="Content">
           <div class="content_wrapper clearfix">
               <div class="sections_group">
                   <div class="entry-content">
                       <div class="section mcb-section column-margin-10px sections_style_2">
                           <div class="section_wrapper mcb-section-inner">
                               <form id="contactform" method="post" class="onboarding7Form" action="{{url('onboarding')}}/{{$key}}">
                               {{ csrf_field() }}
                               <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
                               <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                                   One Second (1/2) Column
                                       <div class="column">
                                         <label>Which product do you think appeals to you more?</label>
                                       </div>
                                       <div class="column one">
                                           <div class="column one-second">
                                               <span>Fixed</span>
                                               <input type="radio" class="fixed_val" name="appeals_type" checked="" id="fixed" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['appeals_type'] == '1' ? 'checked' : '' }} required="required"/>
                                           </div>
                                           One Second (1/2) Column
                                           <div class="column one-second">
                                               <span>Variable</span>
                                               <input type="radio" class="variables_val" name="appeals_type" id="variables" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['appeals_type'] == '2' ? 'checked' : '' }}/>
                                           </div>
                                       </div>
                                       <div class="column">
                                         <label>How long would you like to protect your introductory rate for?</label>
                                       </div>
                                       <div class="column one">
                                           <div class="column">
                                               <span>2 Years</span>
                                               <input type="radio" name="introductory_rate" checked="" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['introductory_rate'] == '1' ? 'checked' : '' }} required="required"/>
                                           </div>
                                           One Second (1/2) Column
                                           <div class="column">
                                               <span>3 Years</span>
                                               <input type="radio" name="introductory_rate" id="remortgage" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['introductory_rate'] == '2' ? 'checked' : '' }}/>
                                           </div>
                                           <div class="column">
                                               <span>5 Years</span>
                                               <input type="radio" name="introductory_rate" id="remortgage" value="3" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['introductory_rate'] == '3' ? 'checked' : '' }}/>
                                           </div>
                                           <div class="column 7years">
                                               <span>+7 Years</span>
                                               <input type="radio" name="introductory_rate" id="remortgage" value="4" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['introductory_rate'] == '4' ? 'checked' : '' }}/>
                                           </div>
                                           <div class="column lifetime">
                                               <span>Lifetime</span>
                                               <input type="radio" name="introductory_rate" id="remortgage" value="5" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['introductory_rate'] == '5' ? 'checked' : '' }}/>
                                           </div>
                                       </div>                                        
                                   <div class="column">
                                     <label>Are you looking for a capital and interest or interest only mortgage?</label>
                                   </div>
                                   <div class="column one">
                                       <div class="column one-second">
                                           <span>Capital & Interest</span>
                                           <input type="radio" name="capital_type" checked="" id="newmortgage" value="1" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['capital_type'] == '1' ? 'checked' : '' }} required="required"/>
                                       </div>
                                       One Second (1/2) Column
                                       <div class="column one-second">
                                           <span>Interest Only</span>
                                           <input type="radio" name="capital_type" id="remortgage" value="2" size="40" aria-required="true" aria-invalid="false" {{ $fetchvalues['capital_type'] == '2' ? 'checked' : '' }}/>
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
       <br>
       <!--container start-->
        <div class="container">
            <form id="contactform" method="post" class="onboarding7Form" action="{{url('onboarding')}}/{{$key}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$fetchvalues['id']}}">
            <input type="hidden" name="type" value="{{$fetchvalues['mortgage_type']}}">
                <div class="row border_btn">
                    <div class="card wizard-card" data-color="green" id="wizardProfile">
                        <div class="col-md-offset-1 col-md-10">
                        <br><br>
                        <!--Progress Bar Start-->
                           <div class="progress progress-line-info">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        <!--Progress Bar End-->
                        <!--product do you think appeals div start-->
                            <div class="col-md-12">
                                <h2>Which product do you think appeals to you more?</h2>
                            </div>
                            <div>                            
                            <ul class="nav nav-pills col-md-offset-1" role="tablist">
                                <li class="col-md-4 newmortgage_field {{ $fetchvalues['appeals_type'] == 1 ? 'active':''}}">
                                    <a role="tab" href="#first_desc" data-toggle="tab" id="fixed_div" onclick="valueset('appeals_type_val','fixed_div-1','lifetime')">
                                        Fixed
                                    </a>
                                </li>
                                <input type="hidden" name="appeals_type" id="appeals_type_val" value="{{$fetchvalues['appeals_type']}}">
                                <li class="col-md-4 col-md-offset-1 mortgage_field {{ $fetchvalues['appeals_type'] == 2 ? 'active':''}}">
                                    <a role="tab" data-toggle="tab" id="variable_div" onclick="valueset('appeals_type_val','variable_div-2','7years')">
                                        Variable
                                    </a>
                                </li>
                            </ul>
                            </div>  <br><br>
                        <!--product do you think appeals div end-->
                        <!--Fixed and variable With someone Description start-->
                            <div class="col-md-12 col-md-offset-1 someone_msg">
                                <div class="col-md-1">
                                    <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                        <i class="material-icons">favorite</i>
                                    </button>
                                </div>
                                <div class="content col-md-4 " style="border:0.5px solid black;border-radius: 25px;padding: 2%">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="first_desc">
                                            <p>"Don’t worry if you’re unsure about this right now - you’ll be able to change it shortly, when we show you your mortgage options."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"><br>
                                    <div class="col-md-offset-1">
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
                                          Explain More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <!--End-->

                            <div class="newremortgage_btn">
                                <div class="col-md-12"><br>
                                    <h2>How long would you like to protect your introductory rate for?</h2>
                                </div>         
                                <input type="hidden" name="introductory_rate" id="introductory_rate_val" value="{{$fetchvalues['introductory_rate']}}">
                                 <ul class="nav nav-pills col-md-offset-1" role="tablist">
                                    <li class="col-md-2 firsttime_field year-1 {{ $fetchvalues['introductory_rate'] == 1 ? 'active':'' }}">
                                        <a href="#firsttime_desc" role="tab" data-toggle="tab" onclick="set_yearval('introductory_rate_val','year-1','years_desc')">
                                           2 Years
                                        </a>
                                    </li>
                                    <li class="col-md-2 homemover_field year-2 {{ $fetchvalues['introductory_rate'] == 2 ? 'active':'' }}">
                                        <a href="#homemover_desc" role="tab" data-toggle="tab" onclick="set_yearval('introductory_rate_val','year-2','years_desc')">
                                           3 Years
                                        </a>
                                    </li>
                                    <li class="col-md-2 col-md-offset-1 buyto_field year-3 {{ $fetchvalues['introductory_rate'] == 3 ? 'active':'' }}">
                                        <a href="#buy_toget_desc" role="tab" data-toggle="tab" onclick="set_yearval('introductory_rate_val','year-3','years_desc')">
                                           5 Years
                                        </a>
                                    </li>
                                    <li class="col-md-2 col-md-offset-1 buyto_field year-4 {{ $fetchvalues['introductory_rate'] == 4 ? 'active':'' }}" id="7years">
                                        <a href="#buy_toget_desc" role="tab" data-toggle="tab" onclick="set_yearval('introductory_rate_val','year-4','years_desc')">
                                           7+ Years
                                        </a>
                                    </li>
                                    <li class="col-md-2 col-md-offset-1 buyto_field year-5 {{ $fetchvalues['introductory_rate'] == 5 ? 'active':'' }}" id="lifetime">
                                        <a href="#buy_toget_desc" role="tab" data-toggle="tab" onclick="set_yearval('introductory_rate_val','year-5','years_desc')">
                                           Lifetime
                                        </a>
                                    </li>
                                </ul>
                            </div><br>

                            <div class="col-md-12 col-md-offset-1 someone_msg">
                                <div class="col-md-1">
                                    <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                        <i class="material-icons">favorite</i>
                                    </button>
                                </div>
                                <div class="content col-md-4 " style="border:0.5px solid black;border-radius: 25px;padding: 2%">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="first_desc">
                                            <p id="years_desc">"A positive of a 2-year variable is that you'll keep your payments low initially and if rates don't increase, you'll have the lowest possible costs."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"><br>
                                <div class="col-md-offset-1">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
                                      Explain More
                                    </button>
                                </div>
                            </div>
                            </div>
                            <div class="remortgage_btn">
                            <div class="col-md-12"><br>
                                <h2>Are you looking for a capital and interest or interest only mortgage?</h2>
                            </div>         
                             <ul class="nav nav-pills col-md-offset-1" role="tablist">
                                <li class="col-md-4 residential_field {{ $fetchvalues['capital_type'] == 1 ? 'active' : '' }}">
                                    <a href="#residential" role="tab" id="capital_type-1" data-toggle="tab" onclick="set_capital_type('capital_type','capital_type-1')" >
                                        Capital & Interest
                                    </a>
                                </li>
                                <input type="hidden" name="capital_type" class="capital_type" value="{{ $fetchvalues['capital_type'] }}"/>
                                <li class="col-md-4 buy_to_let {{ $fetchvalues['capital_type'] == 2 ? 'active' : '' }}">
                                    <a href="#buy_to_let" id="capital_type-2" role="tab" data-toggle="tab" onclick="set_capital_type('capital_type','capital_type-2')">
                                       Interest Only
                                    </a>
                                </li>
                            </ul>
                            </div>
                              <br><br>
                            <div class="col-md-12 col-md-offset-2"><br>
                                <button type="button" class="sendto_back col-md-3">Back</button>
                                <button type="submit" name="onboarding_upd" value="1" class="sendto_form col-md-3">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><br><br>
        <!--container end-->
        <!-- Footer-->
        <!--Modal start-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <div class="modal-body">
                    <h4 class="modal-title">Fixed</h4>
                        <p>In a nutshell, fixed rate products provide an introductory period at the start of the mortgage during which your interest rate won’t change. This means that your payments are guaranteed to stay the same during this time. But, because of this guaranteed stability, they are usually slightly more expensive.
                        </p>
                    <h4 class="modal-title">Variable</h4>
                        <p>
                            Variable rate products typically offer a lower introductory interest rate (so they can be cheaper than fixed rate products) but, because the interest rate may change at anytime, so too may your monthly payments. Therefore, because they are more risky, they are not suitable for everyone.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal End-->
        @include('footer')
    </div>
    
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
            var introductory_val = "{{$fetchvalues['introductory_rate']}}";
            var appeals_val      = "{{$fetchvalues['appeals_type']}}";            
            if(appeals_val == 1){
                $('#lifetime').hide();
            }else if(appeals_val == 2){
                $('#7years').hide();
            }
            if(introductory_val == 1){
                $('#years_desc').html("2 year fixed products provide the least protection out of the fixed rate products on interest rates but are typically the cheapest.");
            }
            else if(introductory_val == 2){
                $('#years_desc').html("3 year fixed products provide moderate protection from interest rate rises but tend to be around £50 per month more for the average mortgage.");
            }
            else if(introductory_val == 3){
                $('#years_desc').html("A 5-year fixed means long term protection from rising interest rates and means you can be in a good position to budget for the next 5 years.");
            }
            else if(introductory_val == 4){
                $('#years_desc').html("You'll have longer protection from rising interest rates. You'll also be able to budget for the long term without worrying about your repayment altering.");
            }
            else if(introductory_val == 5){
                $('#years_desc').html("A positive of a lifetime variable is that you won't need to think about your mortgage again if rates remain low.");
            }
        });
        /*This function used for  vlaue set in appeals_type name field and hide show function included then years hide show function also included*/
        function valueset(name_field,field_id,year_id)
        {
            var appeals_type = $('#'+name_field);
            var value_array    = field_id.split("-");
            if(value_array[1] == 1)
            {
                appeals_type.val(value_array[1]);
                if(year_id == 'lifetime')
                {
                    $('#lifetime').hide();
                    $('#7years').show();
                }
            }
            else if(value_array[1] == 2)
            {
                if(year_id == '7years')
                {
                    $('#7years').hide();
                    $('#lifetime').show();
                }
                appeals_type.val(value_array[1]);
                $('#'+year_id).hide();
            }
            else
            {
                appeals_type.val(1);
            }
        }
        /*This function used only for introductory_rate_val name field value set and Description of years*/
        function set_yearval(name_field,field_id,years_desc)
        {
            var introductory_rate_val = $('#'+name_field);
            var value_array    = field_id.split("-");
            introductory_rate_val.val(value_array[1]);
            if(value_array[1] == 1){
                $('#'+years_desc).html("2 year fixed products provide the least protection out of the fixed rate products on interest rates but are typically the cheapest.");
            }
            else if(value_array[1] == 2){
                $('#'+years_desc).html("3 year fixed products provide moderate protection from interest rate rises but tend to be around £50 per month more for the average mortgage.");
            }
            else if(value_array[1] == 3){
                $('#'+years_desc).html("A 5-year fixed means long term protection from rising interest rates and means you can be in a good position to budget for the next 5 years.");
            }
            else if(value_array[1] == 4){
                $('#'+years_desc).html("You'll have longer protection from rising interest rates. You'll also be able to budget for the long term without worrying about your repayment altering.");
            }
            else{
                $('#'+years_desc).html("A positive of a lifetime variable is that you won't need to think about your mortgage again if rates remain low.");
            }

        }
        /*This function used for set value in capital_type name field*/
        function set_capital_type(name_field,field_id)
        {
            var apital_type_val = $('.'+name_field);
            var value_array    = field_id.split("-");
            apital_type_val.val(value_array[1]);
        }
    </script>
     <script type="text/javascript">
        $('.onboarding7Form').validate({
            rules:{
                appeals_type: {
                    required:true,
                },  
                introductory_rate:{
                    required:true,
                }, 
                capital_type:{
                    required:true,
                },
            },
            messages:{
                appeals_type: {
                    required: "Please choose an option", 
                },
                introductory_rate: {

                    required: "Please choose an option", 
                },
                capital_type:{
                    required: "Please choose an option",
                },
            },
        });
    </script>
</body>

</html>