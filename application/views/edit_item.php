<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CRUD Operation in CodeIgniter</title>
    <link rel="stylesheet" href="/manish/CRUD_CI_APP/assets/css/bootstrap.min.css">
</head>

<body>

   
    <div class="jumbotron" style="background-color: lightgrey;margin: 20px; padding: 20px;">
        <h1 align="center">CRUD CI APP</h1>
    </div>
    

    <div class="container">

        <h1 align="center">Edit Item</h1>

        <form method="post" action="<?php echo base_url(); ?>crud/update/<?php echo $singleItem->id; ?>">
            <div class="form-group" style="margin-top: 20px;">
                <label for="name">Item Name</label>
                <input type="text" name="name" placeholder="enter your item name" class="form-control" value="<?php echo $singleItem->name; ?>">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="price">Price</label>
                <input type="number" name="price" placeholder="enter your item price" class="form-control" value="<?php echo $singleItem->price; ?>">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" placeholder="enter your item quantity" class="form-control" value="<?php echo $singleItem->quantity; ?>">
            </div>

            <input type="submit" name="update" value="Update Item" class="btn btn-primary" style="margin-top: 20px;">
        </form>
    </div>








    <!-- <?php
    
    print_r($singleItem);
    
    ?> -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>