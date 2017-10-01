<?php
require 'simple_html_dom.php';

$coupon = "LOSE";
$aff = "89767";

$html = file_get_html('https://unica.vn/anh-van-giao-tiep-cho-nguoi-hoan-toan-mat-goc?coupon=LOSE');

$id_tutorial = "";
$id_category = "";
$name_tutorial = $html->find('h1.page-header', 0)->plaintext;
$des_tutorial = $html->find('div.desc', 0)->plaintext;
$teacher = $html->find('div.teacher .title', 0)->plaintext;
$vote = $html->find('div.star', 0)->plaintext;
$name_category = $html->find('div.teacher .title', 1)->plaintext;
$img_tutorial = $html->find('img.thumb', 0)->src;
$video_tutorial = $html->find('div.video-container iframe', 0)->src;
$summary_tutorial = $html->find('div.desc', 1);
$price_tutorial = $html->find('span.old-price', 0)->plaintext;
$sale_tutorial = $html->find('span.sell-price', 0)->plaintext;
$percent_tutorial = $html->find('span.discount', 0)->plaintext;
$url_register = $html->find('div.link a', 0)->href;
$block06 = $html->find('div#block-6', 0);
$block07 = $html->find('div#block-7', 0);
$block09 = $html->find('div#block-9', 0);
$block11 = $html->find('div#block-11', 0);
$block12 = $html->find('div#block-12', 0);
$block13 = $html->find('div#block-13', 0);
$block10 = $html->find('div#block-10', 0);
$url_tutorial = "";
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- STYLE -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="unica/font-awesome.min.css">
        <script type="text/javascript" src="unica/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="unica/styles.css">
        <link rel="stylesheet" href="unica/learn.css">
        <link href="unica/custom.css" rel="stylesheet" type="text/css"/>
        <script src="unica/custom.js" type="text/javascript"></script>

        <style>
            div#pc{
                display: block;
            }

            div#mobile{
                display: none;
            }
            .block_video{
                height: 436px; 
            }
            @media screen and (max-width: 991px) {
                div#pc{
                    display: none;
                }
                div#mobile{
                    display: block;
                }
                .block_video{
                    height: 216px; 
                    margin-top: 10px;
                }
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div class="overlay"></div>
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand"><a href="index.php">Unica</a></li>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="/cong-nghe-thong-tin"><i aria-hidden="true"></i> Công nghệ thông tin</a></li>
                    <li><a href="/thiet-ke-nhiep-anh"><i aria-hidden="true"></i> Thiết kế - Nhiếp ảnh</a></li>
                    <li><a href="/sale-marketing"><i aria-hidden="true"></i> Sale - Marketing</a></li>
                    <li><a href="/kinh-doanh-khoi-nghiep"><i aria-hidden="true"></i> Kinh doanh - Khởi nghiệp</a></li>
                    <li><a href="/phat-trien-ban-than"><i aria-hidden="true"></i> Phát triển cá nhân</a></li>
                    <li><a href="/suc-khoe-gioi-tinh"><i aria-hidden="true"></i> Sức khỏe - Giới tính</a></li>
                    <li><a href="/nghe-thuat-lam-dep"><i aria-hidden="true"></i> Nghệ thuật - Làm đẹp</a></li>
                    <li><a href="/ngoai-ngu"><i aria-hidden="true"></i> Ngoại ngữ</a></li>
                    <li><a href="/nuoi-day-con"><i aria-hidden="true"></i> Nuôi dạy con </a></li>
                </ul>
            </nav>

            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <section class="container">
                    <div class="row">
                        <!-- BLOCK LEFT  -->
                        <div class="col-md-4">
                            <!-- BANG GIA KHOA HOC  -->
                            <div id="pc" style="padding: 5px;margin-top: 20px;background-color: #fff;border-radius: 5px;border: 1px solid #e1e1e1;" class="col-md-3 block-cart affix">
                                <div id="block-15" class="block-cart">
                                    <?php echo "<img src='$img_tutorial'/>"; ?>
                                    <div class="price" style="margin-top: 10px;">
                                        <span class="sell-price" style="font-size: 21px"><?php echo $sale_tutorial; ?><sup>đ</sup></span>
                                        <span class="old-price" style="font-size: 14px"><?php echo $price_tutorial; ?><sup>đ</sup></span>
                                        <span class="discount"><?php echo $percent_tutorial; ?></span>
                                    </div>
                                    <div class="link link1">
                                        <?php
                                        echo "<a href='$url_register&aff=$aff&coupon=$coupon'>Tham gia khóa học ➔</a>";
                                        ?>
                                    </div>
                                    <?php
                                    echo $summary_tutorial;
                                    ?>
                                </div>
                            </div>
                            <!-- MOBILE  -->
                            <div id="mobile" style="padding: 5px;margin-top: 20px;background-color: #fff;border-radius: 5px;border: 1px solid #e1e1e1;" class="col-md-3 block-cart">
                                <div id="block-15" class="block-cart">
                                    <?php echo "<img src='$img_tutorial'/>"; ?>
                                    <div class="price" style="margin-top: 10px;">
                                        <span class="sell-price" style="font-size: 21px"><?php echo $sale_tutorial; ?><sup>đ</sup></span>
                                        <span class="old-price" style="font-size: 14px"><?php echo $price_tutorial; ?><sup>đ</sup></span>
                                        <span class="discount"><?php echo $percent_tutorial; ?></span>
                                    </div>
                                    <div class="link link1">
                                        <?php
                                        echo "<a href='$url_register&aff=$aff&coupon=$coupon'>Tham gia khóa học ➔</a>";
                                        ?>
                                    </div>
                                    <?php
                                    echo $summary_tutorial;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- BLOCK RIGHT  -->
                        <div class="col-md-8">
                            <div class="block_video">
                                <?php echo "<iframe src='$video_tutorial' width='100%' height='100%' scrolling='no' frameborder='0' allowfullscreen=''></iframe>"; ?>
                            </div>
                            <!-- GIOI THIEU TONG QUAN KHOA HOC  -->
                            <div id="highlight" data-spy="affix" data-offset-top="320" class="affix-top">
                                <div class="container">
                                    <div class="row">
                                        <div class="container">
                                            <h1 class="page-header"><?php echo $name_tutorial; ?></h1>
                                            <div class="desc"><?php echo $des_tutorial; ?></div>
                                            <div class="teacher">
                                                <span>Giảng viên:</span><span class="title"><a class="xanhthan"><?php echo $teacher; ?></a></span>
                                                <span>Chủ đề:</span><span class="title"><a class="xanhthan"><?php echo $name_category; ?></a></span>
                                            </div>
                                            <div class="star star_yellow"><ul class="item-list" style="color: yellow;">
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                </ul><span class="title"><?php echo $vote ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CHI TIET KHOA HOC  -->
                            <?php
                            echo $block06 . $block07 . $block09 . $block11 . $block12 . $block13;
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>