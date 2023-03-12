<?php
class Home extends Controller{
    public $DashBoardModel;
    public $MemberModel;
    public $TeamModel;
    public $EventModel;
    public $AttendanceModel;
    public $AccoutModel;
    public $PermissionModel;
    public $SemesterSchoolModel;

    function __construct(){
        $this->DashBoardModel = $this->model("DashBoardModel");
        $this->MemberModel = $this->model("MemberModel");
        $this->TeamModel = $this->model("TeamModel");
        $this->EventModel = $this->model("EventModel");
        $this->AccountModel = $this->model("AccountModel");
        $this->PermissionModel = $this->model("PermissionModel");
        $this->SemesterSchoolModel = $this->model("SemesterSchoolModel");
        $this->AttendanceModel = $this->model("AttendanceModel");

    }

    public function Dashboard(){
        $this->view("layout_admin",[
            "page"=>"dashboard",
            "countmember"=>$this->DashBoardModel->CountTotalMember(),
            "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
            "listsupport"=>$this->DashBoardModel->ListSuaMay(),
            "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
            "countevent"=>$this->DashBoardModel->CountTotalEvent(),
            "support_fix"=>$this->DashBoardModel->SuaMay(),
            "getallevent"=>$this->EventModel->GetAllEvent(),
            "gettopfive"=>$this->DashBoardModel->GetTopFive(),
            // "alert" => '<script> toastr.success("Chào Mừng đến Với Website!");</script>'
        ]);
    }

public function DeletePermision(){
  $alert = "";
  $alert = $this->EventModel->DeletePermision('E20H0411');
}

 public function ViewBlog($idblog){
      $this->view("views",[
          "page"=>"viewblog",
          "blogview"=>$this->DashBoardModel->ViewBlog($idblog),
          "getallblog"=>$this->DashBoardModel->GetAllBlog(),


      ]);
  }


public function Profile(){
     $id_student = Session::get('id_student');
     $this->view("layout_admin",[
    "page"=>"profile",
    "getinfouser"=>$this->MemberModel->GetInfoUser($id_student),
    "getallblog"=>$this->DashBoardModel->GetAllBlog(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "getallcalendar"=>$this->EventModel->GetAllCalendar(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
    
    "gethocky"=>$this->DashBoardModel->GetHocKys(),
    "getthang"=>$this->DashBoardModel->GetThang(),


      ]);
  }



  public function HDSD(){
    $this->view("layout_admin",[
      "page"=>"hdsd",
      "countmember"=>$this->DashBoardModel->CountTotalMember(),
            "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
            "listsupport"=>$this->DashBoardModel->ListSuaMay(),
            "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
            "countevent"=>$this->DashBoardModel->CountTotalEvent(),
            "support_fix"=>$this->DashBoardModel->SuaMay(),
            "getallevent"=>$this->EventModel->GetAllEvent(),
    ]);

  }

    public function Homes(){
    // self::redirect("https://it-zone.club/Account/LoginForm");
    
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
      "getallblogs"=>$this->DashBoardModel->GetAllBlogs(),
      "getmaxim"=>$this->DashBoardModel->GetMaxim(),
      "alert"=> $alert
    ]);

  }
  public function AddFixs()
  { 
    Session::checkSession();
    $admin = $this->PermissionModel->Admin(Session::get('id_user'));
    if ($admin) self::redirect("http://localhost/itzoneHome/Dashboard");
    $block = $this->PermissionModel->Block(Session::get('id_user'));
    if ($block) self::redirect("");
    $alert = "";
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
            $inputuser = $_POST['inputuser'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $inputdate = date("Y-m-d");
            $alert = $this->DashBoardModel->AddFixs($inputname,$inputphone,$inputidstudent,$inputpassword,$inputdescribe,$inputdate,$inputsemester,$inputschoolyear,$inputdates,$inputshift,$inputuser);
    }
  }
  $this->view("layout_admin",[
    "page"=>"managefix",
    "countmember"=>$this->DashBoardModel->CountTotalMember(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
    "countevent"=>$this->DashBoardModel->CountTotalEvent(),
    "supportfix"=>$this->DashBoardModel->SuaMay(),
    "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
    "gethockys"=>$this->DashBoardModel->GetHocKyss(),
    "getmember"=>$this->MemberModel->GetAllMember(),
    "alert"=> $alert
    ]);
    
  }

 public function AddFixss()
  { 
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
            $inputuser = $_POST['inputuser'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $inputdate = date("Y-m-d");
            $alert = $this->DashBoardModel->AddFixs($inputname,$inputphone,$inputidstudent,$inputpassword,$inputdescribe,$inputdate,$inputsemester,$inputschoolyear,$inputdates,$inputshift,$inputuser);
 
 }
  }

