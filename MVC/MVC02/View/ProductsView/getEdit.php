<form action="index.php?controller=products&action=edit&ID=<?php echo $rows['ID']?>" method="post">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name = "Name" placeholder = "<?php echo $rows['Name']?>" value = "<?php echo $rows['Name']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name = "Price" placeholder = "<?php echo $rows['Price']?>" value = "<?php echo $rows['Price']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name = "Description" placeholder = "<?php echo $rows['Description']?>" value = "<?php echo $rows['Description']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Producter</label>
        <input type="text" class="form-control" name = "Producter" placeholder = "<?php echo $rows['Producter']?>" value = "<?php echo $rows['Producter']?>">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Edit</button>
</form>        	