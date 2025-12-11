<?php
$password=$_POST['password'];
$hashed_password = password_hash($password,PASSWORD_DEFAULT);
?>
<?php
mb_internal_encoding("utf8");
try{$pdo = new PDO("mysql:dbname=programingexe01;host=localhost;",
               "root","");
$pdo ->exec("insert into userregistration(
family_name,
last_name,
family_name_kana,
last_name_kana,
mail,
password,
gender,
postal_code,
prefecture,
address_1,
address_2,
authority)
values(
'".$_POST['family_name']."',
'".$_POST['last_name']."',
'".$_POST['family_name_kana']."',
'".$_POST['last_name_kana']."',
'".$_POST['mail']."',
'".$hashed_password."',
'".$_POST['gender']."',
'".$_POST['postal_code']."',
'".$_POST['prefecture']."',
'".$_POST['address_1']."',
'".$_POST['address_2']."',
'".$_POST['authority']."'
);
");
}
catch(PDOException $e{
    echo "エラーが発生したためアカウント登録ができません。";
}
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