    $this->view("home",[
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "getallblogs"=>$this->DashBoardModel->GetAllBlogs(),

      "alert"=> $alert
    ]);

  }

  public function Search(){
      if (isset($_POST["action"])) {
      $search_mssv = $_POST["search_mssv"];

      $result = $this->DashBoardModel->Search($search_mssv);
      $output ="";
      $i = 1;
      foreach ($result as $rows) {
        if ($rows["status"] == 0){
          $mess = '<span style="color: #ff901c;">Đang tìm kiếm KTV</span>';
      }else if ($rows["status"] == 1){
        $mess ='<span class="text-danger">Đã có KTV tiếp nhận<br> (Vui lòng đem máy lên IT-Zone tầng 5AB theo lịch đã đặt để được hỗ trợ!)</span>';
      }else if ($rows["status"] == 3){
        $mess ='<span class="text-success">KTV đang hỗ trợ</span>';
      }else if ($rows["status"] == 4){
        $mess ='<span class="text-warning">Đã hỗ trợ xong <br> (Vui lòng lên IT-Zone tầng 5AB để nhận máy!)</span>';
      } else if ($rows["status"] == 6){
        $mess ='<span class="text-info">Không thể hỗ trợ <br> (Vui lòng lên IT-Zone tầng 5AB để nhận máy và được tư vấn!)</span>';
      } else if ($rows["status"] == 7){
        $mess ='<span class="text-primary">Lịch đặt đã bị hủy <br> (Vui lòng thử lại sau!)</span>';
      }else{
        $mess ='<span class="text-secondary">Đã bàn giao máy</span>';
      }
        $output .='
        <tr>
        <td class="order_id">
            '.$i++.'
        </td>
        <td>'.$rows["fullname"].'</td>
        <td>'.substr($rows["phone"],0,6)."***".'</td>
        <td>'.$rows["date"]." ".$rows["timebook"].'</td>
        <td>'.$mess.'</td>
        </tr>
';
}
echo $output;
}

}

public function SearchAttendance(){
  if (isset($_POST["action"])) {
  $search_mssv = $_POST["search_mssv"];

  $result = $this->DashBoardModel->SearchAttendance($search_mssv);
  
  $output ="";
  $i = 1;
  foreach ($result as $rows) {
    if ($rows["attendance"] == 'Present'){
      $mess = '<p class="text-success"><b>Có mặt</b></p>';
  }else if ($rows["attendance"] == 'Late'){
  $mess = '<p class="text-warning"><b>Trể</b></p>';  }else{
  $mess = '<p class="text-danger"><b>Vắng</b></p>';  }
    
    $output .='
    <tr>
    <td class="order_id">
        '.$i++.'
    </td>
    <td>'.$rows["date"].'</td>
    <td>'.$rows["shift"].'</td>
    <td class="text-center">'.$mess.'</td>
    <td class="text-center">
      <div class="btn-group">
          <button class="btn btn-primary dropdown-toggle btn-sm"
              data-toggle="dropdown"><i class="fa fa-cogs"></i>Thao tác <i
                  class="fa fa-angle-down"></i></button>
          <ul class="dropdown-menu">
          <li style="width: 78%">
              <form action="Home/UpdatePresent" method="post">
                  <input style="display: none" type="text" name="id_student" value="'.$rows["id_student"].'">
                  <input style="display: none" type="text" name="date" value="'.$rows["date"].'">
                  <input style="display: none" type="text" name="shift" value="'.$rows["shift"].'">
                  <button class="dropdown-item" href="javascript:;"><i
                  class="fa-solid fa-circle-check text-success"></i> Có mặt</button>
              </form>

          </li>
            <li style="width: 78%">
              <form action="Home/UpdateLate" method="post">
              <input style="display: none" type="text" name="id_student" value="'.$rows["id_student"].'">
               <input style="display: none" type="text" name="date" value="'.$rows["date"].'">
                  <input style="display: none" type="text" name="shift" value="'.$rows["shift"].'">
              <button class="dropdown-item" href="javascript:;"><i
              class="fa-solid fa-circle-exclamation text-warning"></i> Trễ</button>
          </form>
           </li>   
          <li style="width: 78%">
           <form action="Home/UpdateAbsent" method="post">
           <input style="display: none" type="text" name="id_student" value="'.$rows["id_student"].'">
            <input style="display: none" type="text" name="date" value="'.$rows["date"].'">
                  <input style="display: none" type="text" name="shift" value="'.$rows["shift"].'">
           <button class="dropdown-item" href="javascript:;"><i
           class="fa-solid fa-circle-xmark text-danger"></i> Vắng</button>
       </form>
        </li>   
          
              <li>
                  <a class="dropdown-item" target="_self" data-toggle="modal" data-target="#xoa" data-id_attendance="'.$rows["id_attendance"].'"><i
                          class="fa fa-trash text-info"></i> Xóa</a>
              </li>
          </ul>
      </div>

  </td>
    </td>

    </tr>
';
}
echo $output;
}

}
public function UpdatePresent(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id1 = $_POST['id_student'];
        $date = $_POST['date'];
        $shift = $_POST['shift'];
        $alert = $this->AttendanceModel->UpdatePresent($id1,$date,$shift);
    $this->view("layout_admin",[
      "page"=>"attendance",
      "getmember"=>$this->MemberModel->GetAllMember(),
      "getmembers"=>$this->MemberModel->GetAllMember(),
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert" => $alert,
    ]);
  }
  }
  public function UpdateLate(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id1 = $_POST['id_student'];
        $date = $_POST['date'];
        $shift = $_POST['shift'];
      $alert = $this->AttendanceModel->UpdateLate($id1,$date,$shift);
      $this->view("layout_admin",[
        "page"=>"attendance",
        "getmember"=>$this->MemberModel->GetAllMember(),
        "getmembers"=>$this->MemberModel->GetAllMember(),
        "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
        "gethockys"=>$this->DashBoardModel->GetHocKyss(),
        "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
        "listsupport"=>$this->DashBoardModel->ListSuaMay(),
        "alert" => $alert,
      ]);
    }
    }
    public function UpdateAbsent(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $id1 = $_POST['id_student'];
        $date = $_POST['date'];
        $shift = $_POST['shift'];
        $alert = $this->AttendanceModel->UpdateAbsent($id1,$date,$shift);
        $this->view("layout_admin",[
          "page"=>"attendance",
          "getmember"=>$this->MemberModel->GetAllMember(),
          "getmembers"=>$this->MemberModel->GetAllMember(),
          "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
          "gethockys"=>$this->DashBoardModel->GetHocKyss(),
          "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
          "listsupport"=>$this->DashBoardModel->ListSuaMay(),
          "alert" => $alert,
        ]);
      }
      }

