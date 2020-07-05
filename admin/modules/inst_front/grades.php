
<?php
$gradeId = $_GET['gradeId'];
$grade = new Grades();
$cur = $grade->single_grades($gradeId);

	$subjid = $cur->SUBJ_ID;
	$studentId = $cur->IDNO;
?>
<form class="form-horizontal well span4" action="controller.php?action=grade&classId=<?php echo $_GET['classId'];?>&gradeId=<?php echo $_GET['gradeId'];?>&instructorId=<?php echo $_GET['instructorId'];?>" method="POST">

	<fieldset>
		<legend>Agregar calificaciones</legend>
		 <div class="form-group">
        <div class="col-md-8">
        <?php 
        	$stud = new Student();
        	$cur=$stud->single_student($studentId);
        ?>
          <label class="col-md-4 control-label" for=
          "subjdesc">Nombre</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="studname" name="studname" readonly placeholder=
								  "Nombre" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME . ' , '.$cur->FNAME: 'Name' ;?>">
          </div>
        </div>
          </div>								

			<div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "subjcode">Codigo de la asignatura</label>
		<?php 
			$singlesubject = new Subject();
			$cur = $singlesubject->single_subject($subjid);
		?>
              <div class="col-md-8">
                 <input class="form-control input-sm" id="subjcode" name="subjcode" readonly placeholder=
									  "Codigo de la asignatura" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_CODE : 'Code' ;?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "subjdesc"> Descripcion</label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="subjdesc" name="subjdesc" readonly placeholder=
									  "Descripcion" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_DESCRIPTION  : 'Description' ;?>">
              </div>
            </div>
          </div>
		<?php
          $grade = new Grades();
		  $cur = $grade->single_grades($gradeId); 
		 ?>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "first">Primera calificacion</label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="first" name="first"  onkeyup="calculate();javascript:checkNumber(this);"  type="text" value="<?php echo (isset($cur)) ? $cur->FIRST  : 'FIRST' ;?>">
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "second">Segunda calificacion</label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="second" name="second"  onkeyup="calculate();javascript:checkNumber(this);"    type="text" value="<?php echo (isset($cur)) ? $cur->SECOND  : 'SECOND' ;?>">
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "third">Tercera calificacion Grading</label>
              <div class="col-md-8">
                 <input class="form-control input-sm" id="third" name="third"  onkeyup="calculate();javascript:checkNumber(this);"  type="text" value="<?php echo (isset($cur)) ? $cur->THIRD  : 'THIRD' ;?>">
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "fourth">Cuarta calificacion</label>
              <div class="col-md-8">
                 <input class="form-control input-sm" id="fourth" name="fourth"  onkeyup="calculate();javascript:checkNumber(this);"  type="text" value="<?php echo (isset($cur)) ? $cur->FOURTH  : 'FOURTH' ;?>">
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "finalave">Promedio Final</label>
              <div class="col-md-8">
                 <input class="form-control input-sm" id="finalave" name="finalave" readonly    type="text" value="<?php echo (isset($cur)) ? $cur->AVE  : 'AVE' ;?>">
              </div>
            </div>
          </div>
          
		 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>
              <div class="col-md-8">
                <a href="index.php?view=class&id=<?php echo $_GET['classId']; ?>&instructorId=<?php echo $_GET['instructorId'];?>" class="btn btn-primary" name="savecourse" type="submit" >Regresar</a>
               <button class="btn btn-primary" name="savegrades" type="submit" >Guardar</button>
              </div>
            </div>
          </div>							
	</fieldset>	

					
</form>
</div><!--End of container-->
