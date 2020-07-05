<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
		
if (isset($_POST['save'])){

	if ($_POST['rmname'] == "" OR $_POST['roomdesc'] == "") {
		message("Todos los archivos son requeridos!", "error");
		redirect('index.php?view=add');

	}else{
		$room = new Room();
		$rmid		= $_POST['roomid'];
		$rmname     = $_POST['rmname'];
		$rmdesc 	= $_POST['roomdesc'];
		$res = $room->find_all_room($rmname);
				
		if ($res >=1) {
			message("Esta aula ya existe!","error");
			redirect('index.php?view=add');

		}else{
			$room->ROOM_NAME = $rmname;
			$room->ROOM_DESC = $rmdesc;
			 $istrue = $room->create(); 
			 if ($istrue == 1){
			 
			 	message("Nuevo [". $rmname ."] Agregado exitosamente!","Existoso");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$rmid = $_GET['id'];

	if (isset($_POST['save'])){

		if ($_POST['rmname'] == "" OR $_POST['roomdesc'] == "") {
			$message= "Todos los archivos son requeridos!";
			redirect('index.php?view=edit&id='.$rmid);

		}else{
			$room = new Room();
			$rmid		= $_POST['roomid'];
			$rmname     = $_POST['rmname'];
			$rmdesc 	= $_POST['roomdesc'];
					
			$room->ROOM_ID	 = $rmid;
			$room->ROOM_NAME = $rmname;
			$room->ROOM_DESC = $rmdesc;
			$room->update($rmid);

			$message = $rmname. " Actualizada correctamente!";
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$room = new Room();
		$room->delete($id[$i]);
	}

message("Aula(s) ya ha sido eliminada!","info");
redirect('index.php');

}

?>