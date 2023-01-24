<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><main class="layout">
<section class="intro">
<div class="container">
<div class="columns mob-justify-center">
	<div class="columns__col columns__col--6 mt--20 m-mt--0 m-mb--30">
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text_banner",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
		<div class="intro__form-wrapper">
			<form class="form-call__form" name="back-call">
				<input class="form-call__input" name="back-call" type="text" maxlength="20"
					placeholder="+7 (___) ___-__-__" required data-tel>
			</form>
			<button class="btn btn--color1 form-call__btn" data-fancybox data-src="#modal-aplly">Заказать
				аудит</button>
			<div class="modal-success" data-fancybox data-src="#modal-success"></div>
		</div>
	</div>
	<div class="columns__col columns__col--6">
		<picture class="intro__picture">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/intro-decor.png" alt="декоративное изображение">
		</picture>
	</div>
</div>
</div>
</section>

<!-- slider mobile -->
<section class="section">
<div class="mt--100 mb--100 m-mb--30 m-mt--30 mob-centered">
<div class="container">
	<div class="slider slider-services" data-slider data-slider-slides="3" data-slider-mobile>
		<div class="swiper slider__main slider__main--overflow">
			<div class="swiper-wrapper slider__wrapper">
				<div class="swiper-slide slider__slide slider__slide--mob-width-240">
					<a class="article-service" href="#">
						<div class="article-service__wrapper">
							<svg class="article-service__icon" width="82" height="79" viewBox="0 0 82 79" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill="url(#gradient1)" fill-rule="evenodd" clip-rule="evenodd"
									d="M74.3082 14.4165C85.6776 30.0493 82.2213 51.9389 66.5885 63.3082L55.5885 71.3082C39.9556 82.6776 18.066 79.2213 6.69671 63.5885C-4.67263 47.9556 -1.21638 26.066 14.4165 14.6967L25.4165 6.69671C41.0493 -4.67263 62.9389 -1.21638 74.3082 14.4165Z" />
								<g clip-path="url(#clip0_313_826)">
									<path class="article-service__fill"
										d="M48.9645 22C53.1913 22 57.4057 22 61.6325 22C62.8508 22 63.3357 22.8184 62.7265 23.8567C58.5743 31.1126 54.4097 38.3684 50.245 45.6243C49.6856 46.6015 48.691 46.6137 48.1067 45.6365C46.7268 43.34 45.3593 41.0436 44.0043 38.7349C43.8426 38.4539 43.6313 38.3318 43.3205 38.2951C41.7541 38.1119 40.1753 37.9165 38.6089 37.721C38.1489 37.66 37.7262 37.5378 37.4527 37.1347C37.2165 36.7805 37.2538 36.4262 37.403 36.0475C38.037 34.5328 38.6586 33.0059 39.2926 31.479C39.4045 31.2103 39.3921 31.0149 39.2429 30.7706C37.863 28.4863 36.5079 26.202 35.1404 23.9178C34.5064 22.8551 34.9912 22.0244 36.2344 22.0244C40.4736 22.0244 44.7129 22.0244 48.9521 22.0244C48.9645 22.0244 48.9645 22.0122 48.9645 22ZM49.1759 42.9858C49.2505 42.8514 49.3375 42.7293 49.4121 42.5949C51.5006 38.967 53.6016 35.3268 55.6901 31.6989C57.0576 29.3292 58.4251 26.9472 59.7926 24.5896C59.9667 24.2965 59.9418 24.211 59.5813 24.2232C58.9721 24.2476 58.3754 24.2354 57.7662 24.2476C51.3514 24.2598 44.9366 24.272 38.5218 24.2843C38.3602 24.2843 38.1986 24.2965 37.9748 24.3087C39.0564 26.1165 40.0882 27.8511 41.1325 29.5979C41.2693 29.8178 41.4184 29.72 41.5676 29.6712C42.3384 29.4513 43.1092 29.2314 43.8799 28.9993C46.6274 28.2053 49.3748 27.4114 52.1346 26.6296C52.7687 26.4464 53.2784 26.6784 53.5146 27.2159C53.7632 27.7778 53.5394 28.2786 52.8681 28.694C49.1261 30.9538 45.3842 33.2014 41.6422 35.4612C41.493 35.5589 41.3439 35.6567 41.1201 35.8032C42.1892 35.9376 43.1713 36.0842 44.1534 36.1819C44.7875 36.243 45.2474 36.4995 45.5707 37.0614C46.6398 38.9181 47.7462 40.7504 48.8527 42.5827C48.9521 42.7293 48.9894 42.9125 49.1759 42.9858Z" />
									<path class="article-service__fill"
										d="M41.0206 43.6699C41.0331 43.9874 40.859 44.2806 40.5855 44.5249C39.5164 45.4777 38.4846 46.4671 37.49 47.4932C34.5685 50.547 32.0946 53.9307 30.1304 57.6563C29.9937 57.9251 29.8445 58.1938 29.6829 58.4625C29.3721 58.9633 28.7132 59.1344 28.1786 58.8534C27.6689 58.5847 27.47 57.9739 27.7311 57.4364C29.1856 54.5292 30.9509 51.8052 32.9773 49.2644C34.4691 47.3833 36.1101 45.6487 37.863 44.0119C38.2857 43.6088 38.7083 43.2057 39.1559 42.827C39.504 42.5216 39.9266 42.4117 40.3618 42.6316C40.7596 42.827 41.0206 43.1446 41.0206 43.6699Z" />
									<path class="article-service__fill"
										d="M23.1561 46.3572C22.634 46.3572 22.1865 46.0396 22.0373 45.5754C21.9005 45.1357 22.087 44.5982 22.5221 44.3417C23.268 43.8897 24.0388 43.4622 24.8096 43.0224C27.5694 41.4467 30.3293 39.8587 33.0891 38.2829C33.3626 38.1241 33.6361 37.9287 33.9842 37.9287C34.5064 37.9165 34.9788 38.1852 35.128 38.6127C35.3144 39.1136 35.1528 39.6388 34.668 39.9198C33.5243 40.6038 32.3681 41.2512 31.2244 41.9109C28.7877 43.3034 26.3387 44.6959 23.9021 46.0885C23.6659 46.2228 23.4296 46.3816 23.1561 46.3572Z" />
									<path class="article-service__fill"
										d="M33.8102 29.6834C34.7053 29.6956 35.0907 30.0132 35.2026 30.624C35.2896 31.1126 34.9912 31.6378 34.4567 31.7966C32.853 32.2608 31.2493 32.7005 29.6331 33.1281C29.1234 33.2624 28.5143 32.8716 28.3651 32.3585C28.191 31.7478 28.4894 31.1736 29.1234 30.9782C30.2298 30.6484 31.3487 30.3552 32.4676 30.0498C33.0021 29.9155 33.5118 29.6834 33.8102 29.6834Z" />
									<path class="article-service__fill"
										d="M23.4794 33.2991C23.4918 32.6883 23.9891 32.2486 24.6355 32.2486C25.2447 32.2608 25.7668 32.7739 25.7792 33.348C25.7792 33.9221 25.2074 34.4596 24.5982 34.4473C23.9642 34.4351 23.4794 33.9343 23.4794 33.2991Z" />
								</g>
								<defs>
									<linearGradient id="gradient1" x1="0" y1="78.0049" x2="83.8687" y2="78.0049"
										gradientUnits="userSpaceOnUse">
										<stop class="article-service__gradient-from" />
										<stop class="article-service__gradient-to" offset="1" />
									</linearGradient>
									<clipPath id="clip0_313_826">
										<rect width="41" height="37" fill="white" transform="translate(22 22)" />
									</clipPath>
								</defs>
							</svg>
							<h2 class="article-service__title">РАЗРАБОТАЕМ СТРАТЕГИЮ ПРОДВИЖЕНИЯ</h2>
							<p class="article-service__text">Мы разработаем и реализуем стратегию продвижения вашей компании в интернете</p>
						</div>
					</a>
				</div>
				<div class="swiper-slide slider__slide slider__slide--mob-width-240">
					<a class="article-service" href="#">
						<div class="article-service__wrapper">
							<svg class="article-service__icon" width="82" height="79" viewBox="0 0 82 79" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill="url(#gradient2)" fill-rule="evenodd" clip-rule="evenodd"
									d="M74.3082 14.4165C85.6776 30.0493 82.2213 51.9389 66.5885 63.3082L55.5885 71.3082C39.9556 82.6776 18.066 79.2213 6.69671 63.5885C-4.67263 47.9556 -1.21638 26.066 14.4165 14.6967L25.4165 6.69671C41.0493 -4.67263 62.9389 -1.21638 74.3082 14.4165Z" />
								<g clip-path="url(#clip0_0_1)">
									<path class="article-service__fill article-service__fill--purple"
										d="M46.1069 52.4982C46.1069 47.8016 49.8687 44.0246 54.5464 44.0246C59.2663 44.0246 63 47.8016 63 52.5406C63 57.2371 59.224 60.9859 54.5323 60.9859C49.8546 60.9859 46.1069 57.2088 46.1069 52.4982ZM55.744 50.164C55.744 49.9377 55.7581 49.6972 55.744 49.4709C55.7017 48.7777 55.1945 48.2685 54.5323 48.2685C53.8419 48.2543 53.3065 48.7777 53.2924 49.5133C53.2783 49.9377 53.2643 50.3621 53.2924 50.7865C53.3206 51.1684 53.1656 51.2816 52.8134 51.2533C52.433 51.225 52.0385 51.2391 51.6581 51.2533C50.8409 51.2816 50.3337 51.7767 50.3337 52.5265C50.3337 53.2762 50.8409 53.7713 51.6581 53.7996C52.0807 53.8138 52.5034 53.8138 52.9261 53.7996C53.1938 53.7855 53.3065 53.8845 53.2924 54.1674C53.2783 54.6484 53.2783 55.1152 53.2924 55.5962C53.3206 56.261 53.8278 56.7562 54.49 56.7703C55.1663 56.7986 55.7017 56.3035 55.744 55.6103C55.7722 55.2284 55.7862 54.8323 55.744 54.4503C55.6876 53.9552 55.8285 53.743 56.3639 53.7996C56.7443 53.842 57.1388 53.8279 57.5192 53.7996C58.266 53.743 58.7027 53.2338 58.7027 52.5123C58.6887 51.8191 58.2519 51.3382 57.5192 51.2816C57.2938 51.2674 57.0684 51.2816 56.8289 51.2816C55.744 51.2391 55.744 51.2391 55.744 50.164Z" />
									<path class="article-service__fill"
										d="M38.9213 38.5076C33.5533 38.5076 29.2137 34.1223 29.2137 28.7184C29.2137 23.3712 33.5955 18.9859 38.9354 19C44.3175 19.0141 48.657 23.3853 48.6429 28.7892C48.6289 34.1506 44.2612 38.5076 38.9213 38.5076ZM38.8931 35.9613C42.824 35.9896 46.0928 32.7642 46.1069 28.8457C46.121 24.7999 42.9509 21.5605 38.9777 21.5322C35.0045 21.518 31.7639 24.7009 31.7357 28.676C31.7216 32.7077 34.9058 35.9471 38.8931 35.9613Z" />
									<path class="article-service__fill"
										d="M46.445 44.2934C46.4591 45.2129 45.6137 45.807 44.6838 45.4817C43.3031 45.0007 41.8941 44.647 40.4289 44.5339C35.3567 44.1236 30.989 45.7221 27.2835 49.2021C26.1282 50.2772 25.1983 51.5362 24.3952 52.8943C23.9443 53.644 23.1412 53.842 22.5072 53.3752C21.9436 52.965 21.8309 52.2718 22.2254 51.5787C23.2539 49.7679 24.5502 48.1694 26.1141 46.8114C29.9887 43.4446 34.4832 41.7895 39.6117 41.931C41.6405 41.9876 43.6271 42.3978 45.5433 43.0768C46.1491 43.2749 46.445 43.6992 46.445 44.2934Z" />
									<path
										d="M55.744 50.164C55.744 51.2391 55.744 51.2391 56.8289 51.2391C57.0543 51.2391 57.2938 51.225 57.5192 51.2391C58.2519 51.3099 58.7027 51.7767 58.7027 52.4699C58.7168 53.2055 58.2801 53.7006 57.5192 53.7572C57.1388 53.7855 56.7443 53.7996 56.3639 53.7572C55.8285 53.7006 55.6876 53.9128 55.744 54.4079C55.7862 54.7898 55.7581 55.1859 55.744 55.5679C55.7017 56.261 55.1522 56.7562 54.49 56.7279C53.8278 56.6996 53.3206 56.2186 53.2924 55.5537C53.2783 55.0728 53.2783 54.6059 53.2924 54.125C53.3065 53.842 53.1938 53.7572 52.9261 53.7572C52.5034 53.7713 52.0807 53.7713 51.6581 53.7572C50.8409 53.7289 50.3337 53.2338 50.3337 52.484C50.3337 51.7343 50.8409 51.2391 51.6581 51.2109C52.0385 51.1967 52.433 51.1826 52.8134 51.2109C53.1656 51.2391 53.3206 51.1401 53.2924 50.744C53.2643 50.3196 53.2783 49.8953 53.2924 49.4709C53.3206 48.7494 53.8419 48.226 54.5323 48.226C55.2086 48.2402 55.7158 48.7353 55.744 49.4284C55.744 49.7114 55.744 49.9377 55.744 50.164Z" />
								</g>
								<defs>
									<linearGradient id="gradient2" x1="0" y1="78.0049" x2="83.8687" y2="78.0049"
										gradientUnits="userSpaceOnUse">
										<stop class="article-service__gradient-from" />
										<stop class="article-service__gradient-to" offset="1" />
									</linearGradient>
									<clipPath id="clip0_313_826">
										<rect width="41" height="37" fill="white" transform="translate(22 22)" />
									</clipPath>
								</defs>
							</svg>
							<h2 class="article-service__title">ПРИВЕДЕМ КЛИЕНТОВ<br>ЗА РУКУ</h2>
							<p class="article-service__text">Стратегия и упаковка помогут привести вам клиентов из
								интернета.</p>
						</div>
					</a>
				</div>
				<div class="swiper-slide slider__slide slider__slide--mob-width-240">
					<a class="article-service" href="#">
						<div class="article-service__wrapper">
							<svg class="article-service__icon" width="82" height="79" viewBox="0 0 82 79" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill="url(#gradient3)" fill-rule="evenodd" clip-rule="evenodd"
									d="M74.3082 14.4165C85.6776 30.0493 82.2213 51.9389 66.5885 63.3082L55.5885 71.3082C39.9556 82.6776 18.066 79.2213 6.69671 63.5885C-4.67263 47.9556 -1.21638 26.066 14.4165 14.6967L25.4165 6.69671C41.0493 -4.67263 62.9389 -1.21638 74.3082 14.4165Z" />
								<g clip-path="url(#clip0_324_131)">
									<path class="article-service__fill"
										d="M41.9894 49.838C37.1101 49.838 32.2201 49.838 27.3407 49.838C24.7532 49.838 23 48.0809 23 45.4771C23 37.9301 23 30.3726 23 22.8256C23 21.8941 23.3063 21.5872 24.2251 21.5872C29.6854 21.5872 35.1562 21.5872 40.6165 21.5977C40.9861 21.5977 41.1023 21.5025 41.06 21.1426C41.0389 21.005 41.06 20.8462 41.0917 20.7086C41.2079 20.2429 41.6409 19.9571 42.1056 19.9994C42.602 20.0524 42.94 20.4334 42.9611 20.9732C42.9822 21.5872 42.9822 21.5872 43.5842 21.5872C48.9811 21.5872 54.378 21.5872 59.7749 21.5872C60.7043 21.5872 61.0106 21.8941 61.0106 22.815C61.0106 30.3831 61.0106 37.9407 61.0106 45.5088C61.0106 48.0809 59.2574 49.8274 56.6804 49.838C51.7799 49.838 46.8794 49.838 41.9894 49.838ZM42 23.4924C36.4447 23.4924 30.8894 23.4924 25.3446 23.4818C24.9855 23.4818 24.8905 23.5665 24.8905 23.9264C24.9011 31.1029 24.9011 38.29 24.9011 45.4665C24.9011 47.0436 25.7777 47.9328 27.3407 47.9328C37.0995 47.9328 46.8688 47.9328 56.6276 47.9328C58.2223 47.9328 59.1095 47.0542 59.1095 45.4665C59.1095 38.29 59.1095 31.1135 59.1201 23.9264C59.1201 23.5665 59.025 23.4818 58.6659 23.4818C53.1106 23.4924 47.5553 23.4924 42 23.4924Z" />
									<path class="article-service__fill"
										d="M42.9505 54.9511C42.9505 56.38 42.9611 57.6819 42.9505 58.9945C42.9399 59.7566 42.2323 60.2223 41.5881 59.8942C41.2079 59.7036 41.0494 59.3755 41.06 58.9521C41.06 57.7878 41.06 56.6235 41.06 55.4591C41.06 55.3321 41.06 55.1945 41.06 55.0569C40.9016 55.0569 40.8488 55.1839 40.7748 55.258C39.3279 56.687 37.881 58.1159 36.4341 59.5449C35.9483 60.0212 35.4625 60.0741 35.04 59.7036C34.6598 59.3755 34.5964 58.8569 34.8921 58.4546C34.9661 58.3594 35.0506 58.2747 35.135 58.19C37.1628 56.1577 39.1801 54.136 41.2079 52.1037C41.7359 51.5745 42.2429 51.5745 42.7815 52.1143C44.841 54.1678 46.8899 56.2212 48.9388 58.2853C49.4352 58.7828 49.4247 59.3755 48.9388 59.7672C48.5269 60.0953 48.0622 60.0529 47.6292 59.6295C46.6259 58.6346 45.6331 57.629 44.6298 56.6235C44.0806 56.1048 43.5631 55.565 42.9505 54.9511Z" />
									<path class="article-service__fill article-service__fill--purple"
										d="M35.6526 35.1575C35.2513 35.9302 34.8922 36.5864 34.5436 37.2533C34.0895 38.1318 33.6354 39.0103 33.1707 39.8889C33.065 40.1006 32.9594 40.3123 32.7482 40.4499C32.3786 40.7039 31.861 40.6827 31.5336 40.397C31.2168 40.1218 31.1217 39.6349 31.3435 39.2009C32.1145 37.6978 32.9066 36.2054 33.6882 34.7023C33.9416 34.226 34.1846 33.7391 34.4592 33.2734C34.8499 32.5748 35.547 32.4795 36.1279 33.0511C37.6276 34.5436 39.1167 36.0466 40.6059 37.5391C41.8944 38.8304 43.1829 40.1218 44.4714 41.4131C44.5242 41.466 44.5876 41.5189 44.672 41.5825C47.0801 37.5708 49.4775 33.5803 51.8855 29.5581C51.4947 29.4946 51.1673 29.3888 50.9772 29.0395C50.7237 28.5631 50.8822 27.9916 51.3997 27.7164C52.2446 27.2612 53.1106 26.8272 53.9767 26.4144C54.6103 26.118 55.2863 26.5838 55.2968 27.293C55.3074 28.3197 55.2968 29.357 55.2968 30.3837C55.2968 30.8918 55.0434 31.2517 54.6103 31.3787C54.1879 31.5057 53.776 31.3258 53.5014 30.9024C53.4697 30.86 53.4486 30.8283 53.3747 30.7436C52.8783 31.5692 52.403 32.3525 51.9277 33.1464C49.8577 36.6076 47.7771 40.0794 45.7071 43.5406C45.2952 44.2287 44.672 44.3028 44.1123 43.7418C41.3769 41.0003 38.6415 38.2588 35.9166 35.5174C35.8321 35.4433 35.7688 35.3268 35.6526 35.1575Z" />
									<path class="article-service__fill article-service__fill--purple"
										d="M29.3263 43.1384C29.3263 42.6092 29.7699 42.1434 30.2874 42.1434C30.826 42.1434 31.3118 42.6092 31.3118 43.1384C31.3118 43.6147 30.8049 44.1122 30.3085 44.1228C29.791 44.1334 29.3263 43.6676 29.3263 43.1384Z" />
								</g>
								<defs>
									<linearGradient id="gradient3" x1="0" y1="78.0049" x2="83.8687" y2="78.0049"
										gradientUnits="userSpaceOnUse">
										<stop class="article-service__gradient-from" />
										<stop class="article-service__gradient-to" offset="1" />
									</linearGradient>
									<clipPath id="clip0_324_131">
										<rect width="38" height="40" fill="white" transform="translate(23 20)" />
									</clipPath>
								</defs>
							</svg>
							<h2 class="article-service__title">ПРОРАБОТАЕМ<br>КОНВЕРСИЮ</h2>
							<p class="article-service__text">Проработка конверсии сайта поможет снизить стоимость клиента
							</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<section class="section">
