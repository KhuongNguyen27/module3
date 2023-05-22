<table class = 'table'> 
    <tr class = 'table-active'>
        <th>ID</th>
        <th>Name</th>
        <th>Score</th>
        <th></th>
    </tr>   
    <tr>
        <td><?php echo $rows['ID']?></td>
        <td><?php echo $rows['Name']?></td>
        <td><?php echo $rows['Score']?></td>
        <td>
            <a href="index.php?action=getEdit&ID=<?php echo $rows['ID']?>">Edit</a>
            <a href="index.php?action=deleteID&ID=<?php echo $rows['ID']?>">Delete</a>
        </td>
    </tr>
</table>