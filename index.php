<?php

$teks = "SELF-PUBLISHING";
$baca1 = "Creation & Layout Tools";
$baca2 = "Self-Publishing Overview";
$baca3 = "Large Order Service";
$baca4 = "Sell & Self-Publish";
$baca5 = "Sell on Blurb's Booksore";
$baca6 = "Sell on Amazon";
$baca7 = "Ingram Distribution";

$teks1 = "PHOTO BOOKS";
$baca8 = "Photo Books";
$baca9 = "Wedding Photo Books";
$baca10 = "Family Photo Books";
$baca11 = "Travel Photo Books";

$teks2 = "POPULAR BOOK TYPES";
$baca12 = "Food & Cookbooks";
$baca13 = "Photography";
$baca14 = "Memories";
$baca15 = "Childeren's Books";
$baca16 = "Portofolios";
$baca17 = "Business Books";
$baca18 = "Yearbooks";
$baca19 = "Novels & Poetry";

$teks3 = "GET INSPRIED";
$baca20 = "Blog";
$baca21 = "Events";
$baca22 = "Bookstroe";
$baca23 = "Gift Center";
$baca24 = "Blurb Partners";

$teks4 = "HELP";
$baca25 = "Priching";
$baca26 = "Hire an Expert";
$baca27 = "FAQs";
$baca28 = "Shipping";
$baca29 = "Retrun Policy";
$baca30 = "Become an Affiliate";
$baca31 = "Refer a friend";

$footer1 = "© 2010 - 2020 Blurb";
$footer2 = "Company";
$footer3 = "Work at Blurb";
$footer4 = "Priching";
$footer5 = "Privacy Policy";
$footer6 = "Cooke Policy";
$footer7 = "Support";
$footer8 = "Sitemap";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
   .row span{
        font-size :12px;
    }
    #data1 span{
        word-spacing: 0px;
    }
    .bg-dark{
        min-height: 50px;
        padding-top:12px;
    }
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-2">
            <h6><?php echo $teks; ?></h6>
            <span><a href="#"><?php echo $baca1; ?></a></span><br>
            <span><a href="#"><?php echo $baca2; ?></a></span><br>
            <span><a href="#"><?php echo $baca3; ?></a><span><br>
            <span><a href="#"><?php echo $baca4; ?></a></span><br>
            <span><a href="#"><?php echo $baca5; ?></a></span><br>
            <span><a href="#"><?php echo $baca6; ?></a></span><br>
            <span><a href="#"><?php echo $baca7; ?></a></span>
        </div>
        <div class="col-12 col-sm-6 col-lg-2">
            <h6><?php echo $teks1; ?></h6>
            <span><a href="#"><?php echo $baca8; ?></a></span><br>
            <span><a href="#"><?php echo $baca9; ?></a></span><br>
            <span><a href="#"><?php echo $baca10; ?></a><span><br>
            <span><a href="#"><?php echo $baca11; ?></a></span>
        </div>
        <div class="col-12 col-sm-6 col-lg-2">
            <h6><?php echo $teks2 ?></h6>
            <span><a href="#"><?php echo $baca12; ?></a></span><br>
            <span><a href="#"><?php echo $baca13; ?></a></span><br>
            <span><a href="#"><?php echo $baca14; ?></a><span><br>
            <span><a href="#"><?php echo $baca14; ?></a></span><br>
            <span><a href="#"><?php echo $baca16; ?></a></span><br>
            <span><a href="#"><?php echo $baca17; ?></a><span><br>
            <span><a href="#"><?php echo $baca18; ?></a><span><br>
            <span><a href="#"><?php echo $baca19; ?></a></span>
        </div>
        <div class="col-12 col-sm-6 col-lg-2">
            <h6><?php echo $teks3 ?></h6>
            <span><a href="#"><?php echo $baca20; ?></a></span><br>
            <span><a href="#"><?php echo $baca21; ?></a></span><br>
            <span><a href="#"><?php echo $baca22; ?></a><span><br>
            <span><a href="#"><?php echo $baca23; ?></a></span><br>
            <span><a href="#"><?php echo $baca24; ?></a></span>
        </div>
        <div class="col-12 col-sm-6 col-lg-2">
            <h6><?php echo $teks4 ?></h6>
            <span><a href="#"><?php echo $baca25; ?></a></span><br>
            <span><a href="#"><?php echo $baca26; ?></a></span><br>
            <span><a href="#"><?php echo $baca27; ?></a><span><br>
            <span><a href="#"><?php echo $baca28; ?></a></span><br>
            <span><a href="#"><?php echo $baca29; ?></a></span><br>
            <span><a href="#"><?php echo $baca30; ?></a><span><br>
            <span><a href="#"><?php echo $baca31; ?></a></span>
        </div>
    </div>
</div>

<footer class="bg-dark text-white mt-10">
    <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center" id="data1">
            <span><?php echo $footer1; ?></span>
            <span><?php echo $footer2; ?></span>
            <span><?php echo $footer3; ?></span>
            <span><?php echo $footer4; ?></span>
            <span><?php echo $footer5; ?></span>
            <span><?php echo $footer6; ?></span>
            <span><?php echo $footer7; ?></span>
            <span><?php echo $footer8; ?></span>
          </div>
          <div class="col-sm-6">
            <i class="fa fa-facebook-square" style="font-size:24px"></i>
            <i class="fa fa-twitter-square" style="font-size:24px"></i>
            <i class="fa fa-instagram" style="font-size:24px"></i>
            <i class="fa fa-pinterest-square" style="font-size:24px"></i>
            <i class="fa fa-youtube-play" style="font-size:24px"></i>
          </div>
        </div>
    </div>
</footer>



 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>