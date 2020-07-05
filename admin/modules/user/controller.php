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

	if ($_POST['name'] == "" OR $_POST['username'] == "" OR $_POST['pass'] == "") {
		$messageStats = false;
		message("Todos los archivos son requeridos!","error");
		redirect('index.php?view=add');
	}else{
		

		$user = new User();
		$acc_name		= $_POST['name'];
		$acc_username   = $_POST['username'];
		$acc_password 	= $_POST['pass'];
		$acc_type 		= $_POST['type'];

		$res = $user->find_all_user($acc_name);
		
		
		if ($res >=1) {
			message("El nombre ya existe!", "error");
			redirect('index.php');
		}else{
			
			$user->ACCOUNT_NAME = $acc_name;
			$user->ACCOUNT_USERNAME = $acc_username;
			$user->ACCOUNT_PASSWORD = sha1($acc_password);
			$user->ACCOUNT_TYPE = $acc_type;
			
			 $istrue = $user->create(); 
			 if ($istrue == 1){
			 	message("Nuevo [". $acc_name ."] creado con exito!", "Exitoso");
			 	redirect('index.php');
			 	
			 }
		}	 

		
	}
}
}



function doEdit(){
	if (isset($_POST['save'])){

		if ($_POST['name'] == "" OR $_POST['username'] == "" OR $_POST['pass'] == "") {
			$messageStats = false;
			message("Todos los archivos son requeridos!","error");
			redirect('index.php?view=add');
		}else{
			

			$user = new User();
			$acctid			= $_GET['id'];
			$acc_name		= $_POST['name'];
			$acc_username   = $_POST['username'];
			$acc_password 	= $_POST['pass'];
			$acc_type 		= $_POST['type'];

		
				
				$user->ACCOUNT_NAME = $acc_name;
				$user->ACCOUNT_USERNAME = $acc_username;
				$user->ACCOUNT_PASSWORD = sha1($acc_password);
				$user->ACCOUNT_TYPE = $acc_type;
				
				$user->update($acctid);
			 	message("Nuevo [". $acc_name ."] Creado Existosamente!", "Exitoso");
				redirect('index.php');
				
			
		}
	}
		
}

function doDelete(){
	
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$user = new User();
		$user->delete($id[$i]);
	}

	message("Usuario eliminado!","info");
	redirect('index.php');

}

?>