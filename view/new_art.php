
<html>
<head><title> </title>
    <link href="../css/main.css" rel="stylesheet" type="""text/css"/>
</head>
<body>
<div id="wrapper">
    <div id="cap">

    </div>
    <hr>
    <div id="menu">
        <a href="index.php">Главная </a>|
        <a href="index.php?ctrl=News/getAll">Статьи </a>|
        <a href="">Что новенького </a>|
        <a href="">Зачем живем </a>|
        <a href="">Прочее </a>
    </div>
    <hr>
    <div id="edit">
        <a href="">Редактировать</a>|
        <a href="">Удалить</a>
    </div>
    <div id="new_article">
        <form action="../index.php?ctrl=News/addArticle" method="post" >
            <input type="text" name="title" id="new_title"/>
            <textarea name="content" id="new_content"></textarea>
            <input type="submit" value="Добавить"id="submit_new" />
        </form>
    </div>
</div><!--end wrapper -->
</body>
</html>

