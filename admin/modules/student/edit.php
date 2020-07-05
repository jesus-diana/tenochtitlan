<?php 

				$student = new Student();
				$cur = $student->single_student($_GET['id']);
			?>
		        <form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->IDNO; ?>" method="POST">

					<fieldset>
						<legend>Nuevo Estudiante</legend>
															
 
			            <div class="col-md-4">
     					 <div class="form-group">
			              <label >ID Numero*</label>  
			                 <input class="form-control input-sm" id="idno" name="idno" placeholder=
												  "ID Numero" type="text" value="<?php echo $cur->IDNO; ?>" readonly>
			              </div> 
			            </div>  
			         
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "lName">Apellido:*</label> 
			                  <input class="form-control input-sm" id="lName" name="lName" type=
			                  "text" placeholder="Apellido" value="<?php echo $cur->LNAME; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      					   <div class="form-group">
			                <label for=
			                "fName">Nombre:*</label> 
			                  <input class="form-control input-sm" id="fName" name="fName" type=
			                  "text" placeholder="Nombre" value="<?php echo $cur->FNAME; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "mName">Segundo Nombre:*</label> 
			                  <input class="form-control input-sm" id="mName" name="mName" type=
			                  "text" placeholder="Segundo Nombre" value="<?php echo $cur->MNAME; ?>">
			                </div>
			              </div>
			            </div> 
						
						<div class="form-group">
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "gender">Genero</label> 
				                <select class="form-control input-sm" name="gender" id="gender">
				                	<option value="<?php echo $cur->SEX; ?>"><?php echo $cur->SEX; ?></option>
									<option value="M">Masculino</option>
									<option value="F">Femenino</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "bday">Fecha de nacimiento</label> 
			                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
			                    <input class="form-control" size="11" type="text" value="<?php echo $cur->BDAY; ?>" readonly name="bday" id="bday">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			                </div>
			              </div>
						</div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "bplace">Lugar de nacimiento</label> 
			                  <input class="form-control input-sm" id="bplace" name="bplace" type=
			                  "text" placeholder="Lugar de nacimiento" value="<?php echo $cur->BPLACE; ?>">
			                </div>
			              </div>
			            </div>
			          </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "age">Edad</label> 
			                  <input class="form-control input-sm" id="age" name="age" type="number" placeholder="Edad" value="<?php echo $cur->AGE; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "nationality">Nacionalidad</label> 
			                  <input class="form-control input-sm" id="nationality" name="nationality" type=
			                  "text" placeholder="Nacionalidad" value="<?php echo $cur->NATIONALITY; ?>">
			                </div>
			              </div>
			            </div> 
							 
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "religion">Religion </label> 
				                 <input class="form-control input-sm" id="religion" name="religion" type=
			                  "text" placeholder="Religion" value="<?php echo $cur->RELIGION; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "contact">Contacto </label> 
			                  <input class="form-control input-sm" id="contact" name="contact" type="text" placeholder="Contacto" value="<?php echo $cur->CONTACT_NO; ?>">
			                </div>
			              </div>
			               <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "email">Email*</label> 
			                  <input class="form-control input-sm" id="email" name="email" type=
			                  "email" placeholder="Email" value="<?php echo $cur->EMAIL; ?>">
			                </div>
			              </div>
			          </div> 
 
			            <div class="row">
			              <div class="col-md-8">
      						<div class="form-group">
			                <label>Inicio</label> 
			                  <input class="form-control input-sm" id="home" name="home" type=
			                  "text" placeholder="Inicio " value="<?php echo $cur->HOME_ADD; ?>">
			                </div>
			              </div>

			              
			            </div> 

    								
				</fieldset>	
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_GET['id']);
				?>
				<fieldset>
				<legend>Detalles Secundarios</legend>
 
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "father">Padre</label> 
			                 <input class="form-control input-sm" id="father" name="father" type=
		                  "text" placeholder="Padre" value="<?php echo $det->FATHER; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "fOccu">Ocupacion </label> 
		                  <input class="form-control input-sm" id="fOccu" name="fOccu" type="text" placeholder="Ocupacion" value="<?php echo $det->FATHER_OCCU; ?>">
		                </div>
		              </div>
		              
		          </div> 

				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "mother">Madre</label> 
			                 <input class="form-control input-sm" id="mother" name="mother" type=
		                  "text" placeholder="Madre" value="<?php echo $det->MOTHER; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "mOccu">Ocupacion</label> 
		                  <input class="form-control input-sm" id="mOccu" name="mOccu" type="text" placeholder="Ocupacion" value="<?php echo $det->MOTHER_OCCU; ?>">
		                </div>
		              </div>
		              
		          </div>
		          </div>
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "boarding">Estas pencionado? </label> 
			                   <div class="">
                          		 <label><input checked id="boarding"name="boarding" type=
                          "radio" value="Yes" checked="checked" >Si</label>
                        	   </div>
			                  <div class="">
                          		 <label><input checked id="boarding" name="boarding" type=
                          "radio" value="No" <?php echo ($det->BOARDING=='No')? 'checked ="checked"':''; ?>>No</label>
                        	   </div>

							
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "withfamily">Con Familia?</label> 
		              <div class="">
                          		 <label><input checked id="withfamily" name="withfamily" type=
                          "radio" value="Si">Si</label>
                        	   </div>
			                  <div class="">
                          		 <label><input checked id="withfamily" name="withfamily" type=
                          "radio" value="No">No</label>
                        	   </div>
		                </div>
		                </div>
		              </div>


		          </div>
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "guardian">Tutor </label> 
			                 <input class="form-control input-sm" id="guardian" name="guardian" type=
		                  "text" placeholder="Tutor" value="<?php echo $det->GUARDIAN; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "guardianAdd">Direccion </label> 
		                  <input class="form-control input-sm" id="guardianAdd" name="guardianAdd" type="text" placeholder="Direccion" value="<?php echo $det->GUARDIAN_ADDRESS; ?>">
		                </div>
		              </div>
		              
		          </div>
		          </div>


				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label  for=
		                "otherperson">Otro tutor </label> 
			                 <input class="form-control input-sm" id="otherperson" name="otherperson" type=
		                  "text" placeholder="Otro tutor" value="<?php echo $det->OTHER_PERSON_SUPPORT; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "otherAddress">Direccion</label> 
		                  <input class="form-control input-sm" id="otherAddress" name="otherAddress" type="text" placeholder="Direccion" value="<?php echo $det->ADDRESS; ?>">
		                </div>
		              </div>
		              
		          </div>
		          </div>
		          
				</fieldset>	
				<?php
				$req = new Requirements();
				$res = $req->single_result($_GET['id']);
				?>
				<fieldset>
					<legend>Otros detalles</legend>
					<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
		                <label for=
		                "boarding">Requerimientos</label>

							  <div class="checkbox">
							    <label>
							      <input type="checkbox" name="entrance" value="yes" <?php 
							      if ($res->ENTRANCE_TEST_RESULT=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Resultados del examen de admicion
							    </label>
							    
							  </div>
							  

		                </div>
		              </div>

		              </div>


		          </div>

				</fieldset>	
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
		                <label class="col-md-6 control-label" for=
		                "otherperson"></label>

		                <div class="col-md-6">
			             
		                </div>
		              </div>
		              <?php
if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
		              <div class="col-md-6" align="right">
		               <button class="btn btn-primary" name="submit" type="submit" > Guardar</button>

		               </div>';
		           } ?>
		              
		          </div>
		          </div>
					
				</form>
			<!--	</div><!--End of well-->

				</div><!--End of container-->
			
