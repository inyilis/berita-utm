 <?php
error_reporting(0);
include_once('includes/functions.php');
include_once('includes/time_stamp.php');
include_once('session.php');
$Wall = new Wall_Updates();
if(isSet($_POST['com_id']))
{
$com_id=$_POST['com_id'];
$data=$Wall->Delete_Comment($uid,$com_id);
echo $data;

}
?>
