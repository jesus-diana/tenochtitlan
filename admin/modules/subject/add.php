<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">

    <fieldset>
      <legend>Nueva Asignatura</legend>
                        

        <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjcode">Codigo de Asignatura</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
                      "Codigo de Asignatura" type="text" value="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjdesc">Nombre</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
                      "Nombre" type="text" value="">
                </div>
              </div>
            </div>

             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "unit">No de unidades</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="unit" name="unit" placeholder=
                      "No de unidades" type="number" value="">
                </div>
              </div>
            </div>
         <!--    <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "pre">Prerequisite</label>

                <div class="col-md-8">-->
                   <input class="form-control input-sm" id="pre" name="pre" placeholder=
                      "Pre-requisito" type="hidden" value="">
            <!--    </div>
              </div>
            </div>-->
             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "course">Año</label>

                <div class="col-md-8">
                 <select class="form-control input-sm" name="course" id="course">
                      <?php
                      $course = new Course();
                      $cur = $course->listOfDistinctcourse(); 
                      foreach ($cur as $course) {
                        echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.' </option>';
                      }

                      ?>
              
            </select> 
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "ay">Año escolar</label>

                <div class="col-md-8">
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
      <!--  <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "Semester">Semester</label>

                <div class="col-md-8">
                   <select class="form-control input-sm" name="Semester" id="Semester">
            <option value="First">First</option>
            <option value="Second">Second</option>  
            <option value="Summer">Summer</option>  
          </select>-->
          <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "Pre-requisito" type="hidden" value="First">
           <!--     </div>
              </div>
            </div>
      -->

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-default" name="savecourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Guardar</button>
                 <button class="btn btn-default" name="saveandnewcourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Guardar y añadir nuevo</button>
                </div>
              </div>
            </div>

        
    </fieldset> 

            
  </form>
  </div><!--End of container-->