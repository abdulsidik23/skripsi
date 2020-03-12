<?php
foreach ($chats as $c) {
	?>
<div class="col-md-12" style="border-bottom: 1px solid silver">
	<div class="col-md-4"><b><?=$c->user_kirim?></b></div>
	<div class="col-md-8"><span style='font-size:8px'><?=$c->created_at?></span>
	<br/>
	<?=$c->isi?>

	</div>
</div>
<?php
} ?>