public function CloseForm(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $alert = $this->DashBoardModel->CloseForm();
  $this->view("layout_admin",[
      "page"=>"managecalendar",
      "getmember"=>$this->MemberModel->GetAllMember(),
      "getmembers"=>$this->MemberModel->GetAllMember(),
       "GetRole"=>$this->DashBoardModel->GetRole(),
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
       "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
     "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
      "alert" => $alert,
    ]);
  }else{
     $this->view("layout_admin",[
      "page"=>"managecalendar",
      "getmember"=>$this->MemberModel->GetAllMember(),
      "getmembers"=>$this->MemberModel->GetAllMember(),
       "GetRole"=>$this->DashBoardModel->GetRole(),
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
       "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
     "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
      "alert" => $alert,
    ]);
  }
  }
  
public function OpenForm(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $alert = $this->DashBoardModel->OpenForm();
    $this->view("layout_admin",[
      "page"=>"managecalendar",
      "getmember"=>$this->MemberModel->GetAllMember(),
      "getmembers"=>$this->MemberModel->GetAllMember(),
       "GetRole"=>$this->DashBoardModel->GetRole(),
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
       "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
     "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
      "alert" => $alert,
    ]);
  }else{
     $this->view("layout_admin",[
      "page"=>"managecalendar",
      "getmember"=>$this->MemberModel->GetAllMember(),
      "getmembers"=>$this->MemberModel->GetAllMember(),
       "GetRole"=>$this->DashBoardModel->GetRole(),
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
       "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
     "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
      "alert" => $alert,
    ]);
  }
  }
  
public function ManageTeam(){
  Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_user'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_user'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_user'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_user'));

  if ($block || $attendance || $personnel) self::redirect("");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['submitdeleteteam'])){
$id = $_POST['id_team'];
$alert = $this->TeamModel->DeleteTeam($id);
}
}
$this->view("layout_admin",[
"page"=>"manageteam",
"countsupport"=>$this->DashBoardModel->CountTotalSupport(),
"listsupport"=>$this->DashBoardModel->ListSuaMay(),
"getallteam"=>$this->TeamModel->GetAllTeam(),
"alert"=> $alert
]);


}
public function ManageSemesterSchoolYear(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_user'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_user'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_user'));
  $admin = $this->PermissionModel->Admin(Session::get('id_user'));
  if($block || $attendance || $personnel ){
    self::redirect("http://localhost/itzoneHome/Dashboard");
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submitdeleteschoolyear'])){
        $id1 = $_POST['id_schoolyear'];
        $alert = $this->SemesterSchoolModel->DeleteSchoolYear($id1);
    }else if(isset($_POST['submitdeletesemester'])){
          $id2 = $_POST['id_semester'];
          $alert = $this->SemesterSchoolModel->DeleteSemester($id2);
      }
    else if(isset($_POST['addsemester'])){
        $id3 = $_POST['tenhocky'];
        $alert = $this->SemesterSchoolModel->AddSemester($id3);
    }
    else if(isset($_POST['addnamhoc'])){
      $id4 = $_POST['tennamhoc'];
      $alert = $this->SemesterSchoolModel->AddSchoolYear($id4);
  }
  }
      $this->view("layout_admin",[
      "page"=>"managesemesterschoolyear",
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "getallteam"=>$this->TeamModel->GetAllTeam(),
      "getmember"=>$this->MemberModel->GetAllMember(),
      "getnamhoc"=>$this->SemesterSchoolModel->GetNamHoc(),
      "gethocky"=>$this->SemesterSchoolModel->GetHocKy(),
      "alert"=> $alert
      ]);


}

public function ManageAccount(){
 $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }
  $this->view("layout_admin",[
  "page"=>"manageaccount",
  "getallaccount"=>$this->AccountModel->GetAllAccount(),
  "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
  "listsupport"=>$this->DashBoardModel->ListSuaMay(),
  "alert"=> $alert
  ]);
  
  }


public function ChangePassWord(){
  $alert = false;
  // Session::checkSession();
  // $admin = $this->PermissionModel->Admin(Session::get('id_user'));
  // if ($admin) self::redirect("http://localhost/itzoneHome/Dashboard");
  // $block = $this->PermissionModel->Block(Session::get('id_user'));
  // if ($block) self::redirect("");
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['newpassword'] == $_POST['newpasswords']){
      $newpassword = $_POST['newpassword'];
      $id_student = $_POST['id_student'];
      $alert = $this->AccountModel->UpdatePass($newpassword,$id_student);
    }else{
      $alert ='<script> toastr.warning("M?t kh?u kh ng kh?p!");</script>';
    }
  }
$this->view("layout_admin",[
"page"=>"changepassword",
 "countmember"=>$this->DashBoardModel->CountTotalMember(),
            "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
            "listsupport"=>$this->DashBoardModel->ListSuaMay(),
            "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
            "countevent"=>$this->DashBoardModel->CountTotalEvent(),
            "support_fix"=>$this->DashBoardModel->SuaMay(),
            "getallevent"=>$this->EventModel->GetAllEvent(),

"alert"=> $alert
]);
}

