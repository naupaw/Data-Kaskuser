<?php
 ///////////////////////////////////////////+
// Script sederhana dari fadilz thepedox   //
/////////////////////////////////////////////
// untuk mengambil data kaskuser !         //
// sengaja nih buat berantakan soal nya    //
// buru buru trus belom di bungkus         //
// class =="                               //
// kalo ada yang mau dikembangkan          //
// silahkan aja...                         //
// tapi jangan lupa credits to nya :D      //
// ini asli buatan ane sendiri id : pedox  //
// jika ada masalah silahkan kontak fadilz //
// <cungkring.ceking@gmail.com>            //
 ///////////////////////////////////////////+
if(isset($_GET['user'])){
	$alamat = @$_GET['user'];
	$conten = @file_get_contents("http://www.kaskus.us/member.php?u=$alamat");
		if(!$conten){
			echo "Connection Error To server ! Bad Request !! Please try again !";
		}else{
	//begin decoration
	$sebelum = array('<dl class="smallfont list_no_decoration profilefield_list">','<img class="inlineimg"','</dl>','</h1>');
	$sesudah = array('<informasi>','<nama>','</informasi>','<nama>');
	$hasil = str_replace($sebelum,$sesudah,$conten);
	//Start Potong
	//print name
	$s1 = @explode("<h1>",$hasil);
	$potongs1 = $s1[1];
	$name = @explode("<nama>",$s1[1]);
	//Print Join date
	$s2 = @explode("<informasi>",$hasil);
	$potongs2 = $s2[1];
	$join1 = @explode("<dd>",$potongs2);
	$join2 = @explode("</dd>",$join1[1]);

	//Print Total Post
	$totals = @explode("<dd>",$s2[1]);
	$totals2 = @explode("</dd>",$totals[2]);

	//print Image Avatar !
	$image = @explode("<td>",$s2[1]);
	$avatar = @explode("</td>",$image[1]);
	//print pangkat :p
	$pang1 = @explode("<h2>",$conten);
	$pang2 = @explode("</h2>",$pang1[1]);
	//Print reputation
	$seb = array('<nama>','<div id="reputation">','</div>','images');
	$sed = array('<img class="inlineimg"','<reputasi>','</reputasi>','http://www.kaskus.us/images');
	$ps = str_replace($seb,$sed,$conten);
	$rep = @explode("<reputasi>",$ps);
	$reputasi = @explode("</reputasi>",$rep[1]);
	//nama reputasi
	$namrep = @explode("<reputasi>",$ps);
	$namrep2 = @explode("alt=\"",$namrep[1]);
	$nama_reputasi = @explode("\" border=\"0\" />",$namrep2[1]);
	//Print All Rank
	//Start line
	// avatar : 
	$image_avatar = $avatar[0];
	// name : 
	$username = $name[0];
	// pangkat : 
	$pangkat = $pang2[0];
	// Join Date : 
	$tanggal_daftar = $join2[0];
	// Total post : 
	$total_post = $totals2[0];
	// Reputatuon : 
	$reputation = $reputasi[0];
	// Rep Name : 
	$name_rep = $nama_reputasi[0];
	}
} 
//Selesai...
?>
