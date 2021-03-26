<?php

foreach($commentsarray as $cdata)
 {
 $com_id=$cdata['k_id'];
 $comment=htmlentities($cdata['isi'] );
  $time=$cdata['waktu'];
   $username=$cdata['nama'];
  $uid=$cdata['uid'];
   $cface=$Wall->Gravatar($uid);
 ?>
<div class="stcommentbody" id="stcommentbody<?php echo $com_id; ?>">
<div class="stcommentimg">
<img src="<?php echo $cface; ?>" class='small_face'/>
</div> 
<div class="stcommenttext">
<a class="stcommentdelete" href="#" id='<?php echo $com_id; ?>' title='Hapus Komentar'>X</a>
<b><?php echo $username; ?></b> <?php echo $comment; ?>
<div class="stcommenttime"><?php time_stamp($time); ?></div> 
</div>
</div>
<?php 
}
?>