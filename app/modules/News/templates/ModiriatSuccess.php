<table width="761" height="62"  style="margin:33px 3px 400px 270px;float:left;font-family:'Comic Sans MS', cursive;font-size:15px;color:#353231;">
  <tr>
    <td width="104">Edit</td>
    <td width="95">Delete</td>
    <td width="93">Date</td>
    <td width="116">Title</td>
    <td width="106">Category</td>
    <td width="27">Id</td>
  </tr>
  <tr>
  <?php foreach ($t['news'] as $t ):?>
    <td><a href="<?php echo $ro->gen('news.edit',array('id' => $t['Id']))?>">Edit</a></td>
    <td><a href="<?php echo $ro->gen('news.delete',array('id' => $t['Id']))?>">Delete</a></td>
    <td><?php echo $t['Date']?></td>
    <td><?php echo $t['Name']?></td>
    <td>&nbsp;</td>
    <td><?php echo $t['Id']?></td>
  </tr>
  <?php endforeach;?>
</table>
