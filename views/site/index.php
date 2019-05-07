<?php include ROOT . '/views/layouts/header.php'; ?>
	<div id="slider">
		<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
      <div class="slidefon"></div>
      <img src="template/images/2.png" width="100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
      <div class="slidefon"></div>
  	 <img src="template/images/4.png" width="100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
      <div class="slidefon"></div>
  	<img src="template/images/5.png" width="100%">
    <div class="text">Caption Two</div>
  </div>
  </div>
	</div>	
	<!--<div class="slideshow-container">
		<div class="mySlides fade">
		<img src="template/images/slfon.png" style="width:100%">
          <div class="text">Caption Text 1</div>

</div>

<div class="mySlides fade">
  
  <img src="template/images/2.png" style="width:100%">
  <div class="text">Caption Text 2</div>
</div>

<div class="mySlides fade">
  
  <img src="template/images/4.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  
  <img src="template/images/5.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<div id="dotpos" style="text-align:center">
<div class="dot" ></div>
  <div class="dot" ></div> 
  <div class="dot" ></div> 
  <div class="dot" ></div> 

</div>
</div>-->
	<div id="about">
		<div class="caption">Lorem ipsum dolor sit amet</div>
		<div class="desc">Lorem ipsum dolor sit amet, consectetur adipis
                    icing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor ivelit esse cillum dolore 
                    eu </div>
		<div class="aboutblock1">
			<div class="aboutblockcircle">
			<div class="aboutcircle">
                            <img src="template/images/startup-development.png" 
                                 width="48px" height="48px" alt=""></div>
			<div class="circledesk"><h3>Loremips</h3>
                            <p>Lorem 
                                ipsum dolor sit amet, consectetur adipisicing 
                                elit</p></div>
		</div>
		<div class="aboutblockcircle">
			<div class="aboutcircle"><img src="template/images/startup-mail.png" width="48px" height="48px" alt="">				
		</div>
		<div class="circledesk"><h3>Loremips</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				</div>
			</div>
		</div>
        <div class="aboutblock2">
        	<div class="aboutblockcircle">
			<div class="aboutcircle"><img src="template/images/tab1.png" width="48px" height="48px" alt=""></div>
			<div class="circledesk"><h3>Loremips</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				</div>
		</div>
				<div class="aboutblockcircle">

			<div class="aboutcircle"><img src="template/images/mobileapp-locations.png" width="48px" height="48px" alt=""></div>
			<div class="circledesk"><h3>Loremips</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				</div>
		</div>
		</div>
	</div>
	<div id="goods">

		<div id="contentfon"></div>

		<div class="tabs"> 
<input id="tab1" type="radio" name="tabs" checked> 
<label for="tab1"><div>Сайт ZORNET - Сегодня многие мечтают иметь собственный сайт, для разного рода деятельности, но, к сожалению не все знают о том, что можно создать сайт</div><div class="goodsicon"></div>
</label> 
<input id="tab2" type="radio" name="tabs"> 
<label for="tab2"><div>Сайт ZORNET - Сегодня многие мечтают иметь собственный сайт, для разного рода деятельности, но, к сожалению не все знают о том, что можно создать сайт</div><div class="goodsicon"></div>
</label> 
<input id="tab3" type="radio" name="tabs"> 
<label for="tab3"><div>Сайт ZORNET - Сегодня многие мечтают иметь собственный сайт, для разного рода деятельности, но, к сожалению не все знают о том, что можно создать сайт</div> <div class="goodsicon"></div>
</label> 
<input id="tab4" type="radio" name="tabs"> 
  <label for="tab4"><div>Сайт ZORNET - Сегодня многие мечтают иметь собственный сайт, для разного рода деятельности, но, к сожалению не все знают о том, что можно создать сайт</div> <div class="goodsicon"></div><!--<img src="template/images/tabs1.png">-->
</label> 
<section id="content1"> 
<p><img src="template/images/35.png"></p> 
</section>  
<section id="content2"> 
<p><img src="template/images/36.png"></p> 
</section>  
<section id="content3"> 
<p><img src="template/images/37.png" width="600px" height="600px">  
</p> 
</section>  
<section id="content4"> 
<p><img src="template/images/36.png"></p> 
</section>
</div> 
	</div>
	<div id="payment"><div class="caption">Оплата</div>
	<div id="payblock1">
<img src="template/images/phone.png"></div>
<div id="payblock2">
<div class="paymethod"><div class="paycircle"><img src="template/images/wallet.png" width="48px" height="48px"></div><div>Наличными в магазине</div></div>
<div class="paymethod">
<div class="paycircle"><img src="template/images/cards.png" width="48px" height="48px"></div><div>Безналичный расчет</div></div>
<div class="paymethod">
<div class="paycircle"><img src="template/images/cards.png" width="48px" height="48px"></div><div>Интернет-банкинг</div></div>
</div>
</div>
	<div id="delivery"><div class="caption">Доставка</div></div>
	<div id="news"><div class="caption">Новости</div>
            <div id="newsmain">
                
					<?php foreach ($newsListMine as $newsItem):?>
					<div class="newsmainblock">
						<h4><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h4>
                                                <div class="imagenews"><img src="/template/<?php echo $newsItem['preview'] ;?>"  width="100%" alt="<?php echo $newsItem['title'] ;?>" /></div>
							<p><?php echo $newsItem['short_content'];?></p>
                                                        <div class="newsdate">
                                                        <div><?php echo $newsItem['date'];?> </div><div> <a href='/news/<?php echo $newsItem['id'] ;?>' > Читать полностью</a></div>
                                                        </div>
				 </div>	
				<?php endforeach;?>
               
					
				</div>
            	<!--<div class="newsline"></div>-->
</div>
<div id="contact">
	<div class="contactline"><div class="caption">Контакты</div>
<div class="contactdate">
		<div class="addr"><img src="template/images/coffice.png" width="48px" height="48px"><h3>Наш адрес</h3><p>г.Чернигов</p><p>пр. Победы, 39</p></div>
	<div class="addr"><img src="template/images/cmail.png" width="48px" height="48px"><h3>Наш e-mail</h3><p>muflon@</p><p>
auto2000.cn.ua</p></div>
	<div class="addr"><img src="template/images/cphone.png" width="48px" height="48px"><h3>Наш телефон</h3><p>+38 099 123-45-67
</p><p>+38 067 123-45-67</p></div>
	</div>
</div>
	<div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2484.3910038875665!2d31.27769066443483!3d51.487691877213805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1522780412452" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
</wrapper>
<script src="template/js/main.js"></script>
<?php include ROOT . '/views/layouts/footer.php'; ?>
