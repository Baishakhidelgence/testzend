<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<?php
$getindex = $_SERVER['REQUEST_URI'];
$folder = $_SERVER['REQUEST_URI'];
$folder = explode('?',$folder);
$foldername= explode('=',$folder[1]);
$values = $foldername[1];
$values2 = $foldername[0];
$values2 = str_replace('%20', ' ', $values2);
//echo $values;
$con = mysql_connect("localhost","phpmyadmin","Testing1@") or die("cant connect");
$db = mysql_select_db("sfp_staging", $con) or die ("not selected");

$sql1 = mysql_fetch_assoc(mysql_query("select * from  `userTemplate` where `campaign_number`='".$values."' and `new_template_name` = '".$values2."'")) ;
$value = $sql1['template_link'];
$sql = mysql_fetch_assoc(mysql_query("select * from  `userTemplate` where `template_link`='".$value."'")) ;
//echo("select * from  `userTemplate` where `campaign_number`='".$values."' and `new_template_name` = '".$values2."'");
?>
<?php
$getuniq = rand(5, 15); 
$nexuniq = time();
$nextone = uniqid();
function gen_random_string($length=16)
{
    $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";//length:36
    $final_rand='';
    for($i=0;$i<$length; $i++)
    {
        $final_rand .= $chars[ rand(0,strlen($chars)-1)];
 
    }
    return $final_rand;
}
$sessionid = $getuniq.$nexuniq.$nextone;
//echo $sessionid;
mkdir( $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid,0777,true);
chmod($_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid, 0777);
fopen($_SERVER['DOCUMENT_ROOT']."/mobileview/temp-".$sessionid.".php", "w");
$userfilename ="uid-".$sessionid."/";
$userfolder = $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid;
$tempfile = $_SERVER['DOCUMENT_ROOT']."/mobileview/temp-".$sessionid.".php";
$file_handle = fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/index.php", "r");
$file_handle1 = fopen($tempfile, "rw+");
chmod($tempfile,0777);
$src = $_SERVER['DOCUMENT_ROOT']."/user_template/".$value;
$dst = $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid;

$files = glob($_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/*.*");
      foreach($files as $file){
        //print_r($files);
       if($file != $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$value.'/index.php'){
      
       if((file_exists($file))){
          
      $file_to_go = str_replace($src,$dst,$file);
      copy($file, $file_to_go);
      chmod($file_to_go,0777);
      }
      }
      }
while (!feof($file_handle)) 
{
fwrite($file_handle1,fgets($file_handle));
}
$t2=file_get_contents($tempfile);
$t2 = str_replace("!--PHP","?php",$t2);
$t2 = str_replace("!--SFPScript","script",$t2);
$t2 = str_replace("PHP--","?",$t2);
$t2 = str_replace("SFPScript--","script",$t2);
$t2 = str_replace("<!--SFPhide","",$t2);
$t2 = str_replace("SFPhide-->","",$t2);
file_put_contents($tempfile,$t2);
if(!(is_dir($userfolder."/upload"))){
     mkdir($userfolder."/upload",0777,true);
}
chmod($userfolder."/upload", 0777);

    foreach (glob($userfolder."/*.php") as $search) {
    $contents = file_get_contents($search);
    if($search != $userfolder."index.php"){
    if (!strpos($contents, "SFP_Redirect/")) continue;
   
    //str_replace("SFP_Redirect/","mobileview/",$contents);
   $file_contents = str_replace("SFP_Redirect/",$userfilename,$contents);
    file_put_contents($search,$file_contents); 
    
} 
} 

  foreach (glob($userfolder."/*.php") as $search) {
    $contents = file_get_contents($search);
    if($search != $userfolder."index.php"){
    if (!strpos($contents, "SFP_index")) continue;
   
    //str_replace("SFP_Redirect/","mobileview/",$contents);
   $file_contents = str_replace("SFP_index",$getindex,$contents);
    file_put_contents($search,$file_contents); 
    
} 
} 

$scope = explode(",",$sql['check_fbtag']);

$a1 = array('0','1');
$scope1 = array_diff($scope,$a1);
$var = "";
foreach($scope1 as $scopes)
{

  $var .=  $scopes.","; 
 
}

foreach (glob($userfolder."/*.php") as $search) {
    $contents = file_get_contents($search);
    $contents = str_replace("!--PHP","?php",$contents);
     $contents = str_replace("//PHP"," ",$contents);
    $contents = str_replace("!--SFPScript","script",$contents);
    $contents = str_replace("PHP--","?",$contents);
   $contents = str_replace("SFPScript--","script",$contents);
   $contents = str_replace("SFPScript*/","",$contents);
   $read = "include_once('/var/www/staging/public/sfpApi.php');";
    $contents = str_replace("/*PHP DBCONNECT PHP*/",$read,$contents);
   $contents = str_replace("SFPUPLOAD","mobileview/".$userfilename,$contents);
    //str_replace("SFP_Redirect/","mobileview/",$contents);
   $contents = str_replace("!--SFPScript","script",$contents);
    $contents=str_replace("/*SFPScript"," ",$contents);
  $contents=str_replace("SFPScript*/"," ",$contents);
  $contents=str_replace('SFPFBSCOPE',$var,$contents);
  $contents=str_replace("SFPAPPID",$sql['appid'],$contents);
  $contents=str_replace("SFPAPPSECRET",$sql['appsecret'],$contents);
  $contents = str_replace("<!--SFPhide","",$contents);
  $contents = str_replace("SFPhide-->","",$contents);
    file_put_contents($search,$contents); 
    
 
} 

 $str=file_get_contents($tempfile);

 $str=str_replace("SFP_Redirect/",$userfilename,$str);
  $str=str_replace("SFP_index",$getindex,$str);
 $str=str_replace("SFPUPLOAD","mobileview/".$userfilename,$str);
 $str = str_replace("//PHP"," ",$str);
 $str=str_replace('SFPFBSCOPE',$var,$str);
 $str=str_replace("SFPAPPID",$sql['appid'],$str);
 $str=str_replace("SFPAPPSECRET",$sql['appsecret'],$str);
 $str = str_replace("<!--SFPhide","",$str);
 $str = str_replace("SFPhide-->","",$str);
  file_put_contents($tempfile, $str);
 
include $tempfile;
 $pathfolder = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$value;

chmod($pathfolder, 0777);

    foreach (glob($pathfolder."/*.php") as $searches) {
   
    chmod($searches,0777);
     $contents = file_get_contents($searches);
   // if (!strpos($contents, "SFP_Redirect/")) continue;
   
    //str_replace("SFP_Redirect/","mobileview/",$contents);
    
    
   $file_contents = str_replace('SFPAPPID',$sql['appid'],$contents);
   $file_contents = str_replace('SFPAPPSECRET',$sql['appsecret'],$contents);
   $file_content = str_replace('SFPFBSCOPE',$sql['check_fbtag'],$file_contents);
    file_put_contents($searches,$file_content); 
    
} 

?>