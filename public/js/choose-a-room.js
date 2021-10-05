/* console.log("Hello Choose a room");


const wrongRoom = document.querySelectorAll("#wrong-room-1");
const goodRoom = document.querySelector("#good-room");
const rooms = document.querySelectorAll(".spot");
const textEl = document.querySelector('.text');

spots.forEach((room) => {
  spot.addEventListener('mouseleave', () => {
    const plantchiImg = document.getElementById('plant-chi-img');
    plantchiImg.remove();
    const imgEl = document.('img');
    imgEl.src = 'public/images/plant-chi/plant-chi_neutral.png';
    imgEl.setAttribute('id', 'plant-chi-img');
    textEl.parentNode.insertBefore(imgEl, textEl);
  });
});

wrongRoom.forEach((wrongRoom) => {
  wrongRoom.addEventListener('mouseover', () => {
    const plantchiImg = document.getElementById('room.png');
    plantchiImg.remove();
    const imgEl = document.createElement('img');
    imgEl.src = 'public/images/plant-chi/plant-chi_unhappy.png';
    imgEl.setAttribute('id', 'plant-chi-img');
    textEl.parentNode.insertBefore(imgEl, textEl);
  });
});
goodRoom.addEventListener('mouseover', () => {
  const plantchiImg = document.getElementById('plant-chi-img');
  plantchiImg.remove();
  const imgEl = document.createElement('img');
  imgEl.src = 'public/images/plant-chi/plant-chi_happy.png';
  imgEl.setAttribute('id', 'plant-chi-img');
  textEl.parentNode.insertBefore(imgEl, textEl);
}); */