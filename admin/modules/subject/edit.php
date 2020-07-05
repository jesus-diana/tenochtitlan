<?php

$subjid = $_GET['id'];
$singlesubject = new Subject();
$object = $singlesubject->single_subject($subjid);

?>
<form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $subjid;?>" method="POST">

<fieldset>
	<legend>Editar Asignatura</legend>
										

		<div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjcode">Codigo de asignatura</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
								  "Codigo de asignatura" type="text" value="<?php echo $object->SUBJ_CODE;?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjdesc">Nombre</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
								  "Nombre" type="text" value="<?php echo $object->SUBJ_DESCRIPTION;?>">
          </div>
        </div>
      </div>

       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "unit">No de unidades</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="unit" name="unit" placeholder=
								  "No de unidades" type="number" value="<?php echo $object->UNIT;?>">
          </div>
        </div>
      </div>
<!--       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "pre">Prerequisite</label>

          <div class="col-md-8">-->
             <input class="form-control input-sm" id="pre" name="pre" placeholder=
								  "Pre-requisito" type="hidden" value="<?php echo $object->PRE_REQUISITE;?>">
      <!--    </div>
        </div>
      </div>-->
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "course">Años</label>

          <div class="col-md-8">
           <select class="form-control input-sm" name="course" id="course">
              	<?php
              	$course = new Course();
              	$cur = $course->listOfcourse();	
              	foreach ($cur as $course) {
              		echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.'</option>';
              	}

              	?>
					
				</select>	
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "ay">Año escolar</label>

          <div class="col-md-8">
            <select class="form-control input-sm" name="ay" id="ay">
				<option value="2013-2014">2011-2014</option>
				<option value="2014-2015">2014-2017</option>
				<option value="2015-2016">2017-2020</option>
          </div>
        </div>
      </div>
<!--	  <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "Semester">Semester</label>

          <div class="col-md-8">
             <select class="form-control input-sm" name="Semester" id="Semester">
				<option value="First">First</option>
				<option value="Second">Second</option>	
				<option value="Second">Summer</option>	
			</select>-->
			  <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "Pre-requisito" type="hidden" value="First">
     <!--     </div>
        </div>
      </div>-->
	<?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
	 <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "idno"></label>

          <div class="col-md-8">
            <button class="btn btn-primary" name="savecourse" type="submit" >Guardar</button>
          </div>
        </div>
      </div>';
    }
    ?>

		
</fieldset>	

				
</form>
</div><!--End of container-->