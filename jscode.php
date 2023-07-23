<?php 
 session_start();
include('backend/server.php'); 
?>
<?php
header("Access-Control-Allow-Headers: *");
?>
<?php
if($_SESSION['loggedIn'] == true){
$user = $_SESSION['username'];
$query = "SELECT balance FROM users WHERE username='$user'";
  	$runs = mysqli_query($db, $query);
	 $balance = mysqli_fetch_assoc($runs);
	 $balance = $balance['balance'];
}
else{$balance = 1000;}
?>
<?php
$getsettings = "SELECT * FROM settings";
 $resultsettings = mysqli_query($db, $getsettings);
  $displaysettings = mysqli_fetch_assoc($resultsettings);
//$budget = explode(',', $displaysettings['budgetrange']);


?>
var payout = "<?php  echo $displaysettings['payout']  ;?>";
payout = +payout;
var xValues = [];
var yValues = [];
var x = 0;
var realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});
var activepair ;
var type;
var selectedpair = "BTC/USD";
document.getElementsByClassName("alist__item")[0].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[0].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="ATOM/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
}); });

document.getElementsByClassName("alist__item")[1].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[1].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="LINK/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[2].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[2].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="BTC/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[3].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[3].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="ETH/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[4].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[4].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="XRP/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[5].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[5].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="ADA/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[6].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[6].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="SOL/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[7].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[7].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="TRX/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[8].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[8].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="LTC/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[9].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[9].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="MATIC/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[10].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__label")[10].textContent ; document.getElementById("activepair").innerHTML= activepair; type="crypto"; document.getElementById("pairslist").style.visibility = "hidden"; selectedpair="XLM/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});


// FOREX START

document.getElementsByClassName("alist__item")[11].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[11].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="USD/CAD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[12].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[12].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="USD/CHF";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[13].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[13].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="GBP/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[14].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[14].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="NZD/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[15].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[15].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="AUD/USD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[16].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[16].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="USD/JPY";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[17].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[17].getElementsByTagName("span")[3].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="EUR/AUD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[18].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[18].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="EUR/JPY";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[19].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[19].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="EUR/GBP";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[20].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[20].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="AUD/CAD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[21].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[21].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="GBP/JPY";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[22].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[22].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="CHF/JPY";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[23].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[23].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="AUD/JPY";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});

document.getElementsByClassName("alist__item")[24].addEventListener("click",function(){ 
activepair = document.getElementsByClassName("alist__item")[24].getElementsByTagName("span")[4].textContent ;document.getElementById("activepair").innerHTML= activepair; type="forex"; document.getElementById("currencylist").style.visibility = "hidden"; selectedpair="AUD/NZD";xValues = [];yValues = [];realchart.destroy(); realchart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "green",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   
  }
});});


setInterval(function(){
	//console.log("selectedpair",selectedpair);
	x = x + 1;
//fetch("http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/price?s="+Math.random(), {cache: "no-store",
 
  document.getElementById("chart").setAttribute("src","chart.php?sel="+selectedpair);
//})
  //.then(response => response.json())
 // .then(data => { var round1 = +data.selectedpair.price; yValues.push(round1) ; xValues.push(x); 
  
 //});
 //setTimeout(function(){realchart.update();}, 1000);
 //if(x>10){xValues.shift();yValues.shift();x = 0;}

}, 1000);
function updatechart(m){
	yValues.push(m) ; xValues.push(x); 
	
	realchart.update();
	
}
var getbudget = "<?php echo $displaysettings['budgetrange'] ; ?>" ;

