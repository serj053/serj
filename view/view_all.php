
<html>
<head><title> </title>

</head>
<body>
    <table border="1">
        <?php foreach($allNews as $v):?>

                <tr>   <td><?php echo $v['title'] ?></td>
                <td><?php echo $v['content'] ?></td></tr>

        <?php endforeach;?>
    </table>

</body>
</html>

