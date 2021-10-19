<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dummy Coffee - Register</title>

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
            $("#register").click(function() {
                first_name = $("#first_name").val();
                last_name = $("#last_name").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "first_name=" + first_name + "&last_name=" + last_name + "&email=" + email + "&password=" + password,
                    
                    success: function(html) {

                        if(html == 'true') {
                            $("#add_err2").html('<div class="alert alert-success"><strong>Account</strong> processed</div>');
                            window.location.href = "index.php";
                        }

                        else if(html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> already exists.</div>');
                        }

                        else if(html == 'first_name') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>First name</strong> is required.</div>');
                        }

                        else if(html == 'last_name') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Last name</strong> is required.</div>');
                        }

                        else if(html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> is required.</div>');
                        }

                        else if(html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> is not valid.</div>');
                        }

                        else if(html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Password</strong> must be at least 4 character.</div>');
                        }

                        else {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Error</strong> Please try again.</div>');
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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Register
                        <strong>Form</strong>
                    </h2>
                    <hr>

                    <div id="add_err2"></div>

                    <form role="form">
                        <div class="row">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
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
                                <button type="submit" class="btn btn-default" id="register">Register</button>
                            </div>
                        </div>
                    </form>
                </div>

                <a href="login.php" class="btn btn-default">Already a member? Log in</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once 'footer.php'; ?>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
