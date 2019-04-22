<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Your profile</title>
    <link rel="stylesheet" href="assets/css/colours.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/card.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>

<body>
<!--- Header --->
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="active navbar-brand" href="index.php">VIVA CARD</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="dashboard.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>


        </div>
    </nav>
</header>
<!--- Header End--->
<body>
<section class="main-container">
    <div align="center">
        <div style=" border: solid 1px #006D9C; " align="left">
            <?php
            if(isset($errMsg)){
                echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
            }
            ?>
<p><h5> People exchange business cards at networking events.
    These cards hold crucial information about individuals
    and their businesses which they want others to know and use to
    contact them. Traditionally, receiving a business card
    use to consume time typing all information that needed
    to be stored. Web app APIs make this tedious exercise
    easy by encoding the information in QR codes and easily
    sharing them during networking.These cards with QR codes
    can be also shared via email as an image which can be
    then scanned to view the person’s information.
            </h5></p>
        </div>
    </div>
</section>

</body>


<!---Footer start--->
<div class="text-center">
    <footer class=“col-md-12">
        <div class=‘row'>

            <section class="col-md-6">
                <a href="team.php"><h6>Meet the team</h6></a>
            </section>

            <section class="col-md-6">
                <a href="privacy.php"><h6>Privacy</h6></a>
            </section>

            <address>
                <h6><center>Visit us at<br>
                        Robert Gordon University, Garthdee House,<br>
                        Garthdee Road, Aberdeen, AB10 7QB, Scotland,<br>
                        UK<br>
                        <a href="mailto:groupe_cmm004@live.rgu.ac.uk">
                            <img src="assets/Images/email.png" class="img-thumbnail img-responsive" width="30px" height="20px"></a>
                        <a href="https://www.facebook.com">
                            <img src="assets/Images/facebook.png" class="img-thumbnail img-responsive" width="30px" height="20px"></a>
                        <a href="https://www.twitter.com">
                            <img src="assets/Images/twitter.png" class="img-thumbnail img-responsive" width="30px" height="20px"></a>
                        <a href="https://linkedin.com">
                            <img src="assets/Images/linkedin.jpg" class="img-thumbnail img-responsive" width="30px" height="20px"></a>
                    </center> </h6>
            </address>
        </div>
    </footer>
</div>
<!---Footer end--->
</body>
</html>