<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
			$errMsg = 'Enter password';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, firstname, lastname, email, username, password, jobtitle, company, job_desc, telephone, linkedin, twitter, instagram, facebook FROM user_profile WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "User $username not found.";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['firstname'] = $data['firstname'];
                        $_SESSION['lastname'] = $data['lastname'];
                        $_SESSION['email'] = $data['email'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
                        $_SESSION['jobtitle'] = $data['jobtitle'];
                        $_SESSION['company'] = $data['company'];
                        $_SESSION['job_desc'] = $data['job_desc'];
                        $_SESSION['telephone'] = $data['telephone'];
                        $_SESSION['linkedin'] = $data['linkedin'];
                        $_SESSION['twitter'] = $data['twitter'];
                        $_SESSION['instagram'] = $data['instagram'];
                        $_SESSION['facebook'] = $data['facebook'];



						header('Location: dashboard.php');
						exit;
					}
					else
						$errMsg = 'Password not match.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/colours.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
<div class="container-fluid">
    <!--- Header --->
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="active navbar-brand" href="#">VIVA CARD</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
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
        <div style=" border: solid 1px #006D9C; " align="center">
            <?php
            if(isset($errMsg)){
                echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
            }
            ?>
            <section class="main-container">
                <div style="background-color:grey; color:#FFFFFF; padding:10px;"><h2>Sign in</h2></div>
                <div style="margin: 15px">
                </div>
                <form class="signup-form" action="" method="post">
                 <input type="text" name="username" required="required" placeholder="Username/E-mail" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
                 <input type="password" name="password" required="required" maxlength="20" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off" class="box" /><br/><br />
                    <input type="submit" name='login' value="Login" class='submit'/><br />
                 </form>
            </section>

    <!---Footer start--->
    <div class="container-fluid text-center">
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
