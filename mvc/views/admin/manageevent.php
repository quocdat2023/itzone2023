<div class="content-wrapper">

    <div class="page-heading">

        <h1 class="page-title">Quản lý sự kiệnz & bài viết</h1>

    </div>

    <div class="page-content fade-in-up">
<div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Danh sách sự kiện & bài viết</div>
                            </div>
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-7-1" data-toggle="tab" aria-expanded="true"><i class="fa fa-line-chart"></i> Danh sách sự kiện</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-2" data-toggle="tab" aria-expanded="false"><i class="fa fa-heartbeat"></i> Thêm mới</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-7-1" aria-expanded="true">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"

                            width="100%">

                            <thead style="position: sticky;top: 0" class="bg-primary text-white">

                                <tr>

                                    <th>STT</th>
                                    <th>Sự kiện & bài viết</th>
                                    <th>Tác giả</th>
                                    <th width="91px">Date</th>
                                    <th width="91px">Xóa</th>



                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["getallevent"])){?>

                                <tr>

                                    <td>

                                        <?php echo $i++; ?>

                                    </td>

                                    <td><a target=�_blank� href="https://it-zone.club/Home/ViewBlog/<?php echo $row["id_seminar"]; ?>" ><?php echo $row['seminar'] ?>
                                        <!-- <?php echo '<div class="task-data"><small class="float-right text-muted">'?><?php echo $row['date_create'];?><?php echo '</div'?> -->


					</a>
                                    </td>

                                        <td>

                                        <?php echo $row['fullname']  ?>

                                    </td>
                                    <td>
                                        <?php  $timestamp = strtotime($row['date_create']); echo date("d-m-Y", $timestamp);?>
                                    </td>
                                    <td class="text-center">

                                        <a target="_self" data-toggle="modal" data-target="#exampleModalss"

                                            data-id_seminar="<?php  echo $row['id_seminar'] ?>" class="btn"

                                            class="btn"><i class="fa fa-trash text-danger"></i></button>

                                    </td>

                                </tr>

                                <?php }

                                ?>



                            </tbody>

                        </table>

                                    </div>
                                    <div class="tab-pane" id="tab-7-2" aria-expanded="false">
                                          <form action="Home/ManageEvent" method="POST">

                            <div class="form-group">

                                <label for="ban">Tên sự kiện</label>

                                <input name="seminar" type="text" class="form-control" placeholder="Nhập tên sự kiện">

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">

                                    <label for="inputname">Năm học</label>

                                    <select name="id_schoolyear" class="form-control">

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

                                    <select name="id_semester" class="form-control">

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

                                    <label for="date_create">Ngày diễn ra</label>

                                    <div class="input-group">

                                        <input name="date_create" id="datepicker" class="form-control" type="date">

                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="host">Host</label></label>

                                    <select name="host" id="host" class="form-control">

                                        <option selected>Choose...</option>

                                        <?php 

                                    while($row = mysqli_fetch_array($data["getmember"])){?>

                                        <option value="<?php echo $row['id_student'] ?>"><?php echo $row['fullname'] ?>

                                        </option>

                                        <?php }

                                ?>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="inputdescribe">Mô tả</label>

                                <textarea name="description" class="form-control" id="description" rows="4"></textarea>

                            </div>



                            <button name="addEvent" type="submit" class="btn btn-primary">Tạo mới</button>

                            <button type="button" class="btn btn-danger">Hủy</button>

                        </form>
                                    </div>
                                </div><br></div>
                        </div>

    </div>

    <div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

        aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-body">

                    <form action="Home/ManageEvent" method="POST">

                        <input style="display: none" name="id_seminar" type="text" id="id_seminar">

                        <div class="modal-header flex-column">

                            <div class="icon-box">

                                <img src="https://cdn.dribbble.com/users/251873/screenshots/9388228/error-img.gif"

                                    alt="" sizes="" srcset="">

                            </div>

                            <h6 class="modal-title w-100 text-center">Bạn có muốn xóa hay không ?</h6>

                        </div>

                        <!-- <div class="modal-body">

                    <p>Do you really want to delete these records? This process cannot be undone.</p>

                </div> -->

                        <div class="modal-footer justify-content-center">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>

                            <button name="deleteevent" type="submit" class="btn btn-danger">Có</button>

                        </div>

                        </from>

                </div>



            </div>

        </div>

    </div>

    <!-- END PAGE CONTENT-->

    <script>

    $(document).ready(function() {

        $('#exampleModalss').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget) // Button that triggered the modal

            var id_seminar = button.data('id_seminar') // Extract info from data-* attributes

            $('#id_seminar').attr('value', id_seminar);

        })



    });

    </script>


<script>
    CKEDITOR.addCss('.cke_editable { font-size: 15px; padding: 2em; }');

    CKEDITOR.replace('description', {
      toolbar: [{
          name: 'document',
          items: ['Print']
        },
        {
          name: 'clipboard',
          items: ['Undo', 'Redo']
        },
        {
          name: 'styles',
          items: ['Format', 'Font', 'FontSize']
        },
        {
          name: 'colors',
          items: ['TextColor', 'BGColor']
        },
        {
          name: 'align',
          items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
        },
        '/',
        {
          name: 'basicstyles',
          items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
        },
        {
          name: 'links',
          items: ['Link', 'Unlink']
        },
        {
          name: 'paragraph',
          items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
        },
        {
          name: 'insert',
          items: ['Image', 'Table']
        },
        {
          name: 'tools',
          items: ['Maximize']
        },
        {
          name: 'editing',
          items: ['Scayt']
        }
      ],

      extraAllowedContent: 'h3{clear};h2{line-height};h2 h3{margin-left,margin-top}',

      // Adding drag and drop image upload.
      extraPlugins: 'print,format,font,colorbutton,justify,uploadimage',
      uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
      filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
      filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
      filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',

      height: 560,

      removeDialogTabs: 'image:advanced;link:advanced',
      removeButtons: 'PasteFromWord'
    });
  </script>
