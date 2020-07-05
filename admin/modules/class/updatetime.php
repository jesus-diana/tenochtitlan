<?php
	// $subjid = $_GET['id'];
	// $singlesubject = new Subject();
	// $object = $singlesubject->single_subject($subjid);

			if (isset($_GET['classId'])){			
			$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `course` c  ,class cl
								WHERE s.`COURSE_ID` = c.`COURSE_ID` 
								AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								AND  `CLASS_ID` = ".$_GET['classId']."");
			$cur = $mydb->loadSingleResult();	
		$INST_ID =   (isset($cur)) ? $cur->INST_ID : 'INST_ID' ; 

			}
			?>
		        <form class="form-horizontal well span4" action="controller.php?action=updatetime&classId=<?php echo $_GET['classId'];?>" method="POST">

					<fieldset>
						<legend>Actualizar tiempo</legend>
															

							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Codigo de asignatura</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="subjcode" name="subjcode" readonly placeholder=
													  "Codigo de asignatura" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_CODE : 'Code' ;?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Nombre</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="subjdesc" name="subjdesc" readonly placeholder=
													  "Nombre" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_DESCRIPTION  : 'Description' ;?>">
				              </div>
				            </div>
				          </div>

				      <!--     <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "unit">No of units</label>

				              <div class="col-md-8">-->
				                 <input class="form-control input-sm" id="unit" name="unit" readonly placeholder=
													  "Numero de unidades" type="hidden" value="<?php echo (isset($cur)) ? $cur->UNIT  : 'UNIT';?>">
				           <!--   </div>
				            </div>
				          </div>
				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "pre">Prerequisite</label>

				              <div class="col-md-8">-->
				                 <input class="form-control input-sm" id="pre" name="pre" readonly placeholder=
													  "Pre-requisitos" type="hidden" value="<?php (isset($cur)) ? $cur->PRE_REQUISITE  : 'PRE_REQUISITE';?>">
				          <!--    </div>
				            </div>
				          </div>-->
				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "course">Grado</label>

				              <div class="col-md-8">
				              <input class="form-control input-sm" id="course_name" name="course_name" readonly placeholder=
													  "Pre-requisitos" type="text" value="<?php echo (isset($cur)) ? $cur->COURSE_NAME : 'Course' ;?>">
				                   
										
								 
				              </div>
				            </div>
				          </div>
				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "ay">Año academico</label>

				              <div class="col-md-8">
				                <input class="form-control input-sm" id="sy" name="sy" readonly placeholder=
													  "Pre-requisitos" type="text" value="<?php echo (isset($cur)) ? $cur->AY : 'Course';?>">
				              </div>
				            </div>
				          </div>
						<!--  <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "Semester">Semester</label>

				              <div class="col-md-8">-->
				                  <input class="form-control input-sm" id="semester" name="semester" readonly placeholder=
													  "Pre-requisitos" type="hidden" value="<?php echo (isset($cur)) ? $cur->SEMESTER : 'Semester' ;?>">
				          <!--    </div>
				            </div>
				          </div>-->
							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "ay">Dias</label>

				              <div class="col-md-8">
				                <select class="form-control input-sm"   name="day" id="day">
									<option value="MWF">Lunes</option>
									<option value="TTH">Martes</option>
									<option value="S">Miercoles</option>
									<option value="S">Jueves</option>
									<option value="S">Viernes</option>
								</select>	
				              </div>
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "rmname">Aula</label>

				              <div class="col-md-8">
				                <select class="form-control input-sm"   name="rmname" id="rmname">
				                	<?php
				                       $room = new Room();
				                      $cur = $room->listOfroom();
										foreach ($cur as $Room) {
				                       
				                          echo '<option value='. $Room->ROOM_NAME .'>'.$Room->ROOM_NAME.'</OPTION>';
				                        }

				                        ?>
								
								</select>	
				              </div>
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "section">Seccion</label>

				              <div class="col-md-8">
				                <input type="text" name="section" id="section" class="form-control input-sm" Placeholder="Seccion">
				              </div>
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "ay">Tiempo</label>
				              <div class="col-md-8">
				                <select class="form-control input-sm"  name="time" id="time">
									<option value="7:30-8:30">7:30-8:30</option>
									<option value="8:30-9:30">8:30-9:30</option>
									<option value="9:30-10:30">9:30-10:30</option>
									<option value="10:30-11:30">10:30-11:30</option>
									<option value="11:30-12:30">11:30-12:30</option>
									<option value="12:30-1:30">12:30-1:30</option>
									<option value="1:30-2:30">1:30-2:30</option>
									<option value="2:30-3:30">2:30-3:30</option>
									<option value="3:30-4:30">3:30-4:30</option>
									<option value="4:30-5:30">4:30-5:30</option>
									<option value="5:30-6:30">5:30-6:30</option>
									
								</select>	
				              </div>
				            </div>
				          </div>
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-primary" name="savecourse" type="submit" >Guardar</button>
				              </div>
				            </div>
				          </div>							
					</fieldset>	

									
				</form>
				</div><!--End of container-->