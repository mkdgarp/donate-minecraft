<div class="fixed-screen">
    <div class="box-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <?php 
                        require "minecraft_model.php";
                    ?>
                </div>
                <div class="col-md-8">
                    <div class="box-signin">
                        <div class="row">
                            <div class="col-md">
                                <input class="form-control" type="text" placeholder="Test">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-primary btn-send">Button 1</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $(".btn-send").click(function() {
        console.log("55");
    });
});
</script>