<?php
class SemesterSchoolModel extends DB{
    public function GetHocKy(){
        $qr = "SELECT * FROM tbl_semester";
        return mysqli_query($this->con, $qr);
    }

    public function GetNamHoc(){
        $qr = "SELECT * FROM tbl_schoolyear";
        return mysqli_query($this->con, $qr);
    }

    public function DeleteSchoolYear($id){
        $qr = "DELETE FROM `tbl_schoolyear` WHERE id_schoolyear = '$id'";
        if(mysqli_query($this->con, $qr))
        return '<script> toastr.success("Đã xóa thành công!");</script>';
    return '<script> toastr.warning("Xóa không thành công!");</script>';
    }

    public function DeleteSemester($id){
        $qr = "DELETE FROM `tbl_semester` WHERE id_semester = '$id'";
        if(mysqli_query($this->con, $qr))
        return '<script> toastr.success("Đã xóa thành công!");</script>';
    return '<script> toastr.warning("Xóa không thành công!");</script>';
    }

    public function AddSchoolYear($schoolyear){
        $qr = "INSERT INTO `tbl_schoolyear` (`schoolyear`) VALUES ('$schoolyear')";
        if(mysqli_query($this->con, $qr))
        return '<script> toastr.success("Đã thêm thành công!");</script>';
    return '<script> toastr.warning("Thêm không thành công!");</script>';
    }

    public function AddSemester($semester){
        $qr = "INSERT INTO `tbl_semester` (`semester`) VALUES ('$semester')";
        if(mysqli_query($this->con, $qr))
        return '<script> toastr.success("Đã thêm thành công!");</script>';
    return '<script> toastr.warning("Thêm không thành công!");</script>';
    }
    

}
?>