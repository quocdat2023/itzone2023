<?php 
$i = 1;
    while($row = mysqli_fetch_assoc($data["blogview"])){?>

<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <!-- <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>Blog Single</li>
            </ol>
            <h2>Blog Single</h2> -->
        </div>
    </section>
    <section id="blog" class="blog">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 entries">
                    <article class="entry entry-single">
                        <!--<div class="entry-img"> <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/blog/blog-<?php echo $i++;?>.jpg" alt="" class="img-fluid"></div>-->
                        <h2 class="entry-title"> <a href="blog-single.html"><?php echo $row["seminar"]; ?></a></h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog-single.html"><?php echo $row["fullname"]; ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-single.html"><time
                                            datetime="2020-01-01"><?php echo $row["date_create"]; ?></time></a></li>
                            </ul>
                              <?php $text = html_entity_decode($row["description"]); 
                     $text=str_ireplace('<p>','',$text);
                      $text=str_ireplace('</p>','',$text);
                      echo $text;?>

                        </div>
                        
                    </article>

                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=558098571751000&autoLogAppEvents=1"
                            nonce="GVH5vAl1"></script>
                        <div class="fb-comments"
                            data-href="https://it-zone.club/Home/ViewBlog/<?php echo $row["id_seminar"]; ?>"
                            data-width="100%" data-numposts="5"></div>
                 </div> 

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Bài viết gần đây</h3>
                        <div class="sidebar-item recent-posts">
                            <?php 
                            $i = 1;
                                while($row = mysqli_fetch_array($data["getallblog"])){?>
                            <div class="post-item clearfix"> <img
                                    src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/blog/blog-<?php echo $i++;?>.jpg"
                                    alt="">
                                <h4><a href="https://it-zone.club/<?php echo $row["id_seminar"]; ?>"><?php echo $row["seminar"]; ?></a></h4> <time
                                    datetime="2020-01-01"><?php echo $row["date_create"]; ?></time>
                            </div>
                           <?php }?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</main>
<?php }?>