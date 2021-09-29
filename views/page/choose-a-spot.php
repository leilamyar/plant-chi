<main class="spot-choice-c">
  <!-- COLUMN 1 = plant-chi img + text -->
  <div class="instructions-flex-c">
      <img class="plant-chi-img" src="public/images/plant-chi_neutral.png" alt="Plant-chi gives instructions">
    <p class="text">Choose the right spot for me &#60;3 </p>
  </div>
  <!-- COLUMN 2 = room img -->
  <div class="room-c">
    <img class="room-img" src="public/images/rooms/bright_no_direct_sun.png" alt="Image of a bright room, with no direct sunlight">
  </div>
  <!-- COLUMN 2 = grid ON TOP of room img -->
  <div class="room-c">
    <!-- <div class="room-img"></div> -->
    <a href="?section=you-win">
      <div class="spot" id="good-spot">&nbsp;</div>
    </a>
    <a href="?section=fail-spot">
      <div class="spot" id="wrong-spot-1">&nbsp;</div>
    </a>
    <a href="?section=fail-spot">
      <div class="spot" id="wrong-spot-2">&nbsp;</div>
    </a>
  </div>
</main>
<script src="public/js/choose-a-spot.js"></script>