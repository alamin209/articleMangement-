<?php include('article_header.php'); ?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<form method="post" action="<?php echo base_url()?>admin/add_article">

TITLE:<input type="text" name="title"></br>
 BODY:<input type="textarea" name="body"></form><br> 
 <input type="submit" name="submit" value="Add new item">
<form>
</body>
</html>
</div>

<?php include('article_footer.php'); ?>