<div class="article-about">
<div class="container">
	<div class="columns mobile-columns">
		<div class="columns__col columns__col--6 columns__col--mob-12">
			<h3 class="article-about__subtitle content-subtitle mobile--hidden">Увеличим не только трафик, но и продажи</h3>
			<picture class="article-about__img">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/seo__img.png" alt="Фото: Увеличим не только трафик, но и продажи">
			</picture>
		</div>
		<div class="columns__col columns__col--6 columns__col--mob-12">
			<div class="article-about__info">
				<h3 class="article-about__subtitle content-subtitle desc--hidden">Увеличим не только трафик, но и продажи</h3>
				<h1 class="article-about__title content-title--55">Вы готовы оказаться<br>в топе поиска?</h1>
				<p class="article-about__text content-text--20">Мы много лет занимаемся созданием и продвижением сайтов.
					За годы накопилось очень много работающих способов продвинуть сайт и настроить поток клиентов в бизнес, мы готовы
					поделиться ими с вами.</p>
				<button class="btn btn--color1 article-about__btn">Узнать подробнее</button>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<section class="section fullscreen-wrapper bg-purple">
<div class="article-marketing">
<div class="container">
	<div class="article-marketing__wrapper">
		<div class="article-marketing__info">
			<h3 class="article-marketing__text content-text--20">Наша основная специальность - это
			</h3>
			<h2 class="article-marketing__title">интернет-маркетинг<br>и всё, что с ним<br>связано
			</h2>
		</div>
		<ul class="article-marketing__list">
			<li class="article-marketing__list-item">
				<svg class="article-marketing__list-icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo"></use>
				</svg>SEO ПРОДВИЖЕНИЕ
			</li>
			<li class="article-marketing__list-item">
				<svg class="article-marketing__list-icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#ya"></use>
				</svg>ЯНДЕКС ДЗЕН
			</li>
			<li class="article-marketing__list-item">
				<svg class="article-marketing__list-icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#target"></use>
				</svg>ТАРГЕТИНГОВАЯ РЕКЛАМА
			</li>
			<li class="article-marketing__list-item">
				<svg class="article-marketing__list-icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#context"></use>
				</svg>КОНТЕКСТНАЯ РЕКЛАМА
			</li>
		</ul>
	</div>
