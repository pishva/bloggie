<br/>
<br/>
<form style="width:700px;float:left;margin-left:330px" action="<?php echo $ro->gen('news.create')?>" method="post" enctype="multipart/form-data">
		<input type="text" name="name" id="name"/>
        <label for="name">:موضوع </label>
		<br/>
		<br/>
     	<input type="text" name="category" id="category"/>

        <label for="name">:مجموعه </label>
        <br />
        <br />
		
		
		<label for="short_desc">توضیح کوتاه</label>
		<textarea rows="10" cols="30" name="short_desc" id="short_desc"></textarea>
		<br>
		<div >
        <input name="is_desc" type="checkbox" value="1" id="is_desc"/>
		<label  for="is_desc">ادامه مطلب ؟</label>
		</div>
		
		
		<div >
		<input type="text" name="prio" id="prio"/>
        <label for="prio">:اولویت</label>
		</div>
		<hr/>
		
		<label  for="desc">توضیح</label>
		<textarea rows="20" cols="50" name="desc" id="desc"></textarea>
	<br>
  	<button type="submit" name="sub" value="sub">Add Subject</button>

</form>
<script type="text/javascript">
	CKEDITOR.replace( 'short_desc' );
	CKEDITOR.replace( 'desc' );
</script>
<?php 

	$rq->appendAttribute('js', '/js/ckeditor/ckeditor.js');

	
	