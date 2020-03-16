<?php
$a1 = "Products";
$a2 = "Design Tools";
$a3 = "Services";
$a4 = "Sell & Self Publish";
$a5 = "Bookstore";
$a6 = "login";
$a7 = "Help"
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
    


 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>