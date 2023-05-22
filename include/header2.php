<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>
        New Ideal Convent School & College
    </title>
    <meta name="description" content="" />
    <link rel="apple-touch-icon" sizes="180x180" href="schooldata/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="schooldata/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="schooldata/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="schooldata/favicon_io/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <script src="jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery/1.9.0/jquery.min.js"></script>
    <script src="js/skdslider.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/shine.js"></script>
    <script src="js/skdslider.min.js"></script>
    <link href="StyleSheet/Slider_CSS/skdslider.css" rel="stylesheet" />
    <link href="StyleSheet/Slider_CSS/StyleSheet.css" rel="stylesheet" />
    <link href="StyleSheet/animation.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet" />
    <link href="StyleSheet/StyleSheet4dbf.css" rel="stylesheet" />
    <link href="StyleSheet/StyleSheetc0eb.css" rel="stylesheet" />
    <link href="StyleSheet/responsive.css" rel="stylesheet" />

    <script type="text/javascript">
        $(document).ready(function () {
            $(".menu-icon").click(function () {
                $(".menu").slideToggle(500), $(this).toggleClass("activeT");
                $('.menu li ul').slideUp();
            });

            var menuwidth = $(window).width()
            if (menuwidth < 1030) {
                $('.menu li .click_in').click(function () {
                    $('.menu li ul').slideUp('500');
                    $(this).next('ul').slideUp('500');
                    if ($(this).next('ul').is(':hidden')) { $(this).next('ul').slideDown('500'); }
                    else {
                        $(this).next('ul').slideUp('500');
                    };
                });



                $('.click_in1').click(function () {
                    // $(this).next('ul').slideToggle('500');
                    $('.click_in1').next('ul').slideUp('500');
                    if ($(this).next('ul').is(':hidden')) { $(this).next('ul').slideDown('500'); }
                    else {
                        $(this).next('ul').slideUp('500');
                    };


                });
            }

        });
    </script>

    <script>
        $(document).ready(function () {
            $('#slides').flexslider({
                animation: "fade",
                slideshowSpeed: 4500,
                animationSpeed: 600

            });
        });
    </script>
    <style>
        ul.main {
            text-align: center;
            width: 1050px;
            margin-left: 250px;
        }

        .oasis-tab {
            position: absolute;
            right: 10px;
            top: 195px;
            z-index: 999;
            width: 250px;
        }

        .oasis-tab a {
            color: #fff;
            font-size: 15px;
            text-transform: uppercase;
            background: #3652bc;
            text-align: center;
            display: inline-block;
            padding: 13px 35px;
            animation: blinkingText 1.5s infinite;
            font-weight: 600;
            width: 100%;
            display: block;
            margin-top: 20px;
        }

        @keyframes blinkingText {

            0% {
                background: #3652bc;
            }

            50% {
                background: #ccd02b;
                color: #000;
                font-weight: 600;
                font-size: 15px;
            }

            100% {
                background: #3652bc;
            }


        }

        #msgurgent {
            display: none;
            z-index: 1000000;
            position: fixed;
            left: 0;
            top: 0;
            background-color: #000;
            width: 100%;
            height: 100vh;
            color: #fff;
            text-align: center;
        }

        #msgurgent .browsermsg {
            position: relative;
            left: 0;
            right: 0;
            top: 30%;
            bottom: 0;
            margin: auto;
            width: 370px;
            height: 130px;
            background-color: #fff;
            color: #000;
            padding: 20px;
            line-height: 30px;
            border: 1px solid #727272;
        }

        .browsermsg p {
            text-align: left;
        }

        .browsermsg p,
        .browsermsg ul li span,
        .browsermsg ul li a {
            font-size: 13px;
            line-height: 16px;
            color: #000;
            font-weight: normal;
        }

        .browsermsg ul li span,
        .browsermsg ul li a {
            text-align: center;
            display: inline-block;
            border: 1px solid #727272;
            float: left;
            padding: 4px 8px;
            text-transform: capitalize;
            width: 140px;
            margin: 0 8px;
        }

        .browsermsg ul {
            margin-top: 23px;
            display: inline-block;
        }

        .browsermsg ul li span {
            cursor: pointer;
        }

        .browsermsg ul li {
            display: inline-block;
            float: left;
        }

        .flex-control-nav {
            left: 49%;
            text-align: inherit;
        }

        .menu {
            margin-top: 40px;
        }

        .menu_top ul.main li a:hover {
            background: #cccf00;
            transition: .6s;
        }

        ul.menu li>.submenu {
            display: none;
            position: absolute;
            padding: 0px;
            z-index: 999999998;
            min-width: 100%;
            left: 0;
            float: left;
        }

        .submenu li>ul,
        .submenu li ul li>ul {
            display: none;
        }

        .submenu-child-right {
            right: 100%;
            left: inherit !important;
        }

        ul.menu li>.submenu li:hover a {
            background: #3652bc;
            color: #fff;
        }

        .extra_link {
            position: absolute;
            top: 54px;
            right: 10px;
        }


        @media screen and (min-width:0px) and (max-width:1024px) {
            .flex-control-nav {
                left: 0;
                text-align: center;
            }

            .menu_top {
                width: 100%;
                line-height: initial;
            }

            .main_menu {
                width: 100%;
                height: auto;
                margin-top: 0;
            }

            .tabmenu {
                display: inline-block;
                cursor: pointer;
            }

            .line1,
            .line2,
            .line3 {
                width: 35px;
                height: 3px;
                background-color: #fff;
                margin: 6px 0;
                transition: 0.4s;
            }

            .activeT .line1 {
                -webkit-transform: rotate(-45deg) translate(-8px, 7px);
                transform: rotate(-45deg) translate(-8px, 7px);
            }

            .activeT .line2 {
                opacity: 0;
            }

            .activeT .line3 {
                -webkit-transform: rotate(45deg) translate(-5px, -5px);
                transform: rotate(45deg) translate(-5px, -5px);
            }

            .menu {
                width: 100%;
                display: none;
                margin-left: 1%;
                overflow: hidden;
                top: 0;
                margin: 0 !important;
                height: auto;
                position: static;
            }

            .menu-icon {
                width: 100%;
                float: left;
                text-align: center;
                height: 38px;
                padding: 2px 0 0 0;
                margin: 8px 0 9px 0%;
                display: block;
                background: #3652bc;
                cursor: pointer;
            }

            .menu li {
                float: none;
                width: 100%;
                margin-right: 0px;
            }

            /*ul.submenu { position: static;    width: 100%;    background: #3757d0;    left: 0;}*/
            ul.dropmenu {
                position: static;
                width: 100%;
                float: left;
                text-align: center;
            }

            ul.submenu li {
                width: 100%;
                text-align: center;
            }

            .extra_link {
                position: static;
                width: 100%;
                float: left;
                text-align: center;
                padding-top: 5px;
                background: #c5cb13;
            }

        }


        @media screen and (max-width:1100px) {
            .submenu li ul {
                position: static;
                background: #4863d0;
            }

            ul.submenu2 {
                width: 100%;
            }
        }


        @media screen and (min-width: 0px) and (max-width: 767px) {


            ul.main {
                padding: 10px 15px;
                max-width: 100%;
                margin-left: 0 !important;
            }

            .oasis-tab {
                position: static;
                text-align: center;
            }
        }
    </style>

    <script>


        $(document).ready(function () {
            $('#slides').flexslider({
                animation: "fade",
                slideshowSpeed: 4500,
                animationSpeed: 600

            });
        });

    </script>
    <script src="js/jcarousellite_1.0.1c4.js"></script>

    <script type="text/javascript">
        $(function () {

            $(".news_run").jCarouselLite({
                vertical: true,
                hoverPause: true,
                btnPrev: ".gryl",
                btnNext: ".gryR",
                visible: 1,
                auto: 3000,
                speed: 800,
            });
        });
        $(function () {

            $(".event_run").jCarouselLite({
                vertical: true,
                hoverPause: true,
                btnPrev: ".L_all",
                btnNext: ".V_all",
                visible: 2,
                auto: 3000,
                speed: 800,
            });
        });

        $(function () {
            $(".mangment_run").jCarouselLite({
                vertical: true,
                hoverPause: true,
                btnPrev: ".manegmntL",
                btnNext: ".manegmntR",
                visible: 1,
                auto: 3000,
                speed: 800,
            });
        });
        $(function () {
            $("#bdayy").jCarouselLite({
                horizontal: true,
                hoverPause: true,
                btnPrev: ".l_next_b",
                btnNext: ".r_next_b",
                visible: 1,
                auto: 3000,
                speed: 800,
            });
        });
        $(function () {
            $("#gallry").jCarouselLite({
                horizontal: true,
                hoverPause: true,
                btnPrev: ".left_next_b",
                btnNext: ".right_next_b",
                visible: 2,
                auto: 3000,
                speed: 800,
            });
        });
    </script>
    <style>
        ul.main {
            text-align: center;
            width: 1050px;
            margin-left: 250px;
        }

        .master-cont {
            width: 100%;
            float: left;

            margin: auto;
        }

        .logo {
            z-index: 11111111;
        }

        .fixed {
            position: fixed;

        }

        .fixed_1 {
            top: 0px;
            transition: top .3s ease-in;
            margin-top: 0px;
        }

        .menu-wrapper,
        .slide-menu_master {
            transition: top .6s ease-in;
        }

        .Menu_fixed {
            width: 272px;
            float: left;
            position: fixed;
            z-index: 99999;
        }

        .menu_1 {
            width: 100%;
            height: 44px;
            background: #3652bc;
            transition: .6s;
            z-index: 99999;
            position: fixed;
            max-width: 1500px;
        }

        .heding-mastr {
            width: 100%;
            margin: 0 auto;

            /* background-color: #f4f4f4; */
            padding: 77px 30px 50px 30px;
            float: left;
            box-sizing: border-box;
        }

        .main_menu {
            height: 532px;
            margin-top: 73px;
        }

        @media screen and (max-width:1024px) {

            .master-content {
                width: 100% !important;
                float: left !important;
                padding-left: 0 !important;
            }

            .master-content {
                width: 100%;

                min-height: 421px !important;

                float: left;
                padding-left: 272PX;
                max-width: 1500px;
                BOX-SIZING: border-box;
            }

            .master-content {
                height: auto
            }

            .master_inn p {
                text-align: justify;

            }

            @media screen and (max-width:768px) {
                .main_menu {
                    margin-top: 75px;
                    height: auto;
                }
            }

            @media screen and (max-width:767px) {
                .master_inn img {
                    width: 100%;
                }

                .main_menu {
                    height: auto;
                    margin-top: 240px;
                }
            }


            .heding-mastr {
                margin: 30px 0 30px 0 !important;
                padding: 0 15px;
            }

            .Menu_fixed {
                width: 100%;
                float: none;
                position: static !important;
            }

            .menu_1 {
                width: 100%;
                height: 44px;
                background: #3652bc;
                transition: .6s;
                z-index: 99999;
                position: static;
            }

        }

        div#headtitle {
            text-transform: uppercase;
        }

        @media screen and (max-width:1100px) {
            .submenu li ul {
                position: static;
                background: #4863d0;
            }

            ul.submenu2 {
                width: 100%;
                position: fixed
            }

            .master_inn img {
                float: none !important;
                padding: 0;
                margin: 0 auto;
                display: block;
            }
        }



        .master-content {
            width: 100%;

            min-height: 699px;

            float: left;
            padding-left: 272PX;
            max-width: 1500px;
            BOX-SIZING: border-box;
        }

        .full-master-wrap {
            width: 100%;
            float: left;
        }

        .mid-master {
            width: 100%;
            max-width: 1500px;
            margin: 0 auto;
        }

        .wrap_mast {
            width: 100%;
            float: left;
        }

        @media screen and (min-width: 0px) and (max-width: 767px) {


            ul.main {
                padding: 10px 15px;
                max-width: 100%;
                margin-left: 0 !important;
            }

        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->

</head>


<body>
    <script
        src="WebResource34703470.js?d=IBU4_SBsG454NpQQgbRigSsgGc5xKvrQaF9UDnyBElxgUCpg93nWs3R9U-n6viNeJgoiJBBPwYhFNxGI8tOUMqJe1NQ1&amp;t=637292261023430478"
        type="text/javascript"></script>


    <script
        src="ScriptResourceb109b109.js?d=GBCEwi6Sg54k5l-zyTTNR9X51E2TVWVf0bkcg_Mcb5GJ5OXettJBU_NvE2UFQLzBPk_PPQBrCCzRw6thAFJ0Ben-d_uztl6UnmvnaFKHGmnnyBfTyE3Wz35kbE0RRGhTyWXrBvyimmqAWC2VBeMMDb3l2bzM_CQrulURYBta3UGA-DGG0&amp;t=3f4a792d"
        type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof (Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
    </script>

    <script
        src="ScriptResource6fba6fba.js?d=57cyUNbyj_L95orvsNEzaO4bfDw2cxWzudv-2M6xerbe6Ar-9p1JuMERVJLZ2X6dn5jpTWcxJqB5z-0LK61UCJ7XnAM2GiuFnmopIbs1iDflTZCScRL9pIwtKspJwTenWQStXdHzIZTAGbPWRG5h9yPMdEB05SMEj3oWr2azfKSyycqu0&amp;t=3f4a792d"
        type="text/javascript"></script>
    <script
        src="ScriptResourceeebceebc.html?d=0s75-iZnH_nfMcl9PAg0hXm1HwDs5sZTAT8Aq1GG_3xWHkJ0Oy4t-EGUqv6oB7K8SVFiONSR2Bgr-iKa4wrpyHjyaJeY5N-QDr2ViSDghgDTDHRIDiYbLYU6-etui-bWhtmgot7DYxAwaZ-gyPfaHQP-ksc1&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResource21c221c2.html?d=RCbVSbknoNWpgGQR-huOV-IZz9Gm1ycw6qsNNAwEMc8zNcr_FBZYNzHx_08DMmTOT42FbwH7wNZEeHma2GvRXGuSeaKg36qA1L-rcqq8IMaY38gPvmz1cJSVsxqzLHgX5tXa6PLjTBBAlZB3blgJhzc_ZUg1&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResource0d950d95.html?d=DfzHrqa_3x6i2QWggQLZsRnjrEkWL0B2I2M0PU7Z4w9F9ZQW8KMfWJ5GlPkKtnBwyA2lSNql7zH-YhcIxL-1rL_BFqkyLTk1-L0Z-fmBzFN_1TA8QZeUn-ACcdpQQce9lqiNS5I1HOViGS2Z1zP2fR28li2uJ0empT7CtLw-9OtY0a_B0&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResource62076207.html?d=daeFODJvF-HCxftHeqiNFS7fKgu4g-udgjtAkjhRo94Qw9aNS3nE8RcO14fVaaXtS53-8MzB9lL6-mmzoxMO75SZ2Cz-2vZNTCmoQoUuaX-QkIbOs99SaxjSYCzqwLiQtq9j7eoWpmtg1v2mz80sFURoky41&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResourced4c5d4c5.html?d=muT-FgbCETONYe_k2PlkIayRC288JmyqrvyeEp9uQGP_1zQVnNz2K-hSKoYcAZhA-1zQr1PDCAMHGAyedawr8wEjDIOR_2bkRSXSJtP47lENxTIkD6lHuupuUJPzEMWRDFrzM3JRhfV2Rawo5Nb_2K1FNJs1&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResource0b000b00.html?d=si0wpzQwHIvjyCdf9-NeYtIlG0twOXm7tLezBZZigGGRy7IY0dzsMBlKNkpLfypYR0KeesWinemG2-Cj8jmxJSWMYleCg0i6ThZlcgkauqp9pNnJ4ogUinL1q1NwQeId79uTSJhRKAHwKoT0tFau3Qc_5aDIdw1Fmq6IbQh3buAhBkLw0&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResource208f208f.html?d=5AVq8twzY-BJIcJp6u0bJxM67tqHMYUix5N2kpyTFcM1YZtV48mPPeJjfw8jAAZA9NcEzBBj3MCJoR-EauDypawhmcge7xoIFj7ZxJbsHMBKbuKeA6dplpN76fw3eK5ykIXuqAW5y3pBfxQuGGiqKORhwfH3qlw9cHMarFnhlsD40Bgr0&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResourcea3a2a3a2.html?d=-wsZCLLAobwOUP6RHVluhC-IHfg7nHTdhOlm2k8rlkCyvg0iQLlNlDAsq5SjCOJO9sjpLIJbT8eLf-s7dqdOkd8vXZJAJMMQe7b6sZ4NR0dJiccPU-NmCA8kzX8gTATUcVzp2ji7bz1RNEBhctIRueKZQIen3Qb4etcOKXR0RKC7xrGG0&amp;t=5f6a2d32"
        type="text/javascript"></script>
    <script
        src="ScriptResource8d9d8d9d.html?d=bX3haOHiKLY9y8V37cXIEDKw1E78hpNTv5rQugNm2Ap-3wjweKcdKyUsRhcXyScSrkeUhSXrSUU0D3JQ_82QwP2kC4FssQ_lan2Djt3MYprgEykEwGJsRMT2a15w7oOKmZYb4s71NaswGSnsTLy04fZuPnM_ArnF9Y5nboWsPlJUlFdO0&amp;t=5f6a2d32"
        type="text/javascript"></script>

    <div class="full-master-wrap">
        <div class="mid-master">
            <div class="wrap_mast">
                <div class="full">

                    <div class="Menu_fixed">
                        <div class="logo">
                            <div id="logo">
                                <div class="slogoinner ">
                                    <center>
                                        <a href="index.php" title="Kids Academy, Prayagraj">
                                            <img src="schooldata/logo.jpeg" width="160" height="100">
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="menu_1">
                            <div class="menu_top">
                                <ul class="main">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="infrastructure.php">Infrastructure</a></li>
                                    <!-- <li><a href="#">Achievements</a></li> -->
                                    <li><a href="admission.php">Admission</a></li>
                                    <li><a href="download.php">Important Downloads</a></li>
                                    <!-- <li><a href="tc.php">Transfer Certificate</a> </li> -->
                                    <li><a href="mandatory.php">Mandatory Public Disclosure</a></li>



                                </ul>
                            </div>
                        </div>
                        <div class="main_menu">

                            <div class="menu-icon">
                                <div class="tabmenu">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div class="line3"></div>
                                </div>
                            </div>

                            <div class="menu" id="menu">
                                <ul class="dropmenu">
                                    <li><a href="javascript:void(0)" class="click_in">about us</a>
                                        <ul class="submenu abu_us">
                                            <li><a href="about_us.php">About School</a></li>
                                            <li><a href="mission.php">Vision and Mission</a></li>
                                            <li><a href="logo.php">Logo of School</a></li>
                                            <li><a href="aim.php">Aims and Objectives</a></li>
                                            <li><a href="infrastructure.php">Infrastructure</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="click_in">Messages</a>
                                        <ul class="submenu prospes">
                                            <li><a href="managersms.php">Director Message</a></li>
                                            <li><a href="principalsms.php">Principal Message</a></li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="click_in">Gallery</a>
                                        <ul class="submenu prospes">
                                            <li><a href="photogallery.php">Photo Gallery</a></li>
                                            <li><a href="videogallery.php">Video Gallery</a></li>
                                            <!-- <li><a href="#">Media Gallery</a></li> -->
                                        </ul>
                                    </li>

                                    <!-- <li>
                                        <a href="javascript:void(0)" class="click_in">Kids' Family</a>
                                        <ul class="submenu prospes">
                                            <li><a href="#">Teachers' Group Photos</a></li>
                                            <li><a href="#">Class Group Photos</a></li>

                                        </ul>
                                    </li> -->

                                    <!-- <li>
                                        <a href="pdf/Calendar%2022-%2023.pdf" target="_blank">School Calendar
                                            2022-23
                                        </a>
                                    </li> -->

                                    <!-- <li>
                                        <a href="javascript:void(0)" class="click_in">Contact Us</a>
                                        <ul class="submenu off_bear">
                                            <li>
                                                <a href="webbdb4.html?pageurl=contact">Mail Us</a>
                                            </li>
                                        </ul>
                                    </li> -->

                                    <li>
                                        <a href="contact.php">Contact Us</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="icos">
                            <div class="icons-in">
                                <ul>
                                    <li><a class="soc_iconh soc_icon1 " href="#" title="iPhone mobile app"
                                            target="_blank"></a></li>
                                    <li><a class="soc_iconh soc_icon3 " href="#" title="Google play store"
                                            target="_blank"></a></li>
                                    <li><a class="soc_iconh soc_icon4 " href="#" title="Mail Us"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>