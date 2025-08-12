<?php
$pagetitale = 'Help Center| Links Farmer';
$content = 'Your one-stop Help Center for Links Farmer services—find FAQs, guides, and tips on guest posting, SEO, content writing, and more.';
?>

@include('pages.header')

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


    <title>Help Center | Links Farmer
    </title>
    <meta name="description" content="" />
    <!-- <style>
      
    </style> -->


</head>

<body>
    <div data-bs-spy="scroll" class="scrollspy-example">
        <section class="hero-section">
            <div class=" landing-hero position-relative">
                <div class="container">
                    <div class="text-center">
                        <!-- <h1 class="page-title">Discover A <span class="animated-text"> Wealth of Knowledge</span> </h1> -->
                        <h1 class="page-title">How can we help you? </h1>

                        <!-- <h1>Welcome to LINKSFARMER – Your Trusted <br /> Partner in Link Building!</h1> -->
                        <h3 class="page_subtitle mb-60">
                            Answers to our most frequently asked questions are just one click away.</h3>
                        <!-- <h2 class="hero-sub-title h6 mb-4 pb-1">
                            Looking for the best link building platform? Join Links farmer today!
                        </h2> -->
                        <div class="search-container">
                            <div class="marg_border">
                                <input type="text" id="searchInput" class="search-input mt-3"
                                    placeholder="Search blog here...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero: End -->



        <section class="section-py help_center_section mb-100">
            <div class="container">
                <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            <i class="ti ti-layout-2 ti-sm"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">

                        <div class="data_wrap">
                            <a href="{{ route('help-center.publisher') }}" style="text-decoration:none; color:inherit;">
                                <div class="data_card">
                                    <i class="ti ti-stack-2 ti-ld"></i>
                                    <h4>I'm a Publisher</h4>
                                    <p>7 articles </p>
                                    <span>Last Update 4 months ago</span>
                                </div>
                            </a>
                            <a href="{{ route('help-center.advertiser') }}"
                                style="text-decoration:none; color:inherit;">
                                <div class="data_card">
                                    <i class="ti ti-stack-2 ti-ld"></i>
                                    <h4>I'm an Advertiser</h4>
                                    <p>7 articles</p>
                                    <span>Last Update a year ago</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="list data_wrap">
                            <div class="data_card">
                                <i class="ti ti-stack-2 ti-ld"></i>
                                <a href="{{ route('help-center.publisher') }}"
                                    style="text-decoration:none; color:inherit;">

                                    <div class="right_wrap">
                                        <h4>I'm a Publisher</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar_grp">
                                                <img src="https://i.pravatar.cc/24?img=1" alt="User 1"
                                                    class="rounded-circle border border-white shadow-sm"
                                                    style="width: 30px; height: 30px; margin-left: 0; z-index: 2;" />
                                                <img src="https://i.pravatar.cc/24?img=2" alt="User 2"
                                                    class="rounded-circle border border-white shadow-sm"
                                                    style="width: 30px; height: 30px; margin-left: -8px; z-index: 1;" />

                                            </div>
                                            <div>
                                                <p>7 articles </p>
                                                <span>Last Update 4 months ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="data_card">
                                <i class="ti ti-stack-2 ti-ld"></i>
                                <a href="{{ route('help-center.advertiser') }}"
                                    style="text-decoration:none; color:inherit;">
                                    <div class="right_wrap">
                                        <h4>I'm an Advertiser</h4>
                                        <div class="d-flex align-items-center gap-3">

                                            <div class="avatar_grp">
                                                <img src="https://i.pravatar.cc/24?img=1" alt="User 1"
                                                    class="rounded-circle border border-white shadow-sm"
                                                    style="width: 30px; height: 30px; margin-left: 0; z-index: 2;" />
                                                <img src="https://i.pravatar.cc/24?img=2" alt="User 2"
                                                    class="rounded-circle border border-white shadow-sm"
                                                    style="width: 30px; height: 30px; margin-left: -8px; z-index: 1;" />

                                            </div>
                                            <div>
                                                <p>7 article</p>
                                                <span>Last Update a year ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>


    @include('pages.footer')

    <script src="{{ asset_url('libs/popper/popper.js') }}"></script>
    <script src="{{ asset_url('js/bootstrap.js') }}"></script>
    <script src="{{ asset_url('libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset_url('js/front-main.js') }}"></script>

    <!-- Core JS -->
    <!-- build:js /js/core.js -->
    <script src="{{ asset_url('libs/popper/popper.js') }}"></script>
    <script src="{{ asset_url('js/bootstrap.js') }}"></script>
    <script src="{{ asset_url('libs/node-waves/node-waves.js') }}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset_url('libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset_url('libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset_url('assets/front-main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset_url('assets/front-page-landing.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                var value = $(this).val().toLowerCase();

                $('.data_card').each(function() {
                    var title = $(this).find('h4').text().toLowerCase();

                    if (title.includes(value)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

</body>

</html>
