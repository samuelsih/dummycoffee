<?php 

session_start();

if (isset($_SESSION['login'])) {

    $firstName = $_SESSION['first_name'];
    $lastName = $_SESSION['last_name'];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dummy Coffee - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php require_once 'top.php'; ?>


    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="text-center">Welcome <?php echo $firstName; echo ' '; echo $lastName; ?> | <a href="logout.php"><strong>LOGOUT</strong></a></h2>
                    <hr>
                    <h2 class="intro-text text-center">Dummy Coffee
                        <strong>BLOG</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>September 22, 2021</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>August 13, 2021</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>PLAIN COFFEE
                        <br>
                        <small>April 11, 2021</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" role="dialog" id="myModal">
        <div class="modal-dialog modal-content modal-xxl">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Coconut Oil Coffee</h4>

                    <div class="modal-body">
                    <img class="img-responsive img-border" src="img/slide-1.jpg" width="400">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, delectus nam vitae repudiandae maxime reiciendis odio molestias deserunt a esse quisquam rerum labore atque quaerat ut. Voluptatem ea tenetur nihil.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore pariatur aliquam voluptatem explicabo dignissimos voluptas, molestiae vero possimus reiciendis, eum eius quisquam soluta optio nam impedit ab laboriosam eos fugit dolor commodi quidem excepturi debitis. Esse iste facere ad voluptatum sunt, repellat magni praesentium ex consequuntur pariatur nemo deleniti omnis, quas ea officiis nulla error quasi tempora quam illo unde!</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="myModal2">
        <div class="modal-dialog modal-content modal-xxl">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Coconut Oil Coffee</h4>

                    <div class="modal-body">
                    <img class="img-responsive img-border" src="img/slide-2.jpg" width="400">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, delectus nam vitae repudiandae maxime reiciendis odio molestias deserunt a esse quisquam rerum labore atque quaerat ut. Voluptatem ea tenetur nihil.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore pariatur aliquam voluptatem explicabo dignissimos voluptas, molestiae vero possimus reiciendis, eum eius quisquam soluta optio nam impedit ab laboriosam eos fugit dolor commodi quidem excepturi debitis. Esse iste facere ad voluptatum sunt, repellat magni praesentium ex consequuntur pariatur nemo deleniti omnis, quas ea officiis nulla error quasi tempora quam illo unde!</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="myModal3">
        <div class="modal-dialog modal-content modal-xxl">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Coconut Oil Coffee</h4>

                    <div class="modal-body">
                    <img class="img-responsive img-border" src="img/slide-3.jpg" width="400">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, delectus nam vitae repudiandae maxime reiciendis odio molestias deserunt a esse quisquam rerum labore atque quaerat ut. Voluptatem ea tenetur nihil.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore pariatur aliquam voluptatem explicabo dignissimos voluptas, molestiae vero possimus reiciendis, eum eius quisquam soluta optio nam impedit ab laboriosam eos fugit dolor commodi quidem excepturi debitis. Esse iste facere ad voluptatum sunt, repellat magni praesentium ex consequuntur pariatur nemo deleniti omnis, quas ea officiis nulla error quasi tempora quam illo unde!</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
        </div>
    </div>
    <!-- /.container -->
    
    


    <?php require_once 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php 

} else {
    header("location:login.php ");
}

?>
