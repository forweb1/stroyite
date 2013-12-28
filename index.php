    <!DOCTYPE html>
    <html lang="ru">
    <meta charset="utf-8">
<!--стиль bootstrap-->    
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<!--конец с bootstrap-->    
    <link href="css/mycss.css" rel="stylesheet" media="screen">
<!-- файлы слайера-->
        <link rel="stylesheet" href="slider/css/styles.css" />
	<link rel="stylesheet" href="slider/css/iview.css" />
        <link href="slider/css/skin_1/style.css" rel="stylesheet" media="screen">
<!--конец -  файлы слайера-->
    <title>Bootstrap 101 Шаблон</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
 
    		
    </head>
    
    <body>
<!--header-->        
        <div class="header">
            <div class="container-fluid ">
<!--все кроме телефонов-->
                    <div class="row-fluid hidden-phone">
                        <div class="span4 contacts">
                            <p id="contacts_title">Позвонить мастеру</p>
                            <p id="contacts_phone1">067-779-75-05</p>
                            <p id="contacts_phone2">050-716-20-10</p>
                        </div>
                        
                        <div class="span4 logo">
                            <p id="logo_img"><span id="logo_title">Ремонт квартир в Харькове</span></p>
                        </div>
                        
                        <div class="span3 offset1 headrigth">
                            <p id="site_map_mail">
                                <a href="#" id="map"></a>
                                <a href="#" id="mail"></a>
                            </p>
                            <p id="search_form_title">Искать на сайте</p>
                                <form class="form-search">
                                    <input type="text" class="input-medium search-query" placeholder="Пример:укладка плитки...">
                                    <button type="submit" class="btn">Найти</button>
                                </form>
                        </div>
                        
                    </div>
<!-- end все кроме телефонов-->

<!--только для телефонов-->
                    <div class="row-fluid visible-phone">
                        
                        <div class="span4 logo">
                            <p id="logo_img"><span id="logo_title">Ремонт квартир в Харькове</span></p>
                        </div>
                        
                        <div class="span4">
                            <p id="contacts_title">Позвонить мастеру</p>
                            <p id="contacts_phone1">067-779-75-05</p>
                            <p id="contacts_phone2">050-716-20-10</p>
                        </div>
                        
                        <div class="span4">
                            <p id="site_map_mail">
                                <a href="#" id="map"></a>
                                <a href="#" id="mail"></a>
                            </p>
                            <p id="search_form_title">Искать на сайте</p>
                            <p id="search_form">050-716-20-10</p>
                        </div>
                    </div>

<!--end только для телефонов-->
            </div>
        </div>
<!--end header-->

<!--menu-->
<div class="menu">
      
<div class="container-fluid">
    <div class="row-fluid">
         <div class="span12">
             <div id="gor_menu">
              <ul id="nav">
                 <li ><p id="l"></p><a href="#">Главная</a></li>
                 <li class="active"><a href="#">Фото работ </a></li>
                 <li><a href="#">Услуги</a></li>
                 <li><a href="#">Отзывы клиентов </a></li>
                 <li><p id="r"></p><a href="#">Вопрос мастеру</a></li>
             </ul>
             </div>    
          </div>
       </div>
  </div>
        
</div> 
<!--end menu-->

