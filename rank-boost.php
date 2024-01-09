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
</head>

<body>
    <!-- nav bar -->

    <section id="header">
       <div class="logo-sec"><a href="index.php"><img src="img/logo.png" class="logo"> KIcKeR ML Shop </a></div> 
        <div class="nav-sec">
            <ul id="navbar">

                <li><a class="active" href="index.php"> Home</a></li>
                <li><a href="shop.php">  Shop</a></li>
               

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
                <li><a href="about.php"> About</a></li>
                <li><a href="contact.php"> Contact</a></li>
                <!-- <li><a><i class="fa-solid fa-magnifying-glass"></i></a></li> -->
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>

        </div>
        <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>

        </div>
    </section>
<section class="section-p1 rank-calculator">
    <div class="top-up">




<h6>We have best pilots out there!

Prices are listed PER STAR!


</h6>


 <form id="rankUpCalculatorForm">
      <label for="currentDivision">Current Division:</label>
      <select id="currentDivision">
        <option value="Master III">Master III</option>
        <option value="Master II">Master II</option>
        <option value="Master I">Master I</option>
        <option value="Grandmaster IV">Grandmaster IV</option>
        <option value="Grandmaster III">Grandmaster III</option>
        <option value="Grandmaster II">Grandmaster II</option>
        <option value="Grandmaster I">Grandmaster I</option>
        <option value="Epic V">Epic V</option>
        <option value="Epic IV">Epic IV</option>
        <option value="Epic III">Epic III</option>
        <option value="Epic II">Epic II</option>
        <option value="Epic I">Epic I</option>
        <option value="Legend V">Legend V</option>
        <option value="Legend IV">Legend IV</option>
        <option value="Legend III">Legend III</option>
        <option value="Legend II">Legend II</option>
        <option value="Legend I">Legend I</option>
        <option value="Mythic">Mythic</option>
        <option value="Mythical Honors">Mythical Honors</option>
      </select>
      <br /><br />
      <label for="currentStars">Current Number of Stars:</label>
      <input type="number" id="currentStars" min="0" step="1" />
      <br /><br />
      <label for="targetDivision">Target Division:</label>
      <select id="targetDivision">
        <option value="Master III">Master III</option>
        <option value="Master II">Master II</option>
        <option value="Master I">Master I</option>
        <option value="Grandmaster IV">Grandmaster IV</option>
        <option value="Grandmaster III">Grandmaster III</option>
        <option value="Grandmaster II">Grandmaster II</option>
        <option value="Grandmaster I">Grandmaster I</option>
        <option value="Epic V">Epic V</option>
        <option value="Epic IV">Epic IV</option>
        <option value="Epic III">Epic III</option>
        <option value="Epic II">Epic II</option>
        <option value="Epic I">Epic I</option>
        <option value="Legend V">Legend V</option>
        <option value="Legend IV">Legend IV</option>
        <option value="Legend III">Legend III</option>
        <option value="Legend II">Legend II</option>
        <option value="Legend I">Legend I</option>
        <option value="Mythic">Mythic</option>
        <option value="Mythical Honors">Mythical Honors</option>
        <option value="Mythical Glory">Mythical Glory</option>
        <option value="Mythical Immortal">Mythical Immortal</option>
      </select>
      <br /><br />
      <label for="targetStars">Target Number of Stars:</label>
      <input type="number" id="targetStars" min="0" step="1" />
      <br /><br />
      <button type="submit">Calculate</button>
    </form>

    <div id="resultContainer"></div>

















<p>
    <li>Epic - 0.70€</li>
    <li>Legend - 0.80€</li>
    <li>Mythic - 1€ </li>
    <li>Mythic Glory - 1.20€</li>
    


</p><p>

<h5>For *bigger orders we offer discounted prices.</h5>


<h6>*bigger means ordering more then a total of 70 stars.</h6>

</p>
</div>

</section>


<!-- include footer -->
<?php 
include('includes/footer.php');
?>

    <script src="script.js"></script>





<script>


