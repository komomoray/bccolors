<?php
/**
 * ブログアーカイブ一覧
 */
$this->BcBaser->css('admin/colorbox/colorbox', array('inline' => true));
$this->BcBaser->js('admin/jquery.colorbox-min-1.4.5', false);
$this->BcBaser->setDescription($this->Blog->getTitle() . '｜' . $this->BcBaser->getContentsTitle() . 'のアーカイブ一覧です。');
?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
	});
</script>

<div class="blog blog-default">
<h2><?php $this->Blog->title() ?>&nbsp;&nbsp;<span class="archives"><?php $this->BcBaser->contentsTitle() ?></span></h2>

<?php if (!empty($posts)): ?>
	<?php foreach ($posts as $post): ?>
	<div class="post">
		<h3><?php $this->Blog->postTitle($post) ?></h3>
	<?php $this->Blog->postContent($post, true, true) ?>
		<div class="meta"> 
			<span class="date"><?php $this->Blog->postDate($post) ?></span>&nbsp;&nbsp;&nbsp;
			<span class="category"><?php $this->Blog->category($post) ?></span>&nbsp;&nbsp;&nbsp;
			<span class="author"><?php $this->Blog->author($post) ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
		</div>
	</div><!-- /post -->
	<?php endforeach; ?>
<?php else: ?>
	<div class="no-data"><p>記事がありません。</p></div>
<?php endif; ?>

<!-- pagination -->
<?php $this->BcBaser->pagination('simple'); ?>
</div><!-- /blog-default -->
