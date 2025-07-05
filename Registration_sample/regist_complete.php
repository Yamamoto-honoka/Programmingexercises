<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=programingexe01;host=localhost;",
               "root","");
$pdo ->exec("insert into userregistration(
family_name)
values(
'".$_POST['family_name']."');
");
var_dump(['family_name']);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel = "stylesheet" type = "text/css" href = "style3.css">
    </head>
    <body>
    <div class="logo"><img src="diblog_logo.jpg"></div>
    <header>
        <ul>
            <li><a href="index.html">トップ</a></li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
            <li><a href = "http://localhost/Registration_sample/regist.php">アカウント登録</a></li>
        </ul>
    </header>
    <h1>アカウント登録完了画面</h1>
        <div class="complete">
            <p><b>登録完了しました。</b></p>
        <button onclick="location.href='./index.html'">TOPページへ戻る</button>
        </div>
    <footer>
        Copyright D.I.works D.I.blog is the one which provides A to Z about programming
    </footer>
    </body>
</html>