// Rank data including sub-divisions, stars, and price rates
const rankData = [
  {
    rank: "Master",
    divisions: [
      { division: "Master III", stars: 4 },
      { division: "Master II", stars: 4 },
      { division: "Master I", stars: 4 },
    ],
    priceRate: 1,
  },
  {
    rank: "Grandmaster",
    divisions: [
      { division: "Grandmaster IV", stars: 5 },
      { division: "Grandmaster III", stars: 5 },
      { division: "Grandmaster II", stars: 5 },
      { division: "Grandmaster I", stars: 5 },
    ],
    priceRate: 2,
  },
  {
    rank: "Epic",
    divisions: [
      { division: "Epic V", stars: 5 },
      { division: "Epic IV", stars: 5 },
      { division: "Epic III", stars: 5 },
      { division: "Epic II", stars: 5 },
      { division: "Epic I", stars: 5 },
    ],
    priceRate: 3,
  },
  {
    rank: "Legend",
    divisions: [
      { division: "Legend V", stars: 5 },
      { division: "Legend IV", stars: 5 },
      { division: "Legend III", stars: 5 },
      { division: "Legend II", stars: 5 },
      { division: "Legend I", stars: 5 },
    ],
    priceRate: 4,
  },
  {
    rank: "Mythic",
    divisions: [{ division: "Mythic", stars: 25 }],
    priceRate: 5,
  },
  {
    rank: "MythicalHonors",
    divisions: [{ division: "Mythical Honors", stars: 25 }],
    priceRate: 6,
  },
  {
    rank: "MythicalGlory",
    divisions: [],
    priceRate: 7,
  },
];

// Function to calculate the total price to rank up
function calculateRankUpPrice(currentDivision,currentStars,targetDivision,targetStars) {
  let totalPrice = 0;

  // Find the rank data for the current and target divisions
  const currentRankData = rankData.find((rank) =>
    rank.divisions.some((division) => division.division === currentDivision)
  );
  const targetRankData = rankData.find((rank) =>
    rank.divisions.some((division) => division.division === targetDivision)
  );

  // Check if the current and target ranks exist
  if (currentRankData && targetRankData) {
    // Calculate the total price based on the price rate per star
    const currentRankIndex = rankData.indexOf(currentRankData);
    const targetRankIndex = rankData.indexOf(targetRankData);

    // Calculate the total price to rank up within the same rank
    if (currentRankIndex === targetRankIndex) {
      const currentDivisionIndex = currentRankData.divisions.findIndex(
        (division) => division.division === currentDivision
      );
      const targetDivisionIndex = currentRankData.divisions.findIndex(
        (division) => division.division === targetDivision
      );

      if (
        currentDivisionIndex !== -1 &&
        targetDivisionIndex !== -1 &&
        currentDivisionIndex < targetDivisionIndex
      ) {
        for (let i = currentDivisionIndex; i < targetDivisionIndex; i++) {
          totalPrice +=
            currentRankData.divisions[i].stars * currentRankData.priceRate;
        }

        totalPrice += (targetStars - currentStars) * currentRankData.priceRate;
      }
    }
    // Calculate the total price to rank up between different ranks
    else if (currentRankIndex < targetRankIndex) {
      for (let i = currentRankIndex; i < targetRankIndex; i++) {
        const currentRank = rankData[i];
        totalPrice +=
          currentRank.divisions.reduce(
            (acc, division) => acc + division.stars,
            0
          ) * currentRank.priceRate;
      }

      totalPrice += targetStars * targetRankData.priceRate;
      totalPrice -= currentStars * currentRankData.priceRate;
    }
  }

  return totalPrice;
}


      document.getElementById("rankUpCalculatorForm").addEventListener("submit", function (event) {
          event.preventDefault();

          const currentDivision =
            document.getElementById("currentDivision").value;
          const currentStars = parseInt(
            document.getElementById("currentStars").value
          );
          const targetDivision =
            document.getElementById("targetDivision").value;
          const targetStars = parseInt(
            document.getElementById("targetStars").value
          );

          const totalPrice = calculateRankUpPrice(
            currentDivision,
            currentStars,
            targetDivision,
            targetStars
          );

          const resultContainer = document.getElementById("resultContainer");
          resultContainer.textContent = `Total Price: ${totalPrice} dollars`;
        });
    </script>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4558e187e4.js" crossorigin="anonymous"></script>


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
</body>

</html>