</div>
</div>
</section>
<!-- slider mobile -->
<section class="section bg-color">
<div class="cards-marketing">
<div class="container">
	<div class="columns justify-center-desc">
		<div class="columns__col columns__col--12">
			<div class="section-header text-align-start__mob">
				<h3 class="cards-marketing__suptitle content-text--20">Это не все наши услуги, их на много больше!
				</h3>
				<h2 class="cards-marketing__title content-title--55">Мы готовы полностью<br>заменить вам отдел
					разработки<br>и маркетинга</h2>
				<p class="cards-marketing__text content-text--20">Мы можем не только продвигать, но и создавать! Не
					только
					сайты,
					но и
					приложения, плагины и модули для CMS-систем. Мы уже делали это и еще не раз сделаем. </p>
			</div>
		</div>
		<div class="columns__col columns__col--12 columns__col--mob-2 mt--50 mb--20 m-mt--20 m-mb--10 m700-col-6">
			<div class="slider" data-slider data-slider-slides="3" data-slider-mobile>
				<div class="swiper slider__main slider__main--overflow">
					<div class="swiper-wrapper cards-marketing__wrapper">
						<div class="swiper-slide slider-slide slider__slide--mob-width-240">
							<a class="cards-marketing__item" href="#">
								<div class="cards-marketing__decor">
									<svg class="cards-marketing__plate">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#plate"></use>
									</svg>
									<svg class="cards-marketing__icon">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#m-site"></use>
									</svg>
								</div>
								<div class="cards-marketing__info">
									<h2 class="cards-marketing__item-title">Создание сайтов</h2>
									<p class="cards-marketing__item-text">Разработаем для вас продающий сайт, который
										работает
										быстро
									</p>
								</div>
							</a>
						</div>
						<div class="swiper-slide slider-slide ">
							<a class="cards-marketing__item" href="#">
								<div class="cards-marketing__decor">
									<svg class="cards-marketing__plate">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#plate"></use>
									</svg>
									<svg class="cards-marketing__icon">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#m-admin"></use>
									</svg>
								</div>
								<div class="cards-marketing__info">
									<h2 class="cards-marketing__item-title">Поддержка сайта</h2>
									<p class="cards-marketing__item-text">Уже есть сайт? Мы с радостью возьмем его на
										техническую поддержку</p>
								</div>
							</a>
						</div>
						<div class="swiper-slide slider-slide ">
							<a class="cards-marketing__item" href="#">
								<div class="cards-marketing__decor">
									<svg class="cards-marketing__plate">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#plate"></use>
									</svg>
									<svg class="cards-marketing__icon">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#m-map"></use>
									</svg>
								</div>
								<div class="cards-marketing__info">
									<h2 class="cards-marketing__item-title">Продвижение на картах</h2>
									<p class="cards-marketing__item-text">Добавим и продвинем вашу компанию во всех
										сервисах карт</p>
								</div>
							</a>
						</div>
						<div class="swiper-slide slider-slide ">
							<a class="cards-marketing__item" href="#">
								<div class="cards-marketing__decor">

									<svg class="cards-marketing__plate">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#plate"></use>
									</svg>
									<svg class="cards-marketing__icon">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#m-copyright"></use>
									</svg>

								</div>
								<div class="cards-marketing__info">
									<h2 class="cards-marketing__item-title">Копирайтинг</h2>
									<p class="cards-marketing__item-text">Напишем для вас качественные продающие или
										информационные тексты</p>
								</div>
							</a>
						</div>
						<div class="swiper-slide slider-slide ">
							<a class="cards-marketing__item" href="#">
								<div class="cards-marketing__decor">
									<svg class="cards-marketing__plate">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#plate"></use>
									</svg>
									<svg class="cards-marketing__icon">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#m-video"></use>
									</svg>
								</div>
								<div class="cards-marketing__info">
									<h2 class="cards-marketing__item-title">Монтаж видео</h2>
									<p class="cards-marketing__item-text">Снимем и проведем монтаж видео любой сложности
									</p>
								</div>
							</a>
						</div>
						<div class="swiper-slide slider-slide ">
							<a class="cards-marketing__item" href="#">
								<div class="cards-marketing__decor">
									<svg class="cards-marketing__plate">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#plate"></use>
									</svg>
									<svg class="cards-marketing__icon">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#m-marketing"></use>
									</svg>
								</div>
								<div class="cards-marketing__info">
									<h2 class="cards-marketing__item-title">Маркетинговый надзор</h2>
									<p class="cards-marketing__item-text">Проверим работу вашего подрядчика по маркетингу
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="columns__col columns__col--12">
	<div class="cards-marketing__nav">
		<button class="btn btn--color2 cards-marketing__btn--mobile">Посмотреть все услуги</button>
		<button class="btn btn--color1 cards-marketing__btn" data-fancybox data-src="#modal-aplly">Бесплатная
			консультация</button>
	</div>