public function UpdateAccountAdmin(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_user'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_user'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_user'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_user'));

  if ($block || $attendance || $personnel) self::redirect("");
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_student = $_POST['id_student'];
    $role = $_POST['id_role'];
    $alert = $this->AccountModel->UpdateAccountAdmin($id_student, $role);
  }
      $this->view("layout_admin",[
      "page"=>"manageaccount",
      "getallaccount"=>$this->AccountModel->GetAllAccount(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert"=> $alert
      ]);
}
public function UpdateAccountAttendance(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_user'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_user'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_user'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_user'));

  if ($block || $attendance || $personnel) self::redirect("");
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_student = $_POST['id_student'];
    $role = $_POST['id_role'];
    $alert = $this->AccountModel->UpdateAccountAttendance($id_student, $role);
  }
      $this->view("layout_admin",[
      "page"=>"manageaccount",
      "getallaccount"=>$this->AccountModel->GetAllAccount(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert"=> $alert
      ]);   
 }

public function UpdateAccountPersonnel(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

  if ($block || $attendance || $personnel) self::redirect("");
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_student = $_POST['id_student'];
    $role = $_POST['id_role'];
    $alert = $this->AccountModel->UpdateAccountPersonnel($id_student, $role);
  }
      $this->view("layout_admin",[
      "page"=>"manageaccount",
      "getallaccount"=>$this->AccountModel->GetAllAccount(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert"=> $alert
      ]);   
 }

public function UpdateAccountBlock(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

  if ($block || $attendance || $personnel) self::redirect("");
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_student = $_POST['id_student'];
    $role = $_POST['id_role'];
    $alert = $this->AccountModel->UpdateAccountBlock($id_student, $role);
  }
      $this->view("layout_admin",[
      "page"=>"manageaccount",
      "getallaccount"=>$this->AccountModel->GetAllAccount(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert"=> $alert
      ]);   
 }

 public function ResetAccount(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

  if ($block || $attendance || $personnel) self::redirect("");
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_student = $_POST['id_student'];
    $alert = $this->AccountModel->ResetAccount($id_student);
  }
      $this->view("layout_admin",[
      "page"=>"manageaccount",
      "getallaccount"=>$this->AccountModel->GetAllAccount(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert"=> $alert
      ]);   
 }

public function DeleteAll(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

  if ($block || $attendance || $personnel) self::redirect("");
  $this->AttendanceModel->DeleteAll();
  $this->view("layout_admin",[
    "page"=>"staticattendance",
    "countmember"=>$this->DashBoardModel->CountTotalMember(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
    "countevent"=>$this->DashBoardModel->CountTotalEvent(),
    "support_fix"=>$this->DashBoardModel->SuaMay(),
    "gethocky"=>$this->DashBoardModel->GetHocKys(),
    "getthang"=>$this->DashBoardModel->GetThang(),
    ]);
}
public function AddTeam(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

  if ($block || $attendance || $personnel) self::redirect("");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['submit'])){
$team = $_POST['team'];
$inputdescribe = $_POST['inputdescribe'];
$this->view("layout_admin",[
$this->TeamModel->AddTeam($team,$inputdescribe),
header('Location:../Home/ManageTeam')
]);
}
}
}

public function ManageRole(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

  if ($block || $attendance || $personnel) self::redirect("");
$this->view("layout_admin",[
"page"=>"managerole",
"countmember"=>$this->DashBoardModel->CountTotalMember(),
"countsupport"=>$this->DashBoardModel->CountTotalSupport(),
"listsupport"=>$this->DashBoardModel->ListSuaMay(),
"countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
"countevent"=>$this->DashBoardModel->CountTotalEvent(),
"support_fix"=>$this->DashBoardModel->SuaMay(),

]);


}

public function ManageMember(){
 $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['submit'])){
$inputname = $_POST['inputname'];
$inputphone = $_POST['inputphone'];
$inputidstudent = $_POST['inputidstudent'];
$inputfaculty = $_POST['inputfaculty'];
$inputeam = $_POST['inputeam'];
$birthday = $_POST['inputbirthday'];
$timestamp = strtotime($birthday);
$inputbirthday = date("Y-m-d",$timestamp);
$inputfacebook = $_POST['inputfacebook'];
$alert = $this->MemberModel->AddMember($inputname,$inputphone,$inputidstudent,$inputfaculty,$inputeam,$inputbirthday,$inputfacebook);
$alert = $this->PermissionModel->AddPermission($inputidstudent);
}else if(isset($_POST['submitdelete'])){
 $id = $_POST['id_user'];
$alert = $this->MemberModel->DeleteMember($id);
}else if(isset($_POST['submitupdate'])){
$inputname = $_POST['inputname'];
$inputemail = $_POST['inputemail'];
$inputphone = $_POST['inputphone'];
$inputidstudent = $_POST['inputidstudent'];
$inputfaculty = $_POST['inputfaculty'];
$inputeam = $_POST['inputeam'];
$birthday = $_POST['inputbirthday'];
$timestamp = strtotime($birthday);
$inputbirthday = date("Y-m-d",$timestamp);
$inputfacebook = $_POST['inputfacebook'];
$inputgender = $_POST['inputgender'];
$iduser = $_POST['iduser'];
$alert = $this->MemberModel->UpdateMember($iduser,$inputname,$inputphone,$inputidstudent,$inputfaculty,$inputeam,$inputbirthday,$inputfacebook,$inputgender,$inputemail);

}else{
  
}
$this->view("layout_admin",[
"page"=>"managemember",
"countmember"=>$this->DashBoardModel->CountTotalMember(),
"countsupport"=>$this->DashBoardModel->CountTotalSupport(),
"listsupport"=>$this->DashBoardModel->ListSuaMay(),
"countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
"countevent"=>$this->DashBoardModel->CountTotalEvent(),
"support_fix"=>$this->DashBoardModel->SuaMay(),
"getmember"=>$this->MemberModel->GetAllMember(),
"getallteam"=>$this->TeamModel->GetAllTeam(),
"getallteams"=>$this->TeamModel->GetAllTeam(),
"alert"=> $alert
]);

}

