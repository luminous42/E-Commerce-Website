<?php
include('./includes/connect.php');
include('functions/common_function.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIcKeR ML Shop</title>
    <!-- Bootstrap CSS link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- CSS file link -->
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

<!-- tawk.to api start -->
<script type="text/javascript" src="https://tawk.to/public/scripts/jquery.js"></script>
<script type="text/javascript" src="https://tawk.to/public/scripts/page.js"></script>
    <script type="text/javascript">

			var Tawk_API = {
				onLoad: function(){
					var dataObj = parseQueryString();

					if (dataObj.tags !== undefined) {
						Tawk_API.addTags(dataObj.tags);
					}

					if (dataObj.event !== undefined) {
						if (dataObj.attrLength !== 0) {
							Tawk_API.addEvent(dataObj.event, dataObj.attributes);
						} else {
							Tawk_API.addEvent(dataObj.event);
						}
					};

					$('#tawk-maximize').click(function(){
						Tawk_API.maximize();
					});

					$('#status').parent().prepend('<i class="fa fa-circle"></i>');
				},
				onStatusChange: function(status){
					$('#status').text(status)
					.parent()
					.removeClass('online offline away')
					.addClass(status);

					if (status === 'online') {
						$('.status').show();
					} else {
						$('.status').hide();
					}
				}
			};
			var Tawk_LoadStart = new Date();
			(function(){
				var s1 = document.createElement("script"),
					s0 = document.getElementsByTagName("script")[0];

				s1.async = true;
				s1.src = 'https://embed.tawk.to/6475ffadad80445890effa0b/1h1metfpa';
				s1.charset = 'UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1, s0);
			})();

			function faviconError(el) {
				$(el).hide();
				$(el).next().show();
			}
		</script>

<!-- tawk.to api end -->
</head>

<body>
    <!-- nav bar -->

    <section id="header">
        <div class="logo-sec"><a href="index.php"><img src="img/logo.png" class="logo"> KIcKeR ML Shop </a></div> 
        <div>
            <ul id="navbar">

                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>


              <li class="nav-item dropdown">

                    <a class="nav-link " href="#"  data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Services</a>
                      <div class="dropdown-menu dropdown-menu-dark">
                        <a class="dropdown-item" href="shop.php">Account Market</a>
                        <a class="dropdown-item " href="top-up.php">Diamond Top Up</a>
                        <a class="dropdown-item " href="rank-boost.php">Boost Rank</a>
                        <a class="dropdown-item " href="buy-squad.php">Buy Verified Squads</a>
                    </div>
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a><i class="fa-solid fa-magnifying-glass"></i></a></li> -->
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>

        </div>
        <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>

        </div>
    </section>

    <section id="acdetails" class="section-p1">
       <?php 
       view_account_details();
       ?>
    </section>



    <!-- include footer -->
    <?php 
include('includes/footer.php');
?>

<!-- change main image when clicked -->
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function () {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            MainImg.src = smallimg[3].src;
        }


    </script>

<!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6475ffadad80445890effa0b/1h1metfpa';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>

<!--End of Tawk.to Script-->

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4558e187e4.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>