</div>
</div>

</section>

<!-- slider -->
<section class="slider-gallery">
<div class="container">
<div class="section-header text-align-start__mob">
	<h2 class="content-title--55">Сертификаты</h2>
</div>

<div class="slider gallery-slider" data-slider data-slider-slides="4">
	<div class="swiper slider__main">
		<div class="swiper-wrapper">
			<div class="swiper-slide slider__slide--mob-width-190 slider__slide">
				<div class="slider-slide__card gallery-card " data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg">
					<img class="slide-img" src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg" alt="Сертификат">
				</div>
			</div>
			<div class="swiper-slide slider__slide--mob-width-190 slider__slide">
				<div class="slider-slide__card gallery-card " data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg">
					<img class="slide-img " src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg" alt="Сертификат">
				</div>
			</div>
			<div class="swiper-slide slider__slide--mob-width-190 slider__slide">
				<div class="slider-slide__card gallery-card" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg">
					<img class="slide-img" src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg" alt="Сертификат">
				</div>
			</div>
			<div class="swiper-slide slider__slide--mob-width-190 slider__slide">
				<div class="slider-slide__card gallery-card" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg">
					<img class="slide-img " src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg" alt="Сертификат">
				</div>
			</div>
			<div class="swiper-slide slider__slide--mob-width-190 slider__slide">
				<div class="slider-slide__card gallery-card" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg">
					<img class="slide-img " src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg" alt="Сертификат">
				</div>
			</div>
			<div class="swiper-slide slider__slide--mob-width-190 slider__slide">
				<div class="slider-slide__card gallery-card" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg">
					<img class="slide-img" src="<?=SITE_TEMPLATE_PATH?>/img/cert.jpg" alt="Сертификат">
				</div>
			</div>
		</div>
		<div class="slider-buttons">
			<button class="button-slider button-slider--grey button-slider--inner button-slider--prev mobile--hidden"
				data-slider-prev>
				<svg class="button__icon button__icon--prev button__icon--purple gallery__icon--prev">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow"></use>
				</svg>
			</button>
			<button class="button-slider button-slider--grey button-slider--inner button-slider--next mobile--hidden"
				data-slider-next>
				<svg class="button__icon button__icon--next button__icon--purple gallery__icon--next">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow"></use>
				</svg>
			</button>
		</div>
		<div class="slider__pagination mobile--hidden"></div>
	</div>
