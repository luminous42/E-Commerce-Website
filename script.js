// Script for navigation bar
const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

//For Rank boost price calculator

// Rank data including sub-divisions, stars, and price rates
const rankData = [
  {
    rank: "Master",
    divisions: [
      { division: "Master III", stars: 4 },
      { division: "Master II", stars: 4 },
      { division: "Master I", stars: 4 },
    ],
    priceRate: 100,
  },
  {
    rank: "Grandmaster",
    divisions: [
      { division: "Grandmaster IV", stars: 5 },
      { division: "Grandmaster III", stars: 5 },
      { division: "Grandmaster II", stars: 5 },
      { division: "Grandmaster I", stars: 5 },
    ],
    priceRate: 200,
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
    priceRate: 300,
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
    priceRate: 400,
  },
  {
    rank: "Mythic",
    divisions: [{ division: "Mythic", stars: 25 }],
    priceRate: 500,
  },
  {
    rank: "MythicalHonors",
    divisions: [{ division: "Mythical Honors", stars: 25 }],
    priceRate: 600,
  },
  {
    rank: "MythicalGlory",
    divisions: [],
    priceRate: 700,
  },
];

// Function to calculate the total price to rank up
function calculateRankUpPrice(
  currentDivision,
  currentStars,
  targetDivision,
  targetStars
) {
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
