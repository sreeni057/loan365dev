@include('header')
<body class="style-simple layout-full-width mobile-tb-left button-stroke no-content-padding header-creative header-open header-rtl minimalist-header sticky-white ab-show subheader-both-center menu-line-below-80-1 menuo-right footer-copy-center">
    @include('sidebar')
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper" style="background-image:url(images/home_investment_subheader2.jpg);" class="bg-parallax" data-stellar-background-ratio="0.5">
            <!-- Header -->
            <header id="Header"></header>
            <!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">CONTACT</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section column-margin-10px sections_style_2">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap two-third clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_map ">

                                        <!-- Google map area -->
                                        <div class="google-map-wrapper no_border">
                                            <!-- <div class="google-map" id="google-map-area-5638dc71504bd" style="width:100%; height:480px;">
                                                &nbsp;
                                            </div> -->
                                             <iframe class="google-map" id="fetchMap" src="https://maps.google.it/maps?q=Level 30/35 Little Collins St, Melbourne VIC 3000, Australia&output=embed" width="100%" height="200" frameborder="0" scrolling="no" style="width:100%; height:480px; border: 0" allowfullscreen></iframe>   
                                        </div>
                                    </div>
                                </div>
                                <!-- One Third (1/3) Column -->
                                <div class="wrap mcb-wrap one-third clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr" style=" background-color:#fff; padding:30px 30px 15px;">
                                            <h3>Our address</h3>
                                            <hr class="no_line hrmargin_b_15">
                                            <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="{{URL::asset('content/investment/images/investment.png')}}" alt="" width="60" height="2" />
                                                </div>
                                            </div>
                                            <hr class="no_line hrmargin_b_20" />
                                            <p>
                                                <br> Level 30, 35 Collins St,
                                                <br> Melbourne Victoria 3000
                                                <br> Australia
                                            </p>
                                        </div>
                                    </div>
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr" style=" background-color:#d3b564; padding:30px 30px 15px;">
                                            <p style="margin-bottom: 0; color: #fff;">
                                                Call us:
                                            </p>
                                            <h4><a href="#">+61 (0) 1300 001 365</a></h4>
                                            <p style="margin-bottom: 0; color: #fff;">
                                                E-mail address:
                                            </p>
                                            <h4><a href="mailto:noreply@envato.com"> support@loan365.com.au</a></h4>
                                            <p style="color: #7c7156;">
                                                Ase cillum dolore eu fugiat nulla pariatur excepteur.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="wrap mcb-wrap one-second clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr align_center" style=" background-color:#fff; padding:30px 30px 15px;">
                                            <h4>Nullam molestie sollicitudin magna. Aenean in hendrerit lorem, nec luctus mauris. Aliquam erat volutpat.</h4>
                                        </div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr" style=" background-color:#fff; padding:30px 30px 15px;">
                                            <p>
                                                Curabitur vel finibus lacus. Morbi volutpat dignissim diam; in aliquet odio maximus nec? Sed fringilla rutrum vehicula. In ut urna sit amet augue consequat sed. Nam gravida leo at enim tempus fermentum. Quisque egestas venenatis ligula.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr" style=" background-color:#fff; padding:30px 30px 15px;">
                                            <p>
                                                Nulla eu massa ac dolor volutpat pharetra in eu leo. Sed vestibulum feugiat purus eget porta! Proin a sapien ipsum. Nullam egestas sit amet augue quis Vestibulum elit lectus, porta sed tempor aliquam, pharetra vitae purus? Ut volutpat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="wrap mcb-wrap one-second clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr" style=" background-color:#fff; padding:30px 30px 15px;">
                                            <div class="clearfix">
                                                <h3>Write to us – We love hearing it!</h3>
                                                <hr class="no_line hrmargin_b_15">
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="{{URL::asset('content/investment/images/investment.png')}}" alt="" width="60" height="2" />
                                                    </div>
                                                </div>
                                                <hr class="no_line hrmargin_b_20" />
                                                <div id="contactWrapper">
                                                    <form id="contactform">
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section " style="padding-top:0px; padding-bottom:30px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_hover_color ">
                                        <div class="hover_color" style="background:#031430;">
                                            <div class="hover_color_bg" style="background:#d4b768;">
                                                <a href="contact.html">
                                                    <div class="hover_color_wrapper">
                                                        <h2 style="text-align: center; margin: 0; color: #fff;">Maecenas orci nunc cursus sit amet rutrum</h2>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        </div>
        <!-- Footer-->
        @include('footer')
    </div>
    
    <!-- JS -->
    <!-- <script src="../../js/jquery-2.1.4.min.js"></script>
    
    <script src="../../js/mfn.menu.js"></script>
    <script src="../../js/jquery.plugins.js"></script>
    <script src="../../js/jquery.jplayer.min.js"></script>
    <script src="../../js/animations/animations.js"></script>
    <script src="../../js/scripts.js"></script>
    <script src="../../js/email.js"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBHm8MbnADI2aN3vEbp7dfvUOEdRGfv0fI&region-au"></script>
    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script> -->
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

    <script>
       /* function google_maps_5638dc71504bd() {
            var latlng = new google.maps.LatLng(-33.8710, 151.2039);
            var draggable = true;
            var myOptions = {
                zoom: 13,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                draggable: draggable,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area-5638dc71504bd"), myOptions);
            console.log(map);
            var marker = new google.maps.Marker({
                position: latlng,
                icon: "{{URL::asset('images/home_investment_pin.png')}}",
                map: map
            });
        }


        jQuery(document).ready(function($) {
            google_maps_5638dc71504bd();
        });*/
    </script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-investment.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/retina-investment.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "images/retina-investment.png").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>
</body>

</html>