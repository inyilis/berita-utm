 <?php
foreach($updatesarray as $data)
 {
 $msg_id=$data['b_id'];  //echo $msg_id;
 $orimessage=$data['isi'];  //echo $orimessage;

 $message=htmlentities($data['isi']); //echo $message;
 $time=$data['waktu']; //echo $time;
 $username=$data['nama']; //echo $username;
 $uid=$data['uid']; //echo $uid;
 $face=$Wall->Gravatar($uid); //echo $face;
 $commentsarray=$Wall->Comments($msg_id); 
?>

<script type="text/javascript"> 
$(document).ready(function(){$("#stexpand<?php echo $msg_id;?>").oembed("<?php echo  $orimessage; ?>",{maxWidth: 400, maxHeight: 300});});
</script>
<div class="stbody" id="stbody<?php echo $msg_id;?>">

<div class="stimg">
<img src="<?php echo $face;?>" class='big_face'/>
</div> 
<div class="sttext">
<a class="stdelete" href="#" id="<?php echo $msg_id;?>" title="Hapus Update">X</a>
<b><?php echo $username;?></b></br> <?php echo $message;?>
<div class="sttime"><?php time_stamp($time);?> | <a href='#' class='commentopen' id='<?php echo $msg_id;?>' title='Comment'>Tambah Komentar </a></div> 

<div id="stexpandbox">
<div id="stexpand<?php echo $msg_id;?>"></div>
</div>

<div class="commentcontainer" id="commentload<?php echo $msg_id;?>">


<?php include('load_comments.php') ?>


</div>
<div class="commentupdate" style='display:none' id='commentbox<?php echo $msg_id;?>'>
<div class="stcommentimg">
<img src="<?php echo $face;?>" class='small_face'/>
</div> 
<div class="stcommenttext" >
<form method="post" action="">

<textarea name="comment" class="comment" maxlength="200"  id="ctextarea<?php echo $msg_id;?>"></textarea>
<br />
<input type="submit"  value=" Comment "  id="<?php echo $msg_id;?>" class="comment_button"/>
</form>


</div>
</div>


</div> 

</div>


<?php

  }
?>



 


