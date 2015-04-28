
<html>
<head><title> </title>
    <link href="css/main.css" rel="stylesheet" type="""text/css"/>
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
        <a href="index.php?ctrl=News/selectArticle&id_art=
        <?php echo $this->data['news']['id_art']; ?>">Редактировать</a>|
        <a href="index.php?ctrl=News/deleteArticle&id_art=
        <?php echo $this->data['news']['id_art'];?>">
            Удалить</a>
    </div>
    <div id="all_news">
        <div>
                <div id="view_art">
                    <div id="title_art"><?php echo $news['title'] ?></div>
                    <div id="content_art"><?php echo $news['content'] ?></div>
                </div>
        </div>
    </div>
</div><!--end wrapper -->
</body>
</html>


