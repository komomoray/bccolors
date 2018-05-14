<?php
/**
 * ブログ詳細ページ
 */
$this->BcBaser->css('admin/colorbox/colorbox-1.6.1', array('inline' => true));
$this->BcBaser->js('admin/vendors/jquery.colorbox-1.6.1.min', false);
$this->BcBaser->setDescription($this->Blog->getTitle() . '｜' . $this->Blog->getPostContent($post, false, false, 50));
?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
	});
</script>

<div class="blog blog-weblog">
<h3><?php $this->BcBaser->contentsTitle() ?></h3>
<div class="eye-catch">
<?php echo $this->Blog->eyeCatch($post) ?>
</div>

	<div class="post">
	<?php $this->Blog->postContent($post) ?>
		<div class="meta"> 
			<span class="date"><?php $this->Blog->postDate($post) ?></span>&nbsp;&nbsp;&nbsp;
			<span class="category"><?php $this->Blog->category($post) ?></span>&nbsp;&nbsp;&nbsp;
			<span class="author"><?php $this->Blog->author($post) ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
		</div>
	</div><!-- /post -->

	<!-- contentsNavi -->
	<div id="ContentsNavi">
		<?php $this->Blog->prevLink($post, '< 前の記事へ') ?>
		&nbsp;  &nbsp;<?php $this->BcBaser->link('一覧へ', '/' . $this->Blog->getBlogName() . '/index') ?>&nbsp;&nbsp;
		<?php $this->Blog->nextLink($post, '次の記事へ >') ?>
	</div>
	<!-- blog_comments -->
	<?php $this->BcBaser->element('blog_comments') ?>
</div><!-- /blog-weblog -->