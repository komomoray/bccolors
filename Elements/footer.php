<?php
/**
 * フッター
 */
?>
<footer id="Footer">
	<div class="wrapper clearfix">
		<div id="FooterInformation">
			<p id="FooterLogo">company name</p>
			<p>810-0000  福岡県福岡市中央区○○○○○○○○</p>
			<p>TEL / 092-123-4567</p>
			<p id="Copyright">
				<a href="https://basercms.net/" target="_blank"><?php $this->BcBaser->img('baser.power.gif', array('alt' => 'baserCMS : Based Website Development Project')); ?></a>
				&nbsp; 
				<a href="https://cakephp.org/" target="_blank"><?php $this->BcBaser->img('cake.power.gif', array('alt' => 'CakePHP(tm) : Rapid Development Framework')); ?></a>
				&nbsp; 
				<a href="http://komomo.biz/" target="_blank"><?php $this->BcBaser->img('common/footer/komomo.gif', array('alt' => 'komomo design')); ?></a>
			</p>
		</div>
		
		<nav id="FooterNavigator">
			<?php $this->BcBaser->element('global_menu') ?>
		</nav>
	</div>
</footer>