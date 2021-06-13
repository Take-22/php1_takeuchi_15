<!DOCTYPE html>
<html lang="ja">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
//text.csvを変数に変換
$csv = "data/text.csv";

    // XSS(クロスサイトスクリプティング)対策の関数 || scriptの入ったコードをget/postに入れるとjsがそのまま起動してしまう
    function h($value){
        return htmlspecialchars($value,ENT_QUOTES);
    }

//text.csvを読み取り専用で開く
$fp = fopen($csv,"r");

//各国の投票数を定義
$Turkey = 0;
$Italy = 0;
$Wales = 0;
$Switzerland = 0;
$Denmark = 0;
$Finland = 0;
$Belgium = 0;
$Russia = 0;
$Netherlands = 0;
$Ukraine = 0;
$Austria = 0;
$NorthMacedonia = 0;
$England = 0;
$Croatia = 0;
$Scotland = 0;
$CzechRepublic = 0;
$Spain = 0;
$Sweden = 0;
$Poland = 0;
$Slovakia = 0;
$Hungary = 0;
$Portugal = 0;
$France = 0;
$Germany = 0;

//fgetcsvでファイルのデータを1行ずつ読み込む
while($data = fgetcsv($fp)){
    $output0 = $data[0]; //グループA
    if($output0 == "トルコ"){
        $Turkey ++;
    }
    if($output0 == "イタリア"){
        $Italy ++;
    }
    if($output0 == "ウェールズ"){
        $Wales ++;
    }
    if($output0 == "スイス"){
        $Switzerland ++;
    }
    $output1 = $data[1]; //グループB
    if($output1 == "デンマーク"){
        $Denmark ++;
    }
    if($output1 == "フィンランド"){
        $Finland ++;
    }
    if($output1 == "ベルギー"){
        $Belgium ++;
    }
    if($output1 == "ロシア"){
        $Russia ++;
    }
    $output2 = $data[2]; //グループC
    if($output2 == "オランダ"){
        $Netherlands ++;
    }
    if($output2 == "ウクライナ"){
        $Ukraine ++;
    }
    if($output2 == "オーストリア"){
        $Austria ++;
    }
    if($output2 == "北マケドニア"){
        $NorthMacedonia ++;
    }
    $output3 = $data[3]; //グループD
    if($output3 == "イングランド"){
        $England ++;
    }
    if($output3 == "クロアチア"){
        $Croatia ++;
    }
    if($output3 == "スコットランド"){
        $Scotland ++;
    }
    if($output3 == "チェコ"){
        $CzechRepublic ++;
    }
    $output4 = $data[4]; //グループE
    if($output4 == "スペイン"){
        $Spain ++;
    }
    if($output4 == "スウェーデン"){
        $Sweden ++;
    }
    if($output4 == "ポーランド"){
        $Poland ++;
    }
    if($output4 == "スロバキア"){
        $Slovakia ++;
    }
    $output5 = $data[5]; //グループF
    if($output5 == "ハンガリー"){
        $Hungary ++;
    }
    if($output5 == "ポルトガル"){
        $Portugal ++;
    }
    if($output5 == "フランス"){
        $France ++;
    }
    if($output5 == "ドイツ"){
        $Germany ++;
    }
}

