<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>プログラミングに役立つ 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");

?>
    <div class ='logo'><img src="4eachblog_logo.jpg"></div>
    <!--ヘッダー-->
    <header>
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4ecachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
    </header>

        <!--メイン-->
        <main>
            <div class='main-content'>

                <!--左側-->
             <div class='left'>
                    <h1>プログラミングに役立つ掲示板</h1>

                <form action="insert.php" method="post">
                    <h2>入力フォーム</h2>
                    <div>
                        <p>ハンドルネーム</p>
                        <input type="text" name="handlename" class='text' size ='35'>
                    </div>

                    <div>
                        <p>タイトルネーム</p>
                        <input type="text" name="title" class='text' size ='35'>
                    </div>

                    <div>
                        <p>コメント</p>
                        <textarea name="comments" cols="60" rows="10"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>

<?php

            while ($row = $stmt->fetch()){

                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class= 'handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
            }
?>
</div>
</div>


                <!--右側-->
                <div class='right'>
                    <div class='ninkinokiji'>
                        <h2>人気の記事</h2>
                        <ul>
                            <li>PHPオススメ本</li>
                            <li>PHP MyAdminの使い方</li>
                            <li>今人気のエディタ Top5</li>
                            <li>HTMLの基礎</li>
                        </ul>
                    </div>

                    <div class='osusumelink'>
                        <h2>オススメリンク</h2>
                        <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Brakcetsのダウンロード</li>
                        </ul>
                    </div>

                    <div class='kategori'>
                        <h2>カテゴリ</h2>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                        </ul>
                    </div>
            </div>
        </main>


        <!--フッター-->
        <footer>
            copyright（C）internous | 4each blog the wiich provides A to Z about programming.
        </footer>
</body>
</html>