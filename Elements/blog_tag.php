<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] タグ
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
<?php if (!empty($this->Blog->blogContent['tag_use'])): ?>
	<?php if (!empty($post['BlogTag'])) : ?>
		<span class="tag">タグ：<?php $this->Blog->tag($post) ?></span>
	<?php endif ?>
<?php endif ?>
