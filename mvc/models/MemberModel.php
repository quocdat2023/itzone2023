<?php

class MemberModel extends DB{

    public function CountTotalMember(){

        $qr = "SELECT COUNT(*) FROM tbl_user";

        $row = mysqli_fetch_array( mysqli_query($this->con, $qr));

        $total = $row[0];

        return $total;

    }



    public function GetAllMember(){

        $qr = "SELECT * FROM `tbl_user` WHERE tbl_user.fullname != 'admin'";

        return mysqli_query($this->con, $qr);

    }

 public function GetInfoUser($id_student){

        $qr = "SELECT * FROM `tbl_user` WHERE tbl_user.id_student = '$id_student'";

        return mysqli_query($this->con, $qr);

    }



public function AddMember($inputname,$inputphone,$inputidstudent,$inputfaculty,$inputeam,$inputbirthday,$inputfacebook){

        $password  = md5($inputidstudent);

        $qr = "INSERT INTO `tbl_user`(`id_student`,`password`,`fullname`, `birthday`, `gender`, `phone`, `faculty`, `major`, `id_team`, `facebook`) VALUES ('$inputidstudent','$password ','$inputname','$inputbirthday',2,'$inputphone','$inputfaculty','hjse','$inputeam','$inputfacebook')";
        if(mysqli_query($this->con, $qr))

            return '<script> toastr.success("Đã thêm thành viên thành công!");</script>';

        return '<script> toastr.warning("Thêm thành viên không thành công!");</script>';



    }




    public function DeleteMember($id){

         $qr = "DELETE FROM  `tbl_user` WHERE id_user = '$id'";
          
            if(mysqli_query($this->con, $qr))

                return '<script> toastr.success("Đã xóa thành viên thành công!");</script>';

            return '<script> toastr.warning("Xóa thành viên không thành công!");</script>';

        

        

    }

    

    public function UpdateProfile($inputname,$inputphone,$inputidstudent,$inputfaculty,$inputeam,$inputbirthday,$inputfacebook,$inputgender,$inputemail){

         $query = "UPDATE `tbl_user` SET `id_student`='$inputidstudent',`fullname`='$inputname',`birthday`='$inputbirthday',`gender`='$inputgender',`phone`='$inputphone',`faculty`='$inputfaculty',`major`='khong',`facebook`='$inputfacebook',`email` = '$inputemail' WHERE id_student = '$inputidstudent'";
        if(mysqli_query($this->con, $query))

            return '<script> toastr.success("Tài khoản của bạn sẽ được cập nhật sau 20p nữa!");</script>';

            return '<script> toastr.success("Chỉnh sửa không thành công!");</script>';



    }
    
    

    public function ExportMembers(){

        $qr = "SELECT tbl_user.id_student, tbl_user.fullname, tbl_user.birthday, tbl_user.phone,tbl_user.faculty,tbl_team.team FROM `tbl_user`,tbl_team WHERE tbl_user.id_team= tbl_team.id_team AND tbl_user.fullname != 'admin'";
        return mysqli_query($this->con, $qr);


   }


    }



    



?>