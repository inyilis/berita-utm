<div class="halaman">
    <h2><strong><p align="center">Tambah User</p></strong></h2>
	<form method="post" action="simpan-admin.php">
		<div align="center"> 
            <table>
                <tr><td>NIM/NIP</td><td><input type="text" name="nim" required autofocus></td></tr>
                <tr><td>Nama</td><td><input type="text" name="nama" required autofocus></td></tr>
                <tr><td>Username</td><td><input type="text" name="username" required autofocus></td></tr>
                <tr><td>Password</td><td><input type="text" name="password" required autofocus></td></tr>
                <tr><td>Jurusan/Profesi</td><td>
                        <select name="jurusan" required autofocus>                            
                            <option value=""> </option>
                            <option value="SATPAM">SATPAM</option>
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK INDUSTRI">TEKNIK INDUSTRI</option>
                            <option value="TEKNIK ELEKTRO">TEKNIK ELEKTRO</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        </select>
                    </td></tr>
                <tr><td>Jenis Kelamin</td><td>
                    <select name="jenis_kelamin" required autofocus>
                            <option value=""> </option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td></tr>                
                <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir" required autofocus></td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat" required autofocus></td></tr>
                <tr><td>Email</td><td><input type="text" name="email" required autofocus></td></tr>
                <tr><td>No HP</td><td><input type="text" name="no_hp" required autofocus></td></tr>
                <tr><td>Hak Akses</td><td>
                    <select name="hak_akses" required autofocus>
                            <option value=""> </option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="satpam">Satpam</option>
                        </select>
                    </td></tr>
            </table>
            <tr><td colspan="2"><button type="submit" name="tambah" value="TAMBAH">TAMBAH</button></td></tr>
        </div>
        </form>
</div>