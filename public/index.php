<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新元号「令和」に便乗しているドメインの一覧</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: pinfo
 * Date: 2019/04/01
 * Time: 13:01
 */

$domains = [
    'reiwa.co' => 'Wikipediaページ「令和」へのリンク',
    '令和.org' => '発表時の官房長官の写真',
    '令和.tk' => '発表時の官房長官の写真',
    'reiwa.page' => '発表時の官房長官の写真',
];

?>
<ul>
    <?php foreach ($domains as $domain => $disc): ?>
    <li><a href="http://<?php echo $domain ?>"><?php echo $domain ?></a> <?php echo $disc ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
