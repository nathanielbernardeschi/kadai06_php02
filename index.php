<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>bookmarks</legend>
                <label>タイトル<input type="text" name="name"></label><br>
                <label>アドレス<input type="text" name="email"></label><br>
                <label>グループ<select name="tag" id="tag">
                    <option value="">--Please choose an option--</option>
                    <option value="php">PHP</option>
                    <option value="js">JavaScript</option>
                    <option value="other">Other</option>
                </select></label><br>
                <label>コメント<textArea name="comment" rows="1" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
