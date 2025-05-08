<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Load BootStrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container">
        <h1>
            <center>Product List</center>
        </h1>
        <table class="table table-striped" id="table-id">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php foreach($product->result() as $row): ?>
                <tr>
                    <th scope="row"><?php echo $count++; ?></th>
                    <td><?php echo $row->product_name; ?></td>
                    <td><?php echo number_format($row->product_price); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


    <!-- load jquery js file -->
    <script src="<?php echo  base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo  base_url('assets/js/bootstrap.min.js');?>"></script>
</body>

</html>
