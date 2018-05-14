<?php
/**
 * ブログレイアウト
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <?php $this->BcBaser->title() ?>
        <?php $this->BcBaser->metaDescription() ?>
        <?php $this->BcBaser->metaKeywords() ?>
        <?php $this->BcBaser->icon() ?>
        <?php $this->BcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>

        <!--[if lt IE 9]>
        <script src="js/IE9.js"></script>
        <script src="js/html5shiv-printshiv.js"></script>
        <![endif]-->

        <?php $this->BcBaser->css(array(
        'style',
        'page'
        )) ?>

        <?php $this->BcBaser->js(array(
        'jquery-1.7.2.min',
        'admin/functions',
        'jquery.startup',
        'jquery.socialbutton-1.9.1.min'
        )) ?>

        <?php $this->BcBaser->scripts() ?>
        <?php $this->BcBaser->element('google_analytics') ?>
    </head>
    
    <body id="<?php $this->BcBaser->contentsName(true) ?>">

        <?php $this->BcBaser->element('globalnavi') ?>

        <?php $this->BcBaser->header() ?>

        <?php if(!empty($this->Blog)): ?>
            <div id="TitleImage">
                <h2><?php $this->BcBaser->mainImage(array('all' => false, 'num' => 5, 'width' => 1000)) ?></h2>
            </div><!--TitleImage-->
        <?php endif ?>

        <div id="Breadcrumbs">
            <?php $this->BcBaser->element('crumbs'); ?>
        </div><!--Breadcrumbs-->

        <div class="content clearfix">
            <div id="Page">
                <div class="subpage">
                    <?php $this->BcBaser->flash() ?>
                    <?php $this->BcBaser->content() ?>
                    <?php $this->BcBaser->element('contents_navi') ?>
                </div>
            </div><!--Page-->

            <div id="Side">
                <?php $this->BcBaser->element('sidebar') ?>
            </div><!--Side-->
        </div><!--content-->

        <div id="TopLink"><?php $this->BcBaser->img('common/footer/btn_pagetop.png', array('url' => '#PageTop')); ?></div>

        <?php $this->BcBaser->footer() ?>
        <?php $this->BcBaser->func() ?>
    </body>
</html>
