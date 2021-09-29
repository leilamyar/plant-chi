console.log("Hello Choose a plant");

const chooseYourPlant = document.querySelector('.choose-your-plant');

chooseYourPlant.addEventListener('click',function(e){
    chooseYourPlant.style.display = "none";
    //like this the block ".choose-your-plant" will be hidden!
});

