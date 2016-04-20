        <?php require 'layouts/header.php'; ?> 
        <div id='single_new_content'>
            <h1><?=$new['title']; ?></h1><br>
                <?=$new['text']; ?>
            <hr>
            <?php if(LOGIN): ?>
                <div id='func'><a href="/delete/<?=$new['id']?>">”далить запись</a>
                | <a href="/change/<?=$new['id']?>">»зменить</a></div>
            <?php endif; ?>
        </div>

