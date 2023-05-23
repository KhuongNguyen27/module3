<table class = 'table'> 
    <tr class = 'table-active'>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Producter</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($rows as $row) :?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Price']?></td>
        <td><?php echo $row['Producter']?></td>
        <td>
          <a href= "index.php?controller=products&action=getEdit&ID=<?php echo $row['ID']?>">Edit</a>
        </td>
        <td>
          <a onclick = "return confirm('Are you sure?')";  href= "index.php?controller=products&action=delete&ID=<?php echo $row['ID']?>">Delete</a>
        </td>
        <td>
          <a href= "index.php?controller=products&action=getView&ID=<?php echo $row['ID']?>">View</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<form class="row g-3" action = "index.php?controller=products&action=getCreate" method = "POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value = "Create">
  </div>
</form>