<?php
header("Access-Control-Allow-Headers: *");
?>
<?php
if(isset($_GET['sel'])){
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
$sel = $_GET['sel'];
$price =  $firstobject  -> $sel -> price; 
$price = +$price;
}
?>
<script>
var newp = <?php echo $price; ?>;
if(newp){
parent.updatechart(newp);
}
</script>