</div>
</div>
</section>

<!-- slider desc -->
<section class="section bg-purple">
<div class="article-review">
<div class="container">
	<div class="slider" data-slider data-slider-desctop data-slider-slides="3">
		<div class="article-review__header section-header--btn">
			<h2 class="content-title--55 article-review__header-title">Отзывы</h2>
			<nav class="article-review__nav mobile--hidden">
				<button class="button-slider button-slider--light mobile--hidden" data-slider-prev>
					<svg class="button__icon button__icon--light button__icon--prev">
						<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow"></use>
					</svg>
				</button>
				<button class="button-slider button-slider--light mobile--hidden" data-slider-next>
					<svg class="button__icon button__icon--light button__icon--next">
						<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow"></use>
					</svg>
				</button>
			</nav>
		</div>
		<div class="swiper slider__main slider__main--overflow">
			<div class="swiper-wrapper slider__wrapper--mobile-grid">
				<div class="swiper-slide slider__slide">
					<div class="article-review__editor">
						<div class="article-review__wrapper" data-fancybox href="#review-1">
							<div class="article-review__info">
								<picture class="article-review__userpic">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/reviews-item__img.jpg" alt="Фото: отзыв">
								</picture>
								<div class="article-review__info-content">
									<p class="article-review__info-company">ООО “Литана”</p>
									<p class="article-review__info-name">Анастасия Брут</p>
								</div>
							</div>
							<p class="article-review__text">ООО «Литана» занимается управлением строительных объектов,
								изготовлением
								металлоконструкций, проектированием промышленных и гражданских объектов.
							</p>
							<a class="article-review__link" href="#">Читать весь отзыв</a>
						</div>
					</div>
				</div>
				<div class="modal-gallery article-review-modal" style="display: none;" id="review-1">
					<div class="article-review__info">
						<picture class="article-review__userpic">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/reviews-item__img.jpg" alt="Фото: отзыв">
						</picture>
						<div class="article-review__info-content">
							<p class="article-review__info-company">ООО “Литана”</p>
							<p class="article-review__info-name">Анастасия Брут</p>
						</div>
					</div>
					<p class="article-review__text">
						Review - 1 <br>
						ООО «Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов. ООО
						«Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов. ООО
						«Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов.
					</p>
					<button class="carousel__button is-close" title="Close" tabindex="0"></button>
				</div>
				<div class="swiper-slide slider__slide">
					<div class="article-review__editor">
						<div class="article-review__wrapper" data-fancybox href="#review-2">
							<div class="article-review__info">
								<picture class="article-review__userpic">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/reviews-item__img.jpg" alt="Фото: отзыв">
								</picture>
								<div class="article-review__info-content">
									<p class="article-review__info-company">ООО “Литана”</p>
									<p class="article-review__info-name">Анастасия Брут</p>
								</div>
							</div>
							<p class="article-review__text">ООО «Литана» занимается управлением строительных объектов,
								изготовлением
								металлоконструкций, проектированием промышленных и гражданских объектов.
							</p>
							<a class="article-review__link" href="#">Читать весь отзыв</a>
						</div>
					</div>
				</div>
				<div class="modal-gallery article-review-modal" style="display: none;" id="review-2">
					<div class="article-review__info">
						<picture class="article-review__userpic">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/reviews-item__img.jpg" alt="Фото: отзыв">
						</picture>
						<div class="article-review__info-content">
							<p class="article-review__info-company">ООО “Литана”</p>
							<p class="article-review__info-name">Анастасия Брут</p>
						</div>
					</div>
					<p class="article-review__text">
						Review - 3 <br>
						ООО «Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов. ООО
						«Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов. ООО
						«Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов.
					</p>
					<button class="carousel__button is-close" title="Close" tabindex="0"></button>
				</div>
				<div class="swiper-slide slider__slide">
					<div class="article-review__wrapper article-review__video-wrapper" data-fancybox data-type="iframe"
						href="https://www.youtube.com/watch?v=Na6imlcnBmc" data-width="810" data-height="410">
						<div class="article-review__video-info">
							<button class="video-play-btn">
								<svg class="video-play-icon">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#play"></use>
								</svg>
							</button>
							<time class="article-review__video-date" datetime="2021-10-14">14.10.21</time>
							<p class="article-review__company article-review__company--video">ООО “Литана”</p>
						</div>
						<video class="article-review__video" width="390" height="347" poster="<?=SITE_TEMPLATE_PATH?>/img/reviews-img2.jpg">
							<source src="#" type='video/ogg; codecs="theora, vorbis"'>
							<source src="#" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							<source src="#" type='video/webm; codecs="vp8, vorbis"'>
						</video>
					</div>
				</div>
				<div class="swiper-slide slider__slide">
					<div class="article-review__editor">
						<div class="article-review__wrapper" data-fancybox href="#review-4">
							<div class="article-review__info">
								<picture class="article-review__userpic">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/reviews-item__img.jpg" alt="Фото: отзыв">
								</picture>
								<div class="article-review__info-content">
									<p class="article-review__info-company">ООО “Литана”</p>
									<p class="article-review__info-name">Анастасия Брут</p>
								</div>
							</div>
							<p class="article-review__text">ООО «Литана» занимается управлением строительных объектов,
								изготовлением
								металлоконструкций, проектированием промышленных и гражданских объектов.
							</p>
							<a class="article-review__link" href="#">Читать весь отзыв</a>
						</div>
					</div>
				</div>
				<div class="modal-gallery article-review-modal" style="display: none;" id="review-4">
					<div class="article-review__info">
						<picture class="article-review__userpic">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/reviews-item__img.jpg" alt="Фото: отзыв">
						</picture>
						<div class="article-review__info-content">
							<p class="article-review__info-company">ООО “Литана”</p>
							<p class="article-review__info-name">Анастасия Брут</p>
						</div>
					</div>
					<p class="article-review__text">
						Review - 4 <br>
						ООО «Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов. ООО
						«Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов. ООО
						«Литана» занимается управлением строительных объектов,
						изготовлением металлоконструкций, проектированием промышленных и гражданских объектов.
					</p>
					<button class="carousel__button is-close" title="Close" tabindex="0"></button>
				</div>
			</div>
		</div>
	</div> <!-- /.slider -->
	<button class="btn btn--color2 article-review__btn">Все отзывы</button>
