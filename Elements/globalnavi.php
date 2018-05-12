<?php
/**
 * グローバルナビとソーシャルボタン
 */
?>
	<a id="PageTop"></a>
	<div id="TopWrap">
		<div class="wrapper">
			<div id="BtnMenu">
				<?php $this->BcBaser->img('sp/common/btn_menu.png', array('alt'=>'MENU')); ?>
			</div>
			<nav id="GlobalNavigation">
				<ul class="clearfix">
					<li class="dropdown-item"><?php $this->BcBaser->link('home', '/') ?></li>
					<li class="dropdown-item"><?php $this->BcBaser->link('about', '/about') ?></li>
					<li class="dropdown-item"><?php $this->BcBaser->link('service', '/service/index') ?>
						<ul class="dropdown-list">
							<li><?php $this->BcBaser->link('service1', '/service/service1') ?></li>
							<li><?php $this->BcBaser->link('service2', '/service/service2') ?></li>
							<li><?php $this->BcBaser->link('service3', '/service/service3') ?></li>
						</ul>
					</li>
					<li class="dropdown-item"><?php $this->BcBaser->link('works', '/works/index') ?></li>
					<li class="dropdown-item"><?php $this->BcBaser->link('contact', '/contact') ?></li>
				</ul>
			</nav>
			
			<div id="SocialLinks">
				<ul>
					<li><a href="https://www.facebook.com/basercms" target="_blank"><?php $this->BcBaser->img('common/header/icn_facebook.png', array('alt'=>'Facebook', 'class'=>'Over')); ?></a></li>
					<li><a href="https://twitter.com/basercms" target="_blank"><?php $this->BcBaser->img('common/header/icn_twitter.png', array('alt'=>'twitter', 'class'=>'Over')); ?></a></li>
					<li><a href="https://plus.google.com" target="_blank"><?php $this->BcBaser->img('common/header/icn_google.png', array('alt'=>'google+', 'class'=>'Over')); ?></a></li>
				</ul>
			</div>
		</div>
	</div><!-- /#TopWrap -->