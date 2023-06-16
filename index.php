<?php require 'header.php'; ?>

  <h1 class="display-1">Welcome to my website/portfolio</h1>

  <canvas id="projector">Your browser does not support the Canvas element.</canvas>

  <div class="timeDesign">
    <div id="time1">
      <script>
        document.getElementById("time1").innerHTML = "Date : " + Date();
      </script>
    </div>
  </div>

  <?php require 'footer.php' ?>