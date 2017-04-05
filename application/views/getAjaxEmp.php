    <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="ic_No">Employee ID:</label>
                                      
                                       <input class="form-control input-sm" type="text" name="emp_id" id="emp_id" value="<?= $emp->emp_id; ?>">
                                      
                                     </div>
                                  </div>  
                           </div>

                           <div class="row">
                               <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="ic_No">Designation :</label>
                                      
                                     <input class="form-control input-sm" type="text" name="emp_designation" id="emp_designation" value="<?= $emp->emp_designation; ?>">
                                      
                                     </div>
                                  </div>  

                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="ic_No">Department :</label>
                                      <?php foreach ($lvl as $key) {
                                        if($key->dept_id == $emp->emp_deptId){
                                          ?>
                                           <input class="form-control input-sm" type="text" name="emp_deptId" id="emp_deptId" value="<?= $key->deptName; ?>">
                                        
                                          
                                        <?php
                                          }} ?>
                                    
                                      
                                     </div>
                                  </div>  


                           </div>    

                             
