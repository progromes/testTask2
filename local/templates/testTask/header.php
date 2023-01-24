<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<?php use \Bitrix\Main\Page\Asset;?>
<?php $APPLICATION->ShowHead();?>
<head>
    
	<title><?php $APPLICATION->ShowTitle();?></title>
    <?php
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.min.css?_v=20230116103402");
		Asset::getInstance()->addString('<meta charset="UTF-8">');
		Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
		Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
		Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
		Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap&_v=20230116103402" rel="stylesheet">');
		Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="180x180" href="'.SITE_TEMPLATE_PATH.'/img/favicon/apple-touch-icon.png">');
		Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="32x32" href="'.SITE_TEMPLATE_PATH.'/img/favicon/favicon-32x32.png">');
		Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="16x16" href="'.SITE_TEMPLATE_PATH.'/img/favicon/favicon-16x16.png">');
		Asset::getInstance()->addString('<link rel="manifest" href="'.SITE_TEMPLATE_PATH.'/files/site.webmanifest">');
		Asset::getInstance()->addString('<link rel="mask-icon" href="'.SITE_TEMPLATE_PATH.'/img/favicon/safari-pinned-tab.svg" color="#5bbad5">');
		Asset::getInstance()->addString('<meta name="msapplication-TileColor" content="#da532c">');
		Asset::getInstance()->addString('<meta name="theme-color" content="#ffffff">');
	?>
</head>

<body>
	
	<div id="panel"><?php $APPLICATION->ShowPanel();?></div>
<section class="modal" id="modal-aplly">
	<h3 class="modal__title">Оставьте заявку</h3>
	<form class="form" action="/#" method="post" role="form" id="apply">

		<div class="form__item form__item-site">
			<label class="form__label" for="siteName">Введите адрес вашего сайта</label>
			<input class="form__input form__site-input" type="text" name="feedback-site" id="siteName"
				placeholder="www.site.ru" />
		</div>

		<div class="form__item form__item-mail">
			<label class="form__label" for="userMail">Введите ваш email</label>
			<input class="form__input form__mail-input" type="text" inputmode="email" name="feedback-from" id="userMail"
				placeholder="info@mail.ru" />
		</div>

		<div class="form__item form__item-phone">
			<label class="form__label" for="userPhone">Введите ваш телефон</label>
			<input class="form__input form__phone-input" inputmode="tel" name="feedback-phone" id="userPhone" data-tel
				placeholder="+7 (___) ___-___-__-__" />
		</div>

		<div class="form__item form__item-content">
			<div class="form__item-content-btn">
				<input class="checkbox" type="checkbox" name="feedback-content" value="" id="setComment" />
				<label class="checkbox__label" for="setComment"></label>

				<label class="form__label" for="setComment">Хотите оставить комментарий?</label>
			</div>
			<textarea class="form__input form__item-content-comment" name="feedback[content]"
				placeholder="Комментарий..."></textarea>
		</div>
		<div class="form__item-agreement">
			<input class="checkbox__btn" type="checkbox" name="feedback-agreement" value="" id="setAgree" />
			<label class="checkbox__btn-label" for="setAgree"></label>

			<label class="form__label" for="setAgree">Я согласен с <a href="#">Политикой конфидециальности и Правилами
					обработки персональных
					данных</a></label>
		</div>


		<button class="btn btn--color1 form__btn-send">Отправить</button>

	</form>
</section>
	<section class="modal-success" id="modal-success">
	<h3 class="modal-success__subtitle">Спасибо!</h3>
	<h2 class="modal-success__title">Ваша заявка отправлена!</h2>
	<div class="modal-success__text">
		<p>В ближайшее время мы свяжемся с вами и обсудим ваши задачи!</p>
	</div>
