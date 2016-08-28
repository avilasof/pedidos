<?php  
	$attribute = Array ('name'  => 'formularioRegister');
	echo form_open('cuser/validar_register_user',$attribute); 
?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please Sign Up</h3>
				</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Name" name="name" type="text" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Last Name" name="last_name" type="text" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Phone" name="phone" type="text" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Rif" name="rif" type="text" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Business name" name="business_name" type="text" autofocus>
							</div>
							<button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
							<div class="form-group"><?php echo "" ?></div>
							<div class="form-group">
								<?php echo "Have an account? <span><a href='".base_url()."index.php/clogin'>Log in</a></span>" ?>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	if (isset($datos['mensaje'])) echo $datos['mensaje'];
	echo form_close();
?>
