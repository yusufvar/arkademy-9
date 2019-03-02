<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>product|batch</title>
</head>
<body>
    <header>
    <h3>product|batch</h3>
    </header>
    <nav>
    <a href =>[+]Tambah category</a>
    </nav>
    <br>
    <table class=table>
    <thead class=thead-dark>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>products</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT product.category_id, categories.name as names, GROUP_CONCAT(product.name SEPARATOR ', ') as name FROM categories,  product WHERE product.category_id = categories.id group by product.category_id order by category_id";
    $query = mysqli_query($db, $sql);
    while($produk = mysqli_fetch_array($query)){
                    echo "<tr>";
                        echo "<td>".$produk['category_id']."</td>";
                        echo "<td>".$produk['names']."</td>";
                        echo "<td>".$produk['name']."</td>";
                    echo "</tr>";
                }
    ?>

    </tbody>
    </table>
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>