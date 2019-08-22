<?php

if (isset($_GET['page'])) $page = $_GET['page'];
else $page = 1;

$data = json_decode(file_get_contents('data.json'));

$max_page = ceil(count($data) / 5);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<ul>
    <?php for ($i = ($page - 1) * 5; $i < $page * 5; $i++) :
        if (!isset($data[$i])) continue;
        ?>
    <li>
        id: <?=$data[$i]->id?><br>
        age: <?=$data[$i]->age?><br>
        name: <?=$data[$i]->name?><br>
        gender: <?=$data[$i]->gender?><br>
        company: <?=$data[$i]->company?><br>
        email: <?=$data[$i]->email?><br>
        phone: <?=$data[$i]->phone?><br>
        address: <?=$data[$i]->address?><br>
    </li>
    <?php endfor; ?>
</ul>

<div class="pagination">
    <a href="?page=<?=$page - 5 <= 0 ? 1 : $page - 5; ?>" class="button">&laquo;</a>
    <div class="nav">
        <?php for ($i = $page - 3 <= 0 ? 1 : ($page + 2 >= $max_page ? $max_page - 4 : $page - 2); $i < ($page - 3 <= 0 ? 6 : ($page + 2 >= $max_page ? $max_page + 1 : $page + 3)); $i++) : ?>
        <a href="?page=<?=$i?>" <?=$page == $i ? 'class="active"' : ''?>><?=$i?></a>
        <?php endfor; ?>
    </div>
    <a href="?page=<?=$page + 5 >= $max_page ? $max_page : $page + 5?>" class="button">&raquo;</a>
</div>

</body>
</html>
