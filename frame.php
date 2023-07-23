<?php 
 session_start();
include('backend/server.php'); 
?>
<?php
header("Access-Control-Allow-Headers: *");
?>
<?php
$getsettings = "SELECT * FROM settings";
 $resultsettings = mysqli_query($db, $getsettings);
  $displaysettings = mysqli_fetch_assoc($resultsettings);
$budget = explode(',', $displaysettings['budgetrange']);
$maxbudget = $budget[count($budget)-1];
$minbudget = $budget[0];

?>
<?php
$maxtime = +$displaysettings['timemax'] + 1;
$mintime = +$displaysettings['timemin'] - 1;
$maxamount = +$maxbudget + 1;
$minamount = +$minbudget - 1;
$win = 0;
if(isset($_SESSION['username']) && $_SESSION['loggedIn'] == true){
	$currentuser = 	$_SESSION['username'];
	
if(isset($_GET['lohi']) && isset($_GET['amount']) && isset($_GET['time']) && isset($_GET['spair'])){

$lohi = $_GET['lohi'];
$amount = +$_GET['amount'];
$time = +$_GET['time'];
$spair = $_GET['spair'];
if($time < $maxtime && $time > $mintime && $amount>$minamount && $amount<$maxamount){
	$balance_get = "SELECT balance FROM users WHERE username='$currentuser'";
  $results = mysqli_query($db, $balance_get);
  $getbalance = mysqli_fetch_assoc($results);
$bbalance = +$getbalance['balance'];

if($bbalance>$amount || $bbalance == $amount){
		$balancereq = "UPDATE users SET balance = balance - '$amount' where username = '$currentuser'";
$runcombalance = mysqli_query($db, $balancereq);

		$url = "http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/prices";
   
   

   // Log::info('START SERVICE CALL :' . json_encode($url). " : ".json_encode($post_data));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST);
    curl_setopt($ch, CURLOPT_POSTFIELDS);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER , array(
        "cache-control: no-cache",
        "content-type: text/plain",
    ));
    $ccc = curl_exec($ch);
$firstobject = json_decode($ccc);
//echo $object;

$price =  $firstobject  -> $spair -> price; 
$price = +$price;
 $timestp = time();
	$timesum = +$timestp + +$time;
		$insertoptions = "INSERT INTO options (amount,time,hilo,pair,price,timestamp,firstprice,username,timesum) values ('$amount','$time','$lohi','$spair','$price',$timestp,'$price','$currentuser','$timesum')";
$optionsresult = mysqli_query($db, $insertoptions);

 //if($lohi == "lo"){parent.floprice($price);}
// else{parent.fprice($price);}
	
}

}
}
else if(isset($_GET['last'])){
  $timenow = time();
  $timenow = +$timenow;
  $timeplus = +$timenow + 2;
  $timeminus = +$timenow - 2;
$getresult = "SELECT * FROM options WHERE (result='noresult' AND username = '$currentuser')  AND (timesum < '$timeplus' AND timesum > '$timeminus') OR (timesum = '$timenow')";
 $resultget = mysqli_query($db, $getresult);
  $firsttimestamp = mysqli_fetch_assoc($resultget);
  
  if($firsttimestamp["result"] == "noresult"){
  //if(time() - $firsttimestamp["timestamp"]>$firsttimestamp["time"] || time() - $firsttimestamp["timestamp"] == $firsttimestamp["time"]){
  $id = +$firsttimestamp["id"];
 $updateres = "UPDATE options SET result = 'updated' where id = '$id' ";
$updateresrun = mysqli_query($db, $updateres);
	$url = "http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/prices";
   
   

   // Log::info('START SERVICE CALL :' . json_encode($url). " : ".json_encode($post_data));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST);
    curl_setopt($ch, CURLOPT_POSTFIELDS);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER , array(
        "cache-control: no-cache",
        "content-type: text/plain",
    ));
    $ccc = curl_exec($ch);
	
	$object = json_decode($ccc);
//echo $object;
$getpair = $firsttimestamp["pair"];
$newprice =  $object  -> $getpair -> price;
$newprice = +$newprice;
 

$lastprice = "UPDATE options SET lastprice = '$newprice' where id = '$id' ";
$lastpricerun = mysqli_query($db, $lastprice);
  
$hilo = $firsttimestamp['hilo'];
 //if($firsttimestamp['hilo'] == "lo"){parent.lloprice($newprice);}
 //else{parent.lprice($newprice);}

/*$timeh = $firsttimestamp["timestamp"] + $firsttimestamp["time"];
$selectprice = "SELECT price FROM pricehistory WHERE timestamp='$timeh'";
 $getprice = mysqli_query($db, $selectprice);
  $runprice = mysqli_fetch_assoc($getprice);
  $newprice = $runprice['price'];*/
  
if(($newprice > +$firsttimestamp["price"] && $firsttimestamp["hilo"] == "hi") || ($newprice < +$firsttimestamp["price"] && $firsttimestamp["hilo"] == "lo")){

$win = (+$firsttimestamp["amount"]*68/100) + +$firsttimestamp["amount"];
	
$balanceup = "UPDATE users SET balance = balance + '$win' where username = '$currentuser'";
$balanceuprun = mysqli_query($db, $balanceup);
}	


  
  //}
  }




}
else{
$getresult = "SELECT * FROM options WHERE result='noresult' AND username = '$currentuser' ORDER BY id DESC LIMIT 1";
 $resultget = mysqli_query($db, $getresult);
  $firsttimestamp = mysqli_fetch_assoc($resultget);
  $am = $firsttimestamp['amount'];
  if($firsttimestamp["result"] == "noresult"){
  
$balanceup = "UPDATE users SET balance = balance + '$am' where username = '$currentuser'";
$balanceuprun = mysqli_query($db, $balanceup);

  $id = +$firsttimestamp["id"];
 $updateres = "UPDATE options SET result = 'updated' where id = '$id' ";
$updateresrun = mysqli_query($db, $updateres);
 
   
 
 // }





}	
	
	
	
	
	

}
}
?>
