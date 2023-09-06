<html>
<head>
    <meta charset="UTF-8">
    <title="Baftino">
        <link href="CSS/S.CSS" rel="stylesheet" type="text/CSS">
        <script src="jquery-3.7.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.input').focus(function(){
                    $(this).css('background-color',"yellow");
				})
                })
        </script>
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
                <h2>:لطفا نام کاربری و رمز عبور را وارد کنید</br> </br>
				<form name="signup" method="POST" action="action_signup.php" class="form">
					<input style="width:350px" type="text" name="username" class="input" placeholder="نام کاربری"> </br></br>
					<input style="width:350px" type="password" name="passwordd" class="input" placeholder="رمز عبور"> </br></br>
					<input class="submit" type="submit" value="ورود"/> </br>
				</form>
				<h3>ایا کاربر جدید هستین؟</br></br>
					<a href="signup.php">اینجا کلیک کنید</a></br>
					<a href="forget pass.php">فراموشی رمز عبور</a></br></br>
</div></br>
            <?php include ("include/footer.php"); ?>
</center>
</body>
</html>