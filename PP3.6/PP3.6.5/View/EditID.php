<form action="index.php?action=edit&ID=<?php echo $rows['ID']?>" method="post">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name = "name" placeholder = "<?php echo $rows['Name']?>" value = "<?php echo $rows['Name']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Score</label>
        <input type="text" class="form-control" name = "score" placeholder = "<?php echo $rows['Score']?>" value = "<?php echo $rows['Score']?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>        