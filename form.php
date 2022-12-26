<!DOCTYPE html>
<html lang="en-US">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="styles.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>AHS Bathroom Signup Form</title>
    <style>
    h1{
      text-align: center;
    }
    #title{
        font-family: 'Abril Fatface', cursive;
        font-size: 50px;
        margin-bottom: 50px;
    }
    #caption{
        margin-top: 10px;
    }
    body{
      background-image: linear-gradient(white, red);
      color: black;
    }
    body>img,dl>img{
      width: 85%;
      margin-bottom: 30px;
    }
    h3{
        font-size: 35px;
        margin-top: 5px;
        font-family: 'Abril Fatface', cursive;
    }
    p,dl{
        font-size: 18px;
        line-height: 150%;
    }
    dt{
        font-family: 'Abril Fatface', cursive;
        font-size: 25px;
    }
    #disclaimer{
        color: gray;
        font-size: 6px;

    }
    #small{
      font-size: 6px;
      color: gray;
      display: inline;
    }
    #hPic{
      width: 85%;
      margin: auto;
    }
    .hBar{
        background-color: white;
        text-align: left;
        position: sticky;
        top: 0;
        margin: 0px;
        margin-bottom: 5px;
        padding-top: 10px;
        padding-left: 10px;
        padding-bottom: 5px;
        font-family: 'Abril Fatface', cursive;
        border-bottom: 2px solid;
        border-color: #8a817c;
        font-size: 30px;
        color: black;
    }
    a:link{
      text-decoration: none;
      font-family: 'Abril Fatface', cursive;
    }
    a:hover{
      display: inline;
    }
    a:visited .hidden{
      color: #BCB8DD;
    }
    .hBar *{
      display: inline;
    }
    .hidden{
      visibility: hidden;
      position: absolute;
    }
    #home:hover, #home:hover *{
        background-color: #8a817c;
    }

    #form:hover *{
      visibility: visible;
      position: static;
      background-color: #8a817c;
      color: #000000;
    }
    #contact:hover *{
      visibility: visible;
      position: static;
      background-color: #8a817c;
      color: #000000;
    }
    #map:hover *{
      visibility: visible;
      position: static;
      background-color: #8a817c;
      color: #000000;
    }
    .sep{
      padding-left: 30px;
      display: inline;
    }
    /*.line{
      display: inline;
      border-left: 1px solid;

    }*/
    .topicSection{
      display: grid;
      grid-template-columns: auto auto;
      grid-template-columns: auto auto;
      padding-bottom: 300px;
    }
    .forum{
      border-size: 5px;
      background-color: pink;
      border-top: double;
      border-left: double;
      border-right: double;
      margin-left: 30%;
      margin-right: 30%;
      margin-bottom: 20%;
      margin-top: 10%;
      padding-bottom: 30px;
    }
    </style>
</head> <!--fonts: https://fonts.google.com/specimen/Abril+Fatface?category=Display#standard-styles -header
https://fonts.google.com/specimen/Source+Sans+Pro?category=Sans+Serif,Monospace - basic text-->
<body> <!--#dda15e(bronze) and #bcb8b1(light gray) and #8a817c(dark gray)-->
  <div class="hBar">
    <a href="index.php" id="home"><img src="./Images/logi.png" alt="logo" title="logo">AHS</a><div class="sep"></div>
    <div id="form"><a href="form.html"><img src="./Images/form.png" alt="form"><div class="hidden"> Form</div></a></div><div class="sep"></div>
    <div id="map"><a href="map.html"><img src=./Images/map.png alt="map"><div class="hidden"> Map</div></a></div><div class="sep"></div>
    <div id="contact"><a href="contact.html"><img src="./Images/contact.png" alt="contact us"><div class="hidden"> Contact Us</div></a></div><div class="sep"></div>
  </div>

  <div>
    <h1 id = "title">American High School Bathroom Forum</h1>
  </div>
  <div class = "forum">
    <h1> Report Bathroom Status Change</h1><br>
    <form>
      <div id="location">
        <h4>Location</h4>
        <input type="radio" name="location" value="300 wing">
        <label>300 wing</label><br>
        <input type="radio" name="location" value="700 wing">
        <label>700 wing</label><br>
        <input type="radio" name="location" value="Parking Lot">
        <label>Parking Lot</label><br>
        <input type="radio" name="location" value="New Building (bottom)">
        <label>New Building (Bottom)</label><br>
        <input type="radio" name="location" value="New Building (top)">
        <label>New Building (Top)</label><br>
      </div><br>
      <div id = "gender">
        <h4>Gender</h4>
        <input type="radio" name="gender" value="male">
        <label>male</label><br>
        <input type="radio" name="gender" value="female">
        <label>female</label><br>
      </div><br>
      <div id = "status">
        <h4>Status</h4>
        <input type="radio" name="status" value="1">
        <label>open</label><br>
        <input type="radio" name="status" value="0">
        <label>closed</label><br>
      </div><br>
      <input type="submit" value="Submit">
    </form>
  <br>

    <?php
        include "db_connect.php";
        if (isset($_GET["location"])) {
            $location = $_GET["location"];
            $gender = $_GET["gender"];
            $status = $_GET["status"];

            // update database based on user input
            $sql = "UPDATE bathrooms SET status=$status WHERE location='$location' AND gender='$gender'";
            $conn->query($sql);
        }


        $conn->close();
    ?>
</body>
</html>
