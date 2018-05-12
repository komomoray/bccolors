<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('サイトマップ') ?>
<?php $this->BcBaser->setDescription('baserCMS inc.のサイトマップページ') ?>
<?php $this->BcBaser->setPageEditLink(5) ?>
<!-- BaserPageTagEnd -->

<h2 class="contents-head">サイトマップ</h2>

<div class="clearfix" id="SitemapBox">
<div class="sitemap-left">
<ul class="section">
	<li><?php $this->BcBaser->link("トップページ","/") ?></li>
</ul>
<?php $this->BcBaser->sitemap() ?></div>

<div class="sitemap-left">
<ul class="section">
	<li><?php $this->BcBaser->link("実績","/works/index") ?></li>
	<li><?php $this->BcBaser->link("新着情報","/news/index") ?></li>
	<li><?php $this->BcBaser->link("ブログ","/weblog/index") ?></li>
	<li><?php $this->BcBaser->link("お問い合わせ","/contact/index") ?></li>
</ul>
</div>
</div>