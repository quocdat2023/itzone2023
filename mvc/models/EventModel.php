<?php

class EventModel extends DB{

    public function GetAllEvent(){

        $qr = "SELECT tbl_seminar.date_create,tbl_seminar.id_seminar,tbl_seminar.seminar,tbl_seminar.host,tbl_seminar.description,tbl_user.fullname, tbl_semester.semester, tbl_schoolyear.schoolyear FROM `tbl_seminar`,`tbl_user`,`tbl_semester`,`tbl_schoolyear` WHERE tbl_seminar.host = tbl_user.id_student AND tbl_seminar.semester = tbl_semester.semester AND tbl_seminar.schoolyear = tbl_schoolyear.schoolyear";

        return mysqli_query($this->con, $qr);

    } 



  public function GetAllEvents(){
        $qr = "SELECT *, tbl_user.fullname, tbl_seminar.id_seminar FROM tbl_seminar, tbl_user WHERE tbl_seminar.host = tbl_user.id_student";
        return mysqli_query($this->con, $qr);
    }


 public function AddEvent($seminar,$host,$description,$date_create,$semester,$schoolyear) {
        $qr = "INSERT INTO `tbl_seminar`(`seminar`, `host`, `description`, `date_create`, `semester`, `schoolyear`) VALUES ('$seminar','$host','$description','$date_create','$semester','$schoolyear')";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }

    public function DeleteRegisterAll() {

         $qr = "DELETE FROM  `tbl_schedule`";
            if(mysqli_query($this->con, $qr))
                return '<script> toastr.success("Đã xóa thành công!");</script>';
            return '<script> toastr.warning("Xóa không thành công!");</script>';

        } 

    
    public function GetAllCalendar(){
        $qr = "SELECT * FROM tbl_schedule, tbl_user WHERE tbl_schedule.id_student = tbl_user.id_student";
        return mysqli_query($this->con, $qr);
    }

    public function deleteEvent($id_seminar) {

        $query = "SELECT * FROM `tbl_seminar`  WHERE id_seminar = '$id_seminar'";

        if(mysqli_query($this->con, $query)){

                $qr = "DELETE FROM  `tbl_seminar` WHERE id_seminar = '$id_seminar'";

            if(mysqli_query($this->con, $qr))

                return '<script> toastr.success("Đã xóa thành công!");</script>';

            return '<script> toastr.warning("Xóa không thành công!");</script>';

        } 

    }

    public function DeleteSchedule($id_schedule) {

        $query = "SELECT * FROM `tbl_schedule`  WHERE id_schedule = '$id_schedule'";

        if(mysqli_query($this->con, $query)){

                $qr = "DELETE FROM  `tbl_schedule` WHERE id_schedule = '$id_schedule'";

            if(mysqli_query($this->con, $qr))

                return '<script> toastr.success("Đã xóa thành công!");</script>';

            return '<script> toastr.warning("Xóa không thành công!");</script>';

        } 

    }


    public function Register12($id_student) {
     $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',1,0,0,0,0,0,0,0,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register22($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,1,0,0,0,0,0,0,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register32($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,1,0,0,0,0,0,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register42($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,1,0,0,0,0,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register14($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,1,0,0,0,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register24($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,0,1,0,0,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register34($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,0,0,1,0,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register44($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,0,0,0,1,0,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register16($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,0,0,0,0,1,0,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register26($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,0,0,0,0,0,1,0,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register36($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,0,0,0,0,0,0,1,0)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }
    
    public function Register46($id_student) {
        $qr = "INSERT INTO `tbl_schedule`(`id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) 
        VALUE ('$id_student',0,0,0,0,0,0,0,0,0,0,0,1)";
        if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Bạn đã đăng ký thành công!");</script>';

        return '<script> toastr.warning("Đăng ký không thành công!");</script>';

    }

    
    public function GetRegister12() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift12=1";
    return mysqli_query($this->con, $qr);
    }
    public function GetRegister22() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift22=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister32() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift32=1";
    return mysqli_query($this->con, $qr);
    
    } public function GetRegister42() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift42=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister14() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift14=1";
    return mysqli_query($this->con, $qr);
    
    } public function GetRegister24() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift24=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister34() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift34=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister44() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift44=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister16() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift16=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister26() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift26=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister36() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift36=1";
    return mysqli_query($this->con, $qr);

    } public function GetRegister46() {
        $qr="SELECT DISTINCT  tbl_permission.attendance,tbl_user.id_student, tbl_user.fullname, tbl_schedule.id_schedule FROM `tbl_schedule`,`tbl_user`,`tbl_permission` WHERE tbl_schedule.id_student =tbl_user.id_student AND tbl_user.id_student = tbl_permission.id_student AND tbl_schedule.shift46=1";
    return mysqli_query($this->con, $qr);
    }

    public function DeletePermision($id_student) {

             $qr = "DELETE FROM `tbl_permission` WHERE id_student = '$id_student' ";
               if(mysqli_query($this->con, $qr))
                   return '<script> toastr.success("Đã xóa thành công!</script>';
               return '<script> toastr.warning("Xóa không thành công;</script>';
   
           } 
    
}

?>