var budget =  getbudget.split(",");
var plus = budget.indexOf("10");
document.getElementById("plus").addEventListener("click", function(){ plus++; if(plus>budget.length-1){plus=budget.length-1 ;} document.getElementById("amount").value = budget[plus]; var rereturn = +budget[plus]*payout/100; rereturn = rereturn + +budget[plus]; rereturn=rereturn.toFixed(2);document.getElementById("return").innerHTML ="$" + rereturn; document.getElementById("profit").innerHTML = "+" + +budget[plus]*payout/100;});
document.getElementById("minus").addEventListener("click", function(){ plus--;  if(plus<0){plus=0;} document.getElementById("amount").value = budget[plus];var rereturnmin = +budget[plus]*payout/100; rereturnmin = rereturnmin + +budget[plus]; rereturnmin=rereturnmin.toFixed(2); document.getElementById("return").innerHTML ="$" + rereturnmin; document.getElementById("profit").innerHTML = "+" + +budget[plus]*payout/100;});
var close = document.getElementById("close") ;
var elemid = 0;
var timer = <?php echo $displaysettings['timemin']  ?>;
var timemini = <?php echo $displaysettings['timemin']  ?>;
timer = +timer;
var maxtime = <?php echo $displaysettings['timemax']  ?>;
maxtime = +maxtime;
document.getElementById("timeplus").addEventListener("click", function(){  if(timer>19){ timer = timer+5 } else{timer = timer + 1;}; if(timer>maxtime){timer=maxtime;};document.getElementById("timing").innerHTML = timer +" " + "seconds";});
document.getElementById("timeminus").addEventListener("click", function(){   if(timer>24){ timer = timer-5 } else{timer = timer - 1;}; if(timer<timemini){timer=timemini;}; document.getElementById("timing").innerHTML = timer +" "+"seconds";});


var firstprice = [];
var lastprice = [];
var balance = <?php echo $balance ;?>;
var hiprice = 0;
var bud = +budget[plus];
var nl = 0;

function fprice(fp){
	
	firstprice.push(fp);
	console.log("firstprice", firstprice);
}

function lprice(lp){
	var bdg;
	var ide ;
			console.log("lastprice", lp);

	//lastprice.push(lp);
	 for(var j=0; j<firstprice.length ; j++){if(firstprice[j][1] == lp[1]){
		  bdg = +firstprice[j][2];
		  ide = +firstprice[j][3];
		  //alert(ide);
if(+lp[0]>+firstprice[j][0]){ 
//close.innerHTML += "</br></br>" + "<span id='" + "'style='color:green'>" + bdg*payout/100 + "</span>";
document.getElementById("cl"+ide).innerHTML = bdg*payout/100;
balance = balance + bdg + bdg*payout/100;

 document.getElementById("balance").innerHTML = balance.toFixed(2)  ; 
 
}
else{
	//close.innerHTML += "</br></br>" + "<span id='"  + "'style='color:green'>" + "0" + "</span>" ;
	document.getElementById("cl"+ide).innerHTML = 0;

};
	 }};
}