</div>
</div>
</section>
<!-- slider -->
<section class="section">
<div class="article-credits">
<div class="container">
	<div class="section-header--btn align-start">
		<div class="section-header text-align-start">
			<h2 class="article-credits__title content-title--55">благодарности</h2>
			<h3 class="article-credits__text content-text--20">от наших клиентов</h3>
		</div>
	</div>

	<div class="article-credits__wrapper">
		<div class="article-credits__wrapper-text">
			<p class="content-text--20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt
				tempor sem lorem nec. <br>
				<br><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt
					tempor sem lorem nec.</span>
			</p>
			<button class="btn btn--color1 mobile--hidden">Все благодарности</button>
		</div>

		<div class="slider article-credits-slider" data-slider data-slider-slides="1.8">
			<div class="swiper slider__main">
				<div class="swiper-wrapper">
					<div class="swiper-slide slider__slide slider__slide--mob-width-240">
						<div class="article-credits-slider__item" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg">
							<picture class="article-credits-slider__img ">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg" alt="Фото: Благодарность клиента">
							</picture>
						</div>
					</div>
					<div class="swiper-slide slider__slide slider__slide--mob-width-240">
						<div class="article-credits-slider__item" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg">
							<picture class="article-credits-slider__img ">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg" alt="Фото: Благодарность клиента">
							</picture>
						</div>
					</div>
					<div class="swiper-slide slider__slide slider__slide--mob-width-240">
						<div class="article-credits-slider__item" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg">
							<picture class="article-credits-slider__img ">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg" alt="Фото: Благодарность клиента">
							</picture>
						</div>
					</div>
					<div class="swiper-slide slider__slide slider__slide--mob-width-240">
						<div class="article-credits-slider__item" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg">
							<picture class="article-credits-slider__img ">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg" alt="Фото: Благодарность клиента">
							</picture>
						</div>
					</div>
					<div class="swiper-slide slider__slide slider__slide--mob-width-240">
						<div class="article-credits-slider__item" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg">
							<picture class="article-credits-slider__img ">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg" alt="Фото: Благодарность клиента">
							</picture>
						</div>
					</div>
					<div class="swiper-slide slider__slide slider__slide--mob-width-240">
						<div class="article-credits-slider__item" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg">
							<picture class="article-credits-slider__img ">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg" alt="Фото: Благодарность клиента">
							</picture>
						</div>
					</div>
					<div class="swiper-slide slider__slide slider__slide--mob-width-240">
						<div class="article-credits-slider__item" data-fancybox data-src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg">
							<picture class="article-credits-slider__img ">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/credits__img.jpg" alt="Фото: Благодарность клиента">
							</picture>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn--color1 desc--hidden mt--30">Все благодарности</button>
	</div>
