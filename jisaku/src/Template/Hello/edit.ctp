<!DOCTYPE html>
<html>
    <head>
<title>文書のタイトル</title>
    </head>
<body>
<?= $entity->id ?>
<br>
<?= $entity->name ?>

<?=  $this->Form->Create($entity, ['Controller'=>'Hello', 'action'=>'delete']);  ?>
<?= $this->Form->hidden('Delete.id',['value'=>$entity->id]);?>
<?= $this->Form->submit('削除');?>
<?= $this->Form->end();?>
<br><br>
<?=  $this->Form->Create($entity, ['Controller'=>'Hello', 'action'=>'update']);  ?>
<?= $this->Form->hidden('update.id',['value'=>$entity->id]);?>
<?= $this->Form->text('update.name');  ?>
<?= $this->Form->submit('更新');?>
<?= $this->Form->end();?>

</body>   
</html>

