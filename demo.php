<?php
header("Access-Control-Allow-Headers: *");
?>
<?php

if(isset($_GET['spr']) && isset($_GET['lohi']) && isset($_GET['ran'])){
$url = "http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/prices";
   
   //http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/prices

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
$spr = $_GET['spr'];
$price =  $firstobject  -> $spr -> price; 
$price = +$price;
$lohi = $_GET['lohi'];
$ran = +$_GET['ran'];

if(isset($_GET['last'])){$last = 1; $bdgt=0; $id=0;} else{$last = 0;$bdgt = +$_GET['bdgt']; $id = +$_GET['id'];};

};
?>
















<script>

	var lohi = "<?php echo $lohi; ?>";
var price = <?php echo $price; ?>;
var last = <?php echo $last; ?>;
var ran = <?php echo $ran; ?>;
var bdgt = <?php echo $bdgt; ?>;
var id = <?php echo $id; ?>;
var comb = [];
comb.push(+price);
comb.push(+ran);
if(+bdgt != 0){
comb.push(+bdgt);}
if(+id != 0){
comb.push(+id);}
if(+last == 0){
if(lohi == "lo"){parent.floprice(comb);}
 else if(lohi == "hi"){parent.fprice(comb);};
console.log("first",comb);
}
else if(+last == 1){

 if(lohi == "lo"){parent.lloprice(comb);}
 else if(lohi == "hi"){parent.lprice(comb);};
 console.log("last",comb);

}


</script>