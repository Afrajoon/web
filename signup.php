
<html>
<head>
    <meta charset="UTF-8">
    <title="Baftino">
        <link href="CSS/S.CSS" rel="stylesheet" type="text/CSS">
</head>
<body><center>
    <div class="section">
            <?php include ("include/header.php");
            if(isset($_SESSION['state_login']) && $_SESSION['state_login']==true){
                ?>
            <script type="text/gavascript">
                location.replace("index.php");
            </script>
            <?php
            }
            ?>
                <?php include ("include/nav.php"); ?>
                <h2>:برای ثبت نام فرم زیر را کامل پر کنید</br></br>
				<form name="signup" method="POST" action="action_signup.php" class="form">
					<input style="width:350px;" type="text" name="name" class="input" placeholder="نام" /> </br></br>
					<input style="width:350px;" type="text" name="username" class="input" placeholder="نام کاربری" /> </br></br>
					<input style="width:350px;" type="text" name="passwordd" class="input" placeholder="رمز عبور" /> </br></br>
					<input style="width:350px;" type="password" name="repassword" class="input" placeholder="تکرار رمز عبور" /> </br></br>
					<input style="width:350px;" type="text" name="email" class="input" placeholder="ایمیل " /> </br></br>
					<input class="submit" type="submit" value="ثبت نام"> </br>
				</form>
</div></br>
            <?php include ("include/footer.php"); ?>
   
        </center>
</body>
</html>