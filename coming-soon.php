<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit();
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
    <title>Ui Design</title>
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
.comming-soon
{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 85vh;
    overflow: hidden;
}
.comming-soon h1
    {
        color: #000000;
        font-weight: 100;
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
        <nav class="navbar navbar-expand-xl navbar-wrapper commingsoon">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">
                    <!-- <i class="fas fa-arrow-left"></i> -->
                    <img src="./assets/img/ico_back.svg" alt="back">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <img src="./assets/img/menubar.svg" alt="menubar" class="img-fluid" id="mobile-manue">
                    <!-- <i class="fas fa-bars" id="mobile-manue"></i> -->
                    <i class="fas fa-times hide" id="close-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-2">
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
                            <a class="nav-link" href="./ui-design.php">UI Design</a>
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

<div class="comming-soon">
    <h1>Comming Soon</h1>
</div>
    </div>

    <script>
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