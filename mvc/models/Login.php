<?php

Session::checkLogin();
        // Import PHPMailer classes into the global namespace
        // These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        
        require 'PHPMailer/PHPMailer/src/Exception.php';
        require 'PHPMailer/PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/PHPMailer/src/SMTP.php';
class Login extends DB

{

  public function myLogin($id_student, $password)

  {

    $password_hash  = md5($password);


    if (empty($id_student) || empty($password)){

      return '<script> toastr.warning("Vui lòng điền đầy đủ thông tin!");</script>';

      self::redirect("https://it-zone.club/");

    }else{

      $query  = "SELECT * FROM tbl_user WHERE id_student = '$id_student' AND password = '$password_hash' LIMIT 1";

      $result = mysqli_query($this->con, $query);

      if (!$result || mysqli_num_rows($result) == 0){

        return '<script> toastr.warning("Tài khoản hoặc mật khẩu không đúng!");</script>'; 

        self::redirect("https://it-zone.club/");

      }else{

        $value = $result->fetch_assoc();

        Session::set('login', true);
        Session::set('id_user', $value['id_user']);
        Session::set('id_student', $value['id_student']);
        Session::set('fullname', $value['fullname']);
        self::redirect("https://it-zone.club/Home/Dashboard");
        return '<script> toastr.warning("Tài khoản hoặc mật khẩu không đúng!");</script>'; 
      }

  

    }

  }
  
   public function  UpdatePass($emailId,$token,$password){
              
            $query = mysqli_query($this->con,"SELECT * FROM `tbl_user` WHERE `reset_link_token`='$token' and `email`='$emailId'");
            $row = mysqli_num_rows($query);
            if($row){
            mysqli_query($this->con,"UPDATE tbl_user set  password='$password', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='$emailId'");
             return '<script> toastr.success("Congratulations! Your password has been updated successfully.");</script>';

            }else{
            return '<script> toastr.success("Something goes wrong. Please try again");</script>';

            }
    }
            

    public function SendMail($emails,$fullname){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        $result = mysqli_query($this->con,"SELECT * FROM tbl_user WHERE email='" . $emails . "'");
 
        $row= mysqli_fetch_array($result);
     
      if($row)
      {
     
          $token = md5($emailId).rand(10,9999);
     
         $expFormat = mktime(
         date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
         );
     
        $expDate = date("Y-m-d H:i:s",$expFormat);
        
        $query = "UPDATE `tbl_user` SET reset_link_token='$token' ,exp_date='$expDate' WHERE tbl_user.email = '$emails'";
        mysqli_query($this->con, $query);
        
        //              // Khởi tạo các biến
        // $secret_key = $fullname; // Khóa bí mật, bạn có thể tự đặt giá trị khác
        // $user_id = $id_student; // ID của user cần tạo link
        // $expire_time = time() + (60); // Thời gian hết hạn của link (30 phút)
        
        // // Tạo chuỗi mã hóa
        // $hash_string = $user_id . '-' . $expire_time;
        // $hash = hash_hmac('sha256', $hash_string, $secret_key);
        
        // // Tạo đường link có thời hạn
        $link = 'https://it-zone.club/Account/ResetPassword/'.$emails.'/'.$token ;
        
        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();// gửi mail SMTP
            $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
            $mail->SMTPAuth = true;// Enable SMTP authentication
            $mail->Username = 'iphonequocdat@gmail.com';// SMTP username
            $mail->Password = 'qbtqdrjsjqqrduuj    '; // SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587; // TCP port to connect to
            $mail->CharSet = 'UTF-8';
            $mail->ContentType = 'text/plain'; 
            //Recipients
            $mail->setFrom('iphonequocdat@gmail.com', 'IT-Zone - Trường ĐH Tôn Đức Thắng');
            $mail->addAddress($emails); // Name is optional
            // $mail->addReplyTo('iphonequocdat@gmail.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            // // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
            
            
            // Content
            $mail->isHTML(true);   // Set email format to HTML
            $mail->Subject = 'Yêu cầu khôi phục mật khẩu';
            $mail->Body = 'Xin chào '.$fullname.'!,<br>
           Bạn đã yêu cầu đặt lại mật khẩu của tài khoản của mình. Để hoàn tất quá trình này, bạn vui lòng nhấp vào đường link bên dưới để đặt lại mật khẩu:<br>
            '.$link.'<br>
           Đường link này sẽ hết hạn sau 24 giờ, vui lòng thực hiện đặt lại mật khẩu trong khoảng thời gian này. Nếu bạn không yêu cầu đặt lại mật khẩu, vui lòng bỏ qua email này.<br>
            
           Nếu bạn gặp bất kỳ vấn đề gì hoặc cần hỗ trợ, vui lòng liên hệ với chúng tôi qua địa chỉ email này.<br>
            
            Trân trọng,<br>
            IT-Zone - Trường ĐH Tôn Đức Thắng';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
        
            return '<script> toastr.success("Đã gửi mail thành công!");</script>';
           
           
        } catch (Exception $e) {
              return '<script> toastr.success("Đã gửi mail thất bại!");</script>';
        }
      }else{
                        return '<script> toastr.success("Invalid Email Address. Go back");</script>';
  }
        
    }



  public static function redirect($url)

  {

    ob_start();

    if (!empty($url)) header("location: {$url}");

    ob_end_flush();

  }

}