<div class="content-wrapper">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Thay đổi mật khẩu</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> -->
            </div>
            <form action="Home/ChangePassWord" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <div class="input-group-icon right">
                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                            <input name="newpasswords" type="password" id="newpasswords" placeholder="Mật khẩu mới"
                                class="form-control" placeholder="with icon">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-icon right">
                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                            <input name="newpassword" type="password" id="newpassword"
                                placeholder="Nhập lại mật khẩu mới" class="form-control" placeholder="with icon">
                        </div>
                    </div>

                    <input style="display: none;" value="<?php echo Session::get('id_student')?>" name="id_student"
                        type="text" />
                    <!-- <br>
                    <div class="text-center">
                    </div> -->
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white btn-primary" data-dismiss="modal">Đổi
                            mật
                            khẩu</button>
                    </div>
            </form>
            <!-- style="background-color: #F93154;" -->
        </div>
    </div>
</div>