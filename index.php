<?php
    include('db.php')
?>
<?php
    include('includes/header.php')
?>
    
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php
                if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php session_unset();
                }
            ?>
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre del producto</th>
                            <th>Cantidad</th>
                            <th>Fecha de creación</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM product";
                            $result_product = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result_product)){?>

                            <tr>
                                <td>
                                    <?php
                                    echo $row['productName']?>
                                </td>
                                <td>
                                    <?php
                                    echo $row['productQuantity']?>
                                </td>
                                <td>
                                    <?php
                                    echo $row['created_at']?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php $row['id']?>">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                                <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php')
?>
</html>