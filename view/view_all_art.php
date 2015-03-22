
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
        <a href="view/new_art.php">Вставить статью</a>
    </div>
    <div id="all_news">
        <div>
            <?php foreach($item as $v):?>
            <div id="string">
                <div id="title"><?php echo $v['title'] ?></div>
                <div id="content"><?php echo $v['content'] ?></div>
                <div id="read_farther">
                 <a href="index.php?ctrl=News/getArticle&id_art=<?php echo $v['id_art']; ?>">
                Читать далее</a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div><!--end wrapper -->
</body>
</html>

