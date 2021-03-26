<?php
	error_reporting(0);
	include_once('config.php');
	include_once('includes/functions.php');
	include_once('includes/time_stamp.php');
	include_once('session.php');

	$Wall = new Wall_Updates();
	$updatesarray=$Wall->Updates($uid);
?>

<div class="halaman">
	<div style="width:100%;min-width:600px;overflow:hidden">
		<div id="wall_container" style="margin:0 auto;">
		<div id="updateboxarea">
			<h2>Upload Berita</h2>
			<form method="post" action="message_ajax.php">
				<textarea cols="30" rows="4" type="text" name="update" id="update" maxlength="1000" ></textarea>
				<br />
				<input type="submit" value=" Upload "  id="update_button"  class="update_button"/>
			</form>
		</div>
		<div id='flashmessage'>
		<div id="flash" align="left"  ></div>
		</div>
		<div id="content">
			<?php include('load_messages.php') ?>
		</div>
		</div>
	</div>
</div>