<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <title>IT-Zone - Trường ĐH Tôn Đức Thắng</title>

    <link rel='shortcut icon' href='public/assets/img/logo.jpg'>

    <!-- Favicons -->

    <meta charset="UTF-8">







    <base href="https://it-zone.club/">

    <link

        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"

        rel="stylesheet">



    <!-- Vendor CSS Files -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="public/assetss/vendor/aos/aos.css" rel="stylesheet">

    <link href="public/assetss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="public/assetss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="public/assetss/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="public/assetss/vendor/remixicon/remixicon.css" rel="stylesheet">

    <link href="public/assetss/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



    <!-- Template Main CSS File -->

    <link href="public/assetss/css/style.css" rel="stylesheet">



    <!-- =======================================================

  * Template Name: FlexStart - v1.9.0

  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/

  * Author: BootstrapMade.com

  * License: https://bootstrapmade.com/license/

  ======================================================== -->

</head>



<body>

    <?php 

    if(isset($data['alert']))

        echo $data['alert'];

?>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"

        aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">
<div class="text-center">

		<!--<img  width="460" height="344" src="https://i.pinimg.com/originals/e1/cf/5c/e1cf5ce61b6d5a8d06a979ab63d3faaa.gif">-->
</div>
                <section id="contact" class="contact">

                    <div class="container aos-init aos-animate" data-aos="fade-up">

                        <div class="row gy-4">

                            <div class="col-lg-12">

                        <table class="table table-bordered" id="example-table" cellspacing="0"

                            width="100%">

                              <thead class="thead-dark">


                                <tr>

                                    <th width="auto">STT</th>

                                    <th width="auto">Người gửi</th>

                                    <th width="auto">Số điện thoại</th>

                                    <th width="auto" >Ngày gửi</th>

                                    <th width="auto">Trạng thái</th>

                                </tr>

                            </thead>

                            <tbody id="output_search">



                            </tbody>

                        </table>



                            </div>



                        </div>



                    </div>



                </section>

            </div>

        </div>

    </div>

    <!-- ======= Header ======= -->

    <header id="header" class="header fixed-top">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">



            <a href="index.html" class="logo d-flex align-items-center">

                <img src="public/assets/img/logo.jpg" alt="">

                <span>IT ZONE</span>

            </a>



            <nav id="navbar" class="navbar">

                <ul>

                    <!-- <li>

                        <a class="nav-link scrollto active" href="#hero">Trang chủ</a>

                    </li> -->

                    <li><a class="nav-link scrollto" href="#about">Giới thiệu</a></li>

                    <li><a class="nav-link scrollto" href="#services">Dịch vụ</a></li>

                    <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->

                    <li><a class="nav-link scrollto" href="#team">Ban điều hành</a></li>



                    <!-- <li><a href="blog.html">Blog</a></li>

          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>

            <ul>

              <li><a href="#">Drop Down 1</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>

                <ul>

                  <li><a href="#">Deep Drop Down 1</a></li>

                  <li><a href="#">Deep Drop Down 2</a></li>

                  <li><a href="#">Deep Drop Down 3</a></li>

                  <li><a href="#">Deep Drop Down 4</a></li>

                  <li><a href="#">Deep Drop Down 5</a></li>

                </ul>

              </li>

              <li><a href="#">Drop Down 2</a></li>

              <li><a href="#">Drop Down 3</a></li>

              <li><a href="#">Drop Down 4</a></li>

            </ul>

          </li> -->

                    <li><a class="nav-link scrollto" href="#fix">Đặt lịch</a></li>

                    <li><a class="nav-link scrollto" href="#search">Tra cứu</a></li>
                    <li><a class="getstarted scrollto" href="https://it-zone.club/Account/LoginForm" type="button" class="btn btn-primary" >Đăng nhập</a></li>

                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->



        </div>

    </header><!-- End Header -->



    <!-- ======= Hero Section ======= -->

    <main id="main">

        <!-- ======= About Section ======= -->

        <section id="about" class="about">



            <div class="container" data-aos="fade-up">

                <div class="row gx-0">



                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-2" data-aos="fade-up"

                        data-aos-delay="200">

                        <div class="content">

                            <h3>CHÀO MỪNG ĐẾN VỚI</h3>

                            <h2><b>HỆ THỐNG QUẢN TRỊ <br>HOẠT ĐỘNG CÂU LẠC BỘ <br> CÔNG NGHỆ-HỌC THUẬT IT-ZONE</b></h2>

                            <div class="text-center text-lg-start">

                                <a href="#fix"

                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">

                                    <span>Đặt Lịch</span>

                                    <i class="bi bi-arrow-right"></i>

                                </a>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-6 d-flex align-items-center pt-2" data-aos="zoom-out" data-aos-delay="200">

                        <img src="https://bootstrapmade.com/demo/templates/Arsha/assets/img/hero-img.png" class="img-fluid" alt="">

                    </div>



                </div>

            </div>



        </section><!-- End About Section -->



        <!-- ======= Values Section ======= -->

        <section id="services" class="values">



            <div class="container" data-aos="fade-up">



                <header class="section-header">

                    <!-- <h2>Dịch Vụ</h2> -->

                    <p>Dịch vụ</p>

                </header>



                <div class="row">



                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="box">

                            <!--<img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-1.png" class="img-fluid" alt="">-->

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMuMwtM6DYugEi5IzVFe98phB1fUvz_qdW1K-EPc38XCmnC5oWGbNeemRP7_eoNd4b1Hs&usqp=CAU" class="img-fluid" alt="">
                            <h3>Hỗ trợ cài đặt, sửa chữa phần mềm</h3>
                        </div>

                    </div>



                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">

                        <div class="box">

                            <img src="https://www.advantexe.com/hs-fs/hubfs/training-workshop.jpg?width=675&name=training-workshop.jpg" class="img-fluid" alt="">

                            <h3>Hỗ trợ tư vấn lựa chọn Laptop</h3>


                        </div>

                    </div>



                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">

                        <div class="box">

                            <img src="https://blog.me.com.br/wp-content/uploads/2020/03/4379-scaled-e1585676622446.jpg" class="img-fluid" alt="">

                            <h3>Hỗ trợ phát chứng chỉ MOS</h3>

                        </div>

                    </div>



                </div>



            </div>



        </section><!-- End Values Section -->



        <!-- ======= Counts Section ======= -->

        <section id="counts" class="counts">

            <div class="container" data-aos="fade-up">



                <div class="row gy-4">



                    <div class="col-lg-3 col-md-6">

                        <div class="count-box">

                            <i class="bi bi-emoji-smile"></i>

                            <div>

                                <span data-purecounter-start="0" data-purecounter-end="232"

                                    data-purecounter-duration="1" class="purecounter"></span>

                                <p>Sự hài lòng</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-3 col-md-6">

                        <div class="count-box">

                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>

                            <div>

                                <span data-purecounter-start="0" data-purecounter-end="20"

                                    data-purecounter-duration="1" class="purecounter"></span>

                                <p>Hội thảo</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-3 col-md-6">

                        <div class="count-box">

                            <i class="bi bi-headset" style="color: #15be56;"></i>

                            <div>

                                <span data-purecounter-start="0" data-purecounter-end="1463"

                                    data-purecounter-duration="1" class="purecounter"></span>

                                <p>Giờ hỗ trợ</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-3 col-md-6">

                        <div class="count-box">

                            <i class="bi bi-people" style="color: #bb0852;"></i>

                            <div>

                                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"

                                    class="purecounter"></span>

                                <p>Thành viên</p>

                            </div>

                        </div>

                    </div>



                </div>



            </div>

        </section><!-- End Counts Section -->



        <!-- ======= Features Section ======= -->


        <!-- ======= Services Section ======= -->

        <!-- <section id="services" class="services">



            <div class="container" data-aos="fade-up">



                <header class="section-header">

                    <h2>Services</h2>

                    <p>Veritatis et dolores facere numquam et praesentium</p>

                </header>



                <div class="row gy-4">



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="service-box blue">

                            <i class="ri-discuss-line icon"></i>

                            <h3>Nesciunt Mete</h3>

                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores

                                iure perferendis tempore et consequatur.</p>

                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">

                        <div class="service-box orange">

                            <i class="ri-discuss-line icon"></i>

                            <h3>Eosle Commodi</h3>

                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum

                                hic non ut nesciunt dolorem.</p>

                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">

                        <div class="service-box green">

                            <i class="ri-discuss-line icon"></i>

                            <h3>Ledo Markt</h3>

                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id

                                voluptas adipisci eos earum corrupti.</p>

                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">

                        <div class="service-box red">

                            <i class="ri-discuss-line icon"></i>

                            <h3>Asperiores Commodi</h3>

                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga

                                sit provident adipisci neque.</p>

                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">

                        <div class="service-box purple">

                            <i class="ri-discuss-line icon"></i>

                            <h3>Velit Doloremque.</h3>

                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed

                                animi at autem alias eius labore.</p>

                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">

                        <div class="service-box pink">

                            <i class="ri-discuss-line icon"></i>

                            <h3>Dolori Architecto</h3>

                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.

                                Corrupti recusandae ducimus enim.</p>

                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>



                </div>



            </div>



        </section> -->
        <!-- End Services Section -->



        <!-- ======= F.A.Q Section ======= -->

    <!-- End F.A.Q Section -->



        <!-- ======= Portfolio Section ======= -->

        <!-- <section id="portfolio" class="portfolio">



      <div class="container" data-aos="fade-up">



        <header class="section-header">

          <h2>Portfolio</h2>

          <p>Check our latest work</p>

        </header>



        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 d-flex justify-content-center">

            <ul id="portfolio-flters">

              <li data-filter="*" class="filter-active">All</li>

              <li data-filter=".filter-app">App</li>

              <li data-filter=".filter-card">Card</li>

              <li data-filter=".filter-web">Web</li>

            </ul>

          </div>

        </div>



        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>App 1</h4>

                <p>App</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Web 3</h4>

                <p>Web</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>App 2</h4>

                <p>App</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Card 2</h4>

                <p>Card</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Web 2</h4>

                <p>Web</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>App 3</h4>

                <p>App</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Card 1</h4>

                <p>Card</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Card 3</h4>

                <p>Card</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="public/assetss/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Web 3</h4>

                <p>Web</p>

                <div class="portfolio-links">

                  <a href="public/assetss/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>

                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>

                </div>

              </div>

            </div>

          </div>



        </div>



      </div>



    </section> -->

        <!-- End Portfolio Section -->



        <!-- ======= Testimonials Section ======= -->



        <!-- ======= Team Section ======= -->

        <section id="testimonials" class="testimonials">
   <div class="container aos-init aos-animate" data-aos="fade-up">
      <header class="section-header">
         <h2>Testimonials</h2>
         <p>What they are saying about us</p>
      </header> 
      <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate swiper-backface-hidden" data-aos="fade-up" data-aos-delay="200">
         <div class="swiper-wrapper" id="swiper-wrapper-15bf8e8781da9788" aria-live="off" style="transform: translate3d(-2780px, 0px, 0px); transition-duration: 0ms;">
            <?php  while($row = mysqli_fetch_array($data["getmaxim"])){?>
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 5" style="width: 516px; margin-right: 40px;" data-swiper-slide-index="4">
               <div class="testimonial-item">
                  <p><?php echo $row['content_maxim']; ?></p>
                  <div class="mt-auto">
                     <h3><?php echo $row['fullname']; ?></h3>
                     <h4><?php echo $row['role']; ?></h4>
                  </div>
               </div>
            </div>
        <?php }?>
         
         </div>
         <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 5" aria-current="true"></span></div>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
   </div>
