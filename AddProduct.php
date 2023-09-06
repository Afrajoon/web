
<html>
<head>
    <meta charset="UTF-8">
    <title="Baftino">
        <link href="CSS/S.CSS" rel="stylesheet" type="text/CSS">
</head>
<body><center>
<div class="section">
                <?php include ("include/header.php"); ?>
                <?php include ("include/nav.php"); ?></br></br>
				<div class="section"></br><h3>
				<form name="Product" action="action_AddProduct.php" method="POST" class="form">
				<h2>:اطلاعات محصول را وارد کنید</br></br>
					<input style="width:350px%" type="text" name="productid" class="input" placeholder="کد محصول" /></br></br>
					<input style="width:350px%" type="text" name="name" class="input" placeholder="نام محصول" /></br></br>
					<input style="width:350px%" type="text" name="count" class="input" placeholder="موجودی محصول" /></br></br>
					<input style="width:350px%" type="text" name="price" class="input" placeholder="قیمت" /></br></br>
					<input style="width:350px%" type="file" name="image" class="input" placeholder="تصویر محصول" /></br></br>
			
				<input class="submit" type="submit" value="ثبت" /> 
				</form>
				</div></br>
			    <?php include ("include/footer.php"); ?>
            </center>
    </body>
</html>