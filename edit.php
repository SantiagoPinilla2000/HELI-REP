<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM product WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $productName = $row['productName'];
            $productQuantity = $row['productQuantity'];
        }
    }

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $productName = $row['productName'];
        $productQuantity = $row['productQuantity'];

        $query = "UPDATE product set productName = '$productName', productQuantity = '$productQuantity' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Producto actualizado con exito';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");
    }
?>

<?php include('includes/header.php')?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="productName" value="<?php echo $productName;?>" class="form-control" placeholder="Actualiza el producto">
                    </div>
                    <div class="form-group">
                        <textarea name="productQuantity" class="form-control" rows="2" placeholder="Actualiza la cantidad"><?php echo $productQuantity;?></textarea>
                    </div>
                <button class="btn btn-success" name="update">
                    Actualizar
                </button>
                </form>
            </div>
        </div>
    </div>
</div>