<?php

//include('testing.php');

	$connection = mysqli_connect('localhost','root','root');
mysqli_select_db($connection, 'Lucy');


/*
 __  __  ___  ____  ____  ___ 
(  )(  )/ __)( ___)(  _ \/ __)
 )(__)( \__ \ )__)  )   /\__ \
(______)(___/(____)(_)\_)(___/

*/


echo "<h2>Users Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"Users\">"; // start a table tag in the HTML

echo "<tr><th>UserId</th><th>Password</th><th>Birthdate</th><th>is_admin</th></tr>";

$query = "SELECT * FROM Users"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  $boolean = $row['is_admin'] ? true : false; // OR $boolean = $row['is_admin'] ? "true" : "false";
  echo "<tr><td>" . $row['UserID'] . "</td><td>" . $row['Password'] . "</td><td>" . $row['Birthdate'] . "</td><td>" . $boolean . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";

/*
 ___   ___  ____  ____  ____  _  _    _  _    __    __  __  ____  ___ 
/ __) / __)(  _ \( ___)( ___)( \( )  ( \( )  /__\  (  \/  )( ___)/ __)
\__ \( (__  )   / )__)  )__)  )  (    )  (  /(__)\  )    (  )__) \__ \
(___/ \___)(_)\_)(____)(____)(_)\_)  (_)\_)(__)(__)(_/\/\_)(____)(___/

*/


echo "<h2>Screen_Name Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"ScreenName\">"; // start a table tag in the HTML

echo "<tr><th>UserId</th><th>Screen_Name</th></tr>";

$query = "SELECT * FROM Screen_Name"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['UserID'] . "</td><td>" . $row['Screen_Name'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";

/*
 ____  __  __    __    ____  __   
( ___)(  \/  )  /__\  (_  _)(  )  
 )__)  )    (  /(__)\  _)(_  )(__ 
(____)(_/\/\_)(__)(__)(____)(____)

*/

echo "<h2>Email Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"email\">"; // start a table tag in the HTML

echo "<tr><th>UserID</th><th>email_address</th></tr>";

$query = "SELECT * FROM Email"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['UserID'] . "</td><td>" . $row['email_address'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";


/*
 ____  __  _  _    ____  ____  ___  ____  _____  _  _  ___  ____  ___ 
( ___)/__\( \/ )  (  _ \( ___)/ __)(  _ \(  _  )( \( )/ __)( ___)/ __)
 )__)/(__)\\  /    )   / )__) \__ \ )___/ )(_)(  )  ( \__ \ )__) \__ \
(__)(__)(__)\/    (_)\_)(____)(___/(__)  (_____)(_)\_)(___/(____)(___/

*/


echo "<h2>Favorite_Response Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"fav_responses\">"; // start a table tag in the HTML

echo "<tr><th>UserID</th><th>Response_ID</th></tr>";

$query = "SELECT * FROM Favorite_Response"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['UserID'] . "</td><td>" . $row['Response_ID'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";


/*
 ____  ____  ___  ____  _____  _  _  ___  ____  ___ 
(  _ \( ___)/ __)(  _ \(  _  )( \( )/ __)( ___)/ __)
 )   / )__) \__ \ )___/ )(_)(  )  ( \__ \ )__) \__ \
(_)\_)(____)(___/(__)  (_____)(_)\_)(___/(____)(___/

*/


echo "<h2>Responses Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"Responses\">"; // start a table tag in the HTML

echo "<tr><th>Response_ID</th><th>response</th></tr>";

$query = "SELECT * FROM Responses"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['Response_ID'] . "</td><td>" . $row['response'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";


/*
   __    ___  ___  ____  ____  ____  ____  ____     ____  ____  ___  ____  _____  _  _  ___  ____  ___ 
  /__\  / __)/ __)( ___)(  _ \(_  _)( ___)(  _ \   (  _ \( ___)/ __)(  _ \(  _  )( \( )/ __)( ___)/ __)
 /(__)\( (__( (__  )__)  )___/  )(   )__)  )(_) )   )   / )__) \__ \ )___/ )(_)(  )  ( \__ \ )__) \__ \
(__)(__)\___)\___)(____)(__)   (__) (____)(____/   (_)\_)(____)(___/(__)  (_____)(_)\_)(___/(____)(___/

*/


echo "<h2>Accepted_Responses Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"accresponse\">"; // start a table tag in the HTML

echo "<tr><th>ID</th><th>Sourse_ID</th><th>Response_ID</th></tr>";

$query = "SELECT * FROM Accepted_Responses"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['Sourse_ID'] . "</td><td>" . $row['Response_ID'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";


/*
 ____    __    _  _  _  _  ____  ____  
(  _ \  /__\  ( \( )( \( )( ___)(  _ \ 
 ) _ < /(__)\  )  (  )  (  )__)  )(_) )
(____/(__)(__)(_)\_)(_)\_)(____)(____/ 

*/


echo "<h2>Banned Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"Banned\">"; // start a table tag in the HTML

echo "<tr><th>Bannedtext</th></tr>";

$query = "SELECT * FROM Banned"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['Bannedtext'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";


/*
 _   _  ____  ___  ____  _____  ____  _  _ 
( )_( )(_  _)/ __)(_  _)(  _  )(  _ \( \/ )
 ) _ (  _)(_ \__ \  )(   )(_)(  )   / \  / 
(_) (_)(____)(___/ (__) (_____)(_)\_) (__) 

*/


echo "<h2>History Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"History\">"; // start a table tag in the HTML

echo "<tr><th>UserID</th><th>ResponseID</th><th>time_stamp</th></tr>";

$query = "SELECT * FROM History"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['UserID'] . "</td><td>" . $row['ResponseID'] . "</td><td>" . $row['time_stamp'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";


/*
   __    ____  __  __  ____  _  _       __    _____  ___ 
  /__\  (  _ \(  \/  )(_  _)( \( )     (  )  (  _  )/ __)
 /(__)\  )(_) ))    (  _)(_  )  (  ___  )(__  )(_)(( (_-.
(__)(__)(____/(_/\/\_)(____)(_)\_)(___)(____)(_____)\___/

*/


echo "<h2>admin_log Table</h2>";
echo "<input class=\"spoilerbutton\" type=\"button\" value=\"Show\" onclick=\"this.value=this.value=='Show'?'Hide':'Show';\">
<div class=\"spoiler\"><div>";

echo "<table id=\"admin_log\">"; // start a table tag in the HTML

echo "<tr><th>time</th><th>admin_ID</th><th>content</th></tr>";

$query = "SELECT * FROM admin_log"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['time'] . "</td><td>" . $row['admin_ID'] . "</td><td>" . $row['content'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</div></div>";




mysqli_close(); //Make sure to close out the database connection


?>
