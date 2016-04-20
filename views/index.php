        
<?php require 'layouts/header.php'; ?>
<?php if(isset($_GET['new'])) echo $_GET['new']; ?>
        <?php if(LOGIN): ?>
            <div id="button_add"><a href="/add">Добавить Новость</a></div>
        <?php endif; ?>
        <?php if($listNew != false):?>
        <?php foreach ($listNew as $row): ?>

        

        <div id="content">
            <div id="news"><h2><a href="index/<?=$row['id']?>"> <?=$row['title'];?></a></h2><br>
                <p><?=$row['discription']?></p>
                <hr>
            <?php if(LOGIN): ?>
                <div><a href="/delete/<?=$row['id']?>">Удалить запись</a>
                | <a href="/change/<?=$row['id']?>">Изменить</a></div>
            <?php endif; ?>
            </div>
        </div>



        <?php endforeach;?>
<?php endif; ?>


