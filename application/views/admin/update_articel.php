<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/modal.css " />
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">

<div class="row">
	<div class="col-lg-6">
	<?php foreach ($article as $id) {  ?>
<form method="post" action="<?php echo base_url()?>admin/update_article">
    <input type="text" id="hide"  name="id" value="<?php echo $id->id; ?>" >
TITLE:<input type="text" name="title" value="<?php echo $id->title; ?>" ></br>
<span><?php echo form_error('title',"<p class='text-danger'>","</p>");?></span>
 BODY:<textarea rows="4" cols="50" name="body" ><?php echo $id->body; ?> </textarea></br>
  <span><?php echo form_error('body',"<p class='text-danger'>","</p>");?></span>
 <input type="submit" name="submit" value="Update article">

</form>
	<?php } ?>
</body>
</html>
</div>

