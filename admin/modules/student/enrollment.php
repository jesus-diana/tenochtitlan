<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
		 
					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
				
			}
			
			  ?>
 
		  <form class="form-horizontal span6" action="controller.php?action=enroll" method="POST">

					<div class="panel panel-primary col-offset-5">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Inscribir Estudiante </h3>
					  </div>
					  <div class="panel-body">

					   <div class="row">  
				            <div class="col-md-8 ">
      						<div class="form-group">
				              <label for=
				              "Semester">ID Numero: </label> 
				                <input class="form-control input-sm" id="idno" name="idno" readonly placeholder=
									  "ID Numero" type="text" value="<?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?>">
								</div>	  
				         			                       	
				            </div> 
				      	</div>
				          <div class="row" id="idno">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "Semester">Nombre: </label> 
				                <input class="form-control input-sm" readonly placeholder=
									  "Nombre" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				      
			          
			              <div class="row">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "Status">Estado : </label> 
				                 <select class="form-control input-sm" name="Status" id="Status">
									<option value="New">Nuevo estudiante</option>
									<option value="Continuing">Continuidad</option>	
									<option value="Trasferee">Transferencia</option>	
								</select>
				              </div>
				            </div>
				          </div>

			             <div class="row">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "course">Año de seccion:</label> 
				               <select class="form-control input-sm" name="course" id="course">
				                  	<?php
				                $mydb->setQuery("SELECT DISTINCT  `COURSE_NAME` ,  `COURSE_ID` 
									FROM course");
									$cur = $mydb->loadResultList();
				                  	foreach ($cur as $course) {
				                  		echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.'</option>';
				                  	}

				                  	?>
										
									</select>	
				              </div>
				            </div>
				          </div>
				          
			           
				           
			         
			             
			             <div class="row">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "ay">Año academico :</label> 
				                <select class="form-control input-sm" name="ay" id="ay">
                  <option value="2015-2017">2019-2020</option>
                  <option value="2017-2020">2020-2021</option>
                  <option value="2013-2015">2022-2023</option>
                  <option value="2015-2017">2023-2024</option>
                  <option value="2017-2020">2024-2025</option>
                  <option value="2013-2015">2025-2026</option>
                  <option value="2015-2017">2026-2027</option>
                  <option value="2017-2020">2027-2028</option>
                  <option value="2013-2015">2029-2030</option>
                  <option value="2015-2017">2030-2031</option>
                  <option value="2017-2020">2031-2032</option>
                  <option value="2013-2015">2032-2033</option>
                  <option value="2015-2017">2033-2034</option>
                  <option value="2017-2020">2034-2035</option>
                  <option value="2013-2015">2035-2036</option>
                  <option value="2015-2017">2036-2037</option>
                  <option value="2017-2020">2037-2038</option>
                  <option value="2013-2015">2038-2039</option>
                  <option value="2015-2017">2039-2040</option>
                  <option value="2017-2020">2040-2041</option>
                  <option value="2013-2015">2041-2042</option>
                  <option value="2015-2017">2042-2043</option>
                  <option value="2017-2020">2043-2044</option>
                  <option value="2013-2015">2044-2045</option>
                  <option value="2015-2017">2045-2046</option>
                  <option value="2017-2020">2046-2047</option>
                  <option value="2013-2015">2047-2048</option>
                  <option value="2015-2017">2048-2049</option>
                  <option value="2017-2020">2049-2050</option>	
								</select>	
				              </div>
				            </div>
				          </div>

				    <!--       <div class="form-group">
				            <div class="col-md-8">
				              <label for=
				              "Semester">Semester : </label>

				              <div class="col-md-6">
				                 <select class="form-control input-sm" name="Semester" id="Semester">
									<option value="First">First</option>
									<option value="Second">Second</option>	
									<option value="Summer">Summer</option>	
								</select>
				              </div>
				            </div>
				          </div> -->
				         <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "Primero" type="hidden" value="First">

				          <div class="row" id="idno">
				            <div class="col-md-10">  
      						<div class="form-group">
							         <div class="btn-group"> 
							          <a href="index.php" name="back" class="btn btn-default">Regresar </a>
									    <button type="submit" name="savestep1" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span> Guardar</button>
									  
									  
									  
									</div>
				                </div>

				            </div>

				          </div>
				       
				          
			            </div><!--/span-->


			           

			        </div><!--End or row-->
				          



					  </div>
					</div>
									
				</form>
				  
		  </div>

		</div>