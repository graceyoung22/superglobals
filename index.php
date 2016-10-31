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

//$_FILES- an associative array of items uploaded to the current script via
	//the HTTP POST method. The structure of this array is outlined in 
	//the POST mestion uploads section
$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name'])
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
	echo "File is valid and was successfully uploaded.\n";
} else {
	echo "Possible file upload attack!\n";
}
echo 'Here is some more debugging info: ';
print_r($_FILES);
print "</pre>";

//$_COOKIE- an associative array of variables passed to the current script
	//via HTTP Cookies
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';

//$_SESSION- an associative array containing session variables available to 
	//the current script 
//Creating new session
session_start();
$_SESSION["newsession"] = $value;

//$_REQUEST- an associative array that by defalut contains the contents of 
	//$_GET, $_POST, and $_COOKIE
switch($_SERVER['REQUEST_METHOD'])
{
case 'GET': $the_request = &$_GET; break;
case 'POST': $the_request = &$_POST; break;
.
. //Etc.
.
default:
}

//$_ENV- an associative array of variables passed to the current script via 
	//the environment method
echo 'My username is ' .$_ENV["USER"] . '!';

?>
