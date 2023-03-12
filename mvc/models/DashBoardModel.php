<?php

class DashBoardModel extends DB{

    public function CountTotalMember(){

        $qr = "SELECT COUNT(*) FROM tbl_user";

        $row = mysqli_fetch_array( mysqli_query($this->con, $qr));

        $total = $row[0];

        return $total;

    }
    
      public function CloseForm(){
       $querys = "UPDATE `tbl_role` SET `role`= 0 WHERE id_role =2";
 
         if(mysqli_query($this->con, $querys))
 
             return '<script> toastr.success("Khóa form thành công!");</script>';
 
         return '<script> toastr.warning("Khóa form  không thành công!");</script>';
    }
    
      public function OpenForm(){

        $querys = "UPDATE `tbl_role` SET `role`= 1 WHERE id_role =2";
 
         if(mysqli_query($this->con, $querys))
 
             return '<script> toastr.success("Mở form thành công!");</script>';
 
         return '<script> toastr.warning("Mở form không thành công!");</script>';

    }


     

    public function CountTotalSupport(){

        $qr = "SELECT COUNT(*) FROM tbl_fix WHERE status = 0";

        $row = mysqli_fetch_array( mysqli_query($this->con, $qr));

        $total = $row[0];

        return $total;

    }

    public function CountTotalSupportFinal(){

        $qr = "SELECT COUNT(*) FROM tbl_fix WHERE status = 5";

        $row = mysqli_fetch_array( mysqli_query($this->con, $qr));

        $total = $row[0];

        return $total;

    }

    public function CountTotalSupportFinalToday(){

        $qr = "SELECT COUNT(*) FROM tbl_fix WHERE status = 5";

        $row = mysqli_fetch_array( mysqli_query($this->con, $qr));

        $total = $row[0];

        return $total;

    }

    public function CountTotalEvent(){

        $qr = "SELECT COUNT(*) FROM tbl_seminar";

        $row = mysqli_fetch_array( mysqli_query($this->con, $qr));

        $total = $row[0];

        return $total;

    }
    
    public function GetRole(){
     $qr  = "SELECT * FROM tbl_role WHERE id_role =2";
     return mysqli_query($this->con, $qr);
  
    }

    



    public function SuaMay(){

        $qr = "SELECT tbl_fix.timebook,tbl_fix.id_fix,tbl_fix.password,tbl_user.id_student, tbl_fix.description, tbl_user.fullname as fullnamektv,tbl_fix.id_student,tbl_fix.fullname,tbl_fix.phone,tbl_fix.date,tbl_fix.status FROM `tbl_fix`, tbl_user WHERE tbl_fix.id_ktv = tbl_user.id_student ORDER BY tbl_fix.status ASC";

        return mysqli_query($this->con, $qr);

    }



    public function ListSuaMay(){

        $sql = "SELECT tbl_fix.timebook,tbl_fix.description,tbl_fix.shift, tbl_user.fullname as reciver ,tbl_fix.id_student,tbl_fix.fullname,tbl_fix.phone,tbl_fix.date,tbl_fix.status FROM `tbl_fix`,`tbl_user` WHERE tbl_fix.id_ktv = tbl_user.id_student and tbl_fix.status = 0";
        return mysqli_query($this->con, $sql);

    }



    public function GetHocKy(){

        $qr = "SELECT DISTINCT tbl_semester.semester, tbl_schoolyear.schoolyear FROM `tbl_fix`, tbl_semester, tbl_schoolyear WHERE tbl_fix.semester = tbl_semester.semester AND tbl_fix.schoolyear = tbl_schoolyear.schoolyear        ";

        return mysqli_query($this->con, $qr);

    }



    public function GetHocKys(){

        $qr = "SELECT DISTINCT * FROM `tbl_semester`,tbl_schoolyear";

        return mysqli_query($this->con, $qr);

    }



    public function GetHocKyss(){

        $qr = "SELECT * FROM `tbl_semester`";

        return mysqli_query($this->con, $qr);

    }





