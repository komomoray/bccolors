<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ページナビゲーション
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
if (isset($this->getPrevLink) && isset($this->getNextLink)) {
	return;
}
?>

<div id="ContentsNavi">
	<?php $this->BcPage->prevLink('', array('arrow' => '< ')) ?>
	&nbsp;｜&nbsp;
	<?php $this->BcPage->nextLink('', array('arrow' => ' >')) ?>
</div>