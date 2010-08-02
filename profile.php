<?php
include('include.php');
//Print hasil output !
?>
<h1>Kaskuser</h1>
Just another Generator<br>
<a href="<?=$alamat?>"><?=$username?></a><br>
<?=$pangkat?><br>
<?php if($image_avatar){ echo $image_avatar; }else{ echo "<img src='http://www.kaskus.us/images/misc/unknown.gif'/>"; } ?><br>
<?=$tanggal_daftar?><br>
<?=$total_post?><br>
<?=$reputation?><br>
<?=$name_rep?><br>
