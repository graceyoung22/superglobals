<?php
//$GLOBALS- an associative array containing references to all varibales which
	//are currently defined in the global scope of the script. The
	//variable names are the keys of the array
function test() {
	$foo = "local variable";
	echo '$foo in global schope: ' . $GLOBALS["foo"] . "\n";
	echo '$foo in current scope: ' . $foo . "\n";
}
$foo = "Example content";
test();

//$_SERVER- an array containing information such as headers, paths, and script
	//locations. The entries in this array are created by the web server
	//Server and execution environment information
echo $_SERVER['Server_Name']

//$_GET- an associative array of variables passes to the current script via 
	//the URL parameters
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';	

//$_POST- an associative array of variables passed to the current script via
	//the HTTP POST method when using applicaiton /x-www-form-urlencoded
	//or multipart.form-data as the HTTP Content-Type in the request
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';

//$_FILES- 
$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name'])
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
	echo "F

//$_COOKIE- 

//$_SESSION- 

//$_REQUEST- 

//$_ENV- 





?>
