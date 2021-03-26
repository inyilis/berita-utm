<?php
class Wall_Updates {
    // Updates   	
	public function Updates($uid) {
		include('config.php');
	    $query = mysqli_query($con, "SELECT M.b_id, M.uid, M.isi, M.waktu, U.nama FROM berita M, user U  WHERE M.uid=U.nim order by M.b_id desc");
	   while($row=mysqli_fetch_array($query))
		$data[]=$row;
	    return $data;
    }

	//Komentar
	public function Comments($msg_id) {
		include('config.php');
	    $query = mysqli_query($con, "SELECT C.k_id, C.uid, C.isi, C.waktu, U.nama FROM komentar C, user U WHERE C.uid=U.nim and C.mid='$msg_id' ORDER BY C.k_id ASC");
	   	while($row=mysqli_fetch_array($query))
	    $data[]=$row;
        if(!empty($data)) {
       		return $data;
        }
	}
	
	//Avatar
	public function Gravatar($uid) {
		include('config.php');
	    $query = mysqli_query($con, "SELECT `email` FROM `user` WHERE nim='$uid'");
	   	$row=mysqli_fetch_array($query);
	   	if(!empty($row)) {
			$email=$row['email'];
			$lowercase = strtolower($email);
			$imagecode = md5( $lowercase );
			$data="http://www.gravatar.com/avatar.php?gravatar_id=$imagecode";
			return $data;
        } else {
			$data="default.jpg";
			return $data;
		}		 	
	}
	
	//Insert Update
	public function Insert_Update($uid, $update)  {
		$update=htmlentities($update);
		$time=time();
		include('config.php');
		$query = mysqli_query($con, "SELECT * FROM `berita` WHERE uid='$uid' ORDER BY b_id DESC LIMIT 1");
        $result = mysqli_fetch_array($query);
        if ($update!=$result['isi']) {
            $query = "INSERT INTO `berita` (`uid`, `isi`, `tgl`, `waktu`) VALUES ('$uid', '$update', NOW(), '$time')";
            $result = mysqli_query($con, $query);            
            $newquery = mysqli_query($con, "SELECT M.b_id, M.uid, M.isi, M.waktu, U.nama FROM berita M, user U where M.uid=U.nim and M.uid='$uid' ORDER BY M.b_id DESC LIMIT 1");
            $result = mysqli_fetch_array($newquery);
         	return $result;
		} else {
			return false;
		}      
    }
	
	//Hapus update
	public function Delete_Update($uid, $msg_id)  {
		include('config.php');
	    $query = mysqli_query($con, "DELETE FROM `komentar` WHERE mid = '$msg_id' ");
        $query = mysqli_query($con, "DELETE FROM `berita` WHERE b_id = '$msg_id' and uid='$uid'");      
        
        return true;	       
    }
	
	//Insert Komentar
	public function Insert_Comment($uid,$msg_id,$comment) {
		$comment=htmlentities($comment);
	   	$time=time();
	   	include('config.php');
        $query = mysqli_query($con, "SELECT * FROM `komentar` WHERE uid='$uid' and mid='$msg_id' ORDER BY k_id DESC LIMIT 1");
        $result = mysqli_fetch_array($query);  	
        
		if ($comment!=$result['comment']) {
			//include('db.php');
            $query = mysqli_query($con, "INSERT INTO `komentar` (`uid`, `mid`, `isi`, `tgl`, `waktu`) VALUES ('$uid', '$msg_id', '$comment', NOW(), '$time')");
            $newquery = mysqli_query($con, "SELECT C.k_id, C.uid, C.isi, C.waktu, U.nama FROM komentar C, user U WHERE C.uid=U.nim and C.mid='$msg_id' ORDER BY C.k_id DESC LIMIT 1");
            $result = mysqli_fetch_array($newquery);
            return $result;
        } else {
			return false;
		}
    }
	
	//Hapus Komentar
	public function Delete_Comment($uid, $com_id)  {
		include('config.php');
	    $query = mysqli_query($con, "DELETE FROM `komentar` WHERE uid='$uid' and k_id='$com_id'");
        return true;    
    }
}

?>