    public function GetNamHoc(){

        $qr = "SELECT * FROM tbl_schoolyear";

        return mysqli_query($this->con, $qr);

    }
    
     public function GetMaxim(){

        $qr = "SELECT tbl_user.fullname, tbl_maxim.content_maxim,tbl_maxim.id_student, tbl_maxim.role FROM `tbl_maxim`,tbl_user WHERE tbl_maxim.id_student = tbl_user.id_student";

        return mysqli_query($this->con, $qr);

    }



    public function GetThang(){

        $qr = "SELECT DISTINCT month(tbl_attendance.date) AS month, year(tbl_attendance.date) AS year, tbl_schoolyear.schoolyear FROM tbl_attendance,tbl_schoolyear WHERE tbl_attendance.schoolyear = tbl_schoolyear.schoolyear ORDER BY year DESC, month ASC        ";

        return mysqli_query($this->con, $qr);

    }

    

    public function ViewStaticFix($semester,$schoolyear){
        $qr = "SELECT  tbl_fix.schoolyear,tbl_fix.semester,tbl_fix.id_fix,tbl_user.fullname as ktv ,tbl_user.id_student as idktv,tbl_fix.fullname,tbl_fix.id_student,tbl_fix.schoolyear,tbl_fix.semester,tbl_fix.phone,tbl_fix.date,tbl_fix.shift,tbl_fix.password,tbl_fix.status,tbl_fix.description FROM tbl_fix,tbl_schoolyear,tbl_semester,tbl_user WHERE tbl_fix.schoolyear = '$schoolyear' and tbl_fix.semester = '$semester' and tbl_fix.schoolyear = tbl_schoolyear.schoolyear and tbl_fix.semester = tbl_semester.semester and tbl_fix.id_ktv = tbl_user.id_student ORDER BY `tbl_fix`.`status` ASC";
        return mysqli_query($this->con, $qr);

    }

    public function ViewStaticPerson($semester,$schoolyear,$id_ktv){
           $qr = "SELECT  tbl_fix.schoolyear, tbl_fix.semester,tbl_fix.id_fix,tbl_user.fullname as fullnamektv ,tbl_user.id_student as idktv,tbl_fix.fullname,tbl_fix.id_student, tbl_fix.phone,tbl_fix.date,tbl_fix.timebook,tbl_fix.shift,tbl_fix.password,tbl_fix.status,tbl_fix.description FROM tbl_fix, tbl_user WHERE tbl_fix.schoolyear = '$schoolyear' and tbl_fix.semester = '$semester' and
        tbl_fix.id_ktv ='$id_ktv'  and '$id_ktv' = tbl_user.id_student ORDER BY `tbl_fix`.`status` ASC";
        return mysqli_query($this->con, $qr);

    }



     public function Search($search_mssv)

    {

        $qr = "SELECT * FROM `tbl_fix` WHERE tbl_fix.id_student='$search_mssv'";

        return mysqli_query($this->con, $qr);

    }

    public function SearchAttendance($search_mssv) {

        $qr = "SELECT tbl_attendance.id_attendance,tbl_attendance.id_student,tbl_attendance.shift,tbl_attendance.date,tbl_attendance.shift,tbl_attendance.attendance,(SELECT tbl_user.fullname FROM tbl_user WHERE tbl_attendance.id_student = tbl_user.id_student) fullname FROM `tbl_attendance` WHERE tbl_attendance.id_student = '$search_mssv'";

        return mysqli_query($this->con, $qr);

    }

    public function ViewBlog($idblog) {

        $qr = "SELECT * FROM `tbl_seminar`,`tbl_user` WHERE tbl_seminar.id_seminar  = '$idblog' AND tbl_seminar.host = tbl_user.id_student";

        return mysqli_query($this->con, $qr);

    }

    public function GetAllBlog() {

        $qr = "SELECT *,tbl_user.fullname FROM `tbl_seminar`,`tbl_user` WHERE tbl_seminar.host = tbl_user.id_student ORDER BY id_seminar DESC LIMIT 5";

        return mysqli_query($this->con, $qr);

    }

