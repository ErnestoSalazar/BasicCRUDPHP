<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <script src="javascripts/jquery-3.1.1.min.js"></script>
    <script src="javascripts/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <h2>ABC</h2>
        <h4>Para Digital Depot</h4>
        <hr>
    </div>
    <div class="row">
        <?php include_once ("contact-form.php");?>
        <br>
        <?php include_once ("contacts-table.php");?>
    </div>
</div>


<!--MODAL FOR UPADTE CONTACTS-->
<div class="modal fade" id="changeContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="contact-modal"></h4>
            </div>
            <div class="modal-body">
                <form id="change-form">
                    <input type="text" class="form-control name" placeholder="Nombre">
                    <input type="text" class="form-control age" placeholder="Edad">
                    <input type="text" class="form-control email" placeholder="Email">
                    <input type="text" class="form-control cell" placeholder="Telefono">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary actualizar ">Guardar</button>
            </div>
        </div>
    </div>
</div>
<script src="javascripts/app.js"></script>
</body>
</html>