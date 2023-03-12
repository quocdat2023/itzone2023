<?php
    $servername='diemdanh.it-zone.club';
    $username='itzonecl_diemdanh';
    $password='diemdanhitzone';
    $dbname = "itzonecl_diemdanh";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>IT-Zone - Trường ĐH Tôn Đức Thắng</title>
<link rel='shortcut icon' href='https://it-zone.club/public/assets/img/logo.jpg'>
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
$str =  $_SERVER['QUERY_STRING'];
$strexplode = explode("/",$str);
$email =  $strexplode[2];
$token =  $strexplode[3];
if ($token != "" && $email != ""){
  $query = mysqli_query($conn,
"SELECT * FROM `tbl_user` WHERE `reset_link_token`='".$token."' and `email`='".$email."';"
);
$curDate = date("Y-m-d H:i:s");
if (mysqli_num_rows($query) > 0) {
$row= mysqli_fetch_array($query);
if($row['exp_date'] >= $curDate){ ?>
<div class="content-wrapper">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align: center;" id="exampleModalCenterTitle">Khôi phục mật khẩu</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> -->
            </div>
            <form action="https://it-zone.club/Account/UpdatePass" method = "POST">

                <div class="modal-body">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="hidden" name="reset_link_token" value="<?php echo $token;?>">
                    <div class="form-group">
                        <div class="input-group-icon right">
                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                            <input name="password" type="password" id="newpasswords" placeholder="Mật khẩu mới"
                                class="form-control" placeholder="with icon">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-icon right">
                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                            <input name="password_again" type="password" id="newpassword"
                                placeholder="Nhập lại mật khẩu mới" class="form-control" placeholder="with icon">
                        </div>
                    </div>

                    <input style="display: none;" value="<?php echo Session::get('id_student')?>" name="id_student"
                        type="text" />
                    <!-- <br>
                    <div class="text-center">
                    </div> -->
                    <div class="modal-footer">
                        <button name="submit" type="submit" class="btn text-white btn-primary" data-dismiss="modal">Đổi
                            mật
                            khẩu</button>
                    </div>
            </form>
            <!-- style="background-color: #F93154;" -->
        </div>
    </div>
</div>
<?php } } else{
 echo "<p>This forget password link has been expired</p>";
}
}
?>

</body>
</html>
