<?php

	/******** Connect Base  ********/
	    include("util/DatabasConfig/config.php"); 
	/********End Header**********/

	$id_em=$_POST['id_em'];
	$id_rec=$_POST['id_rec'];
	$message=$_POST['message'];
	$date=$_POST['date'];


	$query="insert into Chatmessage (id_em, id_rec, message, date) VALUES (".$id_em.",".$id_rec.",'".$message."','".$date."')";
    $update=$db->prepare($query);
    $update->execute();
    echo json_encode(array("abc"=>$query));
?>
 