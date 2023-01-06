<?php 
				if(isset($error)){?>
				<div class="alert alert-danger"><?php echo $error; ?></div>
				<?php }elseif($success){ ?>
                <div class="alert alert-success"><strong>Successfully !</strong> Update Record HERE.</div>
				<?php } ?>
                  <div class="form-panel">
                      <form action="<?php echo base_url('Home/adminaddemployee'); ?>" class="form-horizontal style-form" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">NAME</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" placeholder="John Dew" name="name" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">EMAIL</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="email" placeholder="johndew@imi.com" name="email" class="form-control">
                              </div>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                   		<div class="col-md-6 col-sm-6">       
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">PASSWORD</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" placeholder="johnImi1234" name="password" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">PHONE NUMBER</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="phonenumber" placeholder="03122264990" class="form-control">
                              </div>
                          </div>
                       </div>
                   </div>
                   <div class="row">
                   	 <div class="col-md-6 col-sm-6">       
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">Next of beneficiary (Next of Kin)</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="beneficiary" placeholder="03122264990" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">Emergency Number</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="emergency" placeholder="03122264990" class="form-control">
                              </div>
                          </div>
                       </div>
                  </div>
                  <div class="row">
                   	 <div class="col-md-6 col-sm-6">        
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">DEPARTMENT</label>
                              <div class="col-md-12 col-sm-12">
                                  <select name="departid" class="form-control">
                                  	<?php if($departs){
										foreach($departs as $depart){
											
                                        		echo '<option value="'.$depart->id.'">'.humanize($depart->name).'</option>';
											}
										}?>
                                  </select>
                              </div>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6">        
                          <div class="form-group">   
                              <label class="col-md-12 col-sm-12 control-label">DESIGNATION</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="designation" placeholder="Web Designer" class="form-control">
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                   	 <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">CNIC</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="cnic" placeholder="42201-45824564-3" class="form-control">
                                  <input type="hidden" name="status" value="0">
                              </div>
                          </div>
                       </div>   
                       <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">RELIGION</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="religion" class="form-control">
                              </div>
                          </div>
                       </div>
                    </div>
                    <div class="row">
                   	 <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">SHIFT</label>
                              <div class="col-md-12 col-sm-12">
                                  <select name="shift" class="form-control">
                                  	<option value="morning"><?php echo humanize('morning');?></option>
                                    <option value="evening"><?php echo humanize('evening');?></option>
                                    <option value="night"><?php echo humanize('night');?></option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-sm-6"> 
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">JOB DESCRIPTION</label>
                              <div class="col-md-12 col-sm-12">
                                  <textarea type="text" name="jobdescription" class="form-control"></textarea>
                              </div>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                   	 <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">FATHER NAME</label>
                              <div class="col-md-12 col-sm-10">
                                  <input type="text" name="fathername" placeholder="Jonson Baby" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">DATE OF BIRTH</label>
                              <div class="col-md-12 col-sm-12">
                              	<div class="input-group">
                                  <input type="text" name="dob" class="datepicker form-control">
                                  <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>    
                              </div>
                          </div>
                       </div>
                   </div> 
                   <div class="row">
                   	 <div class="col-md-6 col-sm-6">      
                          <div class="form-group">
                              <label class="col-md-12 col-sm-2 control-label">MARITIAL STATUS</label>
                              <div class="col-md-12 col-sm-12">
                                  <select name="maritialstatus" class="form-control">
                                  	<option value="single"><?php echo humanize('single');?></option>
                                    <option value="married"><?php echo humanize('married');?></option>
                                    <!--<option value="divorced"><?php //echo humanize('divorced');?></option>
                                    <option value="widow"><?php //echo humanize('widow');?></option>
                                    <option value="separate"><?php //echo humanize('separate');?></option>
                                    <option value="widower"><?php //echo humanize('widower');?></option>-->
                                  </select>
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">ADDRESS</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="address" class="form-control">
                              </div>
                          </div>
                       </div>
                    </div>
                    <div class="row">
                   	 <div class="col-md-6 col-sm-6"> 
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">CITY</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="city" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">  
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">STATE</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="state" class="form-control">
                              </div>
                          </div>
                       </div>
                    </div>
                    <div class="row">
                   	 <div class="col-md-6 col-sm-6">  
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">EMPLOYEE TYPE</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="employeetype" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">REPORTING AUTHORITY</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="reportingauthority" class="form-control">
                              </div>
                          </div>
                       </div>
                   </div>
                   <div class="row">
                   	 <div class="col-md-4 col-sm-4">
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">JOIN DATE</label>
                              <div class="col-md-12 col-sm-12">
                              	<div class="input-group">
                                  	<input name="startdate" class="datepicker form-control">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                              	</div>
                              </div>
                          </div>
                     </div>
                     <div class="col-md-4 col-sm-4">     
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">END DATE</label>
                              <div class="col-md-12 col-sm-12">
                                <div class="input-group">
                                    <input name="enddate" class="datepicker form-control">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                              </div>
                          </div>
                    </div>
                    <div class="col-md-4 col-sm-4">     
                          <div class="form-group">          
                              <label class="col-md-12 col-sm-12 control-label">OR PRESENT</label>
                              <div class="col-md-12 col-sm-12 text-center">
                                  <div class="switch switch-square"
                                       data-on-label="<i class=' fa fa-check'></i>"
                                       data-off-label="<i class='fa fa-times'></i>">
                                      <input name="current" type="checkbox" />
                                  </div>
                              </div>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                   	 <div class="col-md-6 col-sm-6">  
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">LUNCH BREAK</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="lunchbreak" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-sm-6">   
                          <div class="form-group">
                              <label class="col-md-12 col-sm-12 control-label">NAMAZ BREAK</label>
                              <div class="col-md-12 col-sm-12">
                                  <input type="text" name="namazbreak" class="form-control">
                              </div>
                          </div>
                       </div>
                   </div>
                   <div class="row">
                   	 <div class="col-md-12 col-sm-12">       
                          <div class="form-group">
                              <label class="col-md-6 col-sm-6 control-label">ROLE</label>
                              <div class="col-md-6 col-sm-6">
                                  <select name="role" class="form-control" required>
                                  	<option value="admin"><?php echo humanize('admin');?></option>
                                    <option value="manager"><?php echo humanize('manager');?></option>
                                    <option value="employee" selected="selected"><?php echo humanize('employee');?></option>
                                  </select>
                              </div>
                          </div>
                       </div>
                       <div class="col-md-12 col-sm-12">   
                          <div class="form-group">
                              <div class="col-sm-3">
                                  <input type="submit" value="SUBMIT" class="btn btn-primary btn-xs">
                              </div>
                          </div>
                       </div>
                    </div>       
                      </form>
                  </div>
