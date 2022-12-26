<?php
    include "db_connect.php";

    // Run query for open bathrooms
    $sql = "SELECT location, gender FROM bathrooms WHERE status=1";
    $result = $conn->query($sql);

    // Display available bathrooms
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row["location"] . " " . $row["gender"] . "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?>