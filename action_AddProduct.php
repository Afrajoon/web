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
		<?php
            if(
                isset($_POST['name'])&& !empty($_POST['name'])&&
                isset($_POST['count'])&& !empty($_POST['count'])&&
                isset($_POST['price'])&& !empty($_POST['price'])&&
                isset($_POST['productid'])&& !empty($_POST['productid'])&&
                isset($_POST['image'])&& !empty($_POST['image'])
            )
            {
                $name=$_POST['name'];
                $count=$_POST['count'];
                $price=$_POST['price'];
                $productid=$_POST['productid'];
                $image=$_POST['image'];
            }
            else
                exit("بعضی از فیلدها خالی هستند");
        ?>
        <?php
            $link=mysqli_connect("localhost","root","","baftani");
            if(mysqli_connect_errno())
            exit(":خطایی با این مشخصات یافت شده است".mysqli_connect_error());
                $query="INSERT INTO product(name,count,price,productid,image)
                    VALUES('$name','$count','$price','$productid','$image')";
                    if(mysqli_query($link,$query)===true)
                        exit("گرامی ثبت کالا شما با موفقیت انجام شد");
                    else
                        exit("کاربر گرامی ثبت کالا شما با موفقیت انجام نشد");
            mysqli_close($link);
        ?></br></br>
	    </div></br>
		<?php include ("include/footer.php"); ?>
    </center></body>
</html>