<?php
    include('db.php')
?>
<?php
    include('includes/header.php')
?>
    
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="productName" class="form-control" placeholder="Nombre del producto" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="number" name="productQuantity" class="form-control" placeholder="Cantidad del producto" autofocus>    
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar producto">
                </form>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php
    include('includes/footer.php')
?>
</html>