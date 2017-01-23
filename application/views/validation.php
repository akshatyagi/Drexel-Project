	<div class='row'>
    <div class='col-md-6'></div>
	  <br><br>
    <?php 
    $bootstrap_class=array('class'=>'form-inline');
    echo form_open('main/validate_credentials',$bootstrap_class); ?>
      <div class='col-md-9'>
        <div class='form-group'>
          <input class='form-control' style='width:400px;' type='email' id='email_id' name='email_id' placeholder='Enter your email address!' required/>
          <button type='submit' class='btn btn-default btn-md'>Get Started!</button>
        </div>
      </div>
    <?php echo form_close(); ?>
    <div class='col-md-3'></div>
	</div>