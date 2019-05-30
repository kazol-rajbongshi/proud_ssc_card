<!DOCTYPE html>
<html>
<head>
    <title>Card Request Form</title>
    <!-- metatags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script> -->
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/registration_css/css/jquery-ui.css')}}"/>
    <link href="{{asset('assets/css/registration_css/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->

    <!-- //css files -->
</head>
<body>

<style>
    img.logo-img {
        width: 100px;
    }

    .header-logo-reg {
        text-align: center;
    }
</style>
<div class="header-logo-reg">
    <div class="header-logo ">
        <a class="logo" href="http://proudssc2001bd.com"><img class="logo-img"
                                                              src="http://proudssc2001bd.com/home_assets/img/logo.png"
                                                              alt="Proud S.S.C."></a>
    </div>
</div>

<h1>Card Request Form</h1>

<div class="w3l-main">
    <div class="w3l-from">

        <form action="{{URL('/save-card-request-information')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('card_add_success'))
            <div class="alert alert-success">
                {{ session('card_add_success') }}
            </div>
            @endif
            <!--   <div style="float: right; margin-top: -25px">-->
            <!--	<p class="pull-right"><a href="<?php //echo base_url('user-login');?>" style="color: #fff !important">Login</a></p>-->
            <!--</div>	-->
            <div class="w3l-user">
                <label class="head">Name<span class="w3l-star"> * </span></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required="">
            </div>
            <div class="w3l-num">
                <label class="head">S.S.C Roll Number<span class="w3l-star"> * </span></label>
                <input type="text" name="ssc_roll" id="ssc_roll" class="form-control" placeholder="S.S.C Roll Number"
                       required="">
            </div>

            <div class="w3l-sym">
                <label class="head">S.S.C Reg. Number<span class="w3l-star"> * </span></label>
                <input type="text" name="ssc_registartion" id="ssc_registartion" class="form-control"
                       placeholder="S.S.C Reg. Number" required="">
            </div>

            <div class="clear"></div>
            <div class="row">
                <div class="form-group name1 col-md-6">
                    <label class="head">Board<span class="w3l-star"> * </span></label>
                    <select class="category2" name="ssc_board" id="ssc_board" required=""
                            style="width: 100%;height: 50%; border-radius:4px;">
                        <option value="">Select your board</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Madrasah">Madrasah</option>
                        <option value="Technical">Technical</option>
                        <option value="DIBS(Dhaka)">DIBS(Dhaka)</option>
                    </select>
                </div>
                <div class="form-group name1 col-md-6">
                    <label class="head">FB Name Or FB Email<span class="w3l-star"> * </span></label>
                    <input type="text" name="facebook_email" id="facebook_email" class="form-control"
                           placeholder="FB Name or FB Email"
                           required="">
                </div>
            </div>


            <div class="clear"></div>

            <!-- <div class="w3l-details1">
                <div class="w3l-num">
                    <label class="head">SSC(2001) Reg. NO<span class="w3l-star"> * </span></label>
                    <input type="text" name="sscRegNo" class="form-control" placeholder="Only Visible For Admin" required="">
                </div>
                <div class="w3l-sym">
                    <label class="head">SSC(2001) Roll NO<span class="w3l-star"> * </span></label>
                    <input type="text" name="sscRollNo" class="form-control" placeholder="Only Visible For Admin" required="">
                </div>

            <div class="clear"></div>
            </div> -->

            <!--<div class="w3l-user">-->
            <!--	<label class="head">Present Address (Optional)</label>-->
            <!--	<input type="text" name="presentAddress" class="form-control" placeholder="Enter Present Address">-->
            <!--</div>-->

            <!--<div class="w3l-num">-->
            <!--	<label class="head">Police Station <span class="w3l-star"> * </span></label>-->
            <!--	<input type="text"  name="presentpoliceStation" class="form-control" placeholder="Enter Police Station" required="">-->
            <!--</div>-->
            <!--<div class="w3l-sym">-->
            <!--	<label class="head">District<span class="w3l-star"> * </span></label>-->
            <!--	<input type="text" name="presentdistrict" class="form-control" placeholder="Enter District" required="">-->
            <!--</div>-->
            <!--<div class="clear"></div>-->

            <!--<div class="w3l-user">-->
            <!--	<label class="head">Permanent Address (Optional)</label>-->
            <!--	<label>Same as Present Address</label>-->
            <!--	<input type="checkbox" name="address_confirm" value="1" id="address_confirm" class="form-control" placeholder="">-->
            <!--	<input type="text" name="parmanentAddress" id="parmanentAddress" class="form-control" placeholder="Enter Parmanent Address">-->
            <!--</div>-->

            <!--<div class="w3l-num">-->
            <!--	<label class="head">Police Station</label>-->
            <!--	<input type="text"  name="parmanentpoliceStation" class="form-control" placeholder="Enter Parmanent Police Station" >-->
            <!--</div>-->
            <!--<div class="w3l-sym">-->
            <!--	<label class="head">District</label>-->
            <!--	<input type="text" name="parmanentdistrict" class="form-control" placeholder="Enter Parmanent District">-->
            <!--</div>-->
            <!--<div class="clear"></div>-->

            <div class="w3l-num">
                <label class="head">Email or Phone Number<span class="w3l-star"> * </span></label>
                <input type="text" name="facebook_name" id="facebook_name" class="form-control"
                       placeholder="Email or Phone for Confirmation"
                       required="">
            </div>
            <div class="w3l-num" style="margin-left: 25px;">
                <label class="head">FB Profile Image</label>
                <input type="file" name="photo" id="photo" class="form-control" placeholder="" required=""><br>
            </div>
            <div class="clear"></div>
            <div class="w3l-user">
                <label class="head">Card Delivery Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Delivery Address">
            </div>

            <div class="clear"></div>
            <br>
            <input type="checkbox" name="terms_and_privacy" value="1" placeholder="" required="">
            <!--<label class="terms">I agree to the<span id="termLink" class="term_link"> <a href="<?php //echo base_url('terms-condition')?>" target="_blank">terms and conditions</a></span><span class="w3l-star"> * </span></label>-->

            <label class="terms">I agree to the<span id="termLink" class="term_link"> terms and conditions for membership</span></label>

            <div id="termsCond" class="terms_cond">
                <h2 class="term_title">Terms and Conditions</h2>
                <p>১. ফর্মে দেয়া তথ্য যাচাই করে এসএসসি ২০০১ ব্যাচের নিশ্চিত হয়ে কার্ড ইস্যু করা হবে। কার্ডের নির্ধারিত মূল্য ৫০০/- টাকা।</p>
                ২. কার্ডের মেয়াদকাল ইস্যুর তারিখ হতে পরবর্তী  ১ বছর।<br>
                ৩. এসএসসি ২০০১ ও এইচএসসি ২০০৩ বাংলাদেশ" গ্রুপ ব্যতীত একি রকম অন্যকোন গ্রুপের সদস্য থাকলে এই কার্ড ইস্যু করা হবে না। সুতরাং তা যাচাই বাছাই করে দেখা হবে।<br>
                ৪. কার্ড হস্তান্তর যোগ্য নয়।<br>
                ৫. কার্ড হারালে বা নষ্ট হলে সাথে সাথে জানাতে হবে। তাহলে উক্ত নাম্বারের কার্ডটি ডিএক্টিভেট করে দেয়া হবে। <br>
                ৬.গ্রুপের সদস্য ব্যতিত কাউকে কার্ড ইস্যু করা হবে না। <br>
                ৭. কোন কারনে গ্রুপের নিয়ম ভংগ, বিশৃংখলা সৃষ্টির জন্য গ্রুপ এর সদস্য তালিকা থেকে বাদ দেয়া হলে এবং উল্লেখিত শর্তের কোন একটি শর্ত ভংগ হলে ইস্যুকৃত কার্ড অকার্যকর করে দেয়া হবে।

                <p id="termHide" class="term_hide_btn" hidden></p>

            </div>


            <div class="btn">
                <br>
                <input type="submit" name="submit" value="Submit"/>

            </div>

            <div class="clear"></div>

            <style>
                .term_link {
                    cursor: pointer;
                    color: red;
                }

                .terms_cond {
                    visibility: hidden;
                    height: 0;
                    opacity: 1;
                    transition: .5s;
                    padding: 2em 1em;
                    color: #f9f9f9;
                    background-color: #00000021;
                    text-align: justify;
                    box-shadow: 2px 2px 10px #56371c;
                    font-size: 16px;
                }

                .term_title {
                    color: red;
                }

                .term_hide_btn {
                    background-color: #ffffff;
                    color: #040404;
                    padding: .5em 0.5em;
                    width: 95px;
                    text-align: center;
                    text-transform: uppercase;
                    font-size: 14px;
                    border: 2px solid #fff;
                    margin-top: 5px;
                }

                @media screen and (max-width: 850px) {
                    .terms_cond {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 392px) {
                    .term_hide_btn {
                        border: 0px solid #fff;
                        padding: .3em 0.5em;
                    }
                }

            </style>

        </form>
    </div>
</div>


<!--script for terms and conditions section-->
<script>
    var termLink, termsCond, techBtnClose;

    termLink = document.getElementById("termLink");
    termsCond = document.getElementsByClassName('terms_cond');
    termsHide = document.getElementById('termHide');

    termsHide.addEventListener("click", termsClose);
    termLink.addEventListener("click", termsOpen);

    function termsOpen() {
        termsCond[0].style.visibility = "visible";
        termsCond[0].style.height = '320px';
        termsCond[0].style.opacity = "1";
    }

    function termsClose() {
        termsCond[0].style.visibility = "hidden";
        termsCond[0].style.height = '0';
        termsCond[0].style.opacity = "0";
    }
</script>

<!-- <script type="text/javascript">
// 	$(document).ready(function () {
//     $('#address_confirm').change(function () {
//         if (!this.checked)
//         //  ^
//            $('#parmanentAddress').fadeIn('slow');
//         else
//             $('#parmanentAddress').fadeOut('slow');
//     });
// });

	$(document).ready(function () {
    $('#address_confirm').change(function () {
      $('#parmanentAddress').fadeToggle();
    });
});
</script> -->
</body>
</html>