    public function GetAllBlogs() {

        $qr = "SELECT *,tbl_user.fullname FROM `tbl_seminar`,`tbl_user` WHERE tbl_seminar.host = tbl_user.id_student ORDER BY id_seminar DESC LIMIT 3";

        return mysqli_query($this->con, $qr);

    }

    public function GetTopFive() {

        $qr = "SELECT tbl_user.fullname as fullsname,id_ktv,COUNT(*) as count FROM tbl_fix,tbl_user WHERE tbl_fix.id_ktv = tbl_user.id_student AND tbl_fix.status = 5 GROUP BY id_ktv,tbl_user.fullname ORDER BY count DESC LIMIT 3 ";

        return mysqli_query($this->con, $qr);

    }
    

  public function AddFix($inputname,$inputphone,$inputidstudent,$inputpassword,$inputdescribe,$inputdate,$inputsemester,$inputschoolyear,$inputdates,$inputshift){
      $qr = "INSERT INTO `tbl_fix`(`id_user`,`id_student`, `fullname`, `phone`, `date`,`date_booking`,`description`,`password`,`id_semester`, `id_schoolyear`,`shift`) 
        VALUES (70,'$inputidstudent','$inputname','$inputphone','$inputdate','$inputdates','$inputdescribe','$inputpassword','$inputsemester','$inputschoolyear','$inputshift')";
   if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Ðã đặt lịch thành công!");</script>';

        return '<script> toastr.warning("Ðặt lịch không thành công!");</script>';

    }


  public function AddFixs($inputname,$inputphone,$inputidstudent,$inputpassword,$inputdescribe,$inputdate,$inputsemester,$inputschoolyear,$inputdates,$inputshift,$inputuser){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = date('H:i:s');
        if($inputuser != "admin"){
            $status = 1;
        }else{
            $status = 0;
        }
        $qr = "INSERT INTO `tbl_fix`(`id_student`, `id_ktv`, `semester`, `schoolyear`, `fullname`, `phone`, `date`, `description`, `timebook`, `status`, `password`, `shift`)
        VALUES ('$inputidstudent','$inputuser','$inputsemester','$inputschoolyear','$inputname','$inputphone','$inputdate','$inputdescribe','$time','$status','$inputpassword','$inputshift')";
        if(mysqli_query($this->con, $qr))

            return '<script> toastr.success("Ðã đặt lịch thành công!");</script>';

        return '<script> toastr.warning("Ðặt lịch không thành công!");</script>';



    }

    public function ViewStaticAttendanceMonth($month,$year){

        $qr = "SELECT '$month' as month,'$year' as year  ,tbl_user.id_student, tbl_user.fullname, tbl_team.team,  

        (SELECT COUNT(tbl_attendance.id_student) FROM tbl_attendance WHERE attendance = 'Present' AND month(tbl_attendance.date)='$month' AND year(tbl_attendance.date)='$year' AND tbl_attendance.id_student = tbl_user.id_student) AS Present,

        (SELECT COUNT(tbl_attendance.id_student) FROM tbl_attendance WHERE attendance = 'Late' AND month(tbl_attendance.date)='$month' AND year(tbl_attendance.date)='$year' AND tbl_attendance.id_student = tbl_user.id_student) AS Late, 

        (SELECT COUNT(tbl_attendance.id_student) FROM tbl_attendance WHERE attendance = 'Absent' AND month(tbl_attendance.date)='$month' AND year(tbl_attendance.date)='$year' AND tbl_attendance.id_student = tbl_user.id_student) AS Absent

        FROM tbl_attendance, tbl_user, tbl_team

        WHERE tbl_user.id_student=tbl_attendance.id_student AND month(tbl_attendance.date)='$month' AND year(tbl_attendance.date)='$year' AND tbl_team.id_team=tbl_user.id_team

        GROUP BY tbl_attendance.id_student";

        return mysqli_query($this->con, $qr); 

    }

    
    public function ViewStaticAttendanceMonthPerson($month,$year,$id_ktv){

        $qr = "SELECT '$month' as month,'$year' as year ,tbl_user.id_student,tbl_attendance.date,tbl_attendance.shift,
        tbl_attendance.attendance, tbl_user.fullname, tbl_team.team FROM tbl_attendance, tbl_user, tbl_team WHERE 
        tbl_user.id_student=tbl_attendance.id_student AND tbl_attendance.id_student ='$id_ktv' AND month(tbl_attendance.date)='$month' AND year(tbl_attendance.date)='$year' AND tbl_team.id_team=tbl_user.id_team;
        ";
        return mysqli_query($this->con, $qr); 

    }




