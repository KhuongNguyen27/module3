<table class = 'table'> 
    <tr class = 'table-active'>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Producter</th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><?php echo $rows['Name']?></td>
        <td><?php echo $rows['Price']?></td>
        <td><?php echo $rows['Description']?></td>
        <td><?php echo $rows['Producter']?></td>
        <td>
            <a href= "index.php?controller=products&action=getEdit&ID=<?php echo $rows['ID']?>">Edit</a>
        </td>
        <td>
            <a onclick = "return confirm('Are you sure?')";  href= "index.php?controller=products&action=delete&ID=<?php echo $rows['ID']?>">Delete</a>
        </td>
    </tr>
</table>
