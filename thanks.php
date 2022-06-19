<?php
    // 直リンクされた場合contact.phpにリダイレクト
    if($_SERVER["REQUEST_METHOD"] != "POST") {
        header("LOCATION: contact.php");
        exit();
    }

    //メールの日本語設定
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    //送信先アドレス
    $to = $_POST['email'];
    //メール件名
    $subject = "お問い合わせありがとうございます。";

    // メッセージを格納する
    $message = <<< EOM
    お問い合わせありがとうございます。

    以下の内容で承りました。
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
    【 お名前 】
    {$_POST["name"]}

    【 メール 】
    {$_POST["email"]}

    【 お問い合わせ内容 】
    {$_POST["message"]}

    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

    EOM;
    //送信元
    $headers = "From: support@example.com";
    //メール送信
    mb_send_mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div id="contact">
        <div class="wrapper">
            <h2>お問い合わせ完了</h2>
            <div class="thanks-msg">
                <p>
                    お問い合わせありがとうございました。<br>
                    後ほど、担当者よりご連絡をさせていただきます。<br>
                </p>
            </div>
            <p><a href="contact.php">お問い合わせトップへ</p>
        </div>
    </div>
</body>
</html>