<!DOCTYPE html>
<html>
    <head>
<title>文書のタイトル</title>
    </head>
<body>

<table>
    <tr><th>
            <?=$this->Paginator->sort('id')?>
        </th>
        <th>
            <?=$this->Paginator->sort('name')?>
        </th>
    </tr>

<?php foreach($data->toArray() as $obj): ?>
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
    
    <div class="paginator">
        <ul class="pagination">
            
            <?=$this->Paginator->first('first')?>
            <?=$this->Paginator->prev('perv')?>
            <?=$this->Paginator->next('next')?>
            <?=$this->Paginator->last('last')?>
            
            
            
        </ul>
        
        
        
    </div>
   
    
    
    
</body>   
</html>