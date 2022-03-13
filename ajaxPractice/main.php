<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <script src="./jquery-3.6.0.js"></script>
    <script src="./practice.js"></script>
</head>

<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo '<div>';
        echo '<label for="name">テキスト', $i, ':</label>';
        echo '<input type="text" id="text', $i, '" name="text', $i, '">';
        echo '<label for="checkbox', $i, '">';
        echo '<input type="checkbox" id="checkbox', $i, '">使用する</label>';
        echo '</div>';
    }
    ?>
    <br>
    <div class="btnGroup">
        <input type="button" onclick="OutputData()" value="登録">
        <input type="button" onclick="ClearInputInfo()" value="テキストボックスクリア">
    </div>
</body>

</html>