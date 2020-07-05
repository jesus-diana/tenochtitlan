<div class="row">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php 

				$mydb->setQuery("SELECT * 
									FROM instructor
									WHERE  `INST_EMAIL` ='{$_SESSION['ACCOUNT_USERNAME']}'");
				$inst = $mydb->loadSingleResult();
			?>
 
<form class="form-horizontal span4" action="controller.php?action=delsubj" method="POST">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Materias por Maestro</h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >	   
     	 <div class="container">

     	  <div class="well" > 

    	<form class="form-horizontal span4" action="" method="POST">
    		<table>			 
         	
		    <tbody>
		     	<tr>
		     		<td>
		     			<p>
				     		<b>Nombre completo : </b><?php echo (isset($inst)) ? $inst->INST_FULLNAME : 'Fullname' ;?><br/>
				     		<b>Sexo : </b><?php echo (isset($inst)) ? $inst->INST_SEX  : 'Sex' ;?><br/>
				     		<b>Estado : </b><?php echo (isset($inst)) ? $inst->EMPLOYMENT_STATUS : 'EMPLOYMENT STATUS' ;?><br/>
				     		<b>Especializacion : </b><?php echo (isset($inst)) ? $inst->SPECIALIZATION : 'SPECIALIZATION' ;?><br/>
				     		<b>Direccion : </b><?php echo (isset($inst)) ? $inst->INST_ADDRESS : 'Address' ;?>

		     			</p>
		     		</td>
		     	</tr>
		    </tbody>
		   	   
			  
			</table>
		</form>
		<br>
		<h3 align="left">Lista de materias</h3>
			    <table id="example" class="display" cellspacing="0" width="100%">
				
				  <thead>
				  	<tr>
				  		<tr>
				  		<th width="10">No</th>	
				  		<th  width="20%" class="bottom"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Materia</th>
				  		<th class="bottom">Descripcion</th>
				  		<!--<th class="bottom">Semester</th>
				 		<th class="bottom">Course</th>-->
				 		<th class="bottom">Grado</th>
				 	<!--	<th class="bottom">Pre-requisite</th>
				 		<th align="center" class="bottom">Unit</th>  -->
				 		<th class="bottom">Aula</th>
				 		<th class="bottom">Dias y tiempo</th>
				 		<th class="bottom">Estudiantes</th>

				  	</tr>	   
				  </thead>
				  <tbody>
				  	<?php

					 
						$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `course` c  ,class cl
								WHERE s.`COURSE_ID` = c.`COURSE_ID` 
								AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								AND  `INST_ID` = ".$inst->INST_ID."");
						$cur = $mydb->loadResultlist();
						foreach ($cur as $result) {

					  		echo '<tr>';
					  		echo '<td width="10" align="center"></td>';
					  		echo '<td width="20%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CLASS_ID. '"/>
				  			'.$result->SUBJ_CODE .'</td>';
					  		echo '<td width="30%">'. $result->SUBJ_DESCRIPTION.'</td>';
					  	//	echo '<td>'. $result->SEMESTER.'</td>';
					  		echo '<td>'. $result->COURSE_NAME.'</td>';
					  	//	echo '<td>'. $result->COURSE_LEVEL.'</td>';
						//	echo '<td>'. $result->PRE_REQUISITE.'</td>';
						//	echo '<td align="center">'. $result->UNIT.'</td>';
							echo '<td>'. $result->ROOM.'</td>';
							echo '<td>'. $result->DAY.'/'. $result->C_TIME.'</td>';
							echo '<td><a href="index.php?view=class&id='.$result->CLASS_ID.'&instructorId='.$result->INST_ID.'">View</a></td>';
						//	echo '<td><a href="#.php?id='.$result->CLASS_ID.'">'. $result->DAY.'/'. $result->C_TIME.'</a></td>';
							echo  '<input type="hidden" name="INST_ID" id="INST_ID" value="'.$result->INST_ID.'"/>';
					  		echo '</tr>';
				  		}
					  	 
				  	?>
				  </tbody>
	  		<!--	<tfoot>
				<?php
				/*	$mydb->setQuery("SELECT SUM(UNIT) as UN
						FROM  `subject` s,  `course` c  ,class cl
						WHERE s.`COURSE_ID` = c.`COURSE_ID` 
						AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
						AND  `INST_ID` = ".$_GET['instructorId']."");
					$result = $mydb->loadSingleResult();	 */
				  ?>
			  	<tr><td class="bottom"  colspan="7"></td></tr>
			  	<tr><td  colspan="6" align="Right"><Strong>Total</Strong></td><td align="center" ><strong><?php echo $result->UN; ?></strong></td></tr>
				<tr><td  colspan="7"></td></tr>				  	 
				</tfoot>	-->	
			</table>			
				<div class="btn-group">
				  <a href="index.php" class="btn btn-default">Regresar</a>
				   <a href="index.php?view=assign&instructorId=<?php  echo (isset($_GET['instructorId'])) ? $_GET['instructorId']: 'ID' ; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Asignar materia</a>
				   <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Eliminar seleccionado</button>
				</div>
		</form>
	 </div>      		         
   </div>
  </div><!--/span-->
</form>
  
  
</div>
</div>