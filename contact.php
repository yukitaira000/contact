<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せフォーム</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div id="contact">
        <!-- お問合せフォーム画面 -->
        <div class="wrapper">
            <h2 class="page-title">Contact</h2>
            <form action="contact/confirm.php" method="post">
                <div class="form-list">
                    <label for="name">名前<span class="required">必須</span></label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-list">
                    <label for="email">メールアドレス<span class="required">必須</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-list">
                    <label for="message">お問い合わせ内容<span class="required">必須</span></label>
                    <textarea name="message" id="message" required></textarea>
                </div>
    
                <input type="submit" name="submit" class="button" value="確認画面へ">
            </form>
        </div>
    </div>
</body>
</html>