<?php
    // 直リンクされた場合contact.phpにリダイレクト
    if($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location:contact.php");
        exit();
    }

    // フォームから送信されたデータを各変数に格納
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message  = $_POST["message"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div id="contact">
        <!-- お問合せフォーム画面 -->
        <div class="wrapper">
            <h2 class="page-title">確認画面</h2>
            <p class="confirm-text">お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <form action="contact/thanks.php" method="post">
                <div class="form-list">
                    <label for="name">名前： <?php echo $name; ?></label>
                </div>
                <div class="form-list">
                    <label for="email">メールアドレス：<?php echo $email; ?></label>
                </div>
                <div class="form-list">
                    <label for="message">お問い合わせ内容</label>
                    <p><?php echo $message; ?></p>
                </div>
                <input type="button" onclick='history.back()' value="修正する">
                <input type="submit" class="button" value="送信">
                <!-- 次の画面への引き継ぎ情報 -->
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="message" value="<?php echo $message;?>">
            </form>
        </div>
    </div>
</body>
</html>