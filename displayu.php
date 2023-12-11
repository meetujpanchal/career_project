<?php
echo "product id:".$_POST['txtpi']."<br><br>";
echo "product name is:".$_POST['txtpn']."<br><br>";
echo "product color:".$_POST['txtpr']."<br><br>";
echo "product price is:".$_POST['txtpp']."<br><br>";
if(isset($_POST['btnsub'])){
	if(move_uploaded_file($_FILES['ufile']['tmp_name'], $_FILES['ufile']['name']))
	{
		echo "<img src=".$_FILES['ufile']['name']." height=200 width=300/>";
	}
	else{
		echo "error!!";
	}
}
?>