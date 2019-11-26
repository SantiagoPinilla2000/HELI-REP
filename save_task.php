<?php
    include('db.php');

    if (isset($_POST['save_task'])){
        $productName = $_POST['productName'];
        $productQuantity = $_POST['productQuantity'];

        $query = "INSERT INTO product(productName, productQuantity) VALUES ('$productName', '$productQuantity')";
        $result =mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed");
        }
        
        $_SESSION['message'] = 'Producto guardado con exito.';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    }
?>