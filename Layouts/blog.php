<?php
/**
 * デフォルトレイアウト
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
		<?php $this->BcBaser->title() ?>
		<?php $this->BcBaser->metaDescription() ?>
		<?php $this->BcBaser->metaKeywords() ?>
		<?php $this->BcBaser->icon() ?>
		<?php $this->BcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
		
<!--[if lt IE 9]>
	<script src="js/IE9.js"></script>
	<script src="js/html5shiv-printshiv.js"></script>
<![endif]-->

		<?php $this->BcBaser->css('style') ?>
<?php if($this->BcBaser->isHome()): ?>
		<?php $this->BcBaser->css('top') ?>
<?php else: ?>
		<?php $this->BcBaser->css('page') ?>
<?php endif ?>

<?php $this->BcBaser->js(array(
			'jquery-1.7.2.min',
			'admin/functions',
			'admin/vendors/yuga',
			'jquery.startup',
			'jquery.bxSlider.min',
			'jquery.socialbutton-1.9.1.min'
)) ?>

<?php if($this->BcBaser->isHome()): ?>
<script type="text/javascript">
$(function(){
	$('#MainImage').bxSlider({
		auto: true,
		pager: true,
		speed: 1000,
		pause: 5000
	});
	$('#SliderBox .pager-link').wrapInner('<span></span>');
	$('#WorksImage').bxSlider({
		slideWidth: 300,
		minSlides: 3,
		maxSlides: 3,
		slideMargin: 15,
		auto: false,
		pager: false,
		speed: 1000,
		pause: 5000,
		captions: false
	});
	$('#Works .pager-link').wrapInner('<span></span>');
})
</script>
<?php else: ?>
<?php $this->BcBaser->js(array(
		'jquery.heightLine'
)) ?>
<script type="text/javascript">
	$(function(){
		//$('.content>div').heightLine();
	})
</script>
<?php endif ?>

<?php $this->BcBaser->scripts() ?>
<?php $this->BcBaser->element('google_analytics') ?>
</head>
<body id="<?php $this->BcBaser->contentsName(true) ?>">
	
<?php $this->BcBaser->element('globalnavi') ?>

<?php $this->BcBaser->header() ?>

	<?php if ($this->BcBaser->isHome()): ?>
	<div id="SliderBox">
		<div id="SliderWrap">
		<?php $this->BcBaser->mainImage(array('all' => true, 'num' => 4, 'width' => 1000)) ?>
		</div>
	</div><!--SliderBox-->
	<?php endif ?>
	
	<?php if(!empty($this->Blog)): ?>
	<div id="TitleImage">
		<h2><?php $this->BcBaser->mainImage(array('all' => false, 'num' => 5, 'width' => 1000)) ?></h2>
	</div><!--TitleImage-->
	<?php endif ?>

	<?php if (!$this->BcBaser->isHome()): ?>
	<div id="Breadcrumbs">
		<?php $this->BcBaser->element('crumbs'); ?>
	</div><!--Breadcrumbs-->
	<?php endif; ?>

	<div class="content clearfix">
		<div id="Page">
			<?php if ($this->BcBaser->isHome()): ?>
				<?php $this->BcBaser->element('toppage') ?>
			<?php else: ?>
			<div class="subpage">
				<?php $this->BcBaser->flash() ?>
				<?php $this->BcBaser->content() ?>
				<?php $this->BcBaser->element('contents_navi') ?>
			</div>
			<?php endif ?>
		</div><!--Page-->

		<?php if (!$this->BcBaser->isHome()): ?>
		<div id="Side">
			<?php $this->BcBaser->element('sidebar') ?>
		</div><!--Side-->
		<?php endif ?>
	</div><!--content-->
	
	<div id="TopLink"><?php $this->BcBaser->img('common/footer/btn_pagetop.png', array('url' => '#PageTop')); ?></div>

<?php $this->BcBaser->footer() ?>
<?php $this->BcBaser->func() ?>
	</body>
</html>
