<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<title>IT-Zone - Trường ĐH Tôn Đức Thắng</title>
<!-- Button trigger modal -->

<style>
body {
    margin-top: 20px;
    background-image: url("https://amisplatform.misacdn.net/apps/login/images/bg<?php echo(rand(1,9)); ?>.jpg");

}



.login-container {

    position: relative;

    margin: 10% auto;

    max-width: 340px;

}



.login-container .loginbox {

    position: relative;

    width: 340px !important;

    height: auto !important;

    padding: 0 0 20px 0;

    -webkit-box-shadow: 0 0 14px rgba(0, 0, 0, .1);
    -moz-box-shadow: 0 0 14px rgba(0, 0, 0, .1);

    box-shadow: 0 0 14px rgba(0, 0, 0, .1);
    border-radius: 8px;

}



.bg-white {

    background-color: #fff !important;

}



.login-container .loginbox .loginbox-title {

    position: relative;

    text-align: center;

    width: 100%;

    height: 35px;

    padding-top: 10px;

    font-family: 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;

    font-size: 20px;

    font-weight: normal;

    color: #444;

}



.login-container .loginbox .loginbox-social {

    padding: 0 10px 10px;

    text-align: center;

}



.login-container .loginbox .loginbox-social .social-title {

    font-size: 14px;

    font-weight: 500;

    color: #a9a9a9;

    margin-top: 10px;

}



.login-container .loginbox .loginbox-social .social-buttons {

    height: 80px;

    padding: 15px 35px;

    text-align: center;

}



.login-container .loginbox .loginbox-social .social-buttons .button-facebook {

    float: left;

    border: 2px solid #3b5998;

    color: #3b5998;

    border-radius: 50%;

    width: 50px;

    height: 50px;

    margin-right: 30px;

    background-color: #fff;

}



.login-container .loginbox .loginbox-social .social-buttons .button-twitter {

    float: left;

    border: 2px solid #29c1f6;

    color: #29c1f6;

    border-radius: 50%;

    width: 50px;

    height: 50px;

    margin-right: 30px;

    background-color: #fff;

}



.login-container .loginbox .loginbox-social .social-buttons .button-google {

    float: left;

    border: 2px solid #ef4f1d;

    color: #ef4f1d;

    border-radius: 50%;

    width: 50px;

    height: 50px;

    margin-right: 30px;

    background-color: #fff;

}



.login-container .loginbox .loginbox-social .social-buttons .button-facebook i {

    font-size: 26px;

    line-height: 50px;

}



.login-container .loginbox .loginbox-social .social-buttons .button-twitter i {

    font-size: 26px;

    line-height: 50px;

}



.login-container .loginbox .loginbox-social .social-buttons .button-google i {

    font-size: 26px;

    line-height: 50px;

}



.login-container .loginbox .loginbox-or {

    position: relative;

    text-align: center;

    height: 20px;

}



.login-container .loginbox .loginbox-or .or-line {

    position: absolute;

    height: 1px;

    top: 10px;

    left: 40px;

    right: 40px;

    background-color: #ccc;

}



.login-container .loginbox .loginbox-or .or {

    position: absolute;

    top: 0;

    -lh-property: 0;

    left: -webkit-calc(50% - 25px);

    left: -moz-calc(50% - 25px);

    left: calc(50% - 25px);

    width: 50px;

    height: 20px;

    background-color: #fff;

    color: #999;

    margin: 0 auto;

}



.login-container .loginbox .loginbox-textbox {

    padding: 10px 40px;

}



.login-container .loginbox .loginbox-textbox .form-control {

    -webkit-border-radius: 3px !important;

    -webkit-background-clip: padding-box !important;

    -moz-border-radius: 3px !important;

    -moz-background-clip: padding !important;

    border-radius: 3px !important;

    background-clip: padding-box !important;

}



.login-container .loginbox .loginbox-forgot {

    padding-left: 40px;

}



.login-container .loginbox .loginbox-forgot a {

    font-size: 11px;

    color: #666;

}



.login-container .loginbox .loginbox-submit {

    padding: 10px 40px;

}



.login-container .loginbox .loginbox-signup {

    text-align: center;

    padding-top: 10px;

}



.login-container .loginbox .loginbox-signup a {

    font-size: 13px;

    color: #666;

}



.login-container .logobox {

    width: 340px !important;

    height: 50px !important;

    padding: 5px;

    margin-top: 15px;

    -webkit-box-shadow: 0 0 14px rgba(0, 0, 0, .1);

    -moz-box-shadow: 0 0 14px rgba(0, 0, 0, .1);

    box-shadow: 0 0 14px rgba(0, 0, 0, .1);

    background-color: #fff;

    text-align: left;

}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel='shortcut icon' href='public/assets/img/logo.jpg'>


<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>



<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">



<div class="login-container animated fadeInDown bootstrap snippets bootdeys">


    <div class="loginbox bg-white">

        <div class="loginbox-title">QUÊN MẬT KHẨU</div>

        <br>

        <div class="mx-auto" style="width: 200px;">

            <img id="profile-img" width="40%" class="profile-img-card img-thumbnail mx-auto d-block"
                src="https://it-zone.club/public/assets/img/logo.jpg">

        </div>

        <!-- <div class="loginbox-social">

                    <div class="social-title ">Connect with Your Social Accounts</div>

                    <div class="social-buttons">

                        <a href="" class="button-facebook">

                            <i class="social-icon fa fa-facebook"></i>

                        </a>

                        <a href="" class="button-twitter">

                            <i class="social-icon fa fa-twitter"></i>

                        </a>

                        <a href="" class="button-google">

                            <i class="social-icon fa fa-google-plus"></i>

                        </a>

                    </div>

                </div>

                <div class="loginbox-or">

                    <div class="or-line"></div>

                    <div class="or">OR</div>

                </div>  -->

        <form action="Mail" method="post">
            <!-- <form  method="post">-->
             <div class="loginbox-textbox">

                <input type="text" class="form-control" name="fullname" placeholder="Họ và tên">

            </div>
            <div class="loginbox-textbox">

                <input type="text" class="form-control" name="email" placeholder="Email cá nhân">

            </div>
           

            <div class="loginbox-submit">

                <button type="submit" class="btn btn-primary btn-block">Gửi</button>

            </div>

            <div class="loginbox-signup">

                <a href="https://it-zone.club/">Quay về Trang chủ.</a>

            </div>

    </div>

    <!-- <div class="logobox">

            </div> -->

</div>

<div class="fixed-bottom">

    <footer class="text-center text-lg-start text-white">

        <!-- Copyright -->

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
             Copyright © 2022 - 2023 IT-ZONE

            <!-- © Copyright <b>IT-Zone</b>. All Rights Reserved -->
        </div>

        <!-- Copyright -->

    </footer>

</div>

<!-- 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script>
function myFunctions() {

    return toastr.warning('Vui lòng liên hệ quản trị viên để được hỗ trợ!');




}
</script>

<script>
if (window.history.replaceState) {

    window.history.replaceState(null, null, window.location.href);
}
</script>