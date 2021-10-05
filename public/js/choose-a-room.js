console.log("Hello Choose a room");

/* document.getElementById("wrongRoom").addEventListener("mouseover", mouseOver);
document.getElementById("wrongRoom").addEventListener("mouseout", mouseOut);

function mouseOver() {
  document.getElementById("wrongRoom").;
}

function mouseOut() {
  document.getElementById("demo").style.color = "black";
} */

const wrongRoom = document.querySelector("#wrong-room-1");
const goodRoom = document.querySelector("#good-room");
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

/* goodRoom.addEventListener('mouseover', () => {
  const plantchiImg = document.getElementById('righRoom');
  plantchiImg.remove();
  const imgEl = document.createElement('img');
  imgEl.src = 'public/images/plant-chi/plant-chi_happy.png';
  imgEl.setAttribute('id', 'plant-chi-img');
  textEl.parentNode.insertBefore(imgEl, textEl);
});  */