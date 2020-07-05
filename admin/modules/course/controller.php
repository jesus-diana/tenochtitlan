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
		
	if (isset($_POST['savecourse'])){

	if ($_POST['coursename'] == "" OR $_POST['coursedesc'] == "") {
		message("Todos los archivos son requeridos!","error");
		check_message();
	}else{
		

		$course = new Course();
		$coursename   	= $_POST['coursename'];
		$courselevel   	= $_POST['level'];
		$coursemajor   	= $_POST['major'];
		$coursedesc 	= $_POST['coursedesc'];
		$coursedept		= $_POST['dept'];
		$res = $course->find_all_course($coursename, $courselevel, $coursemajor);
				
		if ($res >=1) {
			message("El nombre del curso ya existe!","error");
			check_message();
		}else{
			$course->COURSE_NAME = $coursename;
			$course->COURSE_LEVEL = $courselevel;
			$course->COURSE_MAJOR = $coursemajor;
			$course->COURSE_DESC = $coursedesc;
			$course->DEPT_ID = $coursedept;	
			 $istrue = $course->create(); 
			 if ($istrue == 1){
			 	
			 	message("Nuevo [". $coursename ."]curso creado exitosamente!","success");
			 	redirect('index.php');
			 }
		}	 

		
	}
}
}
function doEdit(){
	$courseid = $_GET['id'];
	$singledept = new Course();
	$object = $singledept->single_course($courseid);


	if (isset($_POST['savecourse'])){

		if ($_POST['coursename'] == "" OR $_POST['coursedesc'] == "") {
			
			message("Todos los archivos son requeridos!", "error");

		}else{
			$course = new Course();
			$courseid		= $_GET['id'];
			$coursename   	= $_POST['coursename'];
			$courselevel   	= $_POST['level'];
			$coursemajor   	= $_POST['major'];
			$coursedesc 	= $_POST['coursedesc'];
			$coursedept		= $_POST['dept'];
					
			$course->COURSE_NAME = $coursename;
			$course->COURSE_LEVEL = $courselevel;
			$course->COURSE_MAJOR = $coursemajor;
			$course->COURSE_DESC = $coursedesc;
			$course->DEPT_ID 	 = $coursedept;	
			$course->update($courseid);
			

			message($coursename. "Has sido actualizado correctamente!", "info");
			redirect('index.php');

		}
	}
		
}

function doDelete(){
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$Course = new Course();
		$Course->delete($id[$i]);
	}
	message("Curso(s) ya ha sido eliminado!","info");
	redirect('index.php');
}
?>