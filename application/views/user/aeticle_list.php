<?php include("article_header.php"); ?>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">

    </script>

    <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid4(this)">Add New</button></a>
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

        function selectid1(x) {
            modal3.style.display = "block";
            //btn = $(x).data('panel-id');
            //alert(btn);

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("/add_new_about_head/")?>',
                data:{},
                cache: false,
                success:function(data)
                {
                    $('#txtHint').html(data);
                }

            });
        }

<?php include("article_footer.php"); ?>