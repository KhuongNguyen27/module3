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
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($result['rows'] as $row) :?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Name_staff']?></td>
        <td><?php echo $row['Position']?></td>
        <td><?php echo $row['Branch']?></td>
        <td><?php echo $row['Old']?></td>
        <td><?php echo $row['Day_of_start']?></td>
        <td><?php echo $row['Slary']?></td>
        <td>
          <a href= "index.php?controller=staff&action=getEdit&ID=<?php echo $row['ID']?>">Edit</a>
        </td>
        <td>
          <a style = 'color:red;' onclick = "return confirm('Are you sure?')";  href= "index.php?controller=staff&action=delete&ID=<?php echo $row['ID']?>">Delete</a>
        </td>
        <td>
          <a href= "index.php?controller=staff&action=getView&ID=<?php echo $row['ID']?>">View</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<form class="row g-3" action = "index.php?controller=staff&action=getCreate" method = "POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value = "Create">
  </div>
</form>
<?php include_once 'View/Pagination/Pagination.php';?>