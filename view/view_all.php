
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
        <a href="">Главная </a>|
        <a href="">Статьи </a>|
        <a href="">Что новенького </a>|
        <a href="">Зачем живем </a>|
        <a href="">Прочее </a>
    </div>
<hr>
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

