<?= $this->extend('Login/register-layout.php');?>
<?= $this->section('content')?>
	
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card shadow">
						<div class="card-header">
							<h5>Registration</h5>
						</div>
						<div class="card-body">
					<?php  if(!empty(session()->getFlashdata('fail'))) :?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
                    <?php endif?>

                    <?php  if(!empty(session()->getFlashdata('success'))) :?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success');?></div>
                    <?php endif?>			
									<form action="<?= base_url('regsave');?>" method="POST" autocompleted="off">
										<div class="row">
											
											<div class="col-sm-12">
												<div class="form-group">
													<label>Fullname:</label>
													<input type="text" name="txtfullname" class="form-control" value="<?php echo set_value('txtfullname'); ?>">
													<?php if(isset($validation)) { ?><?= $validation->showError('txtfullname'); ?><?php } ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Contact No:</label>
													<input type="text" name="txtcontact" class="form-control" value="<?php echo set_value('txtcontact'); ?>">
													<?php if(isset($validation)) { ?><?= $validation->showError('txtcontact'); ?><?php } ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Email:</label>
													<input type="text" name="txtemail" class="form-control" value="<?php echo set_value('txtemail'); ?>">
													<?php if(isset($validation)) { ?><?= $validation->showError('txtemail'); ?><?php } ?>
												</div>
											</div>
											<!-- <div class="col-sm-6">
												<div class="form-group">
													<label>Username:</label>
													<input type="text" name="txtusername" class="form-control">
												</div>
											</div> -->
											<div class="col-sm-6">
												<div class="form-group">
													<label>Password:</label>
													<input type="password" name="txtpasswd" class="form-control" value="<?php echo set_value('txtpasswd'); ?>">
													<?php if(isset($validation)) { ?><?= $validation->showError('txtpasswd'); ?><?php } ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Retype-Password:</label>
													<input type="password" name="txtretrypasswd" class="form-control" value="<?php echo set_value('txtretrypasswd'); ?>">
													<?php if(isset($validation)) { ?><?= $validation->showError('txtretrypasswd'); ?><?php } ?>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<hr>
													<button class="btn btn-info btn-block">Register</button>
												</div>
											</form>
											</div>
										<div class="col-md-12">
											<div class="form-group">
												<hr>
												<a href="<?=base_url('login');?>">I already have an account.</a>
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	
	


<?= $this->endSection();?>