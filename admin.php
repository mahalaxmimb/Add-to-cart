<!DOCTYPE html>
<html>
<head>
	<title>My Cart</title>
	<link rel="stylesheet" href="style.css" >
</head>
<body>
	<header>
	<div style="background-color: grey; height: 148px; font-size: 30px;">
	<p style="position: relative;top: 30%; text-align: center;font-family: monospace;">MyCart.com
	</p>
	<br>
<div class="navbar">
  <a href="database.php">Home</a>
  <a href="admin.php">Admin Panel</a>
  <a href="cart.php">My cart</a>
</div>
</div>
</header>
</div>
<br>
<div id=div1>
<hr style="width: 1100px">
<p style="position: relative; text-align: center;font-family: serif;font-size: 20px;">Admin Panel</p>
<hr style="width: 1100px">
<CENTER>
<div style="border-radius: 10px; border:1px solid black;">
	<form action="insert.php" name="f1" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="proname"></td>
		</tr>
		<tr>
			<td>Product Type</td>
			<td>
				<select style="width: 100px" name="protype">
					<option value="Accesories">Accesories</option>
					<option value="Mobiles">Mobiles</option>
					<option value="Home appliances">Home appliances</option>
				</select>
			</td>
		</tr> 
		<tr>
		<tr>
			<td>Brand Type</td>
			<td>
				<select name="brandType" id="select2"> 
					<option value="Samsung">Samsung</option>
					<option value="Oppo">Oppo</option>
					<option value="Vivo">Vivo</option>
					<option value="Redmi">Redmi</option>
				</select>
			</td>
		</tr> 
			<td>Upload Image</td>
			<td><input type="file" name="image" aceept="image/*"></td>
		</tr>
		<tr>
			<td>Product Desc</td>
			<td><input type="textarea" name="prodesc"></td>
		</tr>
		<tr>
			<td>Cost</td>
			<td><input type="text" name="cost"></td>
		</tr>
		<tr>
			<td><input type="submit" name="addpro" value="Add Product"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
	</form>
</div>
</CENTER>
</div>
</body>
</html>