<!DOCTYPE html>
<html lang="en">


<head>
    <title>ONLYOU - Ultra-Modern Luxury Residence in Kilimani</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="ONLYOU Elgeyo - Experience unparalleled luxury living in Kilimani, Nairobi. Discover our exquisite selection of opulent apartments and exclusive amenities.">
    <meta name="keywords"
        content="ONLYOU Elgeyo, luxury residence, Kilimani, Nairobi, apartments, modern living, amenities">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>



    <div id="popup"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); display: flex; justify-content: center; align-items: center; z-index: 1000; opacity: 0; transition: opacity 0.5s;">
        <div
            style="background: white; padding: 20px; text-align: center; border-radius: 10px; max-width: 400px; width: 90%; position: relative;">
            <h1 style="color: #ffc107; margin-bottom: 10px;">Welcome To</h1>
            <img src="images/preview.png" alt="Preview" style="width: 100%; height: auto; margin-bottom: 20px;">

            <div>
                <a href="{{ url('/') }}"
                    style="text-decoration: none; background: #ffc107; color: white; padding: 10px 20px; border-radius: 5px; margin-right: 10px;">Go
                    Home</a>
                <a href="{{ url('services') }}"
                    style="text-decoration: none; background: #ffc107; color: white; padding: 10px 20px; border-radius: 5px;">Amenities</a>
            </div>
            <button id="closePopup"
                style="position: absolute; top: 10px; right: 10px; background: transparent; border: none; color: black; font-size: 24px; cursor: pointer;">&times;</button>
        </div>
    </div>

    <script>
        // Show popup after 5 seconds
        setTimeout(function() {
            document.getElementById('popup').style.opacity = '1';
        }, 5000);

        // Hide popup after 10 seconds of showing
        setTimeout(function() {
            document.getElementById('popup').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('popup').style.display = 'none';
            }, 500);
        }, 15000);

        // Close popup on close button click
        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('popup').style.display = 'none';
            }, 500);
        });
    </script>




    @include('partials.nav')


    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center">
                        <h1 class="mb-4">Where Onlyou Meets You</h1>
                        <p style="font-size: 22px; font-weight: bold; color: #333;">
                            Discover unparalleled luxury living at Onlyou Elgeyo Ultra-Modern Luxury Residence in
                            Kilimani, Nairobi.
                            Experience the perfect blend of elegance and comfort in our exquisite apartments.
                        </p>

                        @include('searchform')
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .amenities-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header span {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #6c757d;
        }

        .header h2 {
            font-size: 36px;
            font-weight: 700;
            color: #343a40;
            margin-top: 10px;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .feature {
            flex: 0 0 calc(25% - 20px);
            margin-bottom: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            padding: 30px;
            text-align: center;
        }

        .feature i {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .feature h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .feature p {
            font-size: 14px;
            color: #6c757d;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .feature {
                flex: 0 0 calc(50% - 20px);
            }
        }

        @media (max-width: 767px) {
            .feature {
                flex: 0 0 calc(100% - 20px);
            }
        }
    </style>
    <section class="amenities-section">
        <div class="container">
            <div class="header">
                <span>Our Amenities</span>
                <h2>Exceptional Features at Onlyou Elgeyo</h2>
            </div>
            <div class="features">
                <div class="feature">
                    <i class="fas fa-swimming-pool" style="color: #007bff;"></i>
                    <h3>Heated Swimming Pool</h3>
                    <p>Enjoy a refreshing dip or unwind in our state-of-the-art heated swimming pool, available
                        year-round.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-dumbbell" style="color: #28a745;"></i>
                    <h3>Modern Fitness Center</h3>
                    <p>Maintain your fitness in our gym, equipped with the latest fitness equipment and a dedicated
                        boxing area.
                    </p>
                </div>
                <div class="feature">
                    <i class="fas fa-concierge-bell" style="color: #ffc107;"></i>
                    <h3>24-Hour Butler Services</h3>
                    <p>Experience unparalleled luxury with our 24-hour butler service, dedicated to your every need.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-shield-alt" style="color: #dc3545;"></i>
                    <h3>Advanced Security Features</h3>
                    <p>Your safety is our priority. Our advanced security system includes card control, face ID, and
                        fingerprint
                        access.</p>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



    <section style="text-align: center; padding: 80px 20px; background-color: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="color: #D4AF37; font-size: 36px; font-weight: 700; margin-bottom: 10px;">FEATURED PROJECTS</h2>
            <h3 style="color: #333; font-size: 24px; font-weight: 400; margin-bottom: 40px;">Great homes with amazing
                facilities, where happiness lives.</h3>
        </div>
        <div style="display: flex; justify-content: center; gap: 30px; padding: 20px;">
            <div
                style="width: 400px; background-color: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
                <img src="images/elgeyo.jpg" alt="ONLYOU ELGEYO" style="width: 100%; height: 300px; object-fit: cover;">
                <div style="padding: 30px;">
                    <h4 style="color: #D4AF37; font-size: 24px; margin-bottom: 10px;">ONLYOU ELGEYO</h4>
                    <p style="color: #666; font-size: 18px; margin-bottom: 20px;">Elgeyo Road, Kilimani, Nairobi</p>
                    <button onclick="location.href='properties-single'"
                        style="background-color: #D4AF37; color: white; border: none; padding: 12px 24px; font-size: 16px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <style>
        button:hover div {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>



    @include('unittypes')




    <section
        style="background-color: #f8f9fa; text-align: center; padding: 8rem 0; position: relative; overflow: hidden;">
        <div
            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, #f3e7d3, #f8f9fa); transform: skewY(-5deg); transform-origin: top left; z-index: 1;">
        </div>
        <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 2;">
            <h2 style="font-size: 36px; font-weight: 700; color: #333; margin-bottom: 2rem;">Experience Our Virtual
                Tour</h2>
            <p
                style="font-size: 18px; color: #666; margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                Immerse yourself in a stunning 3D view of our property. Explore every detail from the comfort of your
                home.</p>
            <a href="https://vr.justeasy.cn/view/1u7w11x77w0v81s0-1718356947.html" target="_blank"
                style="font-size: 18px; font-weight: 600; color: #fff; background-color: #d4af37; padding: 15px 30px; border: none; border-radius: 50px; text-decoration: none; display: inline-block; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                View 3D Model
                <span style="margin-left: 10px;">→</span>
            </a>
        </div>
    </section>
    <script>
        document.querySelector('a').addEventListener('mouseover', function() {
            this.style.backgroundColor = '#000';
        });

        document.querySelector('a').addEventListener('mouseout', function() {
            this.style.backgroundColor = '#d4af37';
        });
    </script>



    <section
        style="position: relative; padding: 100px 0; background: url(images/bg_2.jpg) no-repeat center center; background-size: cover; color: white; min-height: 100vh; display: flex; align-items: center;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.7);"></div>

        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; position: relative; z-index: 2;">
            <h2 style="font-size: 42px; font-weight: 700; text-align: center; margin-bottom: 50px; color: white;">
                Onboard With Us
            </h2>


            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
                <div
                    style="flex: 1 1 calc(25% - 30px); min-width: 250px; background: rgba(255, 255, 255, 0.1); border-radius: 10px; padding: 30px; backdrop-filter: blur(10px); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div style="font-size: 48px; font-weight: 700; color: #D4AF37; margin-bottom: 20px;">01</div>
                    <h3 style="font-size: 24px; color: white; margin-bottom: 15px;">Evaluate Property</h3>
                    <p style="font-size: 16px; line-height: 1.6;">Walk through a detailed assessment of the property to
                        understand
                        its true value.</p>
                </div>

                <div
                    style="flex: 1 1 calc(25% - 30px); min-width: 250px; background: rgba(255,255,255,0.1); border-radius: 10px; padding: 30px; backdrop-filter: blur(10px); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div style="font-size: 48px; font-weight: 700; color: #D4AF37; margin-bottom: 20px;">02</div>
                    <h3 style="font-size: 24px; color: white; margin-bottom: 15px;">Meet our Sales team</h3>
                    <p style="font-size: 16px; line-height: 1.6;">Connect with our dedicated agents who will guide you
                        through
                        every step of the process.</p>
                </div>

                <div
                    style="flex: 1 1 calc(25% - 30px); min-width: 250px; background: rgba(255,255,255,0.1); border-radius: 10px; padding: 30px; backdrop-filter: blur(10px); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div style="font-size: 48px; font-weight: 700; color: #D4AF37; margin-bottom: 20px;">03</div>
                    <h3 style="font-size: 24px; color: white; margin-bottom: 15px;">Close the Deal</h3>
                    <p style="font-size: 16px; line-height: 1.6;">Negotiate terms and finalize agreements to secure
                        your dream
                        property efficiently.</p>
                </div>

                <div
                    style="flex: 1 1 calc(25% - 30px); min-width: 250px; background: rgba(255,255,255,0.1); border-radius: 10px; padding: 30px; backdrop-filter: blur(10px); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div style="font-size: 48px; font-weight: 700; color: #D4AF37; margin-bottom: 20px;">04</div>
                    <h3 style="font-size: 24px; color: white; margin-bottom: 15px;">Have Your Property</h3>
                    <p style="font-size: 16px; line-height: 1.6;">Enjoy the ownership of your new property with
                        confidence and
                        peace of mind.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4">We Put People First.</h2>
                        <p>We prioritize people above all else. Our commitment is to provide exceptional service and
                            support,
                            ensuring every interaction with us is meaningful and beneficial.</p>
                        <p>Our philosophy is rooted in respect, integrity, and transparency. We believe in building
                            long-term
                            relationships based on trust and mutual respect.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="43122">43122</strong>
                            <span>Kilimani <br>Population</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="7">7</strong>
                            <span>Total <br>Properties</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="1600">1600</strong>
                            <span>Average <br>UNits Developed</span>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="67">67</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>



    @include('footer')



    @include('chart')

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8a4ac28fcb3993c9","version":"2024.7.0","serverTiming":{"name":{"cfL4":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/uptown/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 14:01:17 GMT -->

</html>