public function ManageFix(){
   Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if ($admin)
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

  if ($block || $attendance || $personnel) self::redirect("");
$this->view("layout_admin",[
"page"=>"managefix",
"countmember"=>$this->DashBoardModel->CountTotalMember(),
"countsupport"=>$this->DashBoardModel->CountTotalSupport(),
"listsupport"=>$this->DashBoardModel->ListSuaMay(),
"countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
"countevent"=>$this->DashBoardModel->CountTotalEvent(),
"supportfix"=>$this->DashBoardModel->SuaMay(),
"getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
"gethockys"=>$this->DashBoardModel->GetHocKyss(),
"getmember"=>$this->MemberModel->GetAllMember(),
]);


}


public function StaticFix(){
 $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("/../Home/Dashboard");
  }      $this->view("layout_admin",[
      "page"=>"staticfix",
      "countmember"=>$this->DashBoardModel->CountTotalMember(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
      "countevent"=>$this->DashBoardModel->CountTotalEvent(),
      "support_fix"=>$this->DashBoardModel->SuaMay(),
      "gethocky"=>$this->DashBoardModel->GetHocKy(),

      ]);


}

public function ViewStaticFix($semester,$schoolyear){
    $id_ktv = Session::get('id_student');
    $this->view("layout_admin",[
    "page"=>"tablefix",
    "getallstatic"=>$this->DashBoardModel->ViewStaticFix($semester,$schoolyear),
    "getallstaticps"=>$this->DashBoardModel->ViewStaticPerson($semester,$schoolyear,$id_ktv),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    ]);


}

public function ViewStaticAttendanceMonth($month,$year){
 $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("/../Home/Dashboard");
  }
  $id_ktv = Session::get('id_student');
  $this->view("layout_admin",[
  "page"=>"tableattendance",
  "getallstatic"=>$this->DashBoardModel->ViewStaticAttendanceMonth($month,$year),
  "getallstatics"=>$this->DashBoardModel->ViewStaticAttendanceMonth($month,$year),
  "getallstaticp"=>$this->DashBoardModel->ViewStaticAttendanceMonthPerson($month,$year,$id_ktv),
  "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
  "listsupport"=>$this->DashBoardModel->ListSuaMay(),
   ]);
  
  
  }

 public function ViewStaticAttendanceSemester($schoolyear,$semester){
  $alert=" ";
   Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("/../Home/Dashboard");
  }
      $id_ktv = Session::get('id_student');
    $this->view("layout_admin",[
    "page"=>"tableattendances",
    "getallstatic"=>$this->DashBoardModel->ViewStaticAttendanceSemester($schoolyear,$semester),
    "getallstaticps"=>$this->DashBoardModel->ViewStaticAttendanceSemesterPerson($schoolyear,$semester,$id_ktv),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
     ]);
    
    
    }
  

public function StaticAttendance(){
$alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("/../Home/Dashboard");
  }
$this->view("layout_admin",[
"page"=>"staticattendance",
"countmember"=>$this->DashBoardModel->CountTotalMember(),
"countsupport"=>$this->DashBoardModel->CountTotalSupport(),
"listsupport"=>$this->DashBoardModel->ListSuaMay(),
"countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
"countevent"=>$this->DashBoardModel->CountTotalEvent(),
"support_fix"=>$this->DashBoardModel->SuaMay(),
"gethocky"=>$this->DashBoardModel->GetHocKys(),
"getthang"=>$this->DashBoardModel->GetThang(),

]);


}


public function Attendance(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||  $personnel  ){
    self::redirect("http://localhost/itzoneHome/Dashboard");
  }
  $alert = false;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['schoolyear']) || empty($_POST['semester']) || empty($_POST['date']) || empty($_POST['shift'])) {
      $alert = '<script>
        toastr.warning("Vui lòng điền đầy đủ thông tin");
      </script>';
    } 
    else if (empty($_POST['attendance'])) {
      $alert = '<script>
        toastr.warning("Vui lòng chọn thành viên để điểm danh!");
      </script>';
    } 
    else {
      foreach ($_POST['attendance'] as $id => $attendance) {
          $id_student = $_POST['id_student'][$id];
          $schoolyear = $_POST['schoolyear'];
          $semester = $_POST['semester'];
          $date = $_POST['date'];
          $shift = $_POST['shift'];
          $alert = $this->AttendanceModel->CheckAttendance($id_student,$schoolyear, $semester, $date, $shift, $attendance,$id_student);

      }
    }
  }
  $this->view("layout_admin",[
    "page"=>"attendance",
    "getmember"=>$this->MemberModel->GetAllMember(),
    "getmembers"=>$this->MemberModel->GetAllMember(),
    "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
    "gethockys"=>$this->DashBoardModel->GetHocKyss(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "alert" => $alert,
  ]);
}


public function AddManageCalendar(){
   $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }$this->view("layout_admin",[
"page"=>"addmanagecalendar",
"countmember"=>$this->DashBoardModel->CountTotalMember(),
"countsupport"=>$this->DashBoardModel->CountTotalSupport(),
"listsupport"=>$this->DashBoardModel->ListSuaMay(),
"countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
"countevent"=>$this->DashBoardModel->CountTotalEvent(),
"support_fix"=>$this->DashBoardModel->SuaMay(),

]);


}

public function InfoSoftWare(){
$this->view("layout_admin",[
"page"=>"infosofware",
"countsupport"=>$this->DashBoardModel->CountTotalSupport(),
"listsupport"=>$this->DashBoardModel->ListSuaMay(),
]);


}

