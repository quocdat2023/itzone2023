<style>

.attendance-scrollbar {

    position: relative;

    height: 500px;

    overflow: auto;

}



.table-wrapper-scroll-y-attendance {

    display: block;

}

</style>

<div class="content-wrapper">

    <div class="page-heading">

        <h1 class="page-title">Quản lý điểm danh</h1>

        <ol class="breadcrumb">

            <li class="breadcrumb-item">

                <a href="index.html"><i class="la la-home font-20"></i></a>

            </li>

            <li class="breadcrumb-item">Điểm danh</li>

        </ol>

    </div>



    <div class="page-content fade-in-up">

        <form method="POST" action="Home/Attendance">

            <div class="row">

                <div class="col-lg-4">

                    <div class="ibox">

                        <div class="ibox-head">

                            <div class="ibox-title">Điểm danh ca trực</div>

                            <div class="ibox-tools">

                                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>

                                <a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i></a>



                            </div>

                        </div>

                        <div class="ibox-body">

                            <div class="form-row">

                                <div class="form-group col-md-6">

                                    <label for="inputname">Năm học</label>

                                    <select name="schoolyear" class="form-control">

                                        <option selected>Choose...</option>

                                        <?php 

                                         while($row = mysqli_fetch_array($data["getnamhoc"])){?>

                                        <option value="<?php echo $row['schoolyear'] ?>">

                                            <?php echo $row['schoolyear'] ?>

                                        </option>

                                        <?php }

                                ?>

                                    </select>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputphone">Học kỳ</label>

                                    <select name="semester" class="form-control">

                                        <option selected>Choose...</option>

                                        <?php 

                                         while($row = mysqli_fetch_array($data["gethockys"])){?>

                                        <option value="<?php echo $row['semester'] ?>">

                                            <?php echo $row['semester'] ?>

                                        </option>

                                        <?php }

                                ?>

                                    </select>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">

                                    <label for="">Ngày trực</label>

                                    <input type="date" class="form-control" name="date"/>
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputfaculty">Ca trực</label>

                                    <select name="shift" class="form-control">

                                        <option selected>Choose...</option>

                                        <option value="Ca 1">

                                            Ca 1</option>

                                        <option value="Ca 2">

                                            Ca 2</option>

                                        <option value="Ca 3">

                                            Ca 3 </option>

                                        <option value="Ca 4">

                                            Ca 4 </option>

                                    </select>

                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">Điểm danh</button>

                            <button type="button" class="btn btn-danger">Hủy</button>

        </form>

    </div>

    <!-- <div class="ibox-footer text-center">

                        <a href="javascript:;">Xem tất cả</a>

                    </div> -->

</div>

</div>

<div class="col-lg-8">

    <div class="ibox">

        <div class="ibox-head">

            <div class="ibox-title">Danh sách thành viên</div>

            <div class="ibox-tools">

                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>

            </div>

        </div>

        <div class="ibox-body">

            <div class="row">

                <div class="col-sm-3 form-group">

                    <div class="form-group">

                        <div class="input-group-icon">

                            <div class="input-icon"><i class="ti-search"></i></div>

                            <input class="form-control" type="text" id="myInput" onkeyup="myFunctions()"

                                vclass="form-control" placeholder="Search here...">

                        </div>

                    </div>

                </div>

            </div>

            <div class="table-responsive table-wrapper-scroll-y-attendance attendance-scrollbar">

                <table id="mytables" class="table table-striped table-bordered table-hover" width="100%">

                    <thead style="position: sticky;top: 0" class="bg-primary text-white">

                        <tr>

                            <th width="2%">STT</th>

                            <th>MSSV</th>

                            <th>Họ và tên</th>

                            <th class="text-center" width="91px">Có mặt</th>

                            <th class="text-center" width="91px">Vắng</th>

                            <th class="text-center" width="91px">Trễ</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php 

                    $counter = 0;

                    $i=1;

                     while($row = mysqli_fetch_array($data["getmember"])){?>

                        <tr>

                            <td><?php echo $i++; ?></td>

                            <td><?php echo $row ['id_student']; ?><input type="hidden"

                                    name="id_student[<?php echo $counter ?>]"

                                    value="<?php echo $row ['id_student']; ?>"></td>

                            <td><?php echo $row ['fullname']; ?></td>

                            <td class="text-center">
                                      <label class="ui-radio ui-radio-primary">
                                           <input type="radio" name="attendance[<?php echo $counter ?>]"

                                    value="Present">
                            <span class="input-span"></span>
                                      </label>
</td>

                            <td class="text-center">
<label class="ui-radio ui-radio-warning">
<input type="radio" name="attendance[<?php echo $counter ?>]"  value="Absent">
<span class="input-span"></span>
                                      </label>
</td>

                            <td class="text-center">
<label class="ui-radio ui-radio-danger">

<input type="radio" name="attendance[<?php echo $counter ?>]"

                                    value="Late">
<span class="input-span"></span>
                                      </label>
</td>

                        </tr>

                        <?php $counter++;}

                                ?>



                    </tbody>

		 <tfoot class="bg-primary text-white">

                        <tr>

                            <th width="91px">STT</th>

                            <th>MSSV</th>

                            <th>Họ và tên</th>

                            <th class="text-center" width="91px">Có mặt</th>

                            <th class="text-center" width="91px">Vắng</th>

                            <th class="text-center" width="91px">Trễ</th>

                        </tr>

                    </tfoot >



                </table>



            </div>



        </div>

    </div>

