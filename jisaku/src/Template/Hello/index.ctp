<!DOCTYPE html>
<html>
    <head>
<title>文書のタイトル</title>
    </head>
<body>

<table>
    <tr><th>id</th><th>name</th></tr>

<?php foreach($data as $obj): ?>
    <?='<tr><td>'?>
    <a href="  <?= $this->Url->build(['controller'=>'Hello', 'action'=>'edit']);   ?>?id=<?=$obj['id']?>  "><?=$obj['id']?></a>
    <?='</td><td>'?>
    <?=$obj['name'];?>
    <?='</td><tr>'?>
    
    
<?php endforeach;?>
</table>
<?= $this->Form->Create(null, ['controller'=>'Hello', 'action'=>'add']); ?>
<?=$this->Form->text('Hello.id')?> 
<?=$this->Form->text('Hello.name')?> 
<?=$this->Form->submit('soushin')?> 
    
<?= $this->Form->end() ?>    
    
    
    
    
    
</body>   
</html>