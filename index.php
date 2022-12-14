<!DOCTYPE html>
<html lang="en-US">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>American High School Bathroom </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    
    </style>
</head> <!--fonts: https://fonts.google.com/specimen/Abril+Fatface?category=Display#standard-styles -header
https://fonts.google.com/specimen/Source+Sans+Pro?category=Sans+Serif,Monospace - basic text-->
<body> <!--#dda15e(bronze) and #bcb8b1(light gray) and #8a817c(dark gray)-->
    <div class="hBar">
      <a href="index.html" id="home"><img src="./Images/logi.png" alt="logo" title="logo">AHS</a><div class="sep"></div>
      <div id="form"><a href="form.php"><img src="./Images/form.png" alt="form"><div class="hidden"> Form</div></a></div><div class="sep"></div>
      <div id="map"><a href="map.html"><img src=./Images/map.png alt="map"><div class="hidden"> Map</div></a></div><div class="sep"></div>
      <div id="contact"><a href="contact.html"><img src="./Images/contact.png" alt="contact us"><div class="hidden"> Contact Us</div></a></div><div class="sep"></div>
    </div>

  <div>
    <h1 id = "title">American High School Bathroom Checker</h1>
  </div>
  <div>
    <h3 id = "title">Open Bathrooms</h3>
    <?php
        include "open_bathrooms.php";
    ?>
  </div>
  <div class = "topicSection">

    <div class = "topics">
      <p>
        <img class="mySlides1" src="./Images/formflyer.png" style = "width:100%">
        <img class="mySlides1" src="./Images/whyform.png" style="width:100%">
        <div><a href = "form.php">
              <img class="mySlides1" src="./Images/link.png" style="width:100%">
            </a>
      </div>
        <button onclick="plusDivs(-1, 0)">&#10094;</button>
        <button  onclick="plusDivs(1, 0)">&#10095;</button>
      </p>
    </div>

    <div class = "topics">
          <img class="mySlides2" src="./Images/mapflyer.png" style = "width:100%">
          <img class="mySlides2" src="./Images/ahsmap.png" style="width:100%">
          <div><a href = "map.html">
                <img class="mySlides2" src="./Images/link.png" style="width:100%">
              </a>
          </div>
          <button onclick="plusDivs(-1, 1)">&#10094;</button>
          <button onclick="plusDivs(1, 1)">&#10095;</button>
    </div>
  </div>
  <script>
  var slideIndex = [1,1];
  var slideId = ["mySlides1", "mySlides2"]
  showDivs(1, 0);
  showDivs(1, 1);

  function plusDivs(n, no) {
    showDivs(slideIndex[no] += n, no);
  }

  function showDivs(n, no) {
    var i;
    var x = document.getElementsByClassName(slideId[no]);
    if (n > x.length) {slideIndex[no] = 1}
    if (n < 1) {slideIndex[no] = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    x[slideIndex[no]-1].style.display = "block";
  }
  </script>
    <hr />
</body>
</html>
