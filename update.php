<?php
require_once("includes/initialize.php");

?>
    <?php 
        function doEdit(){
  if (isset($_POST['save'])){

    if ($_POST['name'] == "" OR $_POST['username'] == "" OR $_POST['pass'] == "") {
      $messageStats = false;
      message("Todos los archivos son requeridos!","error");
      redirect('index.php?view=add');
    }else{
      

      $user = new User();
      $acctid     = $_GET['id'];
      $acc_name   = $_POST['name'];
  
      $acc_password   = $_POST['pass'];
      $acc_type     = $_POST['type'];

    
        
        $user->ACCOUNT_NAME = $acc_name;
        $user->ACCOUNT_USERNAME = $acc_username;
        $user->ACCOUNT_PASSWORD = sha1($acc_password);
        $user->ACCOUNT_TYPE = $acc_type;
        
        $user->update($acctid);
        message(" [". $acc_name ."] Cambiada Existosamente!", "Existoso");
        redirect('index.php');
        
      
    }
  }
    
}
?>
<div class="container" style="margin-top: 90px"> 
<form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $userid;?>" method="POST">

 <fieldset>
            <legend>Nuevos usuarios</legend>
                              
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Nombre:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder=
                            "Nombre" type="text" value="<?Php echo $_SESSION['LNAME'];?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "pass"> Nueva contraseña:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="pass" name="pass" placeholder=
                            "Contraseña" type="Password" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "type">Tipo:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="type" id="type">
                          <option value="Student">Estudiante</option>
          
                        </select> 
                      </div>
                    </div>
                  </div>

                      <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit" >Guardar</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 


        </form> 




 