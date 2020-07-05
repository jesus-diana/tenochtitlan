<div class="container">

		<div class="wellss">
			<?php 

				$mydb->setQuery("SELECT * 
									FROM instructor
									WHERE  `INST_EMAIL` ='{$_SESSION['ACCOUNT_USERNAME']}'");
				$cur = $mydb->loadSingleResult();
			?>
			  		
				 <fieldset>
						<legend>Informacion de facultad</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td>ID Numero :</td><td width="80%"><?php echo $cur->INST_ID; ?></td></tr>	
							<td>Nombre completo :</td><td><?php echo $cur->INST_FULLNAME; ?></td>	</tr></tr>
							<td>Genero :</td><td><?php 
								if($cur->INST_SEX== 'F'){
									echo "Femenino";
								}else{
									echo "Masculino";
								}	
								 ?></td>	</tr>
							<td>Direccion :</td><td><?php echo $cur->INST_ADDRESS; ?></td>	</tr>
							<td>Estado :</td><td><?php echo $cur->INST_STATUS; ?></td>	</tr>
							<td>Especializacion :</td><td><?php echo $cur->SPECIALIZATION; ?></td>	</tr>
							<td>Email :</td><td><?php echo $cur->INST_EMAIL; ?></td>	</tr>
							<td>Estado de Empleo :</td><td><?php echo $cur->EMPLOYMENT_STATUS; ?></td>	</tr>
							
							</tr>
						
						</tr>
					</table>	


				</fieldset>
				
							
			
	  	</div><!--End of well-->

</div><!--End of container-->