<body class="login-img3-body">
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
    <div class="container">
		<?php echo form_open('login/login_process', array('class'=>'login-form')); ?>     
    	<div class="login-wrap">
    		<p class="login-img"><i class="icon_lock_alt"></i></p>
     		<div class="input-group">
              	<span class="input-group-addon"><i class="icon_profile"></i></span>
				<?php echo form_input(array('name'=>'username', 'class'=>'form-control', 'placeholder'=>'Username')); ?>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
				<?php echo form_input(array('name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', 'type'=>'password')); ?>
            </div>
			<?php echo form_button(array('content'=>'Login', 'type'=>'submit', 'class'=>'btn btn-primary btn-lg btn-block')); ?>
        </div>
      <?php echo form_close(); ?>
    </div>
  </body>
</html>
