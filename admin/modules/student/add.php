
           <div class="card-header">
             <h5>Añadir nuevo estudiante</h5>
           </div>
              <div class="card-body">
                <form action="controller.php?action=add" class="form-horizontal  span9" method="post" autocomplete="off"> 

 
        <div class="row"> 
        <div class="col-md-4">
          <div class="form-group">
            <label  for="idno">ID Numero*</label> 
              <input class="form-control input-sm" id="idno" name="idno" placeholder=
              "ID Numero" type="number" value=""> 
          </div>
        </div>  
      </div>

        <div class="row">  
          <div class="col-md-4">
            <div class="form-group">
              <label for="lName">Apellido:*</label> 
                <input class="form-control input-sm" id="lName" name="lName"
                placeholder="Apellido" type="text">
            </div>
          </div> 

          <div class="col-md-4">
            <div class="form-group">
            <label for="fName">Nombre:*</label> 
              <input class="form-control input-sm" id="fName" name="fName"
              placeholder="Nombre" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="mName">Segundo Nombre:*</label> 
              <input class="form-control input-sm" id="mName" name="mName"
              placeholder="Segundo Nombre" type="text">
            </div>
          </div> 
       </div> 

        <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="gender">Genero</label> 
              <select class="form-control input-sm" id="gender" name="gender">
                <option value="M">
                  Masculino
                </option>

                <option value="F">
                  Femenino
                </option>
              </select>
            </div>
          </div>

           <div class="col-md-4">
            <div class="form-group">
                <label for=
                "bday">Fecha de Nacimiento</label> 
                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="11" type="text" value="" readonly name="bday" id="bday">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
           </div>
          <div class="col-md-4">
      <div class="form-group">
            <label for="bplace">Lugar de Nacimiento</label> 
              <input class="form-control input-sm" id="bplace" name="bplace"
              placeholder="Lugar de Nacimiento" type="text">
            </div>
          </div>
        </div> 

          <div class="col-md-4">
            <div class="form-group">
            <label for="age">Año</label> 
              <input class="form-control input-sm" id="age" name="age" placeholder=
              "Año" type="number">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="nationality">Nacionalidad</label> 
              <input class="form-control input-sm" id="nationality" name=
              "nationality" placeholder="Nacionalidad" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-4">
         <div class="form-group">
            <label for="religion">Religion</label> 
              <input class="form-control input-sm" id="religion" name="religion"
              placeholder="Religion" type="text">
            </div>
          </div>

          <div class="col-md-4">
         <div class="form-group">
            <label for="contact">Contacto</label> 
              <input class="form-control input-sm" id="contact" name="contact"
              placeholder="Contacto" type="text">
            </div>
          </div>

          <div class="col-md-4">
         <div class="form-group">
            <label for="email">Email*</label> 
              <input class="form-control input-sm" id="email" name="email"
              placeholder="Email" type="email">
            </div>
          </div>
        </div> 
    </fieldset>

    <fieldset>
      <legend>Detalles Secundarios</legend>

        <div class="row">
          <div class="col-md-6">
             <div class="form-group">
            <label for="father">Padre</label> 
              <input class="form-control input-sm" id="father" name="father"
              placeholder="Padre" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="fOccu">Ocupacion</label> 
              <input class="form-control input-sm" id="fOccu" name="fOccu"
              placeholder="Ocupacion" type="text">
            </div>
          </div>
        </div> 

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
           <div class="form-group">
            <label for="mother">Madre</label> 
              <input class="form-control input-sm" id="mother" name="mother"
              placeholder="Madre" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="mOccu">Ocupacion</label> 
              <input class="form-control input-sm" id="mOccu" name="mOccu"
              placeholder="Ocupacion" type="text">
            </div>
          </div>
        </div>
      </div>
 
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label for="boarding">Esta Pencionado?</label> 
              <div class="">
                <label><input checked id="boarding" name="boarding" type="radio"
                value="Si">Si</label>
              </div>

              <div class="">
                <label><input checked id="boarding" name="boarding" type="radio"
                value="No">No</label>
              </div>
            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
            <label for="withfamily">Con tu familia?</label> 
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
 
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label for="guardian">Tutor</label> 
              <input class="form-control input-sm" id="guardian" name="guardian"
              placeholder="Tutor" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="guardianAdd">Direccion</label> 
              <input class="form-control input-sm" id="guardianAdd" name=
              "guardianAdd" placeholder="Direccion" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label class="" for="otherperson">Otro tutor?</label> 
              <input class="form-control input-sm" id="otherperson" name=
              "otherperson" placeholder="Otro tutor?" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="otherAddress">Direccion</label> 
              <input class="form-control input-sm" id="otherAddress" name=
              "otherAddress" placeholder="Direccion" type="text">
            </div>
          </div>
        </div> 
    </fieldset>

    <fieldset>
      <legend>Otros detalles </legend>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label for="boarding">Requerimientos</label>


              <div class="checkbox">
                <label><input name="entrance" type="checkbox" value="yes">Resultado de examen de admicion</label>
              </div>

              <div class="checkbox">
                <label><input name="certifcateOfTransfer" type="checkbox" value=
                "yes"> Certificado de Tranferencia</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>

    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-6"></div>
        </div>

        <div class="col-md-6" style="text-align: right">
          <button class="btn btn-default" name="submit" type="submit">Guardar</button>
        </div>
      </div>
    </div>
  </form>
</div><!==End of well-->
  <!--End of container-->

</div><!--End of container-->
              </div>
