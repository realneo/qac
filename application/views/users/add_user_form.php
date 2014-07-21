<!--main content start-->
  <section id="main-content">
      <section class="wrapper">
          <!-- page start-->
			<?php

				if(!$this->session->flashdata('notify')){
					$notify = '';
				}else{
					$notify = $this->session->flashdata('notify');
					$type = $notify['type'];
					$notify = $notify['msg'];
					echo "<div class='alert alert-$type' role='alert'>$notify</div>";
				}
			?>
			
          	<div class="row">
                  <div class="col-lg-4">
                      <section class="panel">
                          <header class="panel-heading"> Add User </header>
                          <div class="panel-body">
								<?php echo form_open('users/add_user_process'); ?>
                            		<div class="form-group">
	                                	<label for="username">Username</label>
	                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
	                                  </div>
	                                  <div class="form-group">
	                                      <label for="password">Password</label>
	                                      <input type="password" class="form-control" id="password" name='password' placeholder="Password">
	                                  </div>
              
	                                  <button type="submit" class="btn btn-primary">Add New User</button>
                          		<?php form_close(); ?>
                          </div>
                      </section>
                  </div>
	
          <!-- page end-->
      </section>
  </section>
  <!--main content end-->