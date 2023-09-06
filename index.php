<html>
    <head>
        <meta charset="UTF-8">
        <title="Baftino">
            <link href="CSS/S.CSS" rel="stylesheet" type="text/CSS">
		<style>
			*, ::after ::before{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}
			button{
				width: 200px;
				height:50px ;
				border: none;
				background:rgb(230, 134, 230);
				color:antiquewhite;
				margin: 100px 40%;
				border-radius: 20px;
				box-shadow:4px 4px gray;
				cursor: pointer;
			}
			button:active{
				box-shadow: none;
				transform: translate(2px 2px);
			}
		</style>
		<script src="jquery-3.7.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.ma').hover(function(){
                    $(this).hide();
				},function(){
					$(this).show();
				})
                })
        </script>
    </head>
    	<body><center>
			<div class="section">
        		<?php include ("include/header.php"); ?>
        		<?php include ("include/nav.php"); ?>
            		<table>
						<tr></br></br></br>
							<td class="ma"><img src="image/1.jpg" height="400px" width="400px"></td>
							<td class="ma"><img src="image/3.jpg" height="400px" width="400px"></td>
						</tr>
						<tr>
							<td class="ma"><img src="image/2.jpg" height="400px" width="400px"></td>
							<td class="ma"><img src="image/4.jpg" height="400px" width="400px"></td>
						</tr>
					</table></br></br>
					<h4>
						.بافت تور با استفاده از قلاب را قلاب دوزی یا قلاب بافی می گویند که به عنوان یکی از صنایعدستی رودوزی شناخته شده است</br></br>
							به جرات می توان گفت هنر قلاب بافی به عنوان یکی از پرکاربردترین و پرطرفدارترین هنرهای دستی زیبا و ظریف محسوب می شود </br></br>
							. که میتوان انواع <span><i><b>روتختی ها </span></i></b> ،<span><i><b> پوشاک </span></i></b>،<span><i><b> کیف </span></i></b>، <span><i><b>لوستر</span></i></b> و ... با این هنر بافت و در جای جای محیط زندگی از زیبایی و جذابیت آن ها استفاده کرد</br></br> 
							.استفاده از تور تاریخ بسیار طولانی را دارد به عقیده دانشمندان،  <span>1500</span> تا <span>1600 </span>   سال پیش از میلاد مسیح از تور استفاده می شده است</br></br> 
							
							گفته میشود که مشتق شده از واژه فرانسوی <span><u><i><b>crochet</span></u></i></b> در زبان انگلیسی به قلاب بافی </br></br>
								.می باشد به معنای قلاب کوچک می باشد <span><u><i><b>small hook</span></u></i></b> </br>
					<h2>
						:این هنر به سه روش قابل اجرا است</br>
						<h3>
						<span><i><b>قلاب بافی ساده</span></i></b> </br></br>
						<span><i><b>قلاب بافی برجسته</span></i></b> </br></br>
						<span><i><b>قلاب بافی معرق</span></i></b> </br>
						<h4>
						بین این <span>3</span> روش <span><i><b>قلاب بافی معرق </span></i></b>پرکار تر و زیباتر جلوه می کند.در این روش در اشکال مختلف ماهوت رنگی را برش می دهند و روی برگ ها و گلبرگ ها</br></br>
						.در زمینه کار قرار می دهند و سپس آن ها را با استفاده از قلاب به پارچه زمینه وصل میکنند</br></br>
					
					<h2><mark>برای مشاهده سایت های بافتنی دیگر در کادر زیر کلیک کنید</mark>
						</br><button onclick="search()">click to view the site</button>
							<script>
								function search(){
								location.replace("https://shibaft.ir/");
								}
							</script>
			</div></br>
                        <?php include ("include/footer.php"); ?>
            </center>
    </body>
</html>

