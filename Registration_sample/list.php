<?php
mb_internal_encoding("utf8");
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
try{$pdo = new PDO("mysql:dbname=programingexe01;host=localhost;",
               "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $stmt = $pdo->query("SELECT * FROM userregistration ORDER BY id ASC");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
catch(PDOException $e){
     echo "エラー：" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
            <li><a href = "http://localhost/Registration_sample/list.php">アカウント一覧</a></li>
        </ul>
    </header>
    <h1>アカウント一覧画面</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>名前(姓)</th>
                <th>名前(名)</th>
                <th>カナ(姓)</th>
                <th>カナ(名)</th>
                <th>メールアドレス</th>
                <th>性別</th>
            </tr>
            <?php foreach($rows as $row):?>
                <tr>
                    <td><?= h($row['id'])?></td>
                    <td><?= h($row['family_name'])?></td>
                    <td><?= h($row['last_name'])?></td>
                    <td><?= h($row['family_name_kana'])?></td>
                    <td><?= h($row['last_name_kana'])?></td>
                    <td><?= h($row['mail'])?></td>
                    <td><?= h($row['gender']);
                            if($row['gender']==0){
                                echo "男";
                            }elseif($row['gender']==1){
                                 echo "女";
                            }?>
                </tr>
            <?php endforeach; ?>
        </table>
    <footer>
        Copyright D.I.works D.I.blog is the one which provides A to Z about programming
    </footer>
    </body>
</html>