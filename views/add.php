<?php require_once ROOT.'/views/layouts/header.php'; ?>
<div id="status"><center><?php echo $status; ?><a href="/"> На главную</a></center></div>

<center><h1>Новая запись</h1></center>
    <div id="add_new">
<form action="#" method="post">
    Заголовок: <input type="text" name="title"><br><br>
    краткое описание: <input type="text" name="discription"><br><br>
    Текст: <textarea name="text"></textarea><br>
   
   <center><input type="submit" name="submit"><br></center>
</form>
    </div>