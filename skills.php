<html>
	
<head>
	<link rel="stylesheet" href="magic-master/magic.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
<div class="0 img-rounded" style="background-color: #e6e6e6;width:200px;height:200px;position:absolute;top:250px;right:600px"><h3>My Forte</h3></div>
<div class="1 img-rounded" style="display:none;width:200px;height:200px;z-index:1;position:absolute;top:250px;right:600px"><img src="images/html5.png" width="200px" height="200px" alt="PHP"/></div>
<div class="2 img-rounded" style="display:none;width:200px;height:200px;z-index:2;position:absolute;top:250px;right:600px"><img src="images/css3.png" width="200px" height="200px" alt="PHP"/></div>
<div class="3 img-rounded" style="display:none;width:200px;height:200px;z-index:3;position:absolute;top:250px;right:600px"><img src="images/bootstrap.png" width="200px" height="200px" alt="PHP"/></div>
<div class="4 img-rounded" style="display:none;width:200px;height:200px;z-index:4;position:absolute;top:250px;right:600px"><img src="images/javascript.png" width="200px" height="200px" alt="PHP"/></div>
<!-- initial 4 -->
<div class="5 img-rounded" style="display:none;width:200px;height:200px;z-index:5;position:absolute;top:250px;right:400px"><img src="images/jquery.png" width="200px" height="200px" alt="PHP"/></div>
<div class="6 img-rounded" style="display:none;width:200px;height:200px;z-index:6;position:absolute;top:250px;right:200px"><img src="images/api.png" width="200px" height="200px" alt="PHP"/></div>
<div class="7 img-rounded" style="display:none;width:200px;height:200px;z-index:7;position:absolute;top:250px;right:800px"><img src="images/php.png" width="200px" height="200px" alt="PHP"/></div>
<div class="8 img-rounded" style="display:none;width:200px;height:200px;z-index:8;position:absolute;top:250px;right:1000px"><img src="images/joomla.png" width="200px" height="200px" alt="PHP"/></div>
</body>

</html>
<script>	

$(document).ready(function(){

effect();


});


function effect(){
	
  //$('.2').toggleClass('magictime perspectiveDown');
   setTimeout(function(){$('.1').css('display','block');$('.1').toggleClass('magictime perspectiveRight')},1000);
   setTimeout(function(){$('.2').css('display','block');$('.2').toggleClass('magictime perspectiveDown')},2000);
   setTimeout(function(){$('.3').css('display','block');$('.3').toggleClass('magictime perspectiveLeft')},3000);
   setTimeout(function(){$('.4').css('display','block');$('.4').toggleClass('magictime perspectiveUp')},4000);
   setTimeout(function(){$('.5').css('display','block');$('.5').toggleClass('magictime perspectiveRight')},5000);
   setTimeout(function(){$('.6').css('display','block');$('.6').toggleClass('magictime perspectiveDown')},6000);
   setTimeout(function(){$('.7').css('display','block');$('.7').toggleClass('magictime perspectiveLeft')},7000);
   setTimeout(function(){$('.8').css('display','block');$('.8').toggleClass('magictime perspectiveUp')},8000);
   //setTimeout(function(){$('.2').css('display','block');$('.2').toggleClass('magictime perspectiveRight')},2000);

  // setInterval(function(){$('.2').toggleClass('magictime openDownLeftReturn');$('.1').toggleClass('magictime openDownRightReturn')},4000);
  

   // // setInterval(function(){$('.1').addClass('magictime openDownRight')},1000);
   //  setInterval(function(){$('.1').addClass('magictime openDownRightReturn')},2000);
   // setInterval(function(){$('.2').addClass('magictime openDownLeftReturn')},2000);
   // setInterval(function(){$('.1').removeClass('magictime openDownRight')},3000);
   // setInterval(function(){$('.2').removeClass('magictime openDownLeft')},3000);
   // setInterval(function(){$('.1').removeClass('magictime openDownRightReturn')},4000);
   // setInterval(function(){$('.2').removeClass('magictime openDownLeftReturn')},4000);

    
 
}

</script>
