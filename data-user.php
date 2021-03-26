<div class="halaman">
	<?php		
		include('config.php');
		$sql	= 'SELECT * FROM `user`';
		$query	= mysqli_query($con,$sql);
	?>
	<h2><strong><p align="center">Data User</p></strong></h2>
    <div align="center">
	<table width="807" border="0" cellpadding="0" cellspacing="2" align="center">
  <!--DWLayoutTable-->
     <tr>
        <td width="112" height="29" align="center" valign="middle" bgcolor="#87CEFA">NIM/NIP</td>
        <td width="252" align="center" valign="middle" bgcolor="#87CEFA">Nama</td>
        <td width="134" align="center" valign="middle" bgcolor="#87CEFA">Username</td>
        <td width="134" align="center" valign="middle" bgcolor="#87CEFA">Password</td>
        <td width="134" align="center" valign="middle" bgcolor="#87CEFA">Jurusan</td>
        <td width="134" align="center" valign="middle" bgcolor="#87CEFA">Jenis Kelamin</td>
        <td width="134" align="center" valign="middle" bgcolor="#87CEFA">Email</td>
        <td width="134" align="center" valign="middle" bgcolor="#87CEFA">NO HP</td>
        <td width="134" align="center" valign="middle" bgcolor="#87CEFA">Hak Akses</td>
        <td width="133" align="center" valign="middle" bgcolor="#87CEFA">Aksi</td>
    </tr>
    <?php
    	while($data	= mysqli_fetch_array($query)){ 
    ?>
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['nim']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['nama']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['username']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['password']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['jurusan']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['jenis_kelamin']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['email']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['no_hp']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['hak_akses']; ?></td>
        <td align="center" bgcolor="#FFFFFF">
    		<a href="editDataUser.php?ni=<?php echo $data['nim'];?>" title="Edit user ini">Edit</a>
    		<a href="hapusDataUser.php?ni=<?php echo $data['nim'];?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
    	</td>
      </tr>
    <?php
    }
    ?>
    </table>
    </div>
</div>