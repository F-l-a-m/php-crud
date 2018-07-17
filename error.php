<?php
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link   href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">

            <div class="span10 offset1">
                <div class="row">
                    <h3>Error</h3>
                </div>
                <p>User with ID = <?php echo $id ?> not found.</p>
                <a class="btn" href="index.php">Back</a>
            </div>
            
        </div> <!-- /container -->
    </body>
</html>
