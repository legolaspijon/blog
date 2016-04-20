
<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="../templates/css/style.css">
    </head>
    <body>
        <header>
            <?php if(!LOGIN): ?>     
            <div id="register"><a href="/register">Регистрация</a>
                 <strong>|</strong> <a href="/login">Вход</a></div>
            <?php endif; ?>
            
            <?php if(LOGIN): ?>
            <div id="register"><a href="/logout">Выход</a></div>
            <?php endif; ?>
            <div id="logo"><a href="/"><h1>BLOG</h1></a></div>
             
        </header>
        