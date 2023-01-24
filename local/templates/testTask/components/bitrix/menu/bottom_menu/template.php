<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


			
<?if(!empty($arResult)):?>
<div class="columns__col columns__col--8 columns__col--mob-12">
				<ul class="footer-menu__list">
				<?php foreach($arResult as $key => $item): ?>

					<li class="footer-menu__item"><a class="footer-menu__item-link" href="<?= $item['LINK']?>">
					
					<?=$item['TEXT']?></a>
					<?php if(!empty($item['subitems'])):?>
						<ul class="footer-menu__sublist <?= $item['LINK'] == '/services/'? 'footer-menu__sublist--col2' : '';?>">
						<?foreach($item['subitems'] as $subitem):?>
							<li class="footer-menu__subitem"><a class="footer-menu__subitem-link" href="<?=$subitem['LINK'];?>"><?=$subitem['TEXT'];?></a>
							</li>
							<?endforeach;?>
							
						</ul>
						<?endif?>
					</li>
					<?endforeach;?>
					
				</ul>
			</div>
<?endif?>