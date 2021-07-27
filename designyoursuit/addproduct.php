<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Operation using JSON File in PHP</title>
</head>
<body>
<?php
    $target_dir = "assets/img/";
    $target_file = $target_dir . basename($_FILES["productimage"]["name"]);
    $uploadOk = 1;

    if(isset($_POST['btnadd'])){
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    if (move_uploaded_file($_FILES["productimage"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["productimage"]["name"])). " has been uploaded.";

        $data = file_get_contents('productlists.json');
        $data = json_decode($data, true);
        $add_arr = array(
            'Id' => $_POST['id'],
            'Title' => $_POST['title'],
            'Description' => $_POST['description'],
            'img' => $_FILES['productimage']['name'],
            'Price' => $_POST['price'],
            'Ratings' => $_POST['rating']
        );
        $data[] = $add_arr;

        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('productlists.json', $data);
        header('location: listproducts.php');

  } else {
    echo "Sorry, there was an error uploading your file.";
  }

    }
?>
<form method="post" name="frmAdd" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Add Record</td>
            </tr>

            <tr>
                <td>Id</td>
                <td><input type="text" name="id"> </td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title"> </td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description"> </td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="productimage"> </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price"> </td>
            </tr>
            <tr>
                <td>Rating</td>
                <td><input type="text" name="rating"> </td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"> </td>
            </tr>
        </table>
</form>
</body>
</html>