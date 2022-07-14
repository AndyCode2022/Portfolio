<?php require 'header.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andrew's Portfolio</title>

</head>

<body>

  <h1>Welcome to my website/portfolio</h1>

  <canvas id="projector">Your browser does not support the Canvas element.</canvas>

  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Summary of Skills</h1>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4">
        <h3>Websites</h3>
        <p>I can make webpages that are within my limits. Learning all the time to improve my knowledge.</p>
        <p>I am still learning to become a full on software developer</p>
      </div>
      <div class="col-sm-4">
        <h3>Python</h3>
        <p>I have knowledge in python at making certain applications. I have made a school maths game for children and fitness app.</p>
        <p>I have made applications which feature tkinter</p>
      </div>
      <div class="col-sm-4">
        <h3>Java</h3>
        <p>Currently at college I am learning the fundamentals of Java. I already have a broad understanding of Python
          So therefore I am understanding Java a lot more clearly.</p>
      </div>
    </div>
  </div>

  <div class="test">
    <div id="time1">
      <script>
        document.getElementById("time1").innerHTML = "Date : " + Date();
      </script>
    </div>
  </div>

</body>

</html>