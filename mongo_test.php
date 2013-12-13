<?php

$number = size_mongo();
echo add_mongo("test","PHP has two .ini files, one for website, one for not. Mongo needs to be added to both.......Ugh");
$number2 = size_mongo();
echo "MongoDB size: " . $number2 . "\n";
if ( $number+1 == $number2 ){
	echo "MongoDB successufly added user.\n";
}
else {
	echo "MongoDB failed.\n";
}



function add_mongo($user, $change)
{
//	  $user = "Jim";
//	  $change = "Something really bad....";
	try {
	  // open connection to MongoDB server
	  $conn = new Mongo('localhost');

	  // access database
	  $db = $conn->test;

	  // access collection
	  $collection = $db->changeLog;

	// insert a new document
	  $item = array(
	    'user' => $user,
	    'change' => $change,
	    'date' => date('Y-m-d H:i'),
	  );
	  $collection->insert($item);
	  echo 'Inserted document with ID: ' . $item['_id'] . "\n";
	  
	  // disconnect from server
	  $conn->close();
	} catch (MongoConnectionException $e) {
	  die('Error connecting to MongoDB server');
	} catch (MongoException $e) {
	  die('Error: ' . $e->getMessage());
	}
}

function size_mongo()
{
	try {
	  // open connection to MongoDB server
	  $conn = new Mongo('localhost');

	  // access database
	  $db = $conn->test;

	  // access collection
	  $collection = $db->changeLog;

	 // execute query
	  // retrieve all documents
	  $cursor = $collection->find();
		$result = $cursor->count();
	  // disconnect from server
	  $conn->close();
	} catch (MongoConnectionException $e) {
	  die('Error connecting to MongoDB server');
	} catch (MongoException $e) {
	  die('Error: ' . $e->getMessage());
	}
	  return $result;  
}

function list_mongo()
{
	try {
	  // open connection to MongoDB server
	  $conn = new Mongo('localhost');

	  // access database
	  $db = $conn->test;

	  // access collection
	  $collection = $db->changeLog;

	 // execute query
	  // retrieve all documents
	  $cursor = $collection->find();

	  // iterate through the result set
	  // print each document
	  $break = "\n";
	  $str = '';
	  echo $cursor->count() . ' document(s) found.' . $break;  
	  foreach ($cursor as $obj) {
	    $str = $str . 'User: ' . $obj['user'] . ' ';
	    $str = $str . '  on ' . $obj['date'] . $break;
	    $str = $str . 'change: ' . $obj['change'] . ' ';
	    $str = $str . $break;
	  }

	  // disconnect from server
	  $conn->close();
	} catch (MongoConnectionException $e) {
	  die('Error connecting to MongoDB server');
	} catch (MongoException $e) {
	  die('Error: ' . $e->getMessage());
	}
		//this is the return text
	  return $str;
}

?>