</div>
</div>
</section>
<section class="cards-seo">
<div class="container">
<div class="columns columns-1 mob-gap-10">
	<div class="columns__col columns__col--12">
		<h2 class="content-title--55 text-center">Seo по тематикам</h2>
	</div>
	<div class="columns columns-1 columns__col--12 mt--20">
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-market"></use>
				</svg>
				<p class="cards-seo__text">Интернет-магазины</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-med"></use>
				</svg>
				<p class="cards-seo__text">Медицина</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-build"></use>
				</svg>
				<p class="cards-seo__text">Строительство</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-prom"></use>
				</svg>
				<p class="cards-seo__text">Промышленность</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-logist"></use>
				</svg>
				<p class="cards-seo__text">Логистика</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-house"></use>
				</svg>
				<p class="cards-seo__text">Недвижимость</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-gov"></use>
				</svg>
				<p class="cards-seo__text">Госучреждения</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-delivery"></use>
				</svg>
				<p class="cards-seo__text">Доставки</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-franchise"></use>
				</svg>
				<p class="cards-seo__text">Франшизы</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<a class="cards-seo__item" href="#">
				<svg class="cards-seo__icon">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#seo-school"></use>
				</svg>
				<p class="cards-seo__text">Онлайн школы</p>
			</a>
		</div>
		<div class="columns__col columns__col--3">
			<button class="cards-seo__item cards-seo__item-btn cards-seo__text">
				Все отрасли
			</button>
		</div>
	</div>
</div>
</div>
</section>
<section class="section bg-color">
<div class="container">
<div class="article-seo">
	<div class="article-seo__content">
		<h2 class="content-title--55 article-seo__title">Заказать аудит сайта</h2>
		<p class="article-seo__text">Пройдите опрос и получите аудит сайта абсолютно бесплатно</p>
	</div>
	<div class="article-seo__form-wrapper form-call__wrapper">
		<form class="article-seo__form " name="telephone">
			<input class="article-seo__input form-call__input" name="telephone" type="tel" maxlength="20"
				placeholder="+7 (___) ___-__-__" required data-tel>
		</form>
		<button class="article-seo__btn btn btn--color2 form-call__btn" data-fancybox
			data-src="#modal-aplly">Заказать звонок</button>
		<div class="modal-success" data-fancybox data-src="#modal-success"></div>
	</div>
</div>
</div>
</section>
<section class="slider-clients bg-color">
<div class="container">
<div class="slider-seo" data-slider data-slider-slides="6">
	<div class="swiper logos-slider slider__main">
		<div class="logos__wrapper swiper-wrapper">
			<div class="logos-item__wrapper swiper-slide">
				<div class="logos-item__card-wrapper">
					<img class="logo-seo" src="<?=SITE_TEMPLATE_PATH?>/img/seo-clients-1.png" alt="Наши клиенты">
				</div>
			</div>
			<div class="logos-item__wrapper swiper-slide">
				<div class="logos-item__card-wrapper">
					<img class="logo-seo" src="<?=SITE_TEMPLATE_PATH?>/img/seo-clients-2.png" alt="Наши клиенты">
				</div>
			</div>
			<div class="logos-item__wrapper swiper-slide">
				<div class="logos-item__card-wrapper">
					<img class="logo-seo" src="<?=SITE_TEMPLATE_PATH?>/img/seo-clients-3.png" alt="Наши клиенты">
				</div>
			</div>
			<div class="logos-item__wrapper swiper-slide">
				<div class="logos-item__card-wrapper">
					<img class="logo-seo" src="<?=SITE_TEMPLATE_PATH?>/img/seo-clients-4.png" alt="Наши клиенты">
				</div>
			</div>
			<div class="logos-item__wrapper swiper-slide">
				<div class="logos-item__card-wrapper">
					<img class="logo-seo" src="<?=SITE_TEMPLATE_PATH?>/img/seo-clients-5.png" alt="Наши клиенты">
				</div>
			</div>
			<div class="logos-item__wrapper swiper-slide">
				<div class="logos-item__card-wrapper">
					<img class="logo-seo" src="<?=SITE_TEMPLATE_PATH?>/img/seo-clients-6.png" alt="Наши клиенты">
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- slider desc -->
<section class="section bg-color">
<div class="article-portfolio">
<div class="container">
	<div class="section-header--btn">
		<h2 class="content-title--55">Наши кейсы</h2>
		<button class="btn btn--color1 article-portfolio__btn mobile--hidden">Все проекты</button>
	</div>
	<div class="slider article-portfolio__slider" data-slider data-slider-desctop data-slider-slides="3">
		<div class="swiper slider__main slider__main--overflow">
			<div class="swiper-wrapper slider__wrapper--mobile-grid">
				<div class="slider__slide swiper-slide">
					<div class="article-portfolio__item">
						<picture class="article-portfolio__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio-cards__img-1.jpg" alt="Фото: Продвижение сайта официального дистрибьютора медицинского
		оборудования">
						</picture>
						<div class="article-portfolio__item-info">
							<p class="article-portfolio__item-title">Продвижение сайта официального дистрибьютора
								медицинского оборудования
							</p>
							<p class="article-portfolio__item-text">Увеличение коммерческого трафика из поисковых
								систем в 4 раза
							</p>
							<a class="article-portfolio__item-link" href="#">Подробнее
								<svg class="article-portfolio__item-link-icon">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-purp"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="slider__slide swiper-slide">
					<div class="article-portfolio__item">
						<picture class="article-portfolio__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio-cards__img-2.jpg"
								alt="Фото: Продвижение сайта ПЦР тестов и КТ в Калининграде">
						</picture>
						<div class="article-portfolio__item-info">
							<p class="article-portfolio__item-title">Продвижение сайта ПЦР тестов и КТ в Калининграде
							</p>
							<p class="article-portfolio__item-text">Снизили CPL по услуге ПЦР-тесты</p>
							<a class="article-portfolio__item-link" href="#">Подробнее
								<svg class="article-portfolio__item-link-icon">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-purp"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="slider__slide swiper-slide">
					<div class="article-portfolio__item">
						<picture class="article-portfolio__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio-cards__img-3.jpg"
								alt="Фото: Магазин керамической плитки в Калининграде">
						</picture>
						<div class="article-portfolio__item-info">
							<p class="article-portfolio__item-title">Магазин керамической плитки в Калининграде</p>
							<p class="article-portfolio__item-text">Снизили стоимость клиента на 50%</p>
							<a class="article-portfolio__item-link" href="#">Подробнее
								<svg class="article-portfolio__item-link-icon">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-purp"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="slider__slide swiper-slide">
					<div class="article-portfolio__item">
						<picture class="article-portfolio__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio-cards__img-4.jpg"
								alt="Фото: Продвижение интернет- магазина кислородного оборудования">
						</picture>
						<div class="article-portfolio__item-info">
							<p class="article-portfolio__item-title">Продвижение интернет-магазина кислородного
								оборудования
							</p>
							<p class="article-portfolio__item-text">Снизили стоимость клиента на 50%</p>
							<a class="article-portfolio__item-link" href="#">Подробнее
								<svg class="article-portfolio__item-link-icon">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-purp"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__pagination mobile--hidden"></div>
		</div>
	</div>
	<button class="btn btn--color1 article-portfolio__btn--mobile">Все проекты</button>
