<div class="halaman">
	<h2><strong><p align="center">Riwayat Berita</p></strong></h2>
	<?php		
		include('config.php');
		include('session.php');
		$sql	= 'SELECT * FROM `berita` WHERE uid="'.$uid.'"';
		$query	= mysqli_query($con,$sql);	
	?>
	<div align="center"> 
	<table width="807" border="0" cellpadding="0" cellspacing="2" align="center">
  <!--DWLayoutTable-->
	 <tr>
	    <td width="30" align="center" valign="middle" bgcolor="#87CEFA">ID Berita</td>
	    <td width="252" align="center" valign="middle" bgcolor="#87CEFA">Isi</td>
	    <td width="60" align="center" valign="middle" bgcolor="#87CEFA">Tanggal</td>	    
	    <td width="60" align="center" valign="middle" bgcolor="#87CEFA">Aksi</td>
	</tr>
	<?php
		while($data	= mysqli_fetch_array($query)){ 
	?>
	  <tr>
	    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['b_id']; ?></td>
	    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['isi']; ?></td>
	    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['tgl']; ?></td>
	    <td align="center" bgcolor="#FFFFFF">
		<a href="hapusBeritaU.php?ni=<?php echo $data['b_id'];?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
		</td>
	  </tr>
<?php
}
?>
</table>
</div>
</div>