public function DeleteAttendance(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submitdeleteattendance'])){
        $id1 = $_POST['id_attendance'];
        $alert = $this->AttendanceModel->DeleteAttendance($id1);
    }
    $this->view("layout_admin",[
      "page"=>"attendance",
      "getmember"=>$this->MemberModel->GetAllMember(),
      "getmembers"=>$this->MemberModel->GetAllMember(),
      "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
      "gethockys"=>$this->DashBoardModel->GetHocKyss(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert" => $alert,
    ]);
  }
  }

public function ManageEvent(){
 $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(isset($_POST['addEvent'])){
      $seminar = $_POST['seminar'];
      $host = $_POST['host'];
      $date_create = $_POST['date_create'];
      $description = $_POST['description'];
      $semester = $_POST['id_semester'];
      $schoolyear = $_POST['id_schoolyear'];
      $alert = $this->EventModel->AddEvent($seminar,$host,$description,$date_create,$semester,$schoolyear);
    }

    if(isset($_POST['deleteevent'])){
    $id_seminar = $_POST['id_seminar'];
    $alert = $this->EventModel->deleteEvent($id_seminar);
    }
    }

    $this->view("layout_admin",[
    "page" => "manageevent",
    "getallevent" => $this->EventModel->GetAllEvents(),
    "getmember" => $this->MemberModel->GetAllMember(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
    "gethockys"=>$this->DashBoardModel->GetHocKyss(),
    "alert" => $alert,
    ]);
}

public function GetAttentance($id_attendances){
  Session::checkSession();
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  if ($block) self::redirect("");
  $alert = false;
    $this->view("layout_admin",[
      "page" => "attendacedetails",
      "getidattendances" => $this->AttendanceModel->GetAttentanceById($id_attendances),
      "getmember" => $this->MemberModel->GetAllMember(),
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "alert" => $alert,
      ]);
 }

 public function ManageCalendar(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("http://localhost/itzoneHome/Dashboard");
  }
  $this->view("layout_admin",[
    "page"=>"managecalendar",
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "getallcalendar"=>$this->EventModel->GetAllCalendar(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "GetRole"=>$this->DashBoardModel->GetRole(),
    "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
    "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
    "alert" => $alert,
  ]);
  }

public function DeleteSchedule(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("http://localhost/itzoneHome/Dashboard");
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['deleteschedule'])){
        $id1 = $_POST['id_schedule'];
        $alert = $this->EventModel->DeleteSchedule($id1);
    }
  }
  $this->view("layout_admin",[
    "page"=>"managecalendar",
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "getallcalendar"=>$this->EventModel->GetAllCalendar(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "GetRole"=>$this->DashBoardModel->GetRole(),
    "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
     "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
    "alert" => $alert,
  ]);
  }

public function RegisterShift(){
  
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("/../Home/Dashboard");
  }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $id_student =  Session::get('id_student');
      if(isset($_POST['12'])){
        $alert = $this->EventModel->Register12($id_student);
      }
      if(isset($_POST['22'])){
        $alert = $this->EventModel->Register22($id_student);
      }
      if(isset($_POST['32'])){
        $alert = $this->EventModel->Register32($id_student);
      }
      if(isset($_POST['42'])){
        $alert = $this->EventModel->Register42($id_student);
      }
      if(isset($_POST['14'])){
        $alert = $this->EventModel->Register14($id_student);
      }
      if(isset($_POST['24'])){
        $alert = $this->EventModel->Register24($id_student);
      }
      if(isset($_POST['34'])){
        $alert = $this->EventModel->Register34($id_student);
      }
      if(isset($_POST['44'])){
        $alert = $this->EventModel->Register44($id_student);       
      }
      if(isset($_POST['16'])){
        $alert = $this->EventModel->Register16($id_student);
      }
      if(isset($_POST['26'])){
        $alert = $this->EventModel->Register26($id_student);
       
      }
      if(isset($_POST['36'])){
        $alert = $this->EventModel->Register36($id_student);
       
      }
      if(isset($_POST['46'])){
        $alert = $this->EventModel->Register46($id_student);
      }
      
    }

    $this->view("layout_admin",[
      "page"=>"managecalendar",
      "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
      "getallcalendar"=>$this->EventModel->GetAllCalendar(),
      "listsupport"=>$this->DashBoardModel->ListSuaMay(),
      "GetRole"=>$this->DashBoardModel->GetRole(),
      "GetRegister12"=>$this->EventModel->GetRegister12(),
      "GetRegister22"=>$this->EventModel->GetRegister22(),
      "GetRegister32"=>$this->EventModel->GetRegister32(),
      "GetRegister42"=>$this->EventModel->GetRegister42(),
      "GetRegister14"=>$this->EventModel->GetRegister14(),
      "GetRegister24"=>$this->EventModel->GetRegister24(),
      "GetRegister34"=>$this->EventModel->GetRegister34(),
      "GetRegister44"=>$this->EventModel->GetRegister44(),
      "GetRegister16"=>$this->EventModel->GetRegister16(),
      "GetRegister26"=>$this->EventModel->GetRegister26(),
      "GetRegister36"=>$this->EventModel->GetRegister36(),
      "GetRegister46"=>$this->EventModel->GetRegister46(),
       "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
      "alert" => $alert,
    ]);
  }
  
