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
    <h1>アカウント登録画面</h1>
    <form class="regist" method="post" action="regist_confirm.php">
        <div>
            <label>名前(姓)</label>
            <input type="text" class="text" size="35"
            maxlength="10" name="family_name"
            pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*">
        </div>
        <div>
        <label>名前(名)</label>
        <input type="text" class="text" size="35"
        maxlength="10" name="last_name"
        pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*">
        </div>
        <div>
        <label>カナ(姓)</label>
        <input type="text" class="text" size="35"
        maxlength="10" name="family_name_kana"
        pattern="[\u30A1-\u30FF]*">
        </div>
        <div>
        <label>カナ(名)</label>
        <input type="text" class="text" size="35"
        maxlength="10" name="last_name_kana"
        pattern="[\u30A1-\u30FF]*">
        </div>
    </form>
    <footer>
        Copyright D.I.works D.I.blog is the one which provides A to Z about programming
    </footer>
    </body>
</html>