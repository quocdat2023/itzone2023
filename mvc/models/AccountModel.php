<?php

class AccountModel extends DB{



    
       public function GetAllAccount(){
        $qr = "SELECT tbl_user.id_student as iduser ,tbl_user.id_student, tbl_user.fullname, tbl_permission.admin, tbl_permission.block,tbl_permission.attendance,tbl_permission.personnel FROM `tbl_permission`,`tbl_user` WHERE tbl_permission.id_student = tbl_user.id_student GROUP BY tbl_user.id_student, tbl_user.fullname";
       return mysqli_query($this->con, $qr);
    }
    

    public function UpdateAccountAdmin($id_student, $role){

        if($role == 0){

         $query = "UPDATE `tbl_permission` SET `admin`= 1 ,`block`= 0 ,`attendance`= 0,`personnel`= 0 WHERE `id_student`= '$id_student'";
        if(mysqli_query($this->con, $query))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }else if($role == 1){

            $querys = "UPDATE `tbl_permission` SET `admin`= 0 ,`block`= 0 ,`attendance`= 0,`personnel`= 0 WHERE `id_student`= '$id_student'";

        if(mysqli_query($this->con, $querys))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }

        

   }

      public function UpdateAccountAttendance($id_student, $role){

        if($role == 0){

            $query = "UPDATE `tbl_permission` SET `admin`= 0 ,`block`= 0 ,`attendance`= 1,`personnel`= 0 WHERE `id_student`= '$id_student'";

        if(mysqli_query($this->con, $query))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }else if($role == 1){

            $querys = "UPDATE `tbl_permission` SET `admin`= 0 ,`block`= 0 ,`attendance`= 0,`personnel`= 0 WHERE `id_student`= '$id_student'";

        if(mysqli_query($this->con, $querys))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }

            }

      

      public function UpdateAccountPersonnel($id_student, $role){

        if($role == 0){

            $query = "UPDATE `tbl_permission` SET `admin`= 0 ,`block`= 0 ,`attendance`= 0,`personnel`= 1 WHERE `id_student`= '$id_student'";

        if(mysqli_query($this->con, $query))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }else if($role == 1){

            $querys = "UPDATE `tbl_permission` SET `admin`= 0 ,`block`= 0 ,`attendance`= 0,`personnel`= 0 WHERE `id_student`= '$id_student'";

        if(mysqli_query($this->con, $querys))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }

              }

      

      public function UpdateAccountBlock($id_student, $role){

        if($role == 0){

            $query = "UPDATE `tbl_permission` SET `admin`= 0 ,`block`= 1 ,`attendance`= 0,`personnel`= 0 WHERE `id_student`= '$id_student'";

        if(mysqli_query($this->con, $query))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }else if($role == 1){

            $querys = "UPDATE `tbl_permission` SET `admin`= 0 ,`block`= 0 ,`attendance`= 0,`personnel`= 0 WHERE `id_student`= '$id_student'";

        if(mysqli_query($this->con, $querys))

            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }


      }
      public function ResetAccount($id_student){
        $password_hash  = md5($id_student);
        $query = "UPDATE `tbl_user` SET `password`= '$password_hash' WHERE tbl_user.id_student = '$id_student'";
       if(mysqli_query($this->con, $query))


            return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';

        }

 public function  UpdatePass($newpassword,$id_student){
        $password_hash  = md5($newpassword);
        $query = "UPDATE `tbl_user` SET `password`= '$password_hash' WHERE tbl_user.id_student = '$id_student'";
       if(mysqli_query($this->con, $query))
           return '<script> toastr.success("Đã chỉnh sửa thành công!");</script>';

        return '<script> toastr.warning("Chỉnh sửa không thành công!");</script>';
      }

}

?>