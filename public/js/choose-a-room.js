console.log("Hello Choose a room");


const wrongRoom = document.querySelector("#wrong-room-1");
const rightRoom = document.querySelector("#rightRoom");
const roomsArray = document.querySelectorAll(".grid-item");
const textEl = document.querySelector('.text-plant');



roomsArray.forEach((room) => {
  room.addEventListener('mouseleave', () => {
    const plantchiImg = document.getElementById('plant-chi_neutral');
    plantchiImg.remove();
    const imgEl = document.createElement('img');//<img>
    imgEl.src = 'public/images/plant-chi/plant-chi_neutral.png';
    imgEl.setAttribute('id', 'plant-chi_neutral');
    textEl.parentNode.insertBefore(imgEl, textEl);
  });
});

wrongRoom.addEventListener('mouseover', () => {
    const plantchiImgNeutral = document.getElementById('plant-chi_neutral');
    plantchiImgNeutral.remove();
    const imgEl = document.createElement('img');//<img>
    imgEl.src = 'public/images/plant-chi/plant-chi_unhappy.png';
    imgEl.setAttribute('id', 'plant-chi-img');
    textEl.parentNode.insertBefore(imgEl, textEl);
});

rightRoom.addEventListener('mouseover', () => {
  const plantchiImgNeutral2 = document.getElementById('plant-chi_neutral');
  plantchiImgNeutral2.remove();
  const imgEl = document.createElement('img');
  imgEl.src = 'public/images/plant-chi/plant-chi_happy.png';
  imgEl.setAttribute('id', 'plant-chi-img');
  textEl.parentNode.insertBefore(imgEl, textEl);
});  