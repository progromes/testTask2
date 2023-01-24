<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<div class="menu-inner">
<?if(!empty($arResult)):?>
				<?php foreach($arResult as $key => $item): ?>
					<?if(($key % (int)(count($arResult)/2)) == 0): ?>
				<div class="menu-list">
				<?endif?>
				<div class="dropdown" data-dropdown>
						<button class="dropdown__header menu-list__item">
							<?=$item['TEXT']?>
						</button>
						<?php if(!empty($item['subitems'])):?>
						<div class="dropdown__content" data-dropdown-content hidden>
							<ul class="menu-sublist dropdown-list">
								<?foreach($item['subitems'] as $subitem):?>
								<li class="menu-sublist__item"><a class="menu-sublist__link" href="<?=$subitem['LINK'];?>"><?=$subitem['TEXT'];?></a>
								</li>
								<?endforeach;?>

							</ul>
						</div>
						<?endif?>
					</div>
					<?if(($key % (int)(count($arResult)/2)) == ((int)(count($arResult)/2))-1): ?>
					</div>
				<?endif?>
					<?endforeach;?>
					<?endif?>

				<button class="btn menu-list__btn">Партнерская программа</button>
</div>
			