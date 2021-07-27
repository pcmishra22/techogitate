<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>CRUD Operation on JSON File using PHP</title>
</head>
<body>
<table border="1" align="center">
    <tr>
        <td colspan="8" align="right"><a href="addproduct.php">Add</a></td>
    </tr>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Description</td>
        <td>Image</td>
        <td>Price</td>
        <td>Rating</td>
        <td>Actions</td>
    </tr>
    <?php
 $data = file_get_contents('productlists.json');
 $data = json_decode($data);
 if(!empty($data)){
 
 foreach($data as $row)
{ 
        ?>
        <tr>
            <td><?php echo $row->Id; ?></td>
            <td><?php echo $row->Title; ?></td>
            <td><?php echo $row->Description; ?></td>
            <td><?php echo $row->img; ?></td>
            <td><?php echo $row->Price; ?></td>
            <td><?php echo $row->Ratings; ?></td>
            <td>
                <a href="updateproduct.php?edit_id=<?php echo $row->Id; ?>">Edit</a>
                &nbsp; &nbsp;
                <a href="deleteproduct.php?delete_id=<?php echo $row->Id; ?>">Delete</a>
             </td>
        </tr>
        <?php
        }
    }
    ?>
   
</table>
</body>
</html>