</section>


        <!-- ======= Clients Section ======= -->

        <!-- End Clients Section -->



        <!-- ======= Recent Blog Posts Section ======= -->

        <section id="recent-blog-posts" class="recent-blog-posts">



            <div class="container" data-aos="fade-up">



                <header class="section-header">

                    <!-- <h2>Sự kiện gần đây</h2> -->

                    <p>Sự kiện gần đây</p>

                </header>



                <div class="row">


    <?php 
$i = 1;

                                         while($row = mysqli_fetch_array($data["getallblogs"])){?>
                    <div class="col-lg-4">

                        <div class="post-box">

                            <div class="post-img"><img width="696" style="height: 255px" src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/blog/blog-<?php echo $i++;?>.jpg" class="img-fluid"

                                    alt=""></div>

                            <span class="post-date"><?php $date =$row['date_create']; echo date("D, M d Y", strtotime($date));?></span>

                            <h3 class="post-title"><?php echo $row['seminar'];?></h3>
              <a href="https://it-zone.club/Home/ViewBlog/<?php echo $row['id_seminar'];?>" class="readmore stretched-link mt-auto"><span>Đọc thêm</span><i

                                    class="bi bi-arrow-right"></i></a> 

                        </div>

                    </div>
<?php }?>

                </div>



            </div>



        </section><!-- End Recent Blog Posts Section -->



        <!-- ======= Contact Section ======= -->

        <section id="fix" class="contact">



            <div class="container" data-aos="fade-up">



                <header class="section-header">

                    <!-- <h2>Contact</h2> -->

                    <p>Đặt lịch</p>

                </header>



                <div class="row gy-4">



                    <div class="col-lg-6">



                        <div class="row gy-4">

                            <div class="col-md-6">

                                <div class="info-box">

                                    <i class="bi bi-geo-alt"></i>

                                    <h3>Địa Chỉ</h3>

                                    <p>Tầng 5AB, 19 Nguyễn Hữu Thọ, Q7.</p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="info-box">

                                    <i class="bi bi-facebook"></i>

                                    <h3>Fanpage</h3>

                                    <p><a href="https://www.facebook.com/caitzone/">https://www.facebook.com/caitzone/</a><br><p> </p></p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="info-box">

                                    <i class="bi bi-envelope"></i>

                                    <h3>Email</h3>

                                    <p>clbitzone@gmail.com</p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="info-box">

                                    <i class="bi bi-clock"></i>

                                    <h3>Mở Cửa</h3>

                                    <p>Hai -Tư -Sáu 7:00AM - 17:00PM</p>

                                </div>

                            </div>

                        </div>



                    </div>



                    <div class="col-lg-6">

                        <form action="Home/AddFixss" method="POST">

                            <div class="row gy-4">

                                <div class="col-md-6">

                                    <label for="">Họ và tên người gửi</label>

                                    <input type="text" name="inputname" class="form-control" required>

                                </div>

                                <div class="col-md-6 ">

                                    <label for="">Số điện thoại</label>

                                    <input type="phone" class="form-control" name="inputphone" required>

                                </div>

                                <div class="col-md-6 ">

                                    <label for="">Mã số sinh viên</label>

                                    <input type="text" name="inputidstudent" class="form-control" required>

                                </div>

                                <div class="col-md-6 ">

                                    <label for="">Mật khẩu máy (Sẽ được bảo mật)</label>

                                    <input type="password" class="form-control" name="inputpassword">

                                </div>

                                <div class="col-md-6">

                                    <label for="">Học kỳ</label>

                                    <select name="inputsemester" class="form-control">

                                        <?php 

                                         while($row = mysqli_fetch_array($data["gethockys"])){?>

                                        <option value="<?php echo $row['semester'] ?>"><?php echo $row['semester'] ?>

                                        </option>

                                        <?php }

                                ?>

                                    </select>

                                </div>



                                <div class="col-md-6 ">

                                    <label for="">Năm học</label>

                                    <select name="inputschoolyear" class="form-control">

                                        <?php 

                                         while($row = mysqli_fetch_array($data["getnamhoc"])){?>

                                        <option value="<?php echo $row['schoolyear'] ?>">

                                            <?php echo $row['schoolyear'] ?>

                                        </option>

                                        <?php }

                                ?>

                                    </select>

                                </div>

                                <div class="col-md-6 ">

                                    <label for="">Ngày</label>

                                    <input type="date" name="inputdate" class="form-control" required>

                                </div>

                                <div class="col-md-6 ">

                                    <label for="">Ca sửa máy</label>

                                    <select name="inputshift" class="form-control">

                                        <option value="1">Ca 1 </option>

                                        <option value="2">Ca 2 </option>

                                        <option value="3">Ca 3 </option>

                                        <option value="4">Ca 4 </option>

                                    </select>

                                </div>

                                <div class="col-md-12">
                                <select style="display:none" name="inputuser" class="form-control">
                                        <option selected="">admin</option>
                                                                                <option value="520H0627">Trà Lâm Thanh Hà                                        </option>
                                         </select>
                                         
                                         <textarea class="form-control" name="inputdescribe" rows="6" placeholder="Mô tả"

                                        required></textarea>

                                </div>

                                <button type="submit" name="submit_fix" class="btn btn-primary"

                                    style="background-color: #4154f1;">Gửi</button>

                            </div>

                        </form>





                    </div>



                </div>



            </div>



        </section><!-- End Contact Section -->

        <!-- ======= Team Section ======= -->

        <section id="search" class="team">



            <div class="container" data-aos="fade-up">



                <header class="section-header">

                    <!-- <h2>Tra cứu </h2> -->

                    <p>Tra cứu</p>

                </header>



                <div class="row gy-4">



                    <div class="col-md-4">

                    </div>

                    <div class="col-md-4">

                        <div class="row gy-4">

                            <div class="col-md-12">

                                <div class="input-group mb-3">

                                    <input type="search" id="inputmssv" name="inputmssv" class="form-control"

                                        placeholder="Mã số sinh viên" required>

                                    <div class="input-group-append">

                                        <button id="search" type="submit" name="submit" class="btn btn-primary"

                                            style="background-color: #4154f1;"  data-toggle="modal" data-target=".bd-example-modal-lg">TRA CỨU</button>

                                    </div>

                                </div<div class="fb-comments" data-href="http://localhost/itzone" data-width="100%" data-numposts="5"></div>

                            </div>

                        </div>



                    </div>

                    <div class="col-md-4">

                    </div>

                </div>

            </div>



        </section><!-- End Team Section -->
