<?php

/*
  ___  _   _    __    _  _  ___  ____    _  _    __    __  __  ____ 
 / __)( )_( )  /__\  ( \( )/ __)( ___)  ( \( )  /__\  (  \/  )( ___)
( (__  ) _ (  /(__)\  )  (( (_-. )__)    )  (  /(__)\  )    (  )__) 
 \___)(_) (_)(__)(__)(_)\_)\___/(____)  (_)\_)(__)(__)(_/\/\_)(____)

*/

include_once ('functions.php');
echo "<h2>looking for Timaeus: </h2><br>";
echo "checking tim: ";
echo "" . checkUserNameExists("Tim") ? "true":"false";
echo "<br>";
echo "checking timaeus: ";
echo "" . checkUserNameExists("Timaeus") ? "true":"false";
echo "<br>";
echo "<h2>changing to Timaeus: </h2>";
echo "" . changeUserName("coloring","Timaeus") ? "true":"false";
echo "<br>"; 
echo "checking tim: ";
echo "" . checkUserNameExists("Tim") ? "true":"false";
echo "<br>";
echo "checking timaeus: ";
echo "" . checkUserNameExists("Timaeus") ? "true":"false";
echo "<br>";
echo "<h2>changing back to Tim: </h2>";
echo "<br>";
echo "" . changeUserName("coloring","Tim") ? "true":"false";
echo "<br>"; 
echo "checking tim: ";
echo "" . checkUserNameExists("Tim") ? "true":"false";
echo "<br>";
echo "checking timaeus: ";
echo "" . checkUserNameExists("Timaeus") ? "true":"false";
echo "<br>";
//*/

?>