<!--SFPPAGE-->
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php 
       include('../include.php');?>
 <link rel="stylesheet" href="/editcss/jquery-ui.css"/>
<link rel="stylesheet" href="SFPURLLINK/css/style.css"/>
<link rel="stylesheet" href="/editcss/jquery.datetimepicker.css"/>
<link rel="stylesheet" href="/editcss/jquery.timepicker.css"/>
<!--SFPScript type="text/javascript"  src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></!--SFPScript> 
<!--SFPScript type="text/javascript" src="/js3/jquery.datetimepicker.js"></!--SFPScript> 
<!--SFPScript type="text/javascript"  src="/js/jquery.timepicker.js"></!--SFPScript> 

<!--SFPScript>
$(".jui-checkbox-row p.SFPTWO_TAGEDIT").live( "click", function(){
    $(this).parent().find('input[type="checkbox"]').trigger('click');
});

$(".jui-checkbox-row p.SFPTWO_TAGEDIT").live( "click", function(){
    $(this).parent().find('input[type="radio"]').trigger('click');
});

function datepick(num)
{
  $('body').on('click', '#datepicker'+num, function(event) {
    
    $(this).datepicker({

       showOn: 'focus',

        yearRange: "1900:+85",

        changeMonth: true,

        changeYear: true
    }).focus();

});  
}


function timepick(num)
{
    $('body').on('click', '#timepicker'+num, function(event) {
     $(this).timepicker(
        {
       'step': '30',
		  'step': '30',
			'minTime': '00:00',
			'maxTime': '23:59',
			'timeFormat': 'H:i',
  }).focus();
}); 
}   
</!--SFPScript> 
  <!--SFPhide  
  <style>
  .SFPTWO_EDITFORM li {
  margin-bottom: 26px;
}
.jui-checkbox-row {
  height: auto;
  overflow: hidden;
} 
  </style>
  SFPhide-->
<!--<link rel="stylesheet" href="http://localhost/zf_new/public/css/styles.css"/>
<link rel="stylesheet" href="http://localhost/zf_new/public/css/textarea.css"/>---->

<link rel="stylesheet" type="text/css" media="all" href="SFPURLLINK/css/jui.checkboxes.css"/>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->
<style>
#images1
{
width: 200px; height:100px; margin:0 0 8px 200px;
}
       
</style>
</head>

<body>

<div class="details-n-winn-wrapper SFPTWO_BACKGROUND">
<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="SFPURLLINK/img/top-img.jpg" alt="" /></div> 
<!--<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="SFPURLLINK/img/top-img.jpg" alt="" style="width: 100%;"/></div>         
 -->       
<div class="tool-tip SFPTWO_TEXTEDIT"><h2 class="textedit SFPTWO_TAGEDIT edit explicit_edit"  contenteditable="true">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">

[SFPFORM]-><ACTION->""/>
</div>
</div>




</body>

</html>
