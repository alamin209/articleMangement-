<!DOCTYPE html>
<html>
<head>
	<title>article</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/modal.css " />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/bootstrap.min.css " />
    <div style="float: right;>









                             <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/bootstrap.min.css " />
    <div style="float: right;>

                                <a href="#"> <button onclick="selectid4(this)"></button>

    <div id="myModal3" class="modal">
        <br/><br/><br/>
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">×</span>

            <h2>Edit Content</h2>
            <div id="txtHint"></div>

        </div>


    </div>
    <!--modal end-->


    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>

    <script>


        // Get the modal

        var modal3 = document.getElementById('myModal3');
        var span = document.getElementsByClassName("close")[0];

        function selectid4(x) {
            modal3.style.display = "block";
            //btn = $(x).data('panel-id');
            //alert(btn);

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("registation/add_new_user")?>',
                data:{},
                cache: false,
                success:function(data)
                {
                    $('#txtHint').html(data);
                }

            });
        }


        function selectid11(x) {
            modal3.style.display = "block";
            //btn = $(x).data('panel-id');
            //alert(btn);

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("About_us/view_add_new_details/")?>',
                data:{},
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





</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" dat-tatget="#bs-example-navbar-collapse">
			<span class="sr-only">toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Article</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<form class="navbar-form navbar-left " role="search">
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-defult">SUBMIT</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url() ?>admin/login">Login</a></li>
		</ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url() ?>login/registation1">click here for registation1</a></li>
            </ul>

		</div>
		</div>
		</nav>