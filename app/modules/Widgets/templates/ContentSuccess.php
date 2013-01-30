<?php foreach($t['news'] as $n):?>
<div class="post">
<div class="post_top">
<h2><?php echo $n['Name']?>||<?php echo $n['Category']?>||<?php echo $n['Auter']?></h2>
</div>
<div class="post_body">
<div class="text">
<?php echo $n['ShortDesc']?>
		<?php if ($n['IsDesc'] == 1):?><a href="<?php echo $ro->gen('',	array('id' => $n['Id']))?>">ادامه مطلب</a><?php endif;?>

</div>
</div>
<div class="post_bottom"></div>
</div>
<?php endforeach;?>