    public function ViewStaticAttendanceSemester($schoolyear,$semester){

        $qr = "SELECT tbl_attendance.id_student,tbl_attendance.id_attendance, tbl_user.id_student, tbl_user.fullname, tbl_team.team, (SELECT COUNT(tbl_attendance.id_student) FROM

        tbl_attendance WHERE attendance = 'Present' AND tbl_attendance.semester = '$semester' AND tbl_attendance.schoolyear =  '$schoolyear' 

        AND tbl_attendance.id_student = tbl_user.id_student) AS Present, (SELECT COUNT(tbl_attendance.id_student) FROM tbl_attendance

         WHERE attendance = 'Late' AND tbl_attendance.semester =  '$semester' AND tbl_attendance.schoolyear = '$schoolyear'  AND 

         tbl_attendance.id_student = tbl_user.id_student) AS Late, (SELECT COUNT(tbl_attendance.id_student) FROM tbl_attendance 

         WHERE attendance = 'Absent' AND tbl_attendance.semester =  '$semester' AND tbl_attendance.schoolyear = '$schoolyear'  AND

          tbl_attendance.id_student = tbl_user.id_student) AS Absent FROM tbl_attendance, tbl_user, tbl_team WHERE 

          tbl_user.id_student=tbl_attendance.id_student AND tbl_attendance.semester =  '$semester' AND tbl_attendance.schoolyear = '$schoolyear'  

          AND tbl_team.id_team=tbl_user.id_team GROUP BY tbl_attendance.id_student";

