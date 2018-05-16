<?php
/**
 * サイドバー
 */
?>

<?php $this->BcBaser->widgetArea() ?>

<!--FB-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.0&autoLogAppEvents=1';
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/basercms/" data-tabs="timeline" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/basercms/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/basercms/">baserCMS</a></blockquote></div>
<!--FB_END-->
