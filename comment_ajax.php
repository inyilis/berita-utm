<?php
    error_reporting(0);
    include_once('config.php');
    include_once('includes/functions.php');
    include_once('includes/time_stamp.php');
    include_once('session.php');

    $Wall = new Wall_Updates();
    if(isset($_POST['comment'])) {
    $comment=$_POST['comment'];
    $msg_id=$_POST['msg_id']; //echo $msg_id;
    $cdata=$Wall->Insert_Comment($uid,$msg_id,$comment);
    if($cdata)
    {
    $com_id=$cdata['k_id'];
    $comment=htmlentities($cdata['isi']);
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
<a class="stcommentdelete" href="#" id='<?php echo $com_id; ?>'>X</a>
<b><?php echo $username; ?></b> <?php echo $comment; ?>
<div class="stcommenttime"><?php time_stamp($time); ?></div> 
</div>
</div>
<?php
}
}
?>
