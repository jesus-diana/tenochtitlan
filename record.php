 
<div class="container" style="margin-top: 90px"> 
	  <caption><h3 align="left"> Registro de matricula estudiantil</h3></caption>
			    <form action="controller.php?action=delsy&studentId=<?php echo $_SESSION['IDNO']; ?>" Method="POST">  					
				<table class="table table-hover">
				  <thead>
				  	<tr>
				  		<th> Grado y seccion</th> 
				  		<th>Ciclo escolar</th>
				  		<th>Estado</th>
				  		<th>Fecha de reinscripcion</th>
				  		<th>Opciones</th> 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT  `COURSE_NAME` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER` , s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
										FROM  `schoolyr` s,  `course` c
										WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_SESSION['IDNO']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td>' . $schoolyr->COURSE_DESC.'</td>';
				  //		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td>'. $schoolyr->AY.'</td>';
				  		echo '<td>'. $schoolyr->STATUS.'</td>';
				  		echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		echo '<td><a href = "index.php?page=4&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'"> Registro de Materias</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td></tr>
				  </tfoot>	
				</table>
			
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->