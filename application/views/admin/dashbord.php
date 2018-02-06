<?php include("admin_header.php"); ?>

<div class="container">
	<div class="row"></div>
	<div class="col-gl 6 pull-right">
	<?php 	if($feedback=$this->session->flashdata('feedback')): 

$feeddback_class=$this->session->flashdata('feedback_class');
	?>
<div class="alert alert-dismissible <?php echo $feeddback_class ?>">
 <?php echo $feedback ?>
</div>
</div>
</div>
<?php endif; ?>
	<!-- <div class="row">
<div class="col-gl-6 col-lg-offset-6 " >	 -->
<!-- <a href="<?php?>add_article" class="btn btn-lg btn-primary pull-right" > add new article</a> -->
<a href="<?php echo base_url() ?>admin/add_article" class=btn btn-primary>click here for add</a>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/modal.css " />
</div>
</div>
	<table class="table"> 
<!-- <head> -->
    <th>SR NO</th>
	<th>Title</th>
	<th>Action</th>	
</head>

<?php $count = 1 ; foreach ($article as $value) { ?>

<tr>
	<td><?php echo $count?></td>
	<td><?php echo $value->title ?></td>
		<td><a href="<?php base_url() ?>find_article/<?php echo $value->id?>">Edite</a>
<td>
    <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?php echo $value->id?>" onclick="selectid5(this)">Edit</button>

        <a href="<?php echo base_url() ?>admin/delete_article/<?php echo $value->id?>"  class="btn btn-danger">Delete</a></td>

</tr>

 <?php $count++; } ?>

</table>

    <div id="myModal3" class="modal">
        <br/><br/><br/>
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">×</span>

            <h2>Edit Content</h2>
            <div id="txtHint"></div>

        </div>


    </div>


    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">

    </script>


    <script>

        var modal3 = document.getElementById('myModal3');
        var span = document.getElementsByClassName("close")[0];

        function selectid5(x) {
            modal3.style.display = "block";
            btn = $(x).data('panel-id');
//alert(btn);
            $.ajax({
                type:'POST',
                url:'<?php echo base_url("admin/find_article/")?>/'+btn,
                data:{'id':btn},
                cache: false,
                success:function(data)
                {
                    $('#txtHint').html(data);
                }

            });
        }

        span.onclick = function() {
            modal3.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
                if (event.target == modal3) {
                    modal3.style.display = "none";
                }
            }


    </script>





<?php  include("admin_footer.php"); ?>