document.getElementById("hi").addEventListener("click", function(){
elemid = elemid + 1;
var hirand = Math.random();	
var slcpair = selectedpair;
 bud = +budget[plus];
 if(balance>bud || balance == bud){
 nl++;
 balance = balance - bud;
 document.getElementById("balance").innerHTML = balance.toFixed(2) ;
 var timeup = +timer;
 var httime = timer;
 var fnh = nl;
 document.getElementById("open").innerHTML += "</br></br>"+ "<span id='" +  "'style='color:green'>" + bud   + "</span>" ;
  close.innerHTML += "</br></br>" + "<span id='cl" +elemid+ "'style='color:green'>"  + "</span>";

  document.getElementById("timer").innerHTML += "</br></br>"+  "<span id='" + fnh + "'style='color:green'>" + httime   + "</span>" ;
var myhiInterval = setInterval(function(){ document.getElementById(fnh).innerHTML =   httime--    ;
 if(httime<0){clearInterval(myhiInterval);};  }, 1000);

/*fetch("http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/price?q="+Math.random(), {cache: "no-store",
 
  
})
  .then(response => response.json())
  .then(data => { var round2 = +data.selectedpair.price ; firstprice.push(round2) ; 
  console.log("firstprice", firstprice);
 }); */
 document.getElementById("iframes").setAttribute("src", "frame.php?lohi=hi&amount="+bud+"&time="+timeup+"&spair="+selectedpair);
    document.getElementById("demo").setAttribute("src", "demo.php?lohi=hi&spr="+selectedpair+"&ran="+hirand+"&bdgt="+bud + "&id=" + elemid);

 //setTimeout(function(){document.getElementById('iframes').contentWindow.location.reload();}, 1000);

 setTimeout(function(){
	/*fetch("http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/price?p="+Math.random(), {cache: "no-store",
 
  
})
  .then(response => response.json())
  .then(data => {var round3 = +data.selectedpair.price; lastprice.push(round3) ; 
  console.log("lastprice", lastprice);
 }); */
  document.getElementById("iframes").setAttribute("src", "frame.php?last=1");
    document.getElementById("demo").setAttribute("src", "demo.php?lohi=hi&last=1&spr="+slcpair+"&ran="+hirand);

 //setTimeout(function(){document.getElementById('iframes').contentWindow.location.reload();}, 1000);
 /*setTimeout(function(){
if(lastprice[hiprice]>firstprice[hiprice]){ 
close += "</br></br>" + "<span id='" + "'style='color:green'>" + bud*payout/100 + "</span>";
balance = balance + bud + bud*payout/100;

 document.getElementById("balance").innerHTML = balance.toFixed(2)  ; 
 
}
else{
	close += "</br></br>" + "<span id='"  + "'style='color:green'>" + "0" + "</span>" ;
};
hiprice = hiprice + 1;
}, 1000);*/
 },  timeup*1000);
 
	}; });

var lastloprice = [] ;
var firstloprice = [] ;
var loprice = 0;

var lotime = [];

function floprice(flo){
	
	firstloprice.push(flo);
		console.log("firstloprice", firstloprice);

}

function lloprice(llo){
	var bd;
	var idlo;
			console.log("lastlo", llo);

		//lastloprice.push(llo);
 for(var i=0; i<firstloprice.length ; i++){if(firstloprice[i][1] == llo[1]){
	 		  bd = +firstloprice[i][2];
             idlo = +firstloprice[i][3];
			// alert("idlo");
if( +firstloprice[i][0] >  +llo[0]){ 
//close.innerHTML += "</br></br>" + "<span id='" + "'style='color:red'>" + bd*payout/100 + "</span>";
document.getElementById("cl"+idlo).innerHTML = +bd*payout/100;
balance = balance + bd + bd*payout/100;

 document.getElementById("balance").innerHTML = balance.toFixed(2) ; 

}
else{
	//close.innerHTML += "</br></br>" + "<span id='" +  "'style='color:red'>" + "0" + "</span>";
	document.getElementById("cl"+idlo).innerHTML = 0;

};
	
 }};	
}

