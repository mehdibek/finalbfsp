<?php 

	/******** Connect Base  ********/
  	 include("util/DatabasConfig/config.php"); 
  	/********End Header**********/ 

	$sql = 'DELETE FROM Events where id_event = ?';
	$stmt = $db->prepare($sql);
	$stmt->execute([$_GET['id']]);

	header("Location:List_events.php");

?>