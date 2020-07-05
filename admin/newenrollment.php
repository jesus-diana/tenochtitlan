<?php
require_once("includes/initialize.php");
include 'header.php';

?>


<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	
		  		if (isset($_GET['studentId'])){
				
					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
				}
			

		  	if (isset($_POST['search'])){
				if ($_POST['txtsearch']==""){
					message("Numero ID es requerido!","error");
					check_message();

				}else{
					$student = new Student();
					$cur = $student->single_student($_POST['txtsearch']);
				}
			}

			if (isset($_POST['savestep1'])){

 				 $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 
				 $idno  =  $_POST['idno'];
				 $Status = $_POST['Status'];
				 $course = $_POST['course'];
				 $ay 	 = $_POST['ay'];
				 $Semester = $_POST['Semester'];
				
				$sy = new Schoolyr();
				$sy->AY = $ay;
				$sy->SEMESTER = $Semester;
				$sy->COURSE_ID = $course;
				$sy->IDNO = $idno;
				$sy->DATE_RESERVED = $created;
				$sy->STATUS = $Status;
				
				 $istrue = $sy->create();
			 if ($istrue == 1){
			 	
			 	message("Reservacion guardada exitosamente!","Exitoso");
			 	check_message();
		
			 }

			}
			  ?>
  <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Palanca de navegacion</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"> Estudiante ID Numero:</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
    <form class="navbar-form navbar-left" action="newenrollment.php" method="POST">
      <div class="form-group">
        <input type="text" name="txtsearch" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" name="search"class="btn btn-default">  <span class="glyphicon glyphicon-search"></span></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><?php
       $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 


      echo date_toText($created); ?></a></li>
      <li class="dropdown">
       
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Registro</h3>
					  </div>
					  <div class="panel-body">

					   <div class="row">
			            <div class="col-6 col-sm-6 col-lg-6">
			             <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester">ID Numero: </label>
				              <div class="col-md-6">
				                <input class="form-control input-sm" id="idno" name="idno" readonly placeholder=
									  "ID Numero" type="text" value="<?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				          <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester">Nombre: </label>
				              <div class="col-md-6">
				                <input class="form-control input-sm" readonly placeholder=
									  "Nombre" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				      
			          
			              <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Status"> Estado : </label>

				              <div class="col-md-6">
				                 <select class="form-control input-sm" name="Status" id="Status">
									<option value="New">Nuevo estudiante</option>
									<option value="Old">Continuidad</option>	
									<option value="Trasferee">Transferencia</option>	
								</select>
				              </div>
				            </div>
				          </div>
			             <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "course">Departamento y año:</label>

				              <div class="col-md-6">
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
				              <label class="col-md-6 control-label" for=
				              "ay">Año academico:</label>

				              <div class="col-md-6">
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

				    <!--      <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester">Semester : </label>

				              <div class="col-md-6">
				                 <select class="form-control input-sm" name="Semester" id="Semester">
									<option value="First">First</option>
									<option value="Second">Second</option>	
								
								</select>
				              </div>
				            </div>
				          </div>-->
				           <input type="hidden" class="form-control input-sm" name="Semester" id="Semester">
				          <div class="form-group" id="idno">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="savestep1" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span> Guardar</button>
									    <a href="newstudent.php" name="add" class="btn btn-default"> <span class="glyphicon glyphicon-plus"></span> Nuevo estudiante</a>
									  
									  
									</div>
				                </div>

				            </div>

				          </div>
				       
				          
			            </div><!--/span-->


			            <div class="col-6 col-sm-6 col-lg-6">
			            	<h3>Paso No.5</h3><p>Despues de este paso, el estudiante procede a<b> paso-6</b> por la aconsejacion de materia(s).</p>
			            </div>	

			        </div><!--End or row-->
				          



					  </div>
					</div>
									
				</form>
				  
		  </div>

		</div>

<?php include("footer.php") ?>



