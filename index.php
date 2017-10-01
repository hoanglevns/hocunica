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
                            
                        </div>
                        <!-- BLOCK RIGHT  -->
                        <div class="col-md-8">
                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>