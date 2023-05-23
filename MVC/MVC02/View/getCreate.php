<form class="row g-3" action = "index.php" method = "POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value = "Index">
  </div>
</form>
<form action="index.php?action=create" method="post">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name = "Name" placeholder = "Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name = "Price" placeholder = "Price">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name = "Description" placeholder = "Description">
    </div>
    <div class="mb-3">
        <label class="form-label">Producter</label>
        <input type="text" class="form-control" name = "Producter" placeholder = "Producter">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Edit</button>
</form>        	