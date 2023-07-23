<?php   session_start(); 
 

?>

 <?php   $usrname =  $_SESSION['username'] ;?>
var usrsession = <?php  echo json_encode($usrname) ;  ?>;
setInterval(checksessionid, 2000);
var sessionid;
var usronline = [];
var blockcheck;
var secondsession;

function checksessionid(){

// start checkblock
fetch(window.location.protocol+'//' + window.location.hostname+':'+window.location.port + '/backend/' + usrsession + 'block.txt', {cache: "no-store"})
  .then(response => response.text())
  .then(data => {  blockcheck = +data ; });	
if(blockcheck == 1){window.location.replace(window.location.protocol+'//' + window.location.hostname+':'+window.location.port+ "/backend/index.php?logout='1'");}
// end checkblocked  
fetch(window.location.protocol+'//' + window.location.hostname+':'+window.location.port + '/backend/' + usrsession + 'session.txt', {cache: "no-store"})
  .then(response => response.text())
  .then(data => {  sessionid = data ; });
/*fetch(window.location.protocol+'//' + window.location.hostname+':'+window.location.port + '/backend/' + usrsession + 'online.txt', {cache: "no-store"})
  .then(response => response.text())
  .then(data => {  usronline = data.split(" "); });*/
  
  console.log("useronline",usronline);
    console.log("sessionid", sessionid);

	// if(usronline.length>2 && sessionid.length>2){
 // const xmmmp = new XMLHttpRequest();
// xmmmp.open("GET", "sessioncheck.php?ffff="+sessionid);
	// xmmmp.send();
	//document.getElementById("session").setAttribute("src","sessioncheck.php?ffff="+sessionid);
<?php


//if(isset($_GET['ffff'])){



 //$secsession = $_GET['ffff'];
 // $addone = "1"." ";
  $serurl = $_SERVER['HTTP_X_FORWARDED_HOST'];
  $dom = $_SERVER['host'];
 if($serurl){$filesession = $serurl.'backend/'.$_SESSION['username'].'session.txt';}else{$filesession = $dom.'backend/'.$_SESSION['username'].'session.txt';}


// $fileusron = 'myroulettedealer/'.$_SESSION['username'].'online.txt';
   file_put_contents($filesession,$secsession);
//file_put_contents($fileusron,$addone);   

//}
?>
var thissession = <?php echo json_encode($_SESSION['sessionuid']);?>;
if(thissession != sessionid && sessionid && thissession){window.location.replace(window.location.protocol+'//' + window.location.hostname+':'+window.location.port+ "/backend/index.php?logout='1'");

  
 // }
};
}