</section>
	<section class="modal" id="modal-callback">
    <h3 class="modal__title">Заказать звонок</h3>
    <form class="form" action="/#" method="post" role="form" id="callback">

        <div class="form__item form__item-site">
            <label class="form__label" for="userName">Как к Вам обращаться?</label>
            <input class="form__input form__site-input" type="text" name="feedback-site" id="userName"
                   placeholder="Имя"/>
        </div>

        <div class="form__item form__item-phone">
            <label class="form__label" for="userPhone">Введите ваш телефон</label>
            <input class="form__input form__phone-input" type="text" name="feedback-phone" inputmode="tel" id="userPhone" data-tel
                   placeholder="+7 (___) ___-___-__-__"/>
        </div>

        <div class="form__item form__item-content">
            <div class="form__item-content-btn">
                <input class="checkbox" type="checkbox" name="feedback-content" value="" id="setComment"/>
                <label class="checkbox__label" for="setComment"></label>

                <label class="form__label" for="setComment">Хотите оставить комментарий?</label>
            </div>
            <textarea class="form__input form__item-content-comment" inputmode="text" name="feedback[content]"
                      placeholder="Комментарий..."></textarea>
        </div>
        <div class="form__item-agreement">
            <input class="checkbox__btn" type="checkbox" name="feedback-agreement" value="" id="setAgree"/>
            <label class="checkbox__btn-label" for="setAgree"></label>

            <label class="form__label" for="setAgree">Я согласен с <a href="#">Политикой конфидециальности и Правилами
                обработки персональных
                данных</a></label>
        </div>

        <button class="btn btn--color1 form__btn-send">Отправить</button>

    </form>
</section>
	<header class="header">
		<section class="header-info hidden--992">
	<div class="container">
		<div class="columns">
			<div class="columns__col--7 columns__col--mob-3">
				<div class="header-info__company">
					<span class="header-info__conpany-name">Ваше новое Digital-агентство</span>
				</div>
			</div>
			<div class="columns__col--2 columns__col--mob-1">
				<a class="header-info__mail" rel="nofollow" href="mailto:hello@novatechno.ru"
					target="_blank">hello@novatechno.ru</a>
			</div>
			<div class="columns__col--3 columns__col--mob-2">
				<address class="header-info__adress">
					<a class="header-info__adress-link" href="https://yandex.ru/maps/-/CCUVbZryKD" target="_blank">г.
						Калининград, ул. Менделеева 61Б</a>
				</address>
			</div>
		</div>
	</div>
</section>
		<section class="section">
	<div class="container">
		<div class="header-toolbar">
			<a class="header-toolbar__logo" href="#">
				<picture class="logo logo--mobile">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/svgicons/logo.svg" alt="logo">
				</picture>
			</a>

			<div class="header-toolbar__search">
				<form class="form-search hidden--768" method="get" action="/search" target="_blank">
					<input class="form-search__input hidden--768" type="text" placeholder="Поиск...">
				</form>
				<button class="form-search__btn" type="submit">
					<svg class="form-search__icon">
						<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#search"></use>
					</svg>
				</button>
			</div>

			<div class="header-toolbar__callback">
				<div class="callback">
					<div class="callback__wrapper callback__wrapper--desc">
						<a class="callback-form tel" href="tel:+79133223911">
							<svg class="callback-form__icon">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#phone"></use>
							</svg>+7 (913) 322-3911</a>
						<button class="btn btn--color1 header-menu__btn" data-fancybox data-src="#modal-callback">Заказать
							звонок</button>
						<div class="modal-success" data-fancybox data-src="#modal-success"></div>
					</div>

					<nav class="menu">
						<div class="menu__menu menu-icon">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
		<section class="header-dropdown-menu">
	<div class="container">
		<nav class="menu-wrapper">
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "subtop",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>


			<div class="mobile-menu">
				<div class="callback__wrapper callback__wrapper--mobile">
					<button class="btn btn--color1 header-body__btn header-body__btn--mobile" type="submit">Заказать
						звонок</button>
					<span class="header-social">
						<svg class="header-social__icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#insta"></use>
						</svg>
						<svg class="header-social__icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#tg"></use>
						</svg>
						<svg class="header-social__icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#vk"></use>
						</svg>
					</span>
					<a class="callback-form callback-form--mobile header-body__tel" href="tel:+79133223911">
						<svg class="callback-form__icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#phone"></use>
						</svg>+7 (913) 322-3911</a>
				</div>
			</div>
		</nav>
	</div>
</section>
	</header>