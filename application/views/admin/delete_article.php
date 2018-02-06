<?php include('admin_header.php'); ?>

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
                    <form method="post" action="<?php echo base_url()?>admin/confirm_delete/<?php echo $id->id?>">

                        <table>
                            <tr>

                                <td>
                                    <?php echo $id->id  ?>
                                </td>

                            </tr>


                            <tr>

                                       <td>
                                                <?php echo $id->title  ?>
                                       </td>

                             </tr>

                            <tr>
                                <td>
                                    <?php echo $id->body  ?>
                                </td>
                            </tr>

                        </table>
                        <button type="submit" value="submit"/>Delete</button>
                    </form>
                <?php } ?>



    </body>
    </html>
    </div>

<?php include('admin_footer.php'); ?>