<?php
if(isset($_POST['btnsub'])){
    if(isset($_FILES['ufile'])){
        
        echo "upload:".$_FILES['ufile']['name']."<br>";
        echo "stored in:".$_FILES['ufile']['tmp_name']."<br>";
        echo "type:".$_FILES['ufile']['type']."<br>";
        echo "size:".$_FILES['ufile']['size']."<br>";
    }
    else{
        echo "error:".$_FILES['ufile']['error'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>example of the fileuploading</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="displayu.php">
    <table>
        <tr>
            <td><label>Select file to upload: </label></td>
            <td><input type="file" name="ufile"><br></td>
        </tr>
        <tr>
            <td><label>Product id:</label></td>
            <td><input type="text" name="txtpi" placeholder="Enter product name here"><br></td>
        </tr>
        <tr>
            <td><label>Product name:</label></td>
            <td><input type="text" name="txtpn" placeholder="Enter product name here"><br></td>
        </tr>
        <tr>
            <td><label>Product color:</label></td>
            <td><input type="text" name="txtpr" placeholder="Enter product name here"><br></td>
        </tr>
        <tr>
            <td><label>Product price:</label></td>
            <td><input type="text" name="txtpp" placeholder="Enter product price here"><br></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btnsub" value="Upload"></td>
        </tr>
    </table>
</form>
</body>
</html>