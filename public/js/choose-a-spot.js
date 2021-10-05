const wrongSpots = document.querySelectorAll("#wrong-spot-1, #wrong-spot-2");
const goodSpot = document.querySelector("#good-spot");
const spots = document.querySelectorAll(".spot");
const textEl = document.querySelector('.text');

// For each spot in array "spots"...
spots.forEach((spot) => {
  // ... add an event listener
  spot.addEventListener('mouseleave', () => {
    const plantchiImg = document.getElementById('plant-chi-img');
    plantchiImg.remove();
    const imgEl = document.createElement('img'); // <img >
    imgEl.src = 'public/images/plant-chi/plant-chi_neutral.png'; // <img src="..." >
    imgEl.setAttribute('id', 'plant-chi-img'); // <img src="..." id="plant-chi-img" >
    // Add the img "imgEl" above text element "textEl"
    textEl.parentNode.insertBefore(imgEl, textEl);
    // Use of "insertBefore" because "appendChild" adds child elem 
  });
});

wrongSpots.forEach((wrongSpot) => {
  wrongSpot.addEventListener('mouseover', () => {
    const plantchiImg = document.getElementById('plant-chi-img');
    plantchiImg.remove();
    const imgEl = document.createElement('img');
    imgEl.src = 'public/images/plant-chi/plant-chi_unhappy.png';
    imgEl.setAttribute('id', 'plant-chi-img');
    textEl.parentNode.insertBefore(imgEl, textEl);
  });
});
goodSpot.addEventListener('mouseover', () => {
  const plantchiImg = document.getElementById('plant-chi-img');
  plantchiImg.remove();
  const imgEl = document.createElement('img');
  imgEl.src = 'public/images/plant-chi/plant-chi_happy.png';
  imgEl.setAttribute('id', 'plant-chi-img');
  textEl.parentNode.insertBefore(imgEl, textEl);
});