<section id="fix" class="contact">



            <div class="container aos-init aos-animate" data-aos="fade-up">
<div class="fb-comments" data-href="http://localhost/itzone" data-width="100%" data-numposts="5"></div>
</div>
</section >

    </main><!-- End #main -->



    <!-- ======= Footer ======= -->

    <footer id="footer" class="footer">



        <!-- <div class="footer-newsletter">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-12 text-center">

                        <h4>Our Newsletter</h4>

                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>

                    </div>

                    <div class="col-lg-6">

                        <form action="" method="post">

                            <input type="email" name="email"><input type="submit" value="Subscribe">

                        </form>

                    </div>

                </div>

            </div>

        </div> -->



        <div class="footer-top">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-5 col-md-12 footer-info">

                        <a href="index.html" class="logo d-flex align-items-center">

                            <img src="public/assets/img/logo.jpg" alt="">

                            <span>IT-Zone</span>

                        </a>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=558098571751000&autoLogAppEvents=1" nonce="Ho5SvvKd"></script>

<div class="fb-page" data-href="https://www.facebook.com/caitzone/?ref=page_internal" data-tabs="timeline" data-width="" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/caitzone/?ref=page_internal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/caitzone/?ref=page_internal">IT-Zone - Tru?ng �H T�n �?c Th?ng</a></blockquote></div>
                       <!--  <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita

                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>-->

                        <div class="social-links mt-3">

                            <a href="https://www.youtube.com/channel/UCZMw71VuImcFOuBLsX-MyZg/featured" class="twitter"><i class="bi bi-youtube"></i></a>

                            <a href="https://www.facebook.com/caitzone/" class="facebook"><i class="bi bi-facebook"></i></a>

                           <!-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->

                        </div>

                    </div>



                    <div class="col-lg-2 col-6 footer-links">

                    
                    </div>



                    <div class="col-lg-2 col-6 footer-links">

                   
                    </div>



                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">

                        <h4>Contact Us</h4>

                        <p>

                            Sảnh nối lầu 5 (A-B) trường Đại học Tôn Đức Thắng số 19, Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7.
				<br>
				<br>


                            <strong>Facebook:</strong> facebook.com/caitzone/<br>

                            <strong>Email:</strong> clbitzone@gmail.com<br>

                        </p>



                    </div>



                </div>

            </div>

        </div>

