<div class="halaman">
	<?php		
		include('config.php');
		$sql	= 'SELECT * FROM `berita`';
		$query	= mysqli_query($con,$sql);
	?>
	<h2><strong><p align="center">Data Berita</p></strong></h2>
	<div align="center">
	<table width="807" border="0" cellpadding="0" cellspacing="2" align="center">
  <!--DWLayoutTable-->
	 <tr>
	    <td width="50" height="29" align="center" valign="middle" bgcolor="#87CEFA">ID Berita</td>
	    <td width="80" align="center" valign="middle" bgcolor="#87CEFA">NIM</td>
	    <td width="200" align="center" valign="middle" bgcolor="#87CEFA">ISI</td>
	    <td width="60" align="center" valign="middle" bgcolor="#87CEFA">TANGGAL</td>
	    <td width="50" align="center" valign="middle" bgcolor="#87CEFA">Aksi</td>
	</tr>
	<?php
		while($data	= mysqli_fetch_array($query)){ 
	?>
	  <tr>
	    <td align="center" bgcolor="#FFFFFF"><?php echo $data['b_id']; ?></td>
	    <td align="center" bgcolor="#FFFFFF"><?php echo $data['uid']; ?></td>
	    <td align="center" bgcolor="#FFFFFF"><?php echo $data['isi']; ?></td>
	    <td align="center" bgcolor="#FFFFFF"><?php echo $data['tgl']; ?></td>
	    <td align="center" bgcolor="#FFFFFF">
			<a href="hapusBeritaA.php?ni=<?php echo $data['b_id'];?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
		</td>
	  </tr>
	<?php
	}
	?>
	</table>
	</div>
</div>