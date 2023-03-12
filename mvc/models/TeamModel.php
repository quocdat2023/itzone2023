<?php
class TeamModel extends DB{
    public function GetAllTeam(){
        $qr = "SELECT * FROM `tbl_team` WHERE onoff =1";
        return mysqli_query($this->con, $qr);
    }

    public function DeleteTeam($id){
        $qr = "UPDATE `tbl_team` SET `onoff`= 0  WHERE id_team = '$id'";
        if(mysqli_query($this->con, $qr))
        return '<script> toastr.success("Đã xóa thành công!");</script>';
    return '<script> toastr.warning("Xóa không thành công!");</script>';
    }

    public function AddTeam($team,$inputdescribe){
        $qr = "INSERT INTO `tbl_team`(`team`,`description`,`onoff`)  VALUES ('$team','$inputdescribe',1)";
        return mysqli_query($this->con, $qr);
    }
    

}
?>