 <?php
error_reporting(0);
include_once('includes/functions.php');
include_once('includes/time_stamp.php');
include_once('session.php');
$Wall = new Wall_Updates();
if(isset($_POST['msg_id']))
{
$msg_id=$_POST['msg_id'];
$data=$Wall->Delete_Update($uid,$msg_id);
echo $data;

}
?>
