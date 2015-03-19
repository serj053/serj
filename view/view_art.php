
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
        <a href="view/new_art.php">Вставить статью</a>|
        <a href="">Редактировать</a>|
        <a href="">Удалить</a>
    </div>
    <div id="all_news">
        <div>
                <div id="string">
                    <span id="title"><?php echo $this->data['news']['title'] ?></span>
                    <span id="content"><?php echo $this->data['news']['content'] ?></span>
                </div>
        </div>
    </div>
</div><!--end wrapper -->
</body>
</html>


