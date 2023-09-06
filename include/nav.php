
<li class="divTableCell"><a href="contactus.php">ارتبط با ما</a></li>
<li class="divTableCell"><a href="aboutus.php">درباره ما</a></li>
<?php
if(isset($_SESSION["state_login"])&&$ $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")
{
?>
        <li class="divTableCell"><a href="AddProduct.php">مدیریت محصول</a></li>
<?php
}
?>
<?php
if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true)
{
    ?>
        <li class="divTableCell"><a href="signout.php">خروج</a></li>
<?php
}
else
{
?>
        <li class="divTableCell"><a href="signin.php">ورودبه سایت</a></li>  
<?php
}
?>
<li class="divTableCell"><a  href="product.php">محصولات</a></li>
<li class="divTableCell"><a class="index.php" href="index.php">صفحه اصلی</a></li>
<li class="divTableCell"><input type="text" placeholder="Search..."></li>