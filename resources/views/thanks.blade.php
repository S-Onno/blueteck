@extends('layout')

@section('title', '応募完了')

@section('content')
  <div class="center" style="text-align: center; margin-top: 80px;">
    <h2 style="font-size: 28px; color: #2c3e50;"> 応募ありがとうございます！</h2>
    <p style="font-size: 16px; color: #555;">
      ご入力いただいた情報は正常に送信されました。<br>
      内容を確認のうえ、後日ご連絡いたします。
    </p>

    <div style="margin-top: 30px;">
      <a href="{{ url('/') }}" style="text-decoration: none; background-color: #2c3e50; color: white; padding: 10px 20px; border-radius: 8px;">
         ホームページへ戻る
      </a>
    </div>
  </div>
@endsection