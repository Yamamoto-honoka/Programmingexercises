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
            pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"
            required>
        </div>
        <div>
            <label>名前(名)</label>
            <input type="text" class="text" size="35"
            maxlength="10" name="last_name"
            pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"
            required>
        </div>
        <div>
            <label>カナ(姓)</label>
            <input type="text" class="text" size="35"
            maxlength="10" name="family_name_kana"
            pattern="[\u30A1-\u30FF]*"
            required>
        </div>
        <div>
            <label>カナ(名)</label>
            <input type="text" class="text" size="35"
            maxlength="10" name="last_name_kana"
            pattern="[\u30A1-\u30FF]*"
            required>
        </div>
        <div>
            <label>メールアドレス</label>
            <input type="text" class="text" size="35"
            maxlength="100" name="mail"
            pattern="^[a-zA-Z0-9-]+@[a-zA-Z0-9-]+[a-zA-Z-]{2,}$"
            required>
        </div>
        <div>
            <label>パスワード</label>
            <input type="password" class="text" size="35"
            maxlength="100" name="password"
            pattern="^[0-9A-Za-z]+$"
            required>
        </div>
        <div>
            <label>性別</label>
            <input type="radio" name="gender" value="0"
            checked>男
            <input type="radio" name="gender" value="1">
            女
        </div>
        <div>
            <label>郵便番号</label>
            <input type="text" class="text" size="35"
            maxlength="7" name="postal_code"
            pattern="^[0-9]+$"
            required>
        </div>
        <div>
        <label>住所(都道府県)</label>
            <select name="prefecture">
                <option value="" selected></option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
        </div>
        <div>
            <label>住所(市区町村)</label>
            <input type="text" class="text" size="35"
            maxlength="10" name="address_1"
            pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"
            required>
        </div>
        <div>
            <label>住所(番地)</label>
            <input type="text" class="text" size="35"
            maxlength="100" name="address_2"
            pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"
            required>
        </div>
        <div>
            <label>アカウント権限</label>
                <select name="authority">
                    <option value="0" selected>一般</option>
                    <option value="1">管理者</option>
                </select>
        </div>
        <div>
            <button onclick="http://localhost/Registration_sample/regist_confirm.php">確認する</button>
        </div>
    </form>
    <footer>
        Copyright D.I.works D.I.blog is the one which provides A to Z about programming
    </footer>
    </body>
</html>