<!--            слайдер-->
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">   
       <div class="container">
		<div id="iview">
			<div data-iview:image="slider/photos/1.jpg" data-iview:transition="slice-top-fade,slice-right-fade">
				<div class="iview-caption caption1" data-x="80" data-y="200">iView<sup>&trade;</sup></div>
				<div class="iview-caption" data-x="80" data-y="275" data-transition="wipeRight">Самый удивительный слайдер</div>
				<div class="iview-caption" data-x="254" data-y="320" data-transition="wipeLeft">Представляет <b>Hemn Chawroka</b></div>
			</div>

			<div data-iview:image="slider/photos/2.jpg" data-iview:transition="zigzag-drop-top,zigzag-drop-bottom" data-iview:pausetime="3000">
				<div class="iview-caption caption5" data-x="60" data-y="280" data-transition="wipeDown">Заголовки могут быть расположены в любом месте</div>
				<div class="iview-caption caption6" data-x="300" data-y="350" data-transition="wipeUp"><a href="#">Пример URL ссылки</a></div>
			</div>

			<div data-iview:image="slider/photos/3.jpg" data-iview:type="video" data-iview:transition="strip-right-fade,strip-left-fade">
				<iframe src="http://player.vimeo.com/video/11475955?byline=1&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="iview-caption caption2" data-x="450" data-y="340" data-transition="wipeRight">Видео</div>
				<div class="iview-caption caption3" data-x="600" data-y="345" data-transition="wipeLeft">Поддержка</div>
			</div>

			<div data-iview:image="slider/photos/4.jpg">
				<div class="iview-caption caption4" data-x="50" data-y="80" data-width="312" data-transition="fade">Опции iView:</div>
				<div class="iview-caption blackcaption" data-x="50" data-y="135" data-transition="wipeLeft" data-easing="easeInOutElastic">Листание пальцем на сенсорных устройствах</div>
				<div class="iview-caption blackcaption" data-x="50" data-y="170" data-transition="wipeLeft" data-easing="easeInOutElastic">Масштабируемость изображений</div>
				<div class="iview-caption blackcaption" data-x="50" data-y="209" data-transition="wipeLeft" data-easing="easeInOutElastic">Пользовательские эффекты перехода</div>
				<div class="iview-caption blackcaption" data-x="50" data-y="246" data-transition="wipeLeft" data-easing="easeInOutElastic">Свободное позиционирование и стилизация заголовков</div>
				<div class="iview-caption blackcaption" data-x="50" data-y="283" data-transition="wipeLeft" data-easing="easeInOutElastic">Кроссбраузерность</div>
			</div>

			<div data-iview:image="slider/photos/5.jpg">
				<div class="iview-caption caption7" data-x="0" data-y="0" data-width="180" data-height="480" data-transition="wipeRight"><h3>Адаптивный заголовок</h3>Это продукт, который <b><i>все вы ждали</b></i>!<br><br>Простое пользовательское оформление слайдера. Каждый слайд можно сопровождать заголовком.<br><br>И всё это работает во всех браузерах (включая IE6 / 7 / 8) и на iOS и Android устройствах!</div>
			</div>

			<div data-iview:image="slider/photos/6.jpg">
				<div class="iview-caption caption5" data-x="60" data-y="150" data-transition="wipeLeft">Чего ждете?</div>
				<div class="iview-caption caption6" data-x="160" data-y="230" data-transition="wipeRight">Вперёд!</div>
			</div>
		</div>
	</div>
</div>         
</div>    
</div>
<!--            конец - слайдер-->

<!--content   -->
        <div class="content">


            <!--блок контента-->
            <div class="container-fluid">
                <div class="row-fluid">
                    
                    <div class="span9 left_cont"><!--левый блок контента-->
                        
                        <div class="row-fluid "><!--MОДУЛЬ: "хлебные крошки" -->
                            <div class="span12 offset1 all_breadcrumb">
                                
                                <p class="br_cr ">
                                    <span class="first_l_cn_crumb"></span>
                                    <span class="centr_crumb"><a href="#">Главная</a></span>
                                    <span class="r_cn_crumb"></span>
                                </p>
                                
                                <p class="br_cr">
                                    <span class="l_cn_crumb"></span>
                                    <span class="centr_crumb"><a href="#">Фото работ</a></span>
                                    <span class="r_cn_crumb"></span>
                                </p>
                                
                                <p class="br_cr aktive aktive_crumb">
                                    <span class="l_cn_crumb"></span>
                                    <span class="centr_crumb"><a href="#">Укладка плитки</a></span>
                                    <span class="r_cn_crumb"></span>
                                </p>
                                
                            </div>
                        </div><!--конец MОДУЛЬ: "хлебные крошки" -->
                        
                        <div class="row-fluid "><!--MОДУЛЬ: "статья" -->
                            <div class="span12 offset1">
                                <h1>Главная страница сайта</h1>
                                <p>
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                    Тут будет статья про ремонт квартир в Харькове . Тут будет статья про ремонт квартир в Харькове .
                                </p>
                            </div>
                        </div><!--конец MОДУЛЬ: "статья" -->
                        
                    </div> <!--конец - левый блок контента-->
                    
                    <div class="span3 right_cont"><!--правый  блок контента-->
                        
                    </div><!--конец - правый  блок контента-->
                </div>
                <div id="bottom_bg">
                    <p id="l_bottom_bg"></p>
                    <p id="c_bottom_bg"></p>
                    <p id="r_bottom_bg"></p>
                </div>
            </div>
            <!--конец - блок контента-->
        </div>
<!--end content-->
<!--footer-->
        <div class="footer">
            <div class="container-fluid">
                <div class="row-fluid ">
                    <div class="span12">
                        
                    </div>
                </div>
            </div>
        </div>
<!--end footer-->
        <!-- скрипты bootstrap-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <!--конец скрипты bootstrap-->
        <!-- скрипты слайера-->
        <script src="slider/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="slider/js/raphael-min.js"></script>
	<script type="text/javascript" src="slider/js/jquery.easing.js"></script>
<script src="slider/js/iview.js"></script>
		<script>
			$(document).ready(function(){
				
                                    $('#iview').iView({
                                        timer: "360Bar",
					timerPadding: 3,
					timerColor: "#0F0",
                                        fx: 'random', // установите эффект
                                        pauseTime: 7000,
					directionNav: false,
					controlNav: true,
					tooltipY: -15
				});
                                
			});
		</script>
<!--конец -  скрипты слайера-->                
     </body>
    </html>
