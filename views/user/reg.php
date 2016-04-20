    <?php require_once ROOT.'/views/layouts/header.php'; ?>

    <center><h4><?php if(isset($valid)) echo $valid; ?></h4></center>
    <?php if(isset($error) && is_array($error)): ?>
    <ul id="error">
    <?php foreach($error as $e): ?>
    <li><?php echo $e; ?></li>
    <?php endforeach; ?>
    <?php endif; ?>
    </ul>
    <center><h1>РЕГИСТРАЦИЯ</h1></center>
    <div id="register_form">
        <form action="#" method="post"><br><br>
           имя: <input type="text" name="name"><br><br>
           пароль: <input type="password" name="password"><br><br>
           <center><input type="submit" name="submit"></center>
        </form>
    </div>
