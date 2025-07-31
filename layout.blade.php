<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', '株式会社ブルーテック')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
  @include('components.nav')  {{-- ナビゲーション部分を分離して読み込み --}}
  @yield('content')           {{-- 各ページごとの本文 --}}
  
  <footer>
    <p>※この会社はフィクションです※</p>
    <p>© 2023 株式会社ブルーテック</p>
    <p>All rights reserved.</p>
  </footer>
</body>
</html>