<?php
$a1 = "Products";
$a2 = "Design Tools";
$a3 = "Services";
$a4 = "Sell & Self Publish";
$a5 = "Bookstore";
$a6 = "login";
$a7 = "Help";
$isi_content="Blurb® is a self-publishing and marketing platform that unleashes the creative genius inside everyone. Blurb’s platform makes it easy to design, publish, promote, and sell professional-quality printed books and ebooks.";
$isi_content1="Blurb was founded by Eileen Gittins in 2005, and includes a team of design, Internet and media veterans who share a passion for helping people bring their stories to life. Blurb authors have created millions of books using our full suite of free book-making tools, and today a new book is created every minute. Blurb is based in San Francisco with offices in London.";
$isi_content2="Blurb, Inc. is founded by Eileen Gittins to address a need for a simple, affordable way for individuals to publish their own books.";
$isi_content3="First release of Blurb’s free BookSmart® software, allowing anyone to turn their pictures and text into a bookstore-quality book.<br>Blurb’s print-on-demand solution supports print runs as low as a single copy, laying the groundwork for a self-publishing revolution.";
$isi_content4="Blurb’s PDF-to-Book workflow opens up new levels of creative control, allowing professional designers using Adobe InDesign to leverage the Blurb platform.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .data {
        height : 100px;
        width: 150px;
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="gambar.png" class="data"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#"><?php echo $a1 ?><span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="#"><?php echo $a2 ?></a>
                    <a class="nav-item nav-link active" href="#"><?php echo $a3 ?></a>
                    <a class="nav-item nav-link active" href="#"><?php echo $a4 ?></a>
                    <a class="nav-item nav-link active" href="#"><?php echo $a5 ?></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-right" id="navbarNavAltMarkup">
                    <a class="nav-item nav-link active" href="#"><?php echo $a6 ?></a>
                    <a class="nav-item nav-link active" href="#"><?php echo $a7 ?></a>
                    <i class="fa fa-search" style="font-size:24px; color: grey;"></i>
                </div>
                </nav>           
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <img src="gambar2.jpg" class="img-fluid" alt="Responsive image" style="height: 250px; width: 1000px; ">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8">
                <h2>Company Profile</h2>
                <p class="mt-4 mr-5 justify"><?php echo $isi_content ?></p>
                <p class="mt-2 mr-5"><?php echo $isi_content1 ?></p>
                <a href="#" style="color:#00C0BE">Discover the Blurb story</a>
            </div>
            <div class="col-4">
                <h2>Learn More</h2>
                <nav class="nav flex-column ml-3">
                    <a class="nav-link active" href="#" style="color:black; font-size:15px;">ABOUT BLURB</a>
                    <a class="nav-link" href="#" style="color:black; font-size:15px;">EXECUTIVE TEAM</a>
                    <a class="nav-link" href="#" style="color:black; font-size:15px;">WORK AT BLURB</a>
                    <a class="nav-link" href="#" style="color:black; font-size:15px;">PRESS RELEASES</a>
                    <a class="nav-link" href="#" style="color:black; font-size:15px;">IN THE NEWS</a>
                    <a class="nav-link" href="#" style="color:black; font-size:15px;">CONTACT US</a>
                </nav>
            </div>
        </div>
        <div class="isi-content">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="mt-5">Company Timeline</h2>
                <h6 class="mt-3">2015</h6>
                <P style:"text-align:justify"><?php echo $isi_content2 ?></P>
                <h6 class="mt-3">2016</h6>
                <P style:"text-align:justify"><?php echo $isi_content3 ?></P>
                <h6 class="mt-3">2017</h6>
                <P style:"mb-3 text-align:justify"><?php echo $isi_content4 ?></P>
            </div>
        </div>
        
    </div>
</div>
    


 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>