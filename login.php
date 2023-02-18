<?php
include 'config.php';
if (isset($_POST['password'])) {
  $password = $db->real_escape_string($_POST['password']);
  $query = "SELECT * FROM users WHERE  password='$password'";
  $result = $db->query($query);
  if ($result->num_rows == 1) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['password'] = $password;
    header('Location: visuals.php');
  } else {
    // Login failed
    echo '<script>alert("Incorrect  password")</script>';
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" type="image/png" href="./favicon.ico">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Visuals</title>
</head>
<style>
	#css-loader 
	{
		width: 100%;
		background: #fff;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.loader {
  width: 48px;
  height: 48px;
  border: 3px solid #000;
  border-bottom-color: transparent;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader::after {
  content: '';  
  position: absolute;
  box-sizing: border-box;
  left: 20px;
  top: 31px;
  border: 10px solid transparent;
  border-right-color: #000;
  transform: rotate(-40deg);
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 
</style>
<body onload="loader()">

  	<!-- loader  -->
	<div id="css-loader">
		<span class="loader"></span>
	</div>
	<!-- loader  -->
  <div id="body-wrapper" style="display: none;">
  
      		<!-- Start Navbar Area --> 
          <nav class="navbar navbar-expand-xl navbar-wrapper">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.html">
                <img src="./assets/img/ico_back.svg" alt="back">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <!-- <i class="fas fa-bars" id="mobile-manue"></i> -->
              <img src="./assets/img/menubar.svg" alt="menubar" class="img-fluid" id="mobile-manue">
              <i class="fas fa-times hide" id="close-icon"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " href="./coming-soon.php">Creative Direction</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./coming-soon.php">Fashion Design</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./product-design.php">Product Design</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./ui-design.php">UI Design</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./coming-soon.php">UX Writing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./visuals.php">Visuals</a>
                </li>
              </ul>
              </div>
            </div>
            </nav>
      <!-- End Navbar Area -->
          <!-- End Navbar Area -->
          <div class="password-section" id="password-sec">
            <div class="container">
                <div class="row row-cols-1 g-5 flex-column">
                    <div class="col-12  col-sm-11 col-md-10 col-lg-9 col-xl-8 col-xxl-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Whooho you found it!</h4>
                                <p class="card-text">
                                    You want to take a look at more than text in white space and that’s cool. Please request the secret key <a href="#" onclick="popup()">here.</a>
                                </p>
                                <p class="card-text">You already have one? That’s great, enter it below.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
                    <form action="login.php" method="post">
                    <input type="password" name="password" class="form-control" id="pass" placeholder="Insert Password" required>
                        <!-- <label for="pass" class="form-label">Get access to porfolio</label> -->
                        <p id="wrong"></p>
                        <button type="submit" style="color: #AFFBA2;" class="btnn">Validate Password</button>
                        <!-- <input type="submit" value="Validate Password" style="color: #AFFBA2;" class="btnn"> -->
</form>
                    </div>
                </div>
            </div>
        </div>
        <!-- popup contact form  -->
		<!-- popup contact form  -->
		<section class="contact-wrapper popup-contact d-none" id="popup-contact">
			<div class="container">
				<div class="row row-wrapper">
					<div class="col-10 col-sm-10 mx-auto col-md-6">
						<div class="form-wrapper">
							<form action="https://formspree.io/f/xzbqbjpq" method="post">
								<div class="form-header">
									<h1>Gimme gimme gimme</h1>
									<img src="./assets/img/ico_close.svg" alt="close" id="close-popup">
								</div>
								<div>
									<input type="text" name="name" class="form-input" id="name" placeholder="Your Name"
										required>
								</div>
								<div>
									<input type="email" name="email" id="email" class="form-input"
										placeholder="Your Email" required>
								</div>
								<div>
									<!-- <input type="text" name="message" class="form-input textarea" id="textarea" rows="5"> -->
                  <textarea name="message" id="textarea" class="form-input textarea" rows="5"></textarea>
								</div>
                <input type="submit" value="Send" style="color: #AFF8A2; " class="main-btn">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- popup contact form  -->
		<!-- popup contact form  -->
  </div>


  <script>
      	let textarea = document.getElementById("textarea").innerHTML ="Hi Val, \n I am writing to request a password to get access to your portfolio.";
		function loader() {
			const myTimeout = setTimeout(timeloader, 1000);
		}
		function timeloader ()
		{
			let cssloader = document.getElementById("css-loader"); 
			let bodywrapper = document.getElementById("body-wrapper");
			bodywrapper.style.display = "block";
			cssloader.style.display = "none";
		}
	</script>
  <script src="./assets/js/custom1.js"></script>
</body>
</html>