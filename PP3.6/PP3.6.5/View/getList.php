<table class = 'table'> 
    <tr class = 'table-active'>
        <th>ID</th>
        <th>Name</th>
        <th>Score</th>
        <th></th>
    </tr>
    <?php foreach ($rows as $row) :?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Score']?></td>
        <td>
            <a href= "index.php?action=getEdit&ID=<?php echo $row['ID']?>">Edit</a>
            <a onclick = "return confirm('Are you sure?')";  href= "index.php?action=deleteID&ID=<?php echo $row['ID']?>">Delete</a>
            <a href= "index.php?action=getView&ID=<?php echo $row['ID']?>">View</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<form class="row g-3" action = "index.php?action=getCreate" method = "POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value = "Create">
  </div>
</form>