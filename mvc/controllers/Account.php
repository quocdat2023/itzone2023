<?php

class Account extends Controller

{

  private $LoginModel;

  private $DashBoardModel;

  function __construct(){
    $this->LoginModel = $this->model("Login");
    $this->DashBoardModel = $this->model("DashBoardModel");
  }
  /*

  |-----------------------------------------------------------------------
  |--------------------------------------------------------------------------

  */
  public function LoginForm(){
    $alert="";
    $this->view("login",[
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "alert"=> $alert
    ]);
  }

  public function LoginSubmit()

  {

    $alert = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $id_student   = $_POST['id_student'];
      $password = $_POST['password'];
      $alert = $this->LoginModel->myLogin($id_student, $password);
    }

    $this->view("login",[
      "alert"=> $alert
      ]);

      

      

  }
   public function ForgotPassword()

  {


    $this->view("forgot",[
      "alert"=> $alert
      ]);

      

      

  }
    public static function redirect($url)
{
    ob_start();
    if (!empty($url)) header("location: {$url}");
    ob_end_flush();
}


  public function Mail(){
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $alert = $this->LoginModel->SendMail($email,$fullname);
      self::redirect("https://it-zone.club/Account/LoginForm");

    }
   
}


  /*

  |--------------------------------------------------------------------------

  | QU?N L� �ANG XU?T

  |--------------------------------------------------------------------------

  */

  public function Homes(){
    $alert = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['submit_fix'])){
          $inputname = $_POST['inputname'];
          $inputphone = $_POST['inputphone'];
          $inputidstudent = $_POST['inputidstudent'];
          $inputpassword = $_POST['inputpassword'];
          $inputdescribe = $_POST['inputdescribe'];
          $inputsemester = $_POST['inputsemester'];
          $inputschoolyear = $_POST['inputschoolyear'];
          $inputdates = $_POST['inputdate'];
          $inputshift = $_POST['inputshift'];
          date_default_timezone_set('Asia/Ho_Chi_Minh');
          $inputdate = date("Y-m-d");
          $alert = $this->DashBoardModel-> AddFix($inputname,$inputphone,$inputidstudent,$inputpassword,$inputdescribe,$inputdate,$inputsemester,$inputschoolyear,$inputdates,$inputshift);    }
}
  $this->view("home",[
    "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
    "gethockys"=>$this->DashBoardModel->GetHocKyss(),
    "alert"=> $alert
  ]);

}

 public function ResetPassword(){
    $alert = false;
  $this->view("reset-password",[
    "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
    "gethockys"=>$this->DashBoardModel->GetHocKyss(),
    "alert"=> $alert
  ]);

}


  public function UpdatePass(){
    $alert = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['submit'])){
          $emailId = $_POST['email'];
          $token = $_POST['reset_link_token'];
          $password = md5($_POST['password']);
          $alert = $this->LoginModel->UpdatePass($emailId,$token,$password);    
          
      }
}
      self::redirect("https://it-zone.club/Account/LoginForm");

}







  public function Logout()

  {

    Session::destroy();

  }

  
}