<form class="row g-3" action = "index.php" method = "POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value = "Index">
  </div>
</form>
<form action="index.php?action=edit&ID=<?php echo $row['ID']?>" method="post">
    <div class="mb-3">
        <label class="form-label">Name Staff</label>
        <input type="text" class="form-control" name = "Name_staff" placeholder = "<?php echo $row['Name_staff']?>" value = "<?php echo $row['Name_staff']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" name = "Position" placeholder = "<?php echo $row['Position']?>" value = "<?php echo $row['Position']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Branch</label>
        <input type="text" class="form-control" name = "Branch" placeholder = "<?php echo $row['Branch']?>" value = "<?php echo $row['Branch']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Old</label>
        <input type="text" class="form-control" name = "Old" placeholder = "<?php echo $row['Old']?>" value = "<?php echo $row['Old']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Day of start</label>
        <input type="text" class="form-control" name = "Day_of_start" placeholder = "<?php echo $row['Day_of_start']?>" value = "<?php echo $row['Day_of_start']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Slary</label>
        <input type="text" class="form-control" name = "Slary" placeholder = "<?php echo $row['Slary']?>" value = "<?php echo $row['Slary']?>">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Edit</button>
</form>        	