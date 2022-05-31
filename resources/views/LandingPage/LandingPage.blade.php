<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include("LandingPage.components.head")
    <div class="teaser-cont">
        <video  id="videoBG"  autoplay muted loop playsinline>
            <source src="{{asset('video/teaser1.mp4')}}" type="video/mp4">
        </video>
    </div>
<body class="container-fluid">

    @include('LandingPage.components.header')
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
    <div id="maillist-banner" class="maillist-banner m-index">
        <div class="container-fluid">
            <div class="row myContainer">
                <form name="ajax-contact-form" id="ajax-contact-form" action="{{route('store.email')}}" method="post" >
                    @csrf
                    <div class="col-sm-12 col-md-12 col-lg-5  justify-content-center mt-1">
                        <p class="m-font fontThin">JOIN OUR MAILING LIST TO GET THE LATEST UPDATES.</p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4  d-flex justify-content-end">
                        <input id="email" class="m-font emailInput" type="email" name="email" placeholder="  EMAIL ADDRESS">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <button id="submit" class="m-font fontThin" type="submit">JOIN NOW</button>
                    </div>
                </form>
            </div>
            <i class="m-close bi bi-x"></i>
        </div>
    </div>
<div id="cookie_container" class=" cookie_container c-index">
    <div class="container-fluid d-flex">
        <div class="row myContainer2">
            <div class=" c-ptag col-sm-10 col-lg-7 col-xs-12 ">
                <p class="fontThin">BY CLICKING "ACCEPT ALL COOKIES", YOU AGREE TO THE STORING OF COOKIES TO ENHANCE SITE NAVIGATION,
                    ANALYZE
                    SITE USAGE, AND ASSIST IN OUR MARKETING EFFORTS. CLICK TO LEARN MORE.</p>
            </div>
            <div class="c-link col-sm-2 col-lg-2">
                <a class="btnc fontThin mx-auto" id="modal_btn">COOKIES SETTINGS</a>
            </div>
            <div class="c-btn col-sm-12 col-lg-3 fontThin">
                <button id="cookie_btn">ACCEPT ALL COOKIES</button>
            </div>
        </div>
        <i class="cookie_x bi bi-x"></i>
    </div>
</div>



