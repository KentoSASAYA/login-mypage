<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])){
    header("Location: login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>

        <main>
            <div class="box">
                <div class="nakami">
                    <h2>会員情報</h2>
                    <div class="hello"><?php echo "こんにちは！　".$_SESSION['name']."さん"; ?></div>
                    <div class="left">
                        <div class="imgbox"><img src="<?php echo $_SESSION['picture']; ?>"></div>
                    </div>
                    <form method="post" action="mypage_update.php">
                    <div class="right">
                        <label>氏名：</label><input type="text" value="<?php echo $_SESSION['name']; ?>" name="name" size="45">
                        <label>メール：</label><input type="text" value="<?php echo $_SESSION['mail']; ?>" name="mail" size="45">
                        <label>パスワード：</label><input type="text" value="<?php echo $_SESSION['password']; ?>" name="password" size="45">
                    </div>
                    <div class="comments">
                            <textarea rows="3" cols="75" name="comments"><?php echo $_SESSION['comments'] ?></textarea>
                    </div>
                    <div class="hensyu">
                        <input type="submit" class="submit" value="この内容に変更する">
                    </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>© 2018 InterNous.inc. All rights reserved</footer>

    </body>
</html>