public function DeleteRegisterAll(){
    $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block){
    self::redirect("/../Home/Dashboard");
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['deleteall'])){
      $alert = $this->EventModel->DeleteRegisterAll();

    }
}
$this->view("layout_admin",[
  "page"=>"managecalendar",
  "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
  "GetRole"=>$this->DashBoardModel->GetRole(),
  "getallcalendar"=>$this->EventModel->GetAllCalendar(),
  "listsupport"=>$this->DashBoardModel->ListSuaMay(),
  "GetRegister12"=>$this->EventModel->GetRegister12(),
  "GetRegister22"=>$this->EventModel->GetRegister22(),
  "GetRegister32"=>$this->EventModel->GetRegister32(),
  "GetRegister42"=>$this->EventModel->GetRegister42(),
  "GetRegister14"=>$this->EventModel->GetRegister14(),
  "GetRegister24"=>$this->EventModel->GetRegister24(),
  "GetRegister34"=>$this->EventModel->GetRegister34(),
  "GetRegister44"=>$this->EventModel->GetRegister44(),
  "GetRegister16"=>$this->EventModel->GetRegister16(),
  "GetRegister26"=>$this->EventModel->GetRegister26(),
  "GetRegister36"=>$this->EventModel->GetRegister36(),
  "GetRegister46"=>$this->EventModel->GetRegister46(),
   "GetRegisters12"=>$this->EventModel->GetRegister12(),
    "GetRegisters22"=>$this->EventModel->GetRegister22(),
    "GetRegisters32"=>$this->EventModel->GetRegister32(),
    "GetRegisters42"=>$this->EventModel->GetRegister42(),
    "GetRegisters14"=>$this->EventModel->GetRegister14(),
    "GetRegisters24"=>$this->EventModel->GetRegister24(),
    "GetRegisters34"=>$this->EventModel->GetRegister34(),
    "GetRegisters44"=>$this->EventModel->GetRegister44(),
    "GetRegisters16"=>$this->EventModel->GetRegister16(),
    "GetRegisters26"=>$this->EventModel->GetRegister26(),
    "GetRegisters36"=>$this->EventModel->GetRegister36(),
    "GetRegisters46"=>$this->EventModel->GetRegister46(),
  "alert" => $alert,
]);
}

public function Book(){
   $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }
  
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $id_fix = $_POST['id_fix'];
   $id_ktv = Session::get('id_student');
   $role = $_POST['id_role'];
   $alert = $this->DashBoardModel->Book($id_fix,$id_ktv,$role);
   self::redirect("https://it-zone.club/Home/Dashboard");

 }
 
}

public function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

public function Recive(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  $semester =$_POST['semester'];
  $schoolyear = $_POST['schoolyear'];
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_fix = $_POST['id_fix'];
    $id_ktv = Session::get('id_student');
    $role = $_POST['id_role'];
    $alert = $this->DashBoardModel->Recive($id_fix,$id_ktv,$role);
        $curent = $_POST['curentpage'];

  }
     self::redirect($curent);

 }

 public function Support(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  $semester =$_POST['semester'];
  $schoolyear = $_POST['schoolyear'];
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_fix = $_POST['id_fix'];
    $id_ktv = Session::get('id_student');
    $role = $_POST['id_role'];
        $curent = $_POST['curentpage'];

    $alert = $this->DashBoardModel->Support($id_fix,$id_ktv,$role);
  }
    self::redirect($curent);

 }
 
  public function Done(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  $semester =$_POST['semester'];
  $schoolyear = $_POST['schoolyear'];
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_fix = $_POST['id_fix'];
    $id_ktv = Session::get('id_student');
    $role = $_POST['id_role'];
        $curent = $_POST['curentpage'];

    $alert = $this->DashBoardModel->Done($id_fix,$id_ktv,$role);
  }
    self::redirect($curent);

 }
 
 public function Convert(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  $semester =$_POST['semester'];
  $schoolyear = $_POST['schoolyear'];
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_fix = $_POST['id_fix'];
    $id_ktv = Session::get('id_student');
    $role = $_POST['id_role'];
        $curent = $_POST['curentpage'];

    $alert = $this->DashBoardModel->Convert($id_fix,$id_ktv,$role);
  }
      self::redirect($curent);

 }
 
  public function CancelCalendar(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  $semester =$_POST['semester'];
  $schoolyear = $_POST['schoolyear'];
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_fix = $_POST['id_fix'];
    $id_ktv = Session::get('id_student');
    $role = $_POST['id_role'];
     $curent = $_POST['curentpage'];
    $alert = $this->DashBoardModel->CancelCalendar($id_fix,$id_ktv,$role);
  }
     self::redirect($curent);

 }
 
 public function Cannot(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  $semester =$_POST['semester'];
  $schoolyear = $_POST['schoolyear'];
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_fix = $_POST['id_fix'];
    $id_ktv = Session::get('id_student');
    $role = $_POST['id_role'];
    $curent = $_POST['curentpage'];
    $alert = $this->DashBoardModel->Cannot($id_fix,$id_ktv,$role);
  }
    self::redirect($curent);

 }
 
 public function Cancel(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  $semester =$_POST['semester'];
  $schoolyear = $_POST['schoolyear'];
  $alert = false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_fix = $_POST['id_fix'];
    $id_ktv = Session::get('id_student');
    $role = $_POST['id_role'];
    $curent = $_POST['curentpage'];
    $alert = $this->DashBoardModel->Cancel($id_fix,$id_ktv,$role);
  }
   self::redirect($curent);
 }
 
 
