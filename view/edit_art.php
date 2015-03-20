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
        <a href="">Удалить</a>
    </div>
    <div id="new_article">
        <form action="index.php?ctrl=News/updateArticle&id_art=
        <?php echo $_GET['id_art'] ;  ?>" method="post" >
            <input type="text" name="title"
                   value="<?php echo $this->data['news']['title'] ?>"/>
            <textarea name="content" id="new_content">
                <?php echo $this->data['news']['content'];?>
            </textarea>
            <input type="submit" value="Изменить" />
        </form>
    </div>
</div><!--end wrapper -->
</body>
</html>

