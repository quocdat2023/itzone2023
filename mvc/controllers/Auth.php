<?php

class Auth extends Controller

{

  private $Login;

  private $DashBoardModel;

  function __construct()

  {

    $this->Login = $this->model("Login");

    $this->DashBoardModel = $this->model("DashBoardModel");



  }

  /*

  |--------------------------------------------------------------------------

  | QUẢN LÝ ĐĂNG NHẬP

  |--------------------------------------------------------------------------

  */

  public function Login()

  {

    $alert = [];



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $id_student   = $_POST['id_student'];
      $password = $_POST['password'];
      $alert = $this->Login->myLogin($id_student, $password);
    }

    $this->view("home",[

      "alert"=> $alert

      ]);

      

      

  }
  public function Mail(){
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  $id_student   = $_POST['mssv'];
      $fullname = $_POST['$fullname'];
      $email = $_POST['email'];
      $alert = $this->Login->SendMail($id_student, $email,$fullname);
       $this->view("home",[
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "getallblogs"=>$this->DashBoardModel->GetAllBlogs(),
      "getmaxim"=>$this->DashBoardModel->GetMaxim(),
      "alert"=> $alert
    ]);
    }
   
}

  /*

  |--------------------------------------------------------------------------

  | QUẢN LÝ ĐĂNG XUẤT

  |--------------------------------------------------------------------------

  */

  public function Logout()

  {

    Session::destroy();

  }

  

}

