<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員情報</title>
</head>
<body>
    <form action="form.php" method="post">
        <h2>登録が完了しました。</h2>
        <p>社員情報がデータベースに保存されました。</p>
        <input type="submit" value="戻る">
    </form>
</body>
</html>
























































<!-- <?php
// session_start();

// $name = isset($_SESSION['name']) ? $_SESSION['name'] : '名無し';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php基礎編</title>
</head>
<body>
    <h2><?php echo $name; ?>様、お問い合わせを承りました。</h2>
    <p>ありがとうございました。今後の参考にさせていただきます。</p>
    <button onclick="location.href='form.php'">戻る</button>

    <?php
    // $_SESSION = array();

    // session_destroy();
    ?>
</body>
</html> -->