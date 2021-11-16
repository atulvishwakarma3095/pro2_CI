<?= $this->extend('Login/Login-layout');?>
<?= $this->section('content')?>
	
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="card shadow">
						<div class="card-header">
							<h5>Login</h5>
						</div>
						<div class="card-body">
								<div class="row">
									<div class="col-sm-12">
										<?php  if(!empty(session()->getFlashdata('fail'))) :?>
					                    <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
					                    <?php endif?>

					                    <?php  if(!empty(session()->getFlashdata('success'))) :?>
					                    <div class="alert alert-success"><?= session()->getFlashdata('success');?></div>
					                    <?php endif?>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-sm-12">
												<form action="<?= base_url('loginform');?>" method="POST">
													 <?= csrf_field();?>
											<div class="form-group">
												<label>Email:</label>
												<input type="text" name="txtemail" class="form-control" value="<?php echo set_value('txtemail'); ?>">
												<?php if(isset($validation)) { ?><?= $validation->showError('txtemail'); ?><?php } ?>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label>Password:</label>
												<input type="password" name="txtpasswd" class="form-control" value="<?php echo set_value('txtpasswd'); ?>">
												<?php if(isset($validation)) { ?><?= $validation->showError('txtpasswd'); ?><?php } ?>
											</div>
										</div>

										<div class="col-md-12">
											<!-- <div class="form-group">
												<hr>
												<a href="<?=base_url('registerform');?>">Create an account</a>
											</div> -->
											<div class="form-group">
												<hr>
												<button class="btn btn-info btn-block">Login</button>
											</div>
										</form>
										</div>
										</div>
									</div>    
								
									<div class="col-md-6 border-left">
										<ul>
											<li>Welcome to BCA Education Admission Process 2021-2022</li>
										</ul>
										
									</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	
	


<?= $this->endSection();?>