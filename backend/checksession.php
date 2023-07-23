<?php   session_start(); 
 include 'server.php' ;?>

 <?php   $usrname =  $_SESSION['username'] ;?>
var usrsession = <?php  echo json_encode($usrname) ;  ?>;
setInterval(checksessionid, 1000);
var sessionid = [];
var usronline = [];
var secondsession;
function checksessionid(){
	
fetch('https://' + window.location.hostname + '/myroulettedealer/' + usrsession + 'session.txt', {cache: "no-store"})
  .then(response => response.text())
  .then(data => {  sessionid = data.split(" "); });
fetch('https://' + window.location.hostname + '/myroulettedealer/' + usrsession + 'online.txt', {cache: "no-store"})
  .then(response => response.text())
  .then(data => {  usronline = data.split(" "); });
   secondsession = sessionid[1]  ;
  console.log("useronline",usronline);
    console.log("sessionid", sessionid);

	 if(usronline.length>2 && sessionid.length>2){
  const xmmmp = new XMLHttpRequest();
 xmmmp.open("GET", "checksession.php?ffff="+secondsession + "&oncon="+usronline);
	 xmmmp.send();
<?php


if(isset($_GET['ffff']) && isset($_GET['oncon'])){



 $secsession = $_GET['ffff']." ";
 $addone = "1"." ";
$filesession = $_SESSION['username'].'session.txt';

$fileusron = $_SESSION['username'].'online.txt';
   file_put_contents($filesession,$secsession);
file_put_contents($fileusron,$addone);   

}
?>
var thissession = <?php echo json_encode($_SESSION['sessionuid']);?>;
  if(thissession == sessionid[0]){window.location.replace("../index.php?logout='1'");
  
  
  }
};
}