<div id="cookie_model" class="cookie_modal">

    <!-- Modal content -->
    <div class="modal-content position-absolute top-50 start-50 translate-middle">
        <span id="modal_close" class="modal_close">&times;</span>
        <div class="d-flex align-items-start">
            <div class="row">
                <div class="col-6 ps-xs-5 ">
                    <div class="nav flex-column nav-pills me-3 myPopup" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical"
                         style="text-align: left; display:inline">

                        <a class="modal_btn nav-link active fontTitle" id="your-privacy-tab" data-bs-toggle="pill"
                           data-bs-target="#your-privacy" type="button" role="tab" aria-controls="your-privacy"
                           aria-selected="true">Privacy</a>
                        <a class="modal_btn nav-link fontTitle mt-3 " id="strictly-necessary-cookies-tab" data-bs-toggle="pill"
                           data-bs-target="#strictly-necessary-cookies" type="button" role="tab"
                           aria-controls="strictly-necessary-cookies" aria-selected="false">Strictly Necessary
                            Cookies</a>
                        <a class="modal_btn nav-link fontTitle mt-3" id="preformance-cookies-tab" data-bs-toggle="pill"
                           data-bs-target="#preformance-cookies" type="button" role="tab"
                           aria-controls="preformance-cookies" aria-selected="false">Performance Cookies</a>
                        <a class="modal_btn nav-link fontTitle mt-3" id="functional-cookies-tab" data-bs-toggle="pill"
                           data-bs-target="#functional-cookies" type="button" role="tab"
                           aria-controls="functional-cookies" aria-selected="false">Functional Cookies</a>
                        <a class="modal_btn nav-link fontTitle mt-3 " id="targeting-cookies-tab" data-bs-toggle="pill"
                           data-bs-target="#targeting-cookies" type="button" role="tab"
                           aria-controls="targeting-cookies" aria-selected="false">Targeting Cookies</a>
                    </div>
                </div>
                <div class="col-6">

                    <div class="tab-content " id="v-pills-tabContent">
                        <div class="modal-p tab-pane fade show active" id="your-privacy" role="tabpanel"
                             aria-labelledby="your-privacy-tab">
                            <div class="modal-head">

                                <p class="fontTitle">
                                    Privacy
                                </p>

                            </div>
                            <p class="fontLight ">
                                We use cookies (or similar technologies) to
                                personalise
                                content and ads, to provide social media features and to analyse our traffic. By
                                clicking
                                “Accept”, you agree to this and the sharing of information about your use of our site
                                with
                                our social media, advertising and analytics affiliates who may combine it with other
                                information that you’ve provided to them or that they’ve collected from your use of
                                their
                                services.
                            </p>
                        </div>
                        <div class="modal-p tab-pane fade" id="strictly-necessary-cookies" role="tabpanel"
                             aria-labelledby="strictly-necessary-cookies-tab">
                            <div class="modal-head">
                                <p class="fontTitle privacyTitle">
                                    Strictly Necessary Cookies
                                </p>

                            </div>
                            <p class="fontLight">
                                Always Active

                                Necessary cookies are essential for the website to function, and cannot be switched off
                                in
                                our systems. Without these cookies, services, such as privacy settings, logging in or
                                filing
                                in forms, requested by you cannot be provided. If you set your browser to block these
                                cookies, then the requested functions and services will not work. These cookies do not
                                store
                                any personally identifiable information.
                            </p>
                        </div>
                        <div class="modal-p tab-pane fade" id="preformance-cookies" role="tabpanel"
                             aria-labelledby="preformance-cookies-tab">
                            <div class="modal-head">
                                <p class="fontTitle privacyTitle">
                                    Performance Cookies
                                </p>

                            </div>
                            <div class="form-check form-switch">
                                <input class="toggle_btn form-check-input" type="checkbox"
                                       id="flexSwitchCheckDefault" />

                            </div>
                            <p class="fontLight">
                                Performance cookies allow us to understand how
                                visitors interact with the website by counting visits and traffic sources, so that we
                                can
                                measure and improve the performance of our site. They help us measure which pages are
                                the
                                most and least popular and understand how visitors move around the site. All information
                                these cookies collect is aggregated and therefore anonymous. If you do not allow these
                                cookies we will not know when you have visited our site, and will not be able to monitor
                                its
                                performance.
                            </p>
                        </div>
                        <div class="modal-p tab-pane fade" id="functional-cookies" role="tabpanel"
                             aria-labelledby="functional-cookies-tab">
                            <div class="modal-head">
                                <p class="fontTitle privacyTitle">
                                    Functional Cookies
                                </p>

                            </div>
                            <div class="form-check form-switch">
                                <input class="toggle_btn form-check-input" type="checkbox"
                                       id="flexSwitchCheckDefault" />

                            </div>
                            <p class="fontLight">
                                These cookies are used to recognise you and
                                remember
                                your preferences or settings when you return to our site, to enable the website to
                                provide
                                enhanced functionality and personalisation. They may be set by us or by third party
                                providers whose services we have added to our pages. If you do not allow these cookies
                                then
                                some or all of these services may not function properly.
                            </p>
                        </div>
                        <div class="modal-p tab-pane fade" id="targeting-cookies" role="tabpanel"
                             aria-labelledby="targeting-cookies-tab">
                            <div class="modal-head">
                                <p class="fontTitle ">
                                    Targeting Cookies
                                </p>

                            </div>

                            <div class="form-check form-switch">
                                <input class="toggle_btn form-check-input" type="checkbox"
                                       id="flexSwitchCheckDefault" />

                            </div>
                            <p class="fontLight">
                                These cookies may be set through our site by our
                                advertising affiliates. They do not store directly personal information, but are based
                                on
                                uniquely identifying your browser and internet device. They may be used by those
                                companies
                                to build a profile of your interests and target you with relevant adverts on other
                                sites. If
                                you do not allow these cookies, you will experience less targeted advertising.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 modal-btn mt-5 fontTitle">
                    <button id="confirm-choices">CONFIRM MY CHOICES</button>
                </div>
                <div class="col-12 modal-btn fontTitle mb-4">
                    <button id="allow-all">ALLOW ALL</button>
                </div>
            </div>
        </div>

    </div>

</div>
@include("LandingPage.components.scripts")
<script>

    if ($("#email").length > 0) {
        $("#ajax-contact-form").validate({
            rules: {
                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                },
            },
            messages: {
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit"). attr("disabled", true);
                $.ajax({
                    url: "{{url('saveEmail')}}",
                    type: "POST",
                    data: $('#ajax-contact-form').serialize(),
                    success: function( response ) {
                        $('#submit').html('THANK YOU FOR JOINING US');
                        document.getElementById('email').style.display = 'none';
                        document.getElementById('submit').style.backgroundColor = '#22c124'
                        $("#submit").attr("disabled", true);
                    }
                });
            }
        })
    }
</script>
</body>

</html>

