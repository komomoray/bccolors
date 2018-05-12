<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] 記事一覧
 *
 * BaserHelper::blogPosts( コンテンツ名, 件数 ) で呼び出す
 * （例）<?php $this->BcBaser->blogPosts('news', 3) ?>
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.blog.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>
<?php if ($posts): ?>
	<ul id="WorksImage">
		<?php foreach ($posts as $key => $post): ?>
			<?php $class = array('clearfix', 'post-' . ($key + 1)) ?>
			<?php if ($this->BcArray->first($posts, $key)): ?>
				<?php $class[] = 'first' ?>
			<?php elseif ($this->BcArray->last($posts, $key)): ?>
				<?php $class[] = 'last' ?>
			<?php endif ?>
			<li class="<?php echo implode(' ', $class) ?>">
				<div class="eye-catch">
				<?php //$this->Blog->eyeCatch($post) ?>
				<!--<?php $uri = $this->BcBaser->getRoot().$post['BlogContent']['name'].'/archives/'.$post['BlogPost']['no']; ?>
				<a href="<?php echo $uri ?>">
						<?php //$this->Blog->eyeCatch($post, array('link'=>false)) ?>
						<?php //$this->Blog->eyeCatch($post, array('noimage'=>'/theme/bccolors/img/blog/works/noimage.png')) ?>
				</a>-->
				<?php //$eyeCatch = $this->BcBaser->getRoot().'files/blog/works/blog_posts/'.$post['BlogPost']['eye_catch'] ?>
				<?php $eyeCatch = '/files/blog/works/blog_posts/'.$post['BlogPost']['eye_catch'] ?>
				<?php $this->BcBaser->img($eyeCatch, array('url'=> array('admin'=>false, 'plugin'=>'', 'controller'=>'works', 'action'=>'archives', $post['BlogPost']['no']))) ?>
				<?php //$this->Blog->eyeCatch($post, array('noimage'=>'/theme/bccolors/img/blog/works/noimage.png')) ?>
				</div>
				<h3><?php $this->Blog->postTitle($post) ?></h3>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php else: ?>
	<p class="no-data">記事がありません</p>
<?php endif ?>