</div>

</div>

</form>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa điểm danh</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="form-group">

                    <div class="input-group">

                        <select id="inputmssv" name="inputmssv" class="form-control">



                            <?php 

                                         while($row = mysqli_fetch_array($data["getmembers"])){?>

                            <option value="<?php echo $row['id_student'] ?>">

                                <?php echo $row['id_student']; echo " - ". $row['fullname']; ?>

                            </option>

                            <?php }

                                ?>

                        </select>

                        <div class="input-group-btn">



                            <button id="search" name="submit" class="btn btn-danger" type="submit"

                                name="addsemester">Tìm kiếm</button>



                        </div>



                    </div>

                    <br>

                    <div class="table-responsive table-wrapper-scroll-y-attendance attendance-scrollbar">

                        <table class="table table-striped table-bordered table-hover" width="100%">

                            <thead style="position: sticky;top: 0" class="bg-primary text-white">

                                <tr>

                                    <th width="5%">STT</th>

                                    <!-- <th class="text-center" width="91px">Họ và tên</th> -->

                                    <th width="25%"class="text-center">Ngày</th>

                                    <th width="25%"class="text-center">Ca</th>

                                    <th class="text-center" width="100%">Trạng thái</th>

                                    <th class="text-center" width="100%">Thao tác</th>



                                </tr>

                            </thead>

                            <tbody id="output_search">

                            </tbody>

                        </table>



                    </div>

                </div>

            </div>

            <!-- <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="button" class="btn btn-primary">Save changes</button>

      </div> -->

        </div>

    </div>

</div>

<div class="modal fade" id="xoa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <!-- <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div> -->

            <div class="modal-body">

                <form action="Home/DeleteAttendance" method="POST">



                    <input style="display: none" name="id_attendance" type="text" id="id_attendance">



                    <div class="modal-header flex-column">



                        <div class="icon-box">



                            <img src="https://cdn.dribbble.com/users/251873/screenshots/9388228/error-img.gif" alt=""

                                sizes="" srcset="">



                        </div>



                        <h6 class="modal-title w-100 text-center">Bạn có muốn xóa hay không ?</h6>



                    </div>



                    <!-- <div class="modal-body">



<p>Do you really want to delete these records? This process cannot be undone.</p>



</div> -->



                    <div class="modal-footer justify-content-center">



                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>



                        <button name="submitdeleteattendance" type="submit" class="btn btn-danger">Có</button>



                    </div>



                    </from>

            </div>



        </div>

    </div>

</div>

</div>

<!-- END PAGE CONTENT-->

<script>

$('#datepicker').datepicker({

    uiLibrary: 'bootstrap4'

});

</script>



<script type="text/javascript">

$(document).ready(function() {

    var action = "search";

    $("#search").click(function() {

        var search_mssv = $("#inputmssv").val();

        $.ajax({

            url: "Home/SearchAttendance",

            method: "POST",

            data: {

                action: action,

                search_mssv: search_mssv

            },

            success: function(data) {

                $("#output_search").html(data);

            }

        });

    });

});

</script>

<script>

$(document).ready(function() {



    $('#xoa').on('show.bs.modal', function(event) {



        var button = $(event.relatedTarget) // Button that triggered the modal



        var id_attendance = button.data('id_attendance') // Extract info from data-* attributes



        $('#id_attendance').attr('value', id_attendance);



    })







});

</script>

<script type="text/javascript">
$(function() {

    $('#examplestb').DataTable({
        pageLength: 10,
    });
})
</script>

<script>
function myFunctions() {
  var src, input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase().trim().split(' ');
  table = document.getElementById("myTables");
  for (j = 0; j < filter.length; j++) {
    tr = table.getElementsByTagName("tr");
    src = filter[j].trim();
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      td2 = tr[i].getElementsByTagName("td")[1];
      if (src!='' && td && td2) {
        txtValue = td.textContent || td.innerText;
        txtValue2 = td2.textContent || td2.innerText;
        if (txtValue.toUpperCase().indexOf(src) > -1 || txtValue2.toUpperCase().indexOf(src) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
}
// function myFunctions() {

//     // Declare variables

//     var input, filter, table, tr, td, i, txtValue;

//     input = document.getElementById("myInput");

//     filter = input.value.toUpperCase();

//     table = document.getElementById("mytables");

//     tr = table.getElementsByTagName("tr");



//     // Loop through all table rows, and hide those who don't match the search query

//     for (i = 0; i < tr.length; i++) {

//         td = tr[i].getElementsByTagName("td")[1];

//         if (td) {

//             txtValue = td.textContent || td.innerText;

//             if (txtValue.toUpperCase().indexOf(filter) > -1) {

//                 tr[i].style.display = "";

//             } else {

//                 tr[i].style.display = "none";

//             }

//         }

//     }

// }

</script>