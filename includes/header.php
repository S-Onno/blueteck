<?php
// BASE_URL を自動取得（サブフォルダでも動作）
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>たるたるのポートフォリオ</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <!-- モダンCSSを全ページ共通で読み込む -->
  <link rel="stylesheet" href="<?= $base ?>/css/style.css">
</head>
<body>
  <header class="site-header">
    <h1>たるたるのWebポートフォリオ</h1>
    <nav class="site-nav">
      <ul>
        <li><a href="<?= $base ?>/index.php"
               class="<?= basename($_SERVER['SCRIPT_NAME'])==='index.php'?'active':'' ?>">
              ホーム
            </a>
        </li>
        <li><a href="<?= $base ?>/achievements.php"
               class="<?= basename($_SERVER['SCRIPT_NAME'])==='achievements.php'?'active':'' ?>">
              実績
            </a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="site-main">