//ファイルを閉じる
fclose($fp);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csv_read</title>
</head>
<body>
    <form action="csv_download.php">
        <button>csvダウンロード</button>
    </form>
    
    <div style="position:absolute; top:60px; left:10px; width:500px; height:400px;">
        <canvas id="myChart_A"></canvas>
    </div>
    <div style="position:absolute; top:60px; left:560px; width:500px; height:400px;">
        <canvas id="myChart_B"></canvas>
    </div>
    <div style="position:absolute; top:60px; left:1110px; width:500px; height:400px;">
        <canvas id="myChart_C"></canvas>
    </div>
    <div style="position:absolute; top:360px; left:10px; width:500px; height:400px;">
        <canvas id="myChart_D"></canvas>
    </div>
    <div style="position:absolute; top:360px; left:560px; width:500px; height:400px;">
        <canvas id="myChart_E"></canvas>
    </div>
    <div style="position:absolute; top:360px; left:1110px; width:500px; height:400px;">
        <canvas id="myChart_F"></canvas>
    </div>

    <!-- 最初に戻る -->
    <ul>
        <li><a href="index.php">戻る</a></li>
    </ul>
    <!-- js -->
    <script>
        //phpからjavascriptに変数を渡す
        let Turkey = <?= h($Turkey) ?>;
        let Italy = <?= h($Italy) ?>;
        let Wales = <?= h($Wales) ?>;
        let Switzerland = <?= h($Switzerland) ?>;

        let Denmark = <?= h($Denmark) ?>;
        let Finland = <?= h($Finland) ?>;
        let Belgium = <?= h($Belgium) ?>;
        let Russia = <?= h($Russia) ?>;

        let Netherlands = <?= h($Netherlands) ?>;
        let Ukraine = <?= h($Ukraine) ?>;
        let Austria = <?= h($Austria) ?>;
        let NorthMacedonia = <?= h($NorthMacedonia) ?>;

        let England = <?= h($England) ?>;
        let Croatia = <?= h($Croatia) ?>;
        let Scotland = <?= h($Scotland) ?>;
        let CzechRepublic = <?= h($CzechRepublic) ?>;

        let Spain = <?= h($Spain) ?>;
        let Sweden = <?= h($Sweden) ?>;
        let Poland = <?= h($Poland) ?>;
        let Slovakia = <?= h($Slovakia) ?>;

        let Hungary = <?= h($Hungary) ?>;
        let Portugal = <?= h($Portugal) ?>;
        let France = <?= h($France) ?>;
        let Germany = <?= h($Germany) ?>;
    </script>

    <!-- ////////////////Group A/////////////////// -->
    <script>
        // <block:setup:1>
        const labels = [
            'トルコ',
            'イタリア',
            'ウェールズ',
            'スイス',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Group A',
                data: [Turkey, Italy, Wales, Switzerland],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:[
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        // </block:setup>

        // <block:config:0>
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        // </block:config>
        module.exports = {
            actions:[],
            config: config,
        };
    </script>
      
    <script>
        // === include 'setup' then 'config' above ===
            var myChart_A = new Chart(
                document.getElementById('myChart_A'),
                config
            );
    </script>

    <!-- ////////////////Group B/////////////////// -->
    <script>
        // <block:setup:1>
        const labelsB = [
            'デンマーク',
            'フィンランド',
            'ベルギー',
            'ロシア',
        ];
        const dataB = {
            labels: labelsB,
            datasets: [{
                label: 'Group B',
                data: [Denmark, Finland, Belgium, Russia],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:[
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        // </block:setup>

        // <block:config:0>
        const configB = {
            type: 'bar',
            data: dataB,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        // </block:config>
        module.exports = {
            actions:[],
            config: configB,
        };
    </script>
      
    <script>
        // === include 'setup' then 'config' above ===
            var myChart_B = new Chart(
                document.getElementById('myChart_B'),
                configB
            );
    </script>

    <!-- ////////////////Group C/////////////////// -->
    <script>
        // <block:setup:1>
        const labelsC = [
            'オランダ',
            'ウクライナ',
            'オーストリア',
            '北マケドニア',
        ];
        const dataC = {
            labels: labelsC,
            datasets: [{
                label: 'Group C',
                data: [Netherlands, Ukraine, Austria, NorthMacedonia],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:[
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        // </block:setup>

        // <block:config:0>
        const configC = {
            type: 'bar',
            data: dataC,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        // </block:config>
        module.exports = {
            actions:[],
            config: configC,
        };
    </script>
      
    <script>
        // === include 'setup' then 'config' above ===
            var myChart_C = new Chart(
                document.getElementById('myChart_C'),
                configC
            );
    </script>

        <!-- ////////////////Group C/////////////////// -->
    <script>
        // <block:setup:1>
        const labelsC = [
            'オランダ',
            'ウクライナ',
            'オーストリア',
            '北マケドニア',
        ];
        const dataC = {
            labels: labelsC,
            datasets: [{
                label: 'Group C',
                data: [Netherlands, Ukraine, Austria, NorthMacedonia],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:[
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        // </block:setup>

        // <block:config:0>
        const configC = {
            type: 'bar',
            data: dataC,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        // </block:config>
        module.exports = {
            actions:[],
            config: configC,
        };
    </script>
      
    <script>
        // === include 'setup' then 'config' above ===
            var myChart_C = new Chart(
                document.getElementById('myChart_C'),
                configC
            );
    </script>

    <!-- ////////////////Group D/////////////////// -->
    <script>
        // <block:setup:1>
        const labelsD = [
            'イングランド',
            'クロアチア',
            'スコットランド',
            'チェコ',
        ];
        const dataD = {
            labels: labelsD,
            datasets: [{
                label: 'Group D',
                data: [England, Croatia, Scotland, CzechRepublic],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:[
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        // </block:setup>

        // <block:config:0>
        const configD = {
            type: 'bar',
            data: dataD,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        // </block:config>
        module.exports = {
            actions:[],
            config: configD,
        };
    </script>
      
    <script>
        // === include 'setup' then 'config' above ===
            var myChart_D = new Chart(
                document.getElementById('myChart_D'),
                configD
            );
    </script>

    <!-- ////////////////Group E/////////////////// -->
    <script>
        // <block:setup:1>
        const labelsE = [
            'スペイン',
            'スウェーデン',
            'ポーランド',
            'スロバキア',
        ];
        const dataE = {
            labels: labelsE,
            datasets: [{
                label: 'Group E',
                data: [Spain, Sweden, Poland, Slovakia],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:[
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        // </block:setup>

        // <block:config:0>
        const configE = {
            type: 'bar',
            data: dataE,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        // </block:config>
        module.exports = {
            actions:[],
            config: configE,
        };
    </script>
      
    <script>
        // === include 'setup' then 'config' above ===
            var myChart_E = new Chart(
                document.getElementById('myChart_E'),
                configE
            );
    </script>

    <!-- ////////////////Group F/////////////////// -->
    <script>
        // <block:setup:1>
        const labelsF = [
            'ハンガリー',
            'ポルトガル',
            'フランス',
            'ドイツ',
        ];
        const dataF = {
            labels: labelsF,
            datasets: [{
                label: 'Group F',
                data: [Hungary, Portugal, France, Germany],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor:[
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        // </block:setup>

        // <block:config:0>
        const configF = {
            type: 'bar',
            data: dataF,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        // </block:config>
        module.exports = {
            actions:[],
            config: configF,
        };
    </script>
      
    <script>
        // === include 'setup' then 'config' above ===
            var myChart_F = new Chart(
                document.getElementById('myChart_F'),
                configF
            );
    </script>
</body>
</html>
