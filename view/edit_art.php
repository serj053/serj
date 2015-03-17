
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
        <a href="new_art.php">Вставить статью</a>|
        <a href="">Редактировать</a>|
        <a href="">Удалить</a>
    </div>
    <div id="all_news">
        <div>
            <?php foreach($this->data['item'] as $v):?>
                <div id="string">
                    <span id="title"><?php echo $v['title'] ?></span>
                    <span id="content"><?php echo $v['content'] ?></span>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div><!--end wrapper -->
</body>
</html>