        return mysqli_query($this->con, $qr); 

    }

    public function ViewStaticAttendanceSemesterPerson($schoolyear,$semester,$id_ktv){

        $qr = "SELECT tbl_attendance.id_student,tbl_attendance.id_attendance, tbl_user.id_student, tbl_user.fullname, tbl_team.team, (SELECT COUNT(tbl_attendance.id_student) FROM

        tbl_attendance WHERE attendance = 'Present' AND tbl_attendance.semester = '$semester' AND tbl_attendance.schoolyear =  '$schoolyear' 

        AND tbl_attendance.id_student = tbl_user.id_student) AS Present, (SELECT COUNT(tbl_attendance.id_student) FROM tbl_attendance

         WHERE attendance = 'Late' AND tbl_attendance.semester =  '$semester' AND tbl_attendance.schoolyear = '$schoolyear'  AND 

         tbl_attendance.id_student = tbl_user.id_student) AS Late, (SELECT COUNT(tbl_attendance.id_student) FROM tbl_attendance 

         WHERE attendance = 'Absent' AND tbl_attendance.semester =  '$semester' AND tbl_attendance.schoolyear = '$schoolyear'  AND

          tbl_attendance.id_student = tbl_user.id_student) AS Absent FROM tbl_attendance, tbl_user, tbl_team WHERE 

          tbl_user.id_student=tbl_attendance.id_student AND tbl_attendance.id_student =  '$id_ktv'  AND tbl_attendance.semester =  '$semester' AND tbl_attendance.schoolyear = '$schoolyear'  

          AND tbl_team.id_team=tbl_user.id_team GROUP BY tbl_attendance.id_student;";

        return mysqli_query($this->con, $qr); 

    }

    public function Book($id_fix,$id_ktv,$role){

        if($role == 0){

             $query = "UPDATE `tbl_fix` SET `id_ktv`='$id_ktv',`status`= 1 WHERE `id_fix`= $id_fix";
            if(mysqli_query($this->con, $query))

            return '<script> toastr.success("Ðã nhận máy thành công!");</script>';

        return '<script> toastr.warning("Nhận máy không thành công!");</script>';

        }else if($role == 1){

            $querys = "UPDATE `tbl_fix` SET `id_ktv`='admin',`status`= 0 WHERE `id_fix`= $id_fix";

        if(mysqli_query($this->con, $querys))

            return '<script> toastr.success("Hủy thành công!");</script>';

        return '<script> toastr.warning("Hủy không thành công!");</script>';

        }


      }
      
        public function Done($id_fix,$id_ktv,$role){
       $querys = "UPDATE `tbl_fix` SET `id_ktv`='$id_ktv',`status`= 4 WHERE `id_fix`= $id_fix";
 
         if(mysqli_query($this->con, $querys))
 
                  return '<script> toastr.success("Thành công!");</script>';

        return '<script> toastr.warning("Không thành công!");</script>';
       }


  public function CancelCalendar($id_fix,$id_ktv,$role){
       $querys = "UPDATE `tbl_fix` SET `id_ktv`='$id_ktv',`status`= 7 WHERE `id_fix`= $id_fix";
 
         if(mysqli_query($this->con, $querys))
 
                  return '<script> toastr.success("Thành công!");</script>';

        return '<script> toastr.warning("Không thành công!");</script>';
       }

       
      public function Cancel($id_fix,$id_ktv,$role){
            $querys = "UPDATE `tbl_fix` SET `id_ktv`='admin',`status`= 0 WHERE `id_fix`= $id_fix";
 
         if(mysqli_query($this->con, $querys))
 
                  return '<script> toastr.success("Thành công!");</script>';

        return '<script> toastr.warning("Không thành công!");</script>';
       }
       
       public function Cannot($id_fix,$id_ktv,$role){
       $querys = "UPDATE `tbl_fix` SET `id_ktv`='$id_ktv',`status`= 6 WHERE `id_fix`= $id_fix";
 
         if(mysqli_query($this->con, $querys))
 
                  return '<script> toastr.success("Thành công!");</script>';

        return '<script> toastr.warning("Không thành công!");</script>';
       }

  public function Convert($id_fix,$id_ktv,$role){
       $querys = "UPDATE `tbl_fix` SET `id_ktv`='$id_ktv',`status`= 5 WHERE `id_fix`= $id_fix";
 
         if(mysqli_query($this->con, $querys))
 
                  return '<script> toastr.success("Thành công!");</script>';

        return '<script> toastr.warning("Không thành công!");</script>';
       }

       
  public function Support($id_fix,$id_ktv,$role){
       $querys = "UPDATE `tbl_fix` SET `id_ktv`='$id_ktv',`status`= 3 WHERE `id_fix`= $id_fix";
 
         if(mysqli_query($this->con, $querys))
 
                  return '<script> toastr.success("Thành công!");</script>';

        return '<script> toastr.warning("Không thành công!");</script>';
       }

public function Recive($id_fix,$id_ktv,$role){
          
 $querys = "UPDATE `tbl_fix` SET `id_ktv`=$id_ktv,`status`= 1 WHERE `id_fix`= $id_fix";
 
         if(mysqli_query($this->con, $querys))
 
                return '<script> toastr.success("Thành công!");</script>';

        return '<script> toastr.warning("Không thành công!");</script>';
       }


    public function  DeleteFix($id1){
          $qr = "DELETE FROM `tbl_fix` WHERE `id_fix` ='$id1'";
            if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Ðã xóa thành công!");</script>';
                return '<script> toastr.warning("Xóa không thành công!");</script>';
    
            }

}

?>