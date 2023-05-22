<table class = 'table'> 
    <tr class = 'table-active'>
        <th>ID</th>
        <th>Name staff</th>
        <th>Position</th>
        <th>Branch</th>
        <th>Old</th>
        <th>Day of start</th>
        <th>Slary</th>
        <th></th>
    </tr>
    <?php foreach ($rows as $row) :?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Name_staff']?></td>
        <td><?php echo $row['Position']?></td>
        <td><?php echo $row['Branch']?></td>
        <td><?php echo $row['Old']?></td>
        <td><?php echo $row['Day_of_start']?></td>
        <td><?php echo $row['Slary']?></td>
        <td>
            <a href= "index.php?action=getEdit&ID=<?php echo $row['ID']?>">Edit</a>
            <a onclick = "return confirm('Are you sure?')";  href= "index.php?action=delete&ID=<?php echo $row['ID']?>">Delete</a>
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