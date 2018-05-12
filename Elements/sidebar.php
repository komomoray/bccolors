<?php
/**
 * sidebox
 */
?>

<?php $this->BcBaser->widgetArea() ?>

	<!--FB-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="fb-like-box" data-href="http://www.facebook.com/basercms" data-height="300" data-width="100%" data-show-faces="true" data-stream="false" data-border-color="#DDDDDD" data-header="false" style="background-color:#fff;"></div>
	<!--FB_END-->