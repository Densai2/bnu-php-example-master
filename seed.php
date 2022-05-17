<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   if (isset($_SESSION['id'])) {
    

    $sql = "INSERT INTO student(firstname, lastname, studentid, password, dob, house, town, county, country, postcode)
    VALUES ('hallie', 'hall', '50693', 'cat','1990-06-04','2 bletchly manor','aylesbury','buckinghamshire', 'UK','NO93 2HU')";
    $result = mysqli_query($conn, $sql);

    $sql = "INSERT INTO student(firstname, lastname, studentid, password, dob, house, town, county, country, postcode)
    VALUES ('rick', 'morty', '58593', 'giraffe','1990-08-21','9 carry line','wendover','buckinghamshire', 'UK','JI43 8VB')";
    $result = mysqli_query($conn, $sql);
    
    $sql = "INSERT INTO student(firstname, lastname, studentid, password, dob, house, town, county, country, postcode)
    VALUES ('rob', 'legi', '2729', 'hamster','2000-04-25','3 harvord way','wycombe','buckinghamshire', 'UK','BB42 2UH')";
    $result = mysqli_query($conn, $sql);

    $sql = "INSERT INTO student(firstname, lastname, studentid, password, dob, house, town, county, country, postcode)
    VALUES ('gerald', 'night', '92842', 'lion','1987-04-04','1 dent road','wendover','buckinghamshire', 'UK','YB53 9NU')";
    $result = mysqli_query($conn, $sql);

    $sql = "INSERT INTO student(firstname, lastname, studentid, password, dob, house, town, county, country, postcode)
    VALUES ('yabi', 'kai', '38592', 'tortoise','1999-02-30','5 leaf cross','wendover','buckinghamshire', 'UK','BU83 1FT')";
    $result = mysqli_query($conn, $sql);
   }

?>
