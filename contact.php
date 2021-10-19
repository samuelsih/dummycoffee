<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dummy Coffee - Contact</title>

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

            $("#contact-submit").click(function() {
                first_name = $("#name").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "send_message.php",
                    data: "name=" + name + "&email=" + email + "&message=" + message,
                    
                    success: function(html) {

                        if(html == 'true') {
                            $("#add_err2").html('<div class="alert alert-success"><strong>Message</strong> sent</div>');
                            window.location.href = "contact.php";
                        }

                        else if(html == 'name_long') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Name</strong> must not exceed 50 characters.</div>');
                        }

                        else if(html == 'name_short') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Name</strong> must exceed 5 characters.</div>');
                        }

                        else if(html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> must not exceed 50 characters</div>');
                        }

                        else if(html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> must exceed 15 characters.</div>');
                        }

                        else if(html == 'email_format') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> is not valid.</div>');
                        }

                        else if(html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Message</strong> must not exceed 100 characters.</div>');
                        }

                        else if(html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Message</strong> must exceed 5 characters.</div>');
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
                    <h2 class="intro-text text-center">Contact
                        <strong>Dummy Coffee</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">

                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63373.950248242916!2d107.6073656213951!3d-6.905919209518123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1634629034690!5m2!1sid!2sid"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>081234567890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">coffee@dummy.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>Bandung
                            <br>Indonesia</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>DUMMY COFFEE</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                    <p class="text-center">If you have any critics or appreciations, contact <strong>Dummy Coffee</strong> below.</p>
                    
                    <form role="form">
                        <div class="row">

                            <div class="form-group ">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" rows="6" maxlength="100" id="message" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default" id="contact-submit">Submit</button>
                            </div>
                        </div>
                    </form>
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
