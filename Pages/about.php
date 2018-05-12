<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('会社案内') ?>
<?php $this->BcBaser->setDescription('会社案内ページ') ?>
<?php $this->BcBaser->setPageEditLink(2) ?>
<!-- BaserPageTagEnd -->

<h2 class="contents-head">会社案内</h2>

<h3 class="contents-head">会社データ</h3>

<div class="section">
<table cellpadding="0" cellspacing="0" class="row-table-01">
	<tbody>
		<tr>
			<th width="150">会社名</th>
			<td>baserCMS inc. [デモ]</td>
		</tr>
		<tr>
			<th>設立</th>
			<td>2009年11月</td>
		</tr>
		<tr>
			<th>所在地</th>
			<td>福岡県福岡市博多区博多駅前（ダミー）</td>
		</tr>
		<tr>
			<th>事業内容</th>
			<td>インターネットサービス業（ダミー）<br />
			WEBサイト制作事業（ダミー）<br />
			WEBシステム開発事業（ダミー）</td>
		</tr>
	</tbody>
</table>
</div>

<h3 class="contents-head">アクセスマップ</h3>

<div class="section"><?php $this->BcBaser->element("googlemaps", array("width" => "100%")) ?></div>
