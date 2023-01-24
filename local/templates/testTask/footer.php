<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<?php use \Bitrix\Main\Page\Asset;?>
<footer class="footer">
		<section class="footer-menu">
	<div class="container">
		<div class="columns mob-justify-center">
			<div class="columns__col columns__col--4 columns__col--mob-12">
				<div class="footer-contact">
					<a class="footer-contact__logo-link" href="#">
						<picture class="logo">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svgicons/logo-footer.svg" alt="logo">
						</picture>
					</a>
					<div class="footer-contact__info">
						<a class="callback-form footer-contact__info-tel" href="tel:+79133223911">+7 (913)
							322-3911</a>
						<p class="footer-contact__info-timetable content-text--16">Пн-Пт 09:00-18:00</p>
					</div>
					<button class="btn btn--color1 footer-contact__btn" data-fancybox data-src="#modal-aplly">Оставить
						заявку</button>
					<a class="mail-footer" href="mailto:hello@novatechno.ru" target="_blank">
						<svg class="mail-footer__icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#mail"></use>
						</svg>
						hello@novatechno.ru</a>
				</div>
			</div>
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "subbottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
	)
);?>
		</div>
	</div>
</section>
		<section class="footer-bottom">
	<div class="container">
		<div class="columns align-center mob-justify-center">
			<div class="columns__col columns__col--4 columns__col--mob-12">
				<div class="footer-bottom__social">
					<a class="footer-bottom__social-link" href="#">
						<svg class="footer-bottom__social-icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#insta"></use>
						</svg>
					</a>
					<a class="footer-bottom__social-link" href="#">
						<svg class="footer-bottom__social-icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#tg"></use>
						</svg>
					</a>
					<a class="footer-bottom__social-link" href="#">
						<svg class="footer-bottom__social-icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#vk"></use>
						</svg>
					</a>
					<a class="footer-bottom__social-link" href="#">
						<svg class="footer-bottom__social-icon">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#youtube"></use>
						</svg>
					</a>
				</div>
			</div>
			<div class="columns__col columns__col--5 columns__col--mob-12">
				<div class="footer-bottom__copyright">
					<span class="copyright__text">©2014-2022 Novatechno.ru</span>
					<a class="copyright__link" href="#">Политика конфиденциальности</a>
				</div>
			</div>
			<div class="columns__col columns__col--3 columns__col--mob-12">
				<div class="footer-bottom__sign">
					<p>Разработано</p>
					<a class="footer-bottom__sign-link" href="#">
						<picture class="footer-bottom__sign-logo">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svgicons/diez.svg" alt="dieztech">
						</picture>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
	</footer>
	<!-- main JS -->
	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/app.min.js?_v=20230116103402"></script>
</body>

</html>