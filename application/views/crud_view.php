<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CRUD View</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    </head>
<body>

<div class="jumbotron">
    <h1 align="center">CRUD CI APP</h1>
  
</div>

<div class="container">
    <div class="clear-fix">
        <h3 style="float: left;"> All Items </h3>
        <a href="#" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add New Item</a>
    </div>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Item Name</th>
                <th> Price</th>
                <th> Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($item as $it) : ?>

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
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger" >Delete</a>
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
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
            <div class="form-group">
                <label for="itemName">Item Name</label>
                <input type="text" class="form-control" id="itemName" placeholder="Enter item name">
            </div>
            <div class="form-group">
                <label for="itemPrice">Item Price</label>
                <input type="number" class="form-control" id="itemPrice" placeholder="Enter item price">
            </div>
            <div class="form-group">
                <label for="itemQuantity">Item Quantity</label>
                <input type="number" class="form-control" id="itemQuantity" placeholder="Enter item quantity">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Item</button>
      </div>
    </div>
  </div>
</div>



<div class="container" style="margin-top: 100px;">
    <div class="clear-fix">
        <h3 style="float: left;"> All shops </h3>
        <a href="#" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add New Item</a>
    </div>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>shop id</th>
                <th> shop name</th>
                <th> state</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>


        <?php foreach($shops as $shop) : ?>

            <tr>
                <td>
                    <?php echo $shop->id; ?>
                </td>
                <td>
                    <?php echo $shop->shop_name; ?>
                </td>
                <td>
                    <?php echo $shop->address; ?>
                </td>
                  <td>
                    <?php echo $shop->state; ?>
                </td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger" >Delete</a>
                </td>
            </tr>

            <?php endforeach; ?>
           

            
        </tbody>
    </table>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>