<?php
class AttendanceModel extends DB{

  public function CheckAttendance($id_user, $schoolyear, $semester, $date, $shift, $attendance, $id_student)
  {
    $querys = "SELECT * FROM `tbl_attendance` WHERE id_user = '$id_user' AND schoolyear='$schoolyear' AND semester='$semester' AND `date`='$date' AND shift='$shift'";
    $result = mysqli_query($this->con, $querys);

    if ($result && $result->fetch_row() > 0) return '<script> toastr.success("Đã điểm danh thành công!");</script>';

    $query  = "INSERT INTO `tbl_attendance` (`id_user`,`id_student`,`schoolyear`, `semester`, `date`, `shift`, `attendance`) VALUES ('$id_user', '$id_student','$schoolyear', '$semester', '$date', '$shift', '$attendance')";
    $result = mysqli_query($this->con, $query);

    if ($result) return '<script> toastr.success("Đã điểm danh thành công!");</script>';
    return '<script> toastr.warning("Điểm danh không thành công!");</script>';
  }
  
  public function DeleteAll()
  {
    $qr = "DELETE FROM `tbl_attendance`";
    if(mysqli_query($this->con, $qr))
       return '<script> toastr.success("Đã xóa thành công!");</script>';
        return '<script> toastr.warning("Xóa không thành công!");</script>';

    }

    public function DeleteAttendance($id)
    {
      $qr = "DELETE FROM `tbl_attendance` WHERE id_attendance ='$id'";
      if(mysqli_query($this->con, $qr))
         return '<script> toastr.success("Đã xóa thành công!");</script>';
          return '<script> toastr.warning("Xóa không thành công!");</script>';
  
      }

      public function UpdatePresent($inputidstudent,$date,$shift){

        $query = "UPDATE `tbl_attendance` SET `attendance`='Present' WHERE id_student = '$inputidstudent' AND date = '$date' AND shift = '$shift'";

        if(mysqli_query($this->con, $query))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';



    }

    public function UpdateLate($inputidstudent,$date,$shift){

      $query = "UPDATE `tbl_attendance` SET `attendance`='Late'  WHERE id_student = '$inputidstudent' AND date = '$date' AND shift = '$shift'";

      if(mysqli_query($this->con, $query))

          return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

      return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';



  }

  public function UpdateAbsent($inputidstudent,$date,$shift){

    $query = "UPDATE `tbl_attendance` SET `attendance`='Absent'  WHERE id_student = '$inputidstudent' AND date = '$date' AND shift = '$shift'";

    if(mysqli_query($this->con, $query))

        return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

    return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';



}

}
?>