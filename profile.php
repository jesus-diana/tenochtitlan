<div class="container" style="margin-top: 90px"> 
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>
			  				
				 <fieldset>
						<legend>Informacion del estudiante</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td>ID Numero :</td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>	
							<td>Nombre completo :</td><td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>	</tr></tr>
							<td>Genero :</td><td><?php 
								if($cur->SEX== 'F'){
									echo "Femenino";
								}else{
									echo "Masculino";
								}	
								 ?></td>	</tr>
							<td>Año :</td><td><?php echo $cur->AGE; ?></td>	</tr>
							<td>Fecha de nacimiento :</td><td><?php echo $cur->BDAY; ?></td>	</tr>
							<td>Lugar de nacimiento :</td><td><?php echo $cur->BPLACE; ?></td>	</tr>
							<td>Nacionalidad :</td><td><?php echo $cur->NATIONALITY; ?></td>	</tr>
							<td>Religion :</td><td><?php echo $cur->RELIGION; ?></td>	</tr>
							<td>Contacto No. :</td><td><?php echo $cur->CONTACT_NO; ?></td>	</tr>
							<td>Email :</td><td><?php echo $cur->EMAIL; ?></td>	</tr>
							<td>Direccion :</td><td><?php echo $cur->HOME_ADD; ?></td>	</tr>
						
						</tr>
					</table>	


				</fieldset>
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend>Detalles secundarios</legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<tr><td>Padre:</td><td width="80%"><?php echo $det->FATHER; ?></td></tr>
							<tr><td>Ocupacion :</td><td><?php echo $det->FATHER_OCCU; ?></td></tr>
							<tr><td>Madre :</td><td><?php echo $det->MOTHER; ?></td></tr>
							<tr><td>Ocupacion :</td><td><?php echo $det->MOTHER_OCCU; ?></td></tr>
							<tr><td>Pencion :</td><td><?php echo $det->BOARDING; ?></td></tr>	
							<tr><td>Con familia :</td><td><?php echo $det->WITH_FAMILY; ?></td></tr>
							<tr><td>Tutor :</td><td><?php echo $det->GUARDIAN; ?></td></tr>
							<tr><td>Direccion :</td><td><?php echo $det->GUARDIAN_ADDRESS; ?></td></tr>
							<tr><td>Otro tutor :</td><td><?php echo $det->OTHER_PERSON_SUPPORT; ?></td></tr>
							<tr><td>Direccion :</td><td><?php echo $det->ADDRESS; ?></td></tr>
						</tbody>	
						</table>
						 


				</fieldset>	
				<?php
				$req = new Requirements();
				$res = $req->single_result($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend>Requerimientos</legend>
						<table class="table table-bordered" cellspacing="0">
							<tr><td>Resultados del examen de admicion :</td><td><?php echo $res->ENTRANCE_TEST_RESULT; ?></td></tr>
							<tr><td>Certificado de transferencia :</td><td><?php echo $res->CERTIFICATE_OF_TRANSFER; ?></td></tr>	
						
						</table>
						
				</fieldset>					
			
	  	</div><!--End of well-->

</div><!--End of container-->