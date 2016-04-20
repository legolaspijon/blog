<?php require_once ROOT.'/views/layouts/header.php'; ?>
<div id="status"><center><a href="/"> На главную</a></center></div>
<center><h1>Изменение новости</h1></center>
    <div id="add_new">
<form action="#" method="post">
    Заголовок: <input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>
    краткое описание: <input type="text" name="discription" value="<?php echo $row['discription']; ?>"><br><br>
    Текст: <textarea name="text"><?php echo $row['text']; ?></textarea><br>
   
   <center><input type="submit" name="submit"><br></center>
</form>
    </div>