public function ExportMembers(){
  if(isset($_POST['btnExport'])){
    $result = $this->MemberModel->ExportMembers();
  
    $objExcel = new PHPExcel;
    $objExcel->setActiveSheetIndex(0);
    $sheet = $objExcel->getActiveSheet()->setTitle('DanhSachThanhVien');
    $rowCount = 1;
    $sheet->setCellValue('A'.$rowCount,'MSSV');
    $sheet->setCellValue('B'.$rowCount,'Họ và tên');
    $sheet->setCellValue('C'.$rowCount,'Ngày tháng năm sinh');
    $sheet->setCellValue('D'.$rowCount,'Số điện thoại');
    $sheet->setCellValue('E'.$rowCount,'Khoa');
    $sheet->setCellValue('F'.$rowCount,'Team');


    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);

    while ($rows = mysqli_fetch_array($result)) {
      $rowCount++;
      $sheet->setCellValue('A'.$rowCount,$rows['id_student']);
      $sheet->setCellValue('B'.$rowCount,$rows['fullname']);
      $sheet->setCellValue('C'.$rowCount,$rows['birthday']);
      $sheet->setCellValue('D'.$rowCount,$rows['phone']);
      $sheet->setCellValue('E'.$rowCount,$rows['faculty']);
      $sheet->setCellValue('F'.$rowCount,$rows['team']);
    }
    $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
    $filename = 'DanhSachThanhVien.xlsx';
    $objWriter->save($filename);

    header('Content-Disposition: attachment; filename="'.$filename.'"');
    header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml,sheet'); 
    header('Content-Length: '.filesize($filename));
    header('Content-Tranafer-Encoding: binary');
    header('Cache-Control: mus-revalidate'); 
    header('Pragma: no-cache');
    readfile($filename);
    $return;
 }
}

 public function DeleteFix(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['deletefix'])){
        $id1 = $_POST['id_fix'];
        $alert = $this->DashBoardModel->DeleteFix($id1);
    }
  }

  $this->view("layout_admin",[
    "page"=>"managefix",
    "countmember"=>$this->DashBoardModel->CountTotalMember(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
    "countevent"=>$this->DashBoardModel->CountTotalEvent(),
    "supportfix"=>$this->DashBoardModel->SuaMay(),
    "getnamhoc"=>$this->DashBoardModel->GetNamHoc(),
    "gethockys"=>$this->DashBoardModel->GetHocKyss(),
    "getmember"=>$this->MemberModel->GetAllMember(),
    "alert"=> $alert
    ]);
}
public function HoSo(){
  $alert=" ";

  Session::checkSession();
  $block = $this->PermissionModel->Block(Session::get('id_student'));
  $attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
  $personnel = $this->PermissionModel->Personnel(Session::get('id_student'));
  $admin = $this->PermissionModel->Admin(Session::get('id_student'));
  if($block ||   $attendance || $personnel  ){
    self::redirect("/../Home/Dashboard");
  }
  $this->view("layout_admin",[
    "page"=>"hoso",
    "countmember"=>$this->DashBoardModel->CountTotalMember(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "countsupportfinal"=>$this->DashBoardModel->CountTotalSupportFinal(),
    "countevent"=>$this->DashBoardModel->CountTotalEvent(),
    "support_fix"=>$this->DashBoardModel->SuaMay(),
    "getmember"=>$this->MemberModel->GetAllMember(),
    "getallteam"=>$this->TeamModel->GetAllTeam(),
    "getallteams"=>$this->TeamModel->GetAllTeam(),
    "alert"=> $alert
    ]);
    
}

public function UpdateInfor(){
  $alert=" ";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submitupdate'])){
        $inputname = $_POST['inputname'];
        $inputemail = $_POST['inputemail'];
        $inputphone = $_POST['inputphone'];
        $inputidstudent = $_POST['inputidstudent'];
        $inputfaculty = $_POST['inputfaculty'];
        $inputeam = $_POST['inputeam'];
        $birthday = $_POST['inputbirthday'];
        $timestamp = strtotime($birthday);
        $inputbirthday = date("Y-m-d",$timestamp);
        $inputfacebook = $_POST['inputfacebook'];
        $inputgender = $_POST['inputgender'];
        $alert = $this->MemberModel->UpdateProfile($inputname,$inputphone,$inputidstudent,$inputfaculty,$inputeam,$inputbirthday,$inputfacebook,$inputgender,$inputemail);
      }
      
}
$id_student = Session::get('id_student');
$this->view("layout_admin",[
    "page"=>"profile",
    "getinfouser"=>$this->MemberModel->GetInfoUser($id_student),
    "getallblog"=>$this->DashBoardModel->GetAllBlog(),
    "countsupport"=>$this->DashBoardModel->CountTotalSupport(),
    "getallcalendar"=>$this->EventModel->GetAllCalendar(),
    "listsupport"=>$this->DashBoardModel->ListSuaMay(),
    "GetRegister12"=>$this->EventModel->GetRegister12(),
    "GetRegister22"=>$this->EventModel->GetRegister22(),
    "GetRegister32"=>$this->EventModel->GetRegister32(),
    "GetRegister42"=>$this->EventModel->GetRegister42(),
    "GetRegister14"=>$this->EventModel->GetRegister14(),
    "GetRegister24"=>$this->EventModel->GetRegister24(),
    "GetRegister34"=>$this->EventModel->GetRegister34(),
    "GetRegister44"=>$this->EventModel->GetRegister44(),
    "GetRegister16"=>$this->EventModel->GetRegister16(),
    "GetRegister26"=>$this->EventModel->GetRegister26(),
    "GetRegister36"=>$this->EventModel->GetRegister36(),
    "GetRegister46"=>$this->EventModel->GetRegister46(),
    "gethocky"=>$this->DashBoardModel->GetHocKys(),
    "getthang"=>$this->DashBoardModel->GetThang(),
    "alert"=> $alert

    ]);
  
}

  public static function redirect($url)
{
    ob_start();
    if (!empty($url)) header("location: {$url}");
    ob_end_flush();
}


}
?>