const wrongSpots = document.querySelectorAll("#wrong-spot-1, #wrong-spot-2");
const goodSpot = document.querySelector("#good-spot");
const spots = document.querySelectorAll(".spot");
const textEl = document.querySelector('.text');

spots.forEach((spot) => {
  spot.addEventListener('mouseleave', () => {
    const plantchiImg = document.getElementById('plant-chi-img');
    plantchiImg.remove();
    const imgEl = document.createElement('img');
    imgEl.src = 'public/images/plant-chi/plant-chi_neutral.png';
    imgEl.setAttribute('id', 'plant-chi-img');
    textEl.parentNode.insertBefore(imgEl, textEl);
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

