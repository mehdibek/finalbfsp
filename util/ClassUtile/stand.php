<?php
include("../DatabasConfig/config.php"); 
$operation=$_POST['operation'];
//Modify Descript societe//
if($operation=="update"){
    
$desciption="'".$_POST['description']."'";
$idste=$_POST['idsociete'];
$query="UPDATE societe set description_ste=".$desciption." WHERE id_ste=".$idste;
    $update=$db->prepare($query);
    $update->execute();
echo json_encode(array("abc"=>$query));
}

if($operation=="delete"){
    
    $idstand=$_POST['idstand'];
    $query="UPDATE stand set etat_stand=0 WHERE id_stand=".$idstand;
        $update=$db->prepare($query);
        $update->execute();
    echo json_encode(array("abc"=>$query));
    
    }


    if($operation=="insert"){
    
        $namestand=$_POST['namestand'];
        $stestand=$_POST['stestand'];
        $eventstand=$_POST['eventstand'];

        $query="insert into stand (id_ste,id_events,nom_stand,etat_stand) VALUES (".$stestand.",".$eventstand.",'".$namestand."',1)";
            $update=$db->prepare($query);
            $update->execute();
        echo json_encode(array("abc"=>$query));
        
        }
    
?>