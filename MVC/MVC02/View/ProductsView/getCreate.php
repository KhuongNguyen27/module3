<form action="index.php?controller=products&action=create" method="post">
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
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Create</button>
</form>        	