<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員情報</title>
</head>
<body>
    <form action="confirm.php" method="post">
        <h2>社員情報入力フォーム</h2>
        <table>
            <tr>
                <td>社員名&emsp;&nbsp;<input type="text" name="employee_name"></td>
            </tr>
            <tr>
                <td>年齢&emsp;&emsp;&nbsp;<input type="text" name="employee_age" min="0" max="120"></td>
            </tr>
            <tr>
                <td>所属部署
                    <select size="1" name="department">
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>
</body>
</html>


























































<!-- <?php
// declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>php基礎編</title>
</head>
<body>
    <h2>お問い合わせ</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>お名前</td>
                <td>
                    <input type="text" name="user_name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>
                    <input type="text" name="user_email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" name="user_gender" value="男性" checked>男性
                    <input type="radio" name="user_gender" value="女性">女性
                    <input type="radio" name="user_gender" value="その他">その他
                </td>
            </tr>
            <tr>
                <td>お問い合わせ種別</td>
                <td>
                    <select name="category">
                        <option value="ご意見や感想">ご意見や感想</option>
                        <option value="不具合について">不具合について</option>
                        <option value="その他">その他</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td>      
                <textarea name="message" cols="30" rows="10"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>
    
        
</body>
</html> -->
