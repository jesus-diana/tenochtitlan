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

	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['unit'] == "") {
		message("Todos los archivos son requeridos!","error");
		check_message();
	}else{
		

		$subj = new Subject();
		$subjcode   	= $_POST['subjcode'];
		$subjdesc	 	= $_POST['subjdesc'];
		$unit 			= $_POST['unit'];
		$pre 			= $_POST['pre'];
		$course 		= $_POST['course'];
		$ay 			= $_POST['ay'];
		$Semester 		= $_POST['Semester'];
	
			$subj->SUBJ_CODE		 = $subjcode;
			$subj->SUBJ_DESCRIPTION  = $subjdesc;
			$subj->UNIT 			 = $unit;
			$subj->PRE_REQUISITE 	 = $pre;
			$subj->COURSE_ID 		 = $course;
			$subj->AY 				 = $ay;
			$subj->SEMESTER 		 = $Semester;


			 $istrue = $subj->create(); 
			 if ($istrue == 1){
			 	
			 	message("Asignatura agregada exitosamente!","Exitoso");
			 	redirect('index.php');
			 }
	}
	}
	elseif (isset($_POST['saveandnewcourse'])) {
	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['unit'] == "") {
		message("Todos los archivos son requeridos!","error");
		check_message();
	}else{
		

		$subj = new Subject();
		$subjcode   	= $_POST['subjcode'];
		$subjdesc	 	= $_POST['subjdesc'];
		$unit 			= $_POST['unit'];
		$pre 			= $_POST['pre'];
		$course 		= $_POST['course'];
		$ay 			= $_POST['ay'];
		$Semester 		= $_POST['Semester'];
	
			$subj->SUBJ_CODE		 = $subjcode;
			$subj->SUBJ_DESCRIPTION  = $subjdesc;
			$subj->UNIT 			 = $unit;
			$subj->PRE_REQUISITE 	 = $pre;
			$subj->COURSE_ID 		 = $course;
			$subj->AY 				 = $ay;
			$subj->SEMESTER 		 = $Semester;



			 $istrue = $subj->create(); 
			 if ($istrue == 1){
			 	
			 	message("Asignatura agregada exitosamente!","Exitoso");
				redirect('index.php?view=add');
			 }
}

}
}



function doEdit(){
	if (isset($_POST['savecourse'])){
	

	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['unit'] == "") {
		message("Todos los archivos son requeridos!","error");
		redirect('index.php');
	}else{
		

		$subj = new Subject();
		$Subjectid		= $_GET['id'];
		$subjcode   	= $_POST['subjcode'];
		$subjdesc	 	= $_POST['subjdesc'];
		$unit 			= $_POST['unit'];
		$pre 			= $_POST['pre'];
		$course 		= $_POST['course'];
		$ay 			= $_POST['ay'];
		$Semester 		= $_POST['Semester'];

			$subj->SUBJ_ID			 = $Subjectid;
			$subj->SUBJ_CODE		 = $subjcode;
			$subj->SUBJ_DESCRIPTION  = $subjdesc;
			$subj->UNIT 			 = $unit;
			$subj->PRE_REQUISITE 	 = $pre;
			$subj->COURSE_ID 		 = $course;
			$subj->AY 				 = $ay;
			$subj->SEMESTER 		 = $Semester;
 			$subj->update($Subjectid);
			message($subjcode. " actualizada exitosamente!", "info");
			redirect('index.php');
			 
			
		}	 

		
	}
		
}

function doDelete(){
		  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$subj = new Subject();
		$subj->delete($id[$i]);
	}
	message("Curso(s) ya ha sido elimidado!","info");
	redirect('index.php');

}

?>