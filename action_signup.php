
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
                isset($_POST['username'])&& !empty($_POST['username'])&&
                isset($_POST['passwordd'])&& !empty($_POST['passwordd'])&&
                isset($_POST['repassword'])&& !empty($_POST['repassword'])&&
                isset($_POST['email'])&& !empty($_POST['email'])
            )
            {
                $name=$_POST['name'];
                $count=$_POST['username'];
                $price=$_POST['passwordd'];
                $productid=$_POST['repassword'];
                $image=$_POST['email'];
            }
            else
                exit("بعضی از فیلدها خالی هستند");
        ?>
        <?php
            $link=mysqli_connect("localhost","root","","baftani");
            if(mysqli_connect_errno())
            exit(":خطایی با این مشخصات یافت شده است".mysqli_connect_error());
            $query="INSERT INTO users(name,username,passwordd,repassword,email)
            VALUES('$name','$username','$passwordd','$repassword','$email')";
            if(mysqli_query($link,$query)===true)
                exit("گرامی ثبت نام شما با موفقیت انجام شد".$username);
            else
                exit("کاربر گرامی ثبت نام شما با موفقیت انجام نشد");
            mysqli_close($link);
        ?>
	</div></br>
			    <?php include ("include/footer.php"); ?>
            </center>
    </body>
</html>