<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "335406656625775");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

        <div class="container">

            <div class="copyright">

                &copy; Copyright <strong><span>IT-Zone</span></strong>. All Rights Reserved

            </div>

            <div class="credits">

                <!-- All the links in the footer should remain intact. -->

                <!-- You can delete the links only if you purchased the pro version. -->

                <!-- Licensing information: https://bootstrapmade.com/license/ -->

                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->

            </div>

        </div>

    </footer><!-- End Footer -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i

            class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->

    <script src="public/assetss/vendor/purecounter/purecounter.js"></script>

    <script src="public/assetss/vendor/aos/aos.js"></script>

    <script src="public/assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="public/assetss/vendor/glightbox/js/glightbox.min.js"></script>

    <script src="public/assetss/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <script src="public/assetss/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="public/assetss/vendor/php-email-form/validate.js"></script>



    <!-- Template Main JS File -->

    <script src="public/assetss/js/main.js"></script>

    <script>

    if (window.history.replaceState) {

        window.history.replaceState(null, null, window.location.href);

    }

    </script>

</body>

<script type="text/javascript">

$(document).ready(function() {

    var action = "search";

    $("#search").click(function() {

        var search_mssv = $("#inputmssv").val();

        $.ajax({

            url: "Home/Search",

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



</html>