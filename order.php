<?php
require_once('database.php');
$queryResult = $connectionOperation->readOrders();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Nossa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>

    <meta name="description" content="A concise and accurate summary of the document content is to appear here">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
</head>

<body>
    <header>
        <?php
        include('globalHeader.php');
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <table class="table-bordered table-hover table-sm table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">Order#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Whole or Slice</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Shape</th>
                        <th scope="col">Size</th>
                        <th scope="col">Toppings</th>
                        <th scope="col">Style Crust</th>
                        <th scope="col">Type of Delivery</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone#</th>
                        <th scope="col">Address</th>
                        <th scope="col">Additional</th>
                    </tr>
                    </thead>
                    <?php
                    while ($r = mysqli_fetch_assoc($queryResult)) {
                    ?>
                        <tr>
                            <td><?php echo $r['ID']; ?></td>
                            <td><?php echo $r['DAYDATE']; ?></td>
                            <td><?php echo $r['WHOLESLICEPIZZA']; ?></td>
                            <td><?php echo $r['NUMBERPIZZA']; ?></td>
                            <td><?php echo $r['SHAPE']; ?></td>
                            <td><?php echo $r['SIZE']; ?></td>
                            <td><?php echo $r['TOPPINGS']; ?></td>
                            <td><?php echo $r['STYLECRUST']; ?></td>
                            <td><?php echo $r['TYPEDELIVERY']; ?></td>
                            <td><?php echo $r['FNAME']; ?></td>
                            <td><?php echo $r['LNAME']; ?></td>
                            <td><?php echo $r['PNUMBER']; ?></td>
                            <td><?php echo $r['C_ADDRESS']; ?></td>
                            <td><?php echo $r['ADDITIONAL']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include('globalFooter.php');
        ?>
    </footer>
</body>

</html>