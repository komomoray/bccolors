<?php
/**
 * トップページ
 */
?>
<?php $this->BcBaser->flash() ?>

<div id="TopContents" >
    <div id="Information" class="wrap clearfix">
        <h2>INFORMATION</h2>
        <section id="News" class="feed">
            <h3><?php $this->BcBaser->link('NEWS', '/news/') ?></h3>
            <?php $this->BcBaser->blogPosts('news', 3) ?>
        </section><!-- /#News -->

        <section id="Blog" class="feed">
            <h3><?php $this->BcBaser->link('BLOG', '/weblog/') ?></h3>
            <?php $this->BcBaser->blogPosts('weblog', 3) ?>
        </section><!-- /#Blog -->
    </div><!-- /#Information -->

    <?php $this->BcBaser->content() ?>

    <div id="Works" class="wrap clearfix">
        <h2><?php $this->BcBaser->link('WORKS', '/works/') ?></h2>
        <div id="WorksWrap">
            <?php $this->BcBaser->blogPosts('works', 12) ?>
        </div>
    </div><!-- /#Works -->
</div>