</div>
</div>
</section>
<section class="section">
<div class="container">
<div class="blog">
	<div class="section-header--btn blog__header">
		<h2 class="content-title--55">Блог</h2>
		<button class="btn btn--color1 blog__btn mobile--hidden">Перейти в раздел</button>
	</div>
	<div class="blog__body">
		<div class="blog__item">
			<picture class="blog__item-img--big">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/blog-img--big.jpg"
					 alt="Фото:Хакеры протестировали эксплойт уязвимости нулевого дня в Nginx LDAP">
			</picture>
			<div class="blog__item-info blog__item-info--big">
				<h5 class="blog__item-title blog__item-title--big">
					<a class="blog__item-link" href="#">Хакеры протестировали эксплойт уязвимости нулевого дня в
						Nginx
						LDAP</a>
				</h5>
				<p class="blog__item-text content-text--16">В начале апреля хакерская группа BlueHornet заявила
					об
					уязвимости нулевого дня
					в ПО В начале апреля
					хакерская группа BlueHornet заявила об уязвимости нулевого дня в ПО .В начале апреля
					хакерская
					группа
					BlueHornet заявила об уязвимости нулевого дня в читать далее</p>
				<time class="blog__item-date blog__item-date--big btn btn--color1" datetime="2022-07-15 08:15">
					15 июля
					|
					08:15
				</time>
			</div>
		</div>

		<div class="blog__item">
			<picture class="blog__item-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/blog-img-1.jpg"
					 alt="Фото:Хакеры протестировали эксплойт уязвимости нулевого дня в Nginx LDAP">
			</picture>
			<div class="blog__item-info">
				<h5 class="blog__item-title content-text--20">
					<a class="blog__item-link" href="#">Хакеры протестировали эксплойт
						уязвимости нулевого дня в Nginx LDAP</a>
				</h5>
				<time class="blog__item-date" datetime="2022-07-15 08:15"><strong>15:00</strong> | 08:15</time>
			</div>
		</div>
		<div class="blog__item">
			<picture class="blog__item-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/blog-img-2.jpg"
					 alt="Фото:Хакеры протестировали эксплойт уязвимости нулевого дня в Nginx LDAP">
			</picture>
			<div class="blog__item-info">
				<h5 class="blog__item-title content-text--20">
					<a href="#" class="blog__item-link">Хакеры протестировали эксплойт
						уязвимости
						нулевого дня в Nginx LDAP</a>
				</h5>
				<time class="blog__item-date" datetime="2022-07-15 08:15"><strong>15:00</strong> | 08:15</time>
			</div>
		</div>
		<div class="blog__item">
			<picture class="blog__item-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/blog-img-3.jpg"
					 alt="Фото:Хакеры протестировали эксплойт уязвимости нулевого дня в Nginx LDAP">
			</picture>
			<div class="blog__item-info">
				<h5 class="blog__item-title content-text--20">
					<a href="#" class="blog__item-link">Хакеры протестировали эксплойт
						уязвимости нулевого дня в Nginx LDAP</a>
				</h5>
				<time class="blog__item-date" datetime="2022-07-15 08:15"><strong>15:00</strong> | 08:15</time>
			</div>
		</div>
		<div class="blog__item">
			<picture class="blog__item-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/blog-img-4.jpg"
					 alt="Фото:Хакеры протестировали эксплойт уязвимости нулевого дня в Nginx LDAP">
			</picture>
			<div class="blog__item-info">
				<h5 class="blog__item-title content-text--20">
					<a href="#" class="blog__item-link">Хакеры протестировали эксплойт
						уязвимости нулевого дня в Nginx LDAP</a>
				</h5>
				<time class="blog__item-date" datetime="2022-07-15 08:15"><strong>15:00</strong> | 08:15</time>
			</div>
		</div>
	</div>
	<button class="btn btn--color1 blog__btn--mobile">Перейти в раздел</button>
</div>
</div>
</section>
</main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>