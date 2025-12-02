<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CRUD VIEW</title>
    <link rel="stylesheet" href="/manish/CRUD_CI_APP/assets/css/bootstrap.min.css">
</head>

<body>

<div class="jumbotron" style="background-color: lightgrey;margin: 20px; padding: 10px;">
            <h1 align="center">CRUD CI APP</h1>

    </div>

    <div class="container">
        <div class="clear-fix">
            <h3 style="float: left;"> All Items </h3>
            <a href="#" class="btn btn-info" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add New Item</a>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($item as $it) : ?>

                    <tr>
                        <td>
                            <?php echo $it->name; ?>
                        </td>
                        <td>
                            <?php echo $it->price; ?>
                        </td>
                        <td>
                            <?php echo $it->quantity; ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url(); ?>crud/editItem/<?php echo $it->id; ?>" class="btn btn-success">Edit</a>
                            <a href="<?php echo base_url(); ?>crud/deleteItem/<?php echo $it->id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php endforeach; ?>


            </tbody>
        </table>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo base_url(); ?>crud/addItem" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Item Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter item name">
                        </div>
                        <div class="form-group">
                            <label for="price">Item Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Enter item price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Item Quantity</label>
                            <input type="number" class="form-control" name="quantity" placeholder="Enter item quantity">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="insert" class="btn btn-primary" value="Add Item">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php if ($this->session->flashdata('error')): ?>

        <div class="bg-danger text-white p-3" align="center">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>


    <?php if ($this->session->flashdata('success')): ?>

        <div class="bg-success text-white p-3" align="center">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>


     <?php if ($this->session->flashdata('updated')): ?>

        <div class="bg-success text-white p-3" align="center">
            <?php echo $this->session->flashdata('updated'); ?>
        </div>
    <?php endif; ?>


    <?php if ($this->session->flashdata('deleted')): ?>

        <div class="bg-success text-white p-3" align="center">
            <?php echo $this->session->flashdata('deleted'); ?>
        </div>
    <?php endif; ?>

    






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>