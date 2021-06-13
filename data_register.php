<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data_register</title>
</head>
<body>
    <h1>EURO2020</h1>
    <h2>各グループの1位通過国はどこ？</h2>
    <form action="csv_write.php" method="post">
    <h3>Group A</h3>
        <input type="radio" name="nationA" value="トルコ" id="トルコ" required>
            <label for="トルコ">トルコ</label>
        <input type="radio" name="nationA" value="イタリア" id="イタリア">
            <label for="イタリア">イタリア</label>
        <input type="radio" name="nationA" value="ウェールズ" id="ウェールズ">
            <label for="ウェールズ">ウェールズ</label>
        <input type="radio" name="nationA" value="スイス" id="スイス">
            <label for="スイス">スイス</label>
    <h3>Group B</h3>
        <input type="radio" name="nationB" value="デンマーク" id="デンマーク" required>
            <label for="デンマーク">デンマーク</label>
        <input type="radio" name="nationB" value="フィンランド" id="フィンランド">
            <label for="フィンランド">フィンランド</label>
        <input type="radio" name="nationB" value="ベルギー" id="ベルギー">
            <label for="ベルギー">ベルギー</label>
        <input type="radio" name="nationB" value="ロシア" id="ロシア">
            <label for="ロシア">ロシア</label>
    <h3>Group C</h3>
        <input type="radio" name="nationC" value="オランダ" id="オランダ" required>
            <label for="オランダ">オランダ</label>
        <input type="radio" name="nationC" value="ウクライナ" id="ウクライナ">
            <label for="ウクライナ">ウクライナ</label>
        <input type="radio" name="nationC" value="オーストリア" id="オーストリア">
            <label for="オーストリア">オーストリア</label>
        <input type="radio" name="nationC" value="北マケドニア" id="北マケドニア">
            <label for="北マケドニア">北マケドニア</label>
    <h3>Group D</h3>
        <input type="radio" name="nationD" value="イングランド" id="イングランド" required>
            <label for="イングランド">イングランド</label>
        <input type="radio" name="nationD" value="クロアチア" id="クロアチア">
            <label for="クロアチア">クロアチア</label>
        <input type="radio" name="nationD" value="スコットランド" id="スコットランド">
            <label for="スコットランド">スコットランド</label>
        <input type="radio" name="nationD" value="チェコ" id="チェコ">
            <label for="チェコ">チェコ</label>
    <h3>Group E</h3>
        <input type="radio" name="nationE" value="スペイン" id="スペイン" required>
            <label for="スペイン">スペイン</label>
        <input type="radio" name="nationE" value="スウェーデン" id="スウェーデン">
            <label for="スウェーデン">スウェーデン</label>
        <input type="radio" name="nationE" value="ポーランド" id="ポーランド">
            <label for="ポーランド">ポーランド</label>
        <input type="radio" name="nationE" value="スロバキア" id="スロバキア">
            <label for="スロバキア">スロバキア</label>
    <h3>Group F</h3>
        <input type="radio" name="nationF" value="ハンガリー" id="ハンガリー" required>
            <label for="ハンガリー">ハンガリー</label>
        <input type="radio" name="nationF" value="ポルトガル" id="ポルトガル">
            <label for="ポルトガル">ポルトガル</label>
        <input type="radio" name="nationF" value="フランス" id="フランス">
            <label for="フランス">フランス</label>
        <input type="radio" name="nationF" value="ドイツ" id="ドイツ">
            <label for="ドイツ">ドイツ</label>
    <br><input type="submit" value="send">
    </form>
    <ul>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>
</html>