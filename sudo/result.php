<?php


$hands = ["R", "S", "P"];
$computerHand = $hands[rand(0, 2)];
$userHand = $_POST['userHand'];
// ユーザーが勝つケース
if ($userHand === "R" && $computerHand === "S" || 
    $userHand === "S" && $computerHand === "P" || 
    $userHand === "P" && $computerHand === "R") {
    $result = "ユーザーの勝ち！";
} 
// 引き分けのケース
elseif ($userHand === $computerHand) {
    $result = "引き分け！";
}
// ユーザーが負けのケース
else {
    $result = "ユーザーの負け！";
}

$imgPaths = [
    'R' => 'img/Rock.png',
    'S' => 'img/Scissors.png',
    'P' => 'img/Paper.png',
];

$userHandImg = $imgPaths[$userHand] ?? null;
$computerHandImg = $imgPaths[$computerHand] ?? null;

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけんゲーム</title>
    <style>
        .choice-image {
            width: 100px;
        }
        table {
            margin: 0 auto;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>じゃんけんゲーム</h2>
  
    <table>
        <tr>
            <td>ユーザーの手</td>
            <td><img src="<?php echo $userHandImg ?>" alt="Rock" class="choice-image"></td>
        </tr>
        <tr>
            <td>コンピューターの手</td>
            <td><img src="<?php echo $computerHandImg ?>" alt="Rock" class="choice-image"></td>
        </tr>
        <tr>
        <td>結果は！</td>
            <td><h1><?php echo $result ?></h1></td>
        </tr>
    </table>
    
    <div style="text-align: center;">
            <a href="select.html">
            <button>もう一回じゃんけんする</button>
        </a>
    </div>

</body>
</html>

