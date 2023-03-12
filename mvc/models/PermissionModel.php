<?php
class PermissionModel extends DB
{
    public function Admin($id_student)
    {
        $query = "SELECT * FROM `tbl_permission` WHERE id_student = '$id_student'";
        $result = mysqli_query($this->con, $query);
        $value = $result->fetch_assoc();

        if($value['admin'] == 1){
            return true;
        }
        return false;
    }

    public function Attendance($id_student)
    {
        $query = "SELECT * FROM `tbl_permission` WHERE id_student = '$id_student'";
        $result = mysqli_query($this->con, $query);
        $value = $result->fetch_assoc();

        if($value['attendance'] == 1){
            return true;
        }
        return false;
    }

    public function Personnel($id_student)
    {
        $query = "SELECT * FROM `tbl_permission` WHERE id_student = '$id_student'";
        $result = mysqli_query($this->con, $query);
        $value = $result->fetch_assoc();

        if($value['personnel'] == 1){
            return true;
        }
        return false;
    }

    public function Block($id_student)
    {
        $query = "SELECT * FROM `tbl_permission` WHERE id_student = '$id_student'";
        $result = mysqli_query($this->con, $query);
        $value = $result->fetch_assoc();

        if($value['block'] == 1){
            return true;
        }
        return false;
    }

    public function AddPermission($inputidstudent) {
      $qr = "INSERT INTO `tbl_permission`(`id_student`, `admin`, `attendance`, `block`, `personnel`) VALUES ('$inputidstudent',0,0,0,1)";
       if(mysqli_query($this->con, $qr))
            return '<script> toastr.success("Đã thêm dữ liệu thành công!");</script>';

        return '<script> toastr.warning("Thêm dữ liệu không thành công!");</script>';

    }

}
