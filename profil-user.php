<div class="halaman">
	<h2><strong><p align="center">Edit Profil</p></strong></h2>
	<?php		
		include('config.php');
		include('session.php');
		$sql	= 'SELECT * FROM `user` WHERE nim="'.$uid.'"';
		$query	= mysqli_query($con,$sql);
		$data   = mysqli_fetch_array($query);
			$nim            = $data['nim'];
			$nama           = $data['nama'];
			$username       = $data['username'];
			$password       = $data['password'];
			$jurusan        = $data['jurusan'];
			$jenis_kelamin  = $data['jenis_kelamin'];
			$tgl_lahir      = $data['tgl_lahir'];
			$alamat         = $data['alamat'];
			$email          = $data['email'];
			$no_hp          = $data['no_hp'];
	?>
		<form method="post" action="simpan-user.php">
			<div align="center"> 
				<table>
	                <tr><td>NIM</td><td><input type="text" name="nim" value="<?php echo $nim; ?>" readonly="readonly"></td></tr>
	                <tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
	                <tr><td>Username</td><td><input type="text" name="username" value="<?php echo $username; ?>"></td></tr>
	                <tr><td>Password</td><td><input type="text" name="password" value="<?php echo $password; ?>"></td></tr>
	                <tr><td>Jurusan</td><td><input type="text" name="jurusan" value="<?php echo $jurusan; ?>" readonly="readonly"></td></tr>
	                <tr><td>Jenis Kelamin</td><td>
	                    <select name="jenis_kelamin">
	                            <option type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><?php echo $jenis_kelamin; ?></option>
	                            <option value=" ">===============</option>
	                            <option value="Laki-laki">Laki-laki</option>
	                            <option value="Perempuan">Perempuan</option>
	                        </select>
	                    </td></tr>                
	                <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"></td></tr>
	                <tr><td>Alamat</td><td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td></tr>
	                <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
	                <tr><td>No HP</td><td><input type="text" name="no_hp" value="<?php echo $no_hp; ?>"></td></tr>	                
	            </table>
	            <tr><td colspan="2"><button type="submit" name="editProfilUser" value="editProfilAdmin">Simpan Perubahan</button></td></tr>
	        </div>
	        </form>
</div>