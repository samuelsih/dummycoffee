<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dummy Coffee - Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#login").click(function() {
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "check_login.php",
                    data: "email=" + email + "&password=" + password,
                    
                    success: function(html) {

                        if(html == 'true') {
                            $("#add_err2").html('<div class="alert alert-success"><strong>Authenticated</strong></div>');
                            window.location.href = "blog.php";
                        }

                        else if(html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Authentication</strong> failure.</div>');
                            console.log(html);
                        }

                        
                        else {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Error</strong> Please try again.</div>');
                            console.log(html);
                        }
                    },
                    
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });


                return false;
            });
        });
    </script>

</head>

<body>

    <?php require_once 'top.php'; ?>


    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                    <div class="alert alert-danger">
					    <strong>You must be logged in to view the blog.</strong>
					</div>
                <div class="col-lg-12">
                    
                    <hr>
                    <h2 class="intro-text text-center">Login
                        <strong>Form</strong>
                    </h2>
                    <hr>

                    <div id="add_err2"></div>

                    <form role="form">
                        <div class="row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default" id="login">Login</button>
                            </div>
                        </div>
                    </form>

                    <div class="form-group col-lg-12">
						<a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register here</button></a>
					</div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once 'footer.php'; ?>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
