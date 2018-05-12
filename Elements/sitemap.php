<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] サイトマップ
 * 
 * カテゴリの階層構造を表現する為、再帰呼び出しを行う
 * $this->BcBaser->sitemap() で呼び出す
 * 
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
if (!isset($recursive)) {
	$recursive = 1;
}
$prefix = '';
if (Configure::read('BcRequest.agent')) {
	$prefix = '/' . Configure::read('BcRequest.agentAlias');
}
?>
<ul class="sitemap section ul-level-<?php echo $recursive ?>">
	<?php if (isset($pageList['pages'])): ?>
		<?php foreach ($pageList['pages'] as $page): ?>
			<?php if ($page['Page']['title']): ?>
				<li class="sitemap-category li-level-<?php echo $recursive ?>"><?php $this->BcBaser->link($page['Page']['title'], $prefix . $page['Page']['url']) ?></li>
			<?php endif ?>
		<?php endforeach; ?>
	<?php endif ?>
	<?php if (isset($pageList['pageCategories'])): ?>
		<?php foreach ($pageList['pageCategories'] as $pageCategories): ?>
			<li class="sitemap-page li-level-<?php echo $recursive ?>">
				<?php if (!empty($pageCategories['PageCategory']['url'])): ?>
					<?php //$this->BcBaser->link($pageCategories['PageCategory']['title'], $prefix . $pageCategories['PageCategory']['url']) ?>
					<?php echo $pageCategories['PageCategory']['title'] ?>
				<?php else: ?>
					<?php if (isset($pageCategories['children'])): ?>
						<?php echo $pageCategories['PageCategory']['title'] ?>
					<?php endif ?>
				<?php endif ?>
				<?php if (isset($pageCategories['children'])): ?>
					<?php $this->BcBaser->element('sitemap', array('pageList' => $pageCategories['children'], 'recursive' => $recursive + 1)) ?>
				<?php endif ?>
			</li>
		<?php endforeach ?>
	<?php endif ?>
</ul>