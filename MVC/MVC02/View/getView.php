<?php include_once 'indexForm.php'?>
<table class = 'table'> 
    <tr class = 'table-active'>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Producter</th>
        <th></th>
    </tr>
    <tr>
        <td><?php echo $rows['Name']?></td>
        <td><?php echo $rows['Price']?></td>
        <td><?php echo $rows['Description']?></td>
        <td><?php echo $rows['Producter']?></td>
        <td>
            <a href= "index.php?action=getEdit&ID=<?php echo $rows['ID']?>">Edit</a>
            <a onclick = "return confirm('Are you sure?')";  href= "index.php?action=delete&ID=<?php echo $rows['ID']?>">Delete</a>
        </td>
    </tr>
</table>
