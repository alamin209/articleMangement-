<?php include("article_header.php"); ?>

 <form class="form-horizontal" method="POST" action="<?php echo base_url()?>login/admin_login">
<div>
<div class="row">
	<div class="col-lg-6">
	<?php 	if($error=$this->session->flashdata('login_fail')): ?>
<div class="alert alert-dismissible alert-danger">
 <?php echo $error ?>
</div>
</div>
</div>
<?php endif; ?>
<div class="container">
ADMIN:<input type="text" name="username", value='' >
<span class="is-right"> <?php echo form_error('username',"<p class='text-danger'>","</p>");?></span>
</div>
PASSWORD:<input type="password" name="password" class="font-control">.<br>
<span class="is-right"> <?php echo form_error('password',"<p class='text-danger'>","</p>");?></span>
<input type="submit" name="submit" value="submit">
</div>
<?php include("article_footer.php"); ?>