document.getElementById("lo").addEventListener("click", function(){
	elemid = elemid + 1;

var lorand = Math.random();	
bud = +budget[plus];
var sltpair = selectedpair;
	if(balance>bud || balance == bud){

 balance = balance - bud;
 nl++;
 var timedown = +timer;
 var ttime = timer;
 var lofnl = nl;
 document.getElementById("balance").innerHTML = balance.toFixed(2) ; 
  document.getElementById("timer").innerHTML += "</br></br>"+ "<span id='" + lofnl + "'style='color:red'>" + ttime   + "</span>" ;
var myInterval = setInterval(function(){ document.getElementById(lofnl).innerHTML =   ttime--    ;
 if(ttime<0){clearInterval(myInterval);};  }, 1000);
 document.getElementById("open").innerHTML += "</br></br>"+ "<span id='" + "'style='color:red'>" +  bud +  "</span>";
 close.innerHTML += "</br></br>" + "<span id='cl" + elemid + "'style='color:red'>"  + "</span>";

/*fetch("http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/price?r="+Math.random(), {cache: "no-store",
 
  
})
  .then(response => response.json())
  .then(data => { var round4 = +data.selectedpair.price;  firstloprice.push(round4) ; 
  console.log("firstloprice", firstloprice);
 }); */
 document.getElementById("iframes").setAttribute("src", "frame.php?lohi=lo&amount="+bud+"&time="+timedown+"&spair="+selectedpair);
     document.getElementById("demo").setAttribute("src", "demo.php?lohi=lo&spr="+selectedpair+"&ran="+lorand + "&bdgt="+bud + "&id=" + elemid);

 //setTimeout(function(){document.getElementById('iframes').contentWindow.location.reload();}, 1000);
 setTimeout(function(){
	/*fetch("http://ec2-44-204-160-111.compute-1.amazonaws.com/api/crypto/price?f="+Math.random(), {cache: "no-store",
 
  
})
  .then(response => response.json())
  .then(data => { var round5 = +data.selectedpair.price; lastloprice.push(round5) ; 
  console.log("lastloprice", lastloprice);
 }); */
 
  document.getElementById("iframes").setAttribute("src", "frame.php?last=1");
      document.getElementById("demo").setAttribute("src", "demo.php?lohi=lo&last=1&spr="+sltpair+"&ran="+lorand);

 //setTimeout(function(){document.getElementById('iframes').contentWindow.location.reload();}, 1000);
/* setTimeout(function(){
if( firstloprice[loprice] >  lastloprice[loprice]){ 
document.getElementById("close").innerHTML += "</br></br>" + "<span id='" + "'style='color:red'>" + bud*payout/100 + "</span>";
balance = balance + bud + bud*payout/100;

 document.getElementById("balance").innerHTML = balance.toFixed(2) ; 

}
else{
	document.getElementById("close").innerHTML+="</br></br>" + "<span id='" +  "'style='color:red'>" + "0" + "</span>";
};
 loprice = loprice + 1;

}, 1000);*/
 },  +timedown*1000);
 
	};

});

setInterval(function(){
var hoursnow = (new Date()).getUTCHours()+3;
if(hoursnow>24){hoursnow = hoursnow-24;}
document.getElementById("timenow").innerHTML = hoursnow + ":"+ (new Date()).getUTCMinutes() + ":"  + (new Date()).getUTCSeconds();

}, 1000);
//var nn = -1;
var vis1;
var vis2;
document.getElementById("pairsdown").addEventListener("click", function(){vis1 = document.getElementById("pairslist").style.visibility; vis2 = document.getElementById("currencylist").style.visibility;
if(vis1 == "hidden" && vis2 == "hidden"){document.getElementById("pairslist").style.visibility = "visible";
}
else if(vis1 == "visible" || vis2 == "visible"){

document.getElementById("pairslist").style.visibility = "hidden"; document.getElementById("currencylist").style.visibility = "hidden";

}


});

document.getElementById("currencydiv").addEventListener("click", function(){ 
document.getElementById("pairslist").style.visibility = "hidden"; document.getElementById("currencylist").style.visibility = "visible";
});
document.getElementById("cryptodiv").addEventListener("click", function(){ 
document.getElementById("pairslist").style.visibility = "visible"; document.getElementById("currencylist").style.visibility = "hidden";
});
document.getElementById("crypdiv").addEventListener("click", function(){ 
document.getElementById("pairslist").style.visibility = "visible"; document.getElementById("currencylist").style.visibility = "hidden";
});


for(var i=0;i<document.getElementsByClassName("alist__payout").length;i++){
document.getElementsByClassName("alist__payout")[i].innerHTML = payout + "%";
document.getElementsByClassName("alist__payout")[i].style.marginLeft = "185px";

}


var elem = document.body;
var fscreen = document.getElementById("fullscreen");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
fscreen.addEventListener("click", function(){openFullscreen();});

