<?php
/* @var $this HomeController */
?>
<header><a href="<?=Yii::app()->request->baseUrl;?>"><h1>Город идей!</h1></a></header>

<section class="content">
  <div class="lbracket"></div>
  <div class="rbracket"></div>
  <div class="desc">
    <h4>У тебя есть идея, но ты не знаешь как ее осуществить?</h4>
    <h4>Ты хочешь сделать наш город лучше, но не знаешь с чего начать?</h4>
    <div class="blue-rounded">Мы можем объединить усилия и сделать жизнь лучше.</div>
    <p>Ты знаешь что конкретно можно предложить для улучшения жизни Пензы - тогда опубликуй свою идею здесь. О ней узнает много людей и поддержат ее, если идея по-настоящему классная.</p>
    <p>Вы готовы поддержать стоящую идею материально? Выбирайте лучшие идеи и определите - сколько Вы лично готовы вложить в ее осуществление.</p>
    <p>Нет возможности поддержать финансово все понравившиеся идеи? Голосуйте за их осуществление - для государственной поддержки полезной идеи необходимо набрать от 10.000 голосов в поддержку.</p>
    <h4>Голосуй и рассказывай друзьям.</h4>
    <h4>Вместе мы сможем сделать нашу жизнь такой, какой мы хотим ее видеть!</h4>
  </div>
</section>

<!-- <section class="counter">
  <h2>В нашей копилке уже <span class="quantity">138 идей</span></h2>
</section> -->

<section class="idea">
  <a href="#" data-reveal-id="subscribeEmail"><div class="show-ideas" id="subscribe">Оставить эл. почту</div></a>
  <div id="subscribeEmail" class="reveal-modal" data-reveal>
    <h2>Узнайте первым об открытии</h2>
    <hr>
    <form name="subscribe_form" id="subscribe_form"  method="post">
      <label for="email">Эл. почта: </label>
      <input name="email" id="email" type="email" required autofocus>
      <input class="button" type="Submit" value="Отправить">
    </form>
    <a class="close-reveal-modal">&#215;</a>
  </div>

  <a id="linkSuccess" href="#" data-reveal-id="emailSuccess" style="display:none;"></a>
  <div id="emailSuccess" class="reveal-modal" data-reveal>
    <h2>Спасибо! Мы свяжемся как все будет готово.</h2>
    <a class="close-reveal-modal">&#215;</a>
  </div>

	<a href="https://docs.google.com/forms/d/1ngUGBBUjFnQSSOoOgR7yoyC8Jt5a4MThZipNNXCp7xg/viewform">
	  <div class="add-ideas">
	  	Предложить свою идею
		</div>
	</a>
</section>

<section class="social">
  <p class="web-symbols">
    <a href="<?=ShareLink::facebook();?>">ä</a>
    <a href="<?=ShareLink::vkontakte();?>">æ</a>
    <a href="<?=ShareLink::twitter();?>">å</a>
    <a href="<?=ShareLink::googleplus();?>">è</a>
    <a href="<?=ShareLink::livejournal();?>">ì</a>
    <a href="<?=ShareLink::odnoklassniki();?>">é</a>
  </p>
</section>