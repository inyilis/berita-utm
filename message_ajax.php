 <?php
error_reporting(0);
include_once('config.php');
include_once('includes/functions.php');
include_once('includes/time_stamp.php');
include_once('session.php');
$Wall = new Wall_Updates();
if(isset($_POST['update']))
{
$update=$_POST['update'];
$data=$Wall->Insert_Update($uid,$update);

if($data)
{
$msg_id=$data['b_id'];
$message=htmlentities($data['isi']); //echo $message;
$time=$data['waktu'];
$uid=$data['uid'];
$username=$data['nama'];
$face=$Wall->Gravatar($uid);

?>
<div class="stbody" id="stbody<?php echo $msg_id;?>">
<div class="stimg">
<img src="<?php echo $face;?>" class='big_face'/>
</div> 
<div class="sttext">
<a class="stdelete" href="#" id="<?php echo $msg_id;?>" title='Delete update'>X</a>
<b><?php echo $username;?></b> </br><?php echo $message;?>
<div class="sttime"><?php time_stamp($time);?> | <a href='#' class='commentopen' id='<?php echo $msg_id;?>' title='Comment'>Tambah Komentar </a></div> 
<div id="stexpandbox">
<div id="stexpand"></div>
</div>
<div class="commentcontainer" id="commentload<?php echo $msg_id;?>">

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
}
?>
