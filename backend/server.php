
<?php
session_start();
    require_once $_SERVER['DOCUMENT_ROOT']."/settings.php";



?>





<?php
// initializing variables
$username = "";
$email    = "";
$errors = array(); 


// connect to the database
$dab = $data ;
$db = $data ;
$word = array("update","select","insert",">","=",";","drop"); 
$word1 = "update" ;
$word2 = "select" ;
$word3 = "insert" ;
$word4 = "<" ;
$word5 = "=" ;
$word6 = ";" ;
$word7 = "drop" ;
// REGISTER USER
$jrrguser = $_POST['email'] ;
if (isset($_POST['reg_user'])){
//for($i = 0 ; $i<7 ; $i++){
if(strpos(strtolower($_POST['email']), $word4) === false && strpos(strtolower($_POST['email']), $word4) === false && strpos(strtolower($_POST['password_1']), $word4) === false && strpos(strtolower($_POST['password_2']), $word4) === false && strpos(strtolower($_POST['email']), $word5) === false && strpos(strtolower($_POST['email']), $word5) === false && strpos(strtolower($_POST['password_1']), $word5) === false && strpos(strtolower($_POST['password_2']), $word5) === false && strpos(strtolower($_POST['email']), $word6) === false && strpos(strtolower($_POST['email']), $word6) === false && strpos(strtolower($_POST['password_1']), $word6) === false && strpos(strtolower($_POST['password_2']), $word6) === false) {

  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['email']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Email is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Email already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before //saving in the database
if ($_SERVER['HTTP_X_FORWARDED_FOR']){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} 
else{ 
    $ip = $_SERVER['REMOTE_ADDR'];
}

// get the country from ip



function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

// country
$extcookie = 'xxx000eee777';
$usrsess = $_POST['email'];
$cookieid = $usrsess.$extcookie;
$blockchatfile = $usrsess."blockchat.txt";
	file_put_contents($blockchatfile,0);
	$blockfile = $usrsess."block.txt";
	file_put_contents($blockfile,0);
$country = ip_info("Visitor", "Country");
//$er = "no error";

  	$query = "INSERT INTO users (username, email, password, ip, country, cookie) 
  			  VALUES('$username', '$email', '$password', '$ip', '$country', '$cookieid')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = strtolower($username);
  	$_SESSION['success'] = "You are now logged in";
        $_SESSION['loggedIn'] = false ;
  //	header('location: ../index.php');
 }
}
}

$word1 = "update" ;
$word2 = "select" ;
$word3 = "insert" ;
$word4 = "<" ;
$word5 = "=" ;
$word6 = ";" ;
$word7 = "drop" ;

if(isset($_POST['login_user']) && strpos(strtolower($_POST['email']), $word1) === false && strpos(strtolower($_POST['email']), $word2) === false && strpos(strtolower($_POST['email']), $word3) === false && strpos($_POST['email'], $word4) === false && strpos($_POST['email'], $word5) === false && strpos($_POST['email'], $word6) === false && strpos(strtolower($_POST['email']), $word7) === false && strpos(strtolower($_POST['password']), $word1) === false && strpos(strtolower($_POST['password']), $word2) === false && strpos(strtolower($_POST['password']), $word3) === false && strpos($_POST['password'], $word4) === false && strpos($_POST['password'], $word5) === false && strpos($_POST['password'], $word6) === false && strpos(strtolower($_POST['password']), $word7) === false) {
  $username = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	 $blockedcase = mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1 && $blockedcase['blocked'] != 1) {
  	  $_SESSION['username'] = strtolower($username);
	  
	 // $check_sessionid = "SELECT sessionid FROM users WHERE username='$username'";
 // $runcheckid = mysqli_query($db, $check_sessionid);
  //   $sessionid = mysqli_fetch_assoc($runcheckid);
   //   $sessionuni = $sessionid["sessionid"];
  //if($sessionuni!= 1){session_destroy();
  //	unset($_SESSION['username']);
  	// header("location: login.php");}
	  
  	  $_SESSION['success'] = "You are now logged in";
           $_SESSION['loggedIn'] = false ;
		    header('location: otp.php');
		  
   	       
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
	
  }
}

if($_SESSION['loggedIn'] == true){
// header('location: ../index.php');

}




	  	 

?>


<?php
// redirect blocked ip
  if ($_SERVER['HTTP_X_FORWARDED_FOR']){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} 
else{ 
    $ip = $_SERVER['REMOTE_ADDR'];
}


$get_blocked_ipnc = "SELECT ip FROM users WHERE blocked = 1";
  $get_blockedresult = mysqli_query($db, $get_blocked_ipnc);
  while($blockinfo = mysqli_fetch_assoc($get_blockedresult)){
   

  

foreach($blockinfo as $sKey => $sValue) {
  if($ip == $sValue){header('location: ../backend/login.php');}}}


?>
