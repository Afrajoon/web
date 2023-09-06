
<html>
<head>
    <meta charset="UTF-8">
    <title="Baftino">
	<link href="CSS/S.CSS" rel="stylesheet" type="text/CSS">
</head>
<body><center>
<div class="section">
            <?php include ("include/header.php"); ?>
                <?php include ("include/nav.php"); ?>
                <h3>لطفا برای ثبت سفارش فرم زیر را کامل و با دقت پر کنید</br> </br>
				<form>
                	<label>نام ونام خانوادگی خود را وارد کنید:</label>
					<input type=button" class="button" placeholder="First name & Last name"> </br></br>
					<label>نام کالا مد نظر را وارد کنید:</label>
					<input type=button" class="button" placeholder="name of the product"> </br></br>
					<label>شماره تلفن خود را وارد کنید:</label>
					<input type=button" class="button" placeholder="your tell"> </br></br>
					<label>آدرس دقیق منزلتان را وارد کنید</label>
					<input type=button" class="button" placeholder="exact home address"> </br></br>
					<label>کد پستی منزلتان را وارد کنید</label>
			 		<input type=button" class="button" placeholder="zip code"> </br></br>
			<h3>لطفا این فرم را بعد از خرید خود پر کنید</br> </br>
				<label>آیا از خرید خود رضایت داشتین؟</label>
				<select>
					<option>بله</option>
					<option>خیر</option>
				</select></br>
				<label>آیا دوباره از آنلاین شاپ ما خرید میکنید؟</label>
				<select>
					<option>بله</option>
					<option>خیر</option>
				</select></br>
				<label>آیا از محصولات ما خوشتان آمد؟</label>
				<select>
					<option>بله</option>
					<option>خیر</option>
					<option>تاحدودی</option>
				</select></br>
				<label>آیا از طراحی سایت خوشتان آمد؟</label>
				<select>
					<option>بله</option>
					<option>خیر</option>
					<option>تاحدودی</option>
				</select></br></br>
				<input type="button" value="ثبت">
				</form>
</div></br>
            <?php include ("include/footer.php"); ?>
</center></body>
</html>