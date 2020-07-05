 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

          <fieldset>
            <legend>Nuevo Usuario</legend>
                              
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Nombre:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder=
                            "Nombre" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "username">Usuario:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="username" name="username" placeholder=
                            "Usuario" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "pass">Contraseña:</label>

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
                          <option value="Administrator">Administrador</option>
                          <option value="Teacher">Maestro</option>
                          <option value="Student">Estudiante</option> 
                        </select> 
                      </div>
                    </div>
                  </div>

            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit" >Guardar</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      

        </div><!--End of container-->