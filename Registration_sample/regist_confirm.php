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
        </ul>
    </header>
    <h1>アカウント登録確認画面</h1>
        <div class="regist">
            <p>名前(姓)
            <?php echo $_POST['family_name'];?>
            </p>
            
            <p>名前(名)
            <?php echo $_POST['last_name'];?>
            </p>
            
            <p>カナ(姓)
            <?php echo $_POST['family_name_kana'];?>
            </p>
            
            <p>カナ(名)
            <?php echo $_POST['last_name_kana'];?>
            </p>
            
            <p>メールアドレス
            <?php echo $_POST['mail'];?>
            </p>
            
            <p>パスワード
            <?php echo $_POST['password'];?>
            </p>
            
            <p>性別
            <?php echo $_POST['gender'];?>
            </p>
            
            <p>郵便番号
            <?php echo $_POST['postal_code'];?>
            </p>
            
            <p>住所(都道府県)
            <?php echo $_POST['prefecture'];?>
            </p>
            
            <p>住所(市区町村)
            <?php echo $_POST['address_1'];?>
            </p>

            <p>住所(番地)
            <?php echo $_POST['address_2'];?>
            </p>
            
            <p>アカウント権限
            <?php echo $_POST['authority'];?>
            </p>


    <footer>
        Copyright D.I.works D.I.blog is the one which provides A to Z about programming
    </footer>
    </body>
</html>