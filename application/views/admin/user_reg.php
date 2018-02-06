<form class="form-horizontal" method="POST" action="<?php echo base_url()?>login/registation1">
    <div>
        <h2>Click here for registation</h2>
        <div class="panel-body">
            username:<input type="text" name="username", ><br>
            <span class="is-right"> <?php echo form_error('username',"<p class='text-danger'>","</p>");?></span>
            password:<input type="password" name="password" class="font-control"><br>
            <span class="is-right"> <?php echo form_error('password',"<p class='text-danger'>","</p>");?></span>
            firstname:   <input type="text" name="fname" class="font-control"><br>
            <span class="is-right"> <?php echo form_error('fname',"<p class='text-danger'>","</p>");?></span>
            lastname  :  <input type="text" name="lname" class="font-control"><br>
            <span class="is-right"> <?php echo form_error('lname',"<p class='text-danger'>","</p>");?></span>
            <input type="submit" name="submit" value="rsgidtation">

        </div>
</form>

<script>
    $(document).ready(function() {
        $('#summernote3').summernote();
    });

    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>
</div>