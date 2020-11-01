<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1256" />
<style type="text/css">
.style1 {
	text-align: center;
}
</style>
</head>
<body >
<form method="post">
	<div class="style1">
		<textarea name="emails" cols="30" rows="10"></textarea>
		<br /><br>
		<input type="submit" value="Filtrer E-Mails" />
		</div>
</form>
<?php
$emails = $_POST['emails'];
$ex = explode("\n",$emails);
$count = count($ex);
if(isset($emails)&&$count>=1){
echo "<center><font color = 'red'><b>$count </font>Emails Trouvés  </b></center><br />";
}else{
echo "<center>  
No email </center>";
exit;}
if(isset($emails)){
for($i=0;$i<=$count;$i++){
$d = strtolower($ex[$i]);
if(strstr($d,"hotmail")   || strstr($d,"live") || strstr($d,"msn") || strstr($d,"outlook")){
$hotmail.=$d;
$nh = $nh + 1;
}else{
if(strstr($d,"yahoo")   || strstr($d,"ymail")){
$yahoo.=$d;
$ny = $ny + 1;
}else{
if(strstr($d,"gmail")  || strstr($d,"googlemail")   ){
$gmail.=$d;
$ng = $ng + 1;
}else{
if(strstr($d,"aol")   ){
$aol.=$d;
$na = $na + 1;
}else{
if(strstr($d,"mail.ru")   ){
$mailru .=$d;
$nr = $nr + 1;
}else{
if(strstr($d,"wanadoo")   ){
$wanadoo .=$d;
$nw = $nw + 1;
}else{
if(strstr($d,"ntlworld")   ){
$ntlworld .=$d;
$nt = $nt + 1;
}else{
if(strstr($d,"gmx")   ){
$gmx .=$d;
$ngm = $ngm + 1;
}else{
if(strstr($d,"@web.")   ){
$web .=$d;
$nw2 = $nw2 + 1;
}
if(strstr($d,"@seznam.cz.")   ){
$seznam .=$d;
$cz = $cz + 1;
}
else{

$other .=$d;
$nn=$nn + 1;
}

}

}


}

}
}
}
}

}
}
}		
$all_in_one = $gmail.$hotmail.$yahoo.$mailru.$wanadoo.$ntlworld.$gmx.$web.$other;
$tal4ima_Name = "filtred.txt";
$themod = "a+";
$open = fopen($tal4ima_Name, $themod);
fwrite($open, $all_in_one);
fclose($open);
?>
<center><table style="width: 30%">
	<tr>      
<td><center>hotmail ( <?echo $nh;?> ) </center><textarea name="hotmailx" cols="30" rows="10" ><?echo $hotmail;?></textarea></td>
<td><center>gmail ( <?echo $ng;?> )</center><textarea name="gmailx" cols="30" rows="10" ><?echo $gmail;?></textarea></td>
<td><center>aol ( <?echo $na;?> )</center><textarea name="aolxx" cols="30" rows="10" ><?echo $aol;?></textarea></td>
<td><center>yahoo ( <?echo $ny;?> )</center><textarea name="yahoox" cols="30" rows="10" ><?echo $yahoo;?></textarea></td>
<td><center>mail.ru( <?echo $nr;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $mailru;?></textarea></td></tr>
<tr>
<td><center>wanadoo( <?echo $nw;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $wanadoo;?></textarea></td>
<td><center>ntlworld( <?echo $nt;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $ntlworld;?></textarea></td>
<td><center>gmx( <?echo $ngm;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $gmx;?></textarea></td>
<td><center>web( <?echo $nw2;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $web;?></textarea></td>
<td><center>other mails( <?echo $nn-1;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $other;?></textarea></td>			
	</tr>
</table></center>
</body></html>