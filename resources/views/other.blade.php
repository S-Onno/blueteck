@extends('layout')

@section('title', 'その他')

@section('content')
  <div class="middle">
    <div id="bosyu">
      <h3>募集要項</h3>
      <p>TOEIC 650以上</p>
      <p>Laravelフレームワークの開発経験がある人</p>
      <p>ユーモアのある人</p>
      <br><br>
      <a href="{{ url('/apply') }}" style="background-color:#3498db; color:white; padding:10px 20px; border-radius:5px; text-decoration:none;">
      ✍️ 応募する
      </a>

    </div>

    <div id="hukuri">
      <h3>福利厚生</h3>
      <p>産休育休制度</p>
      <p>健康保険</p>
      <p>副業OK！</p>
      <p>雇用保険</p>
      <p>労災保険</p>
      <p>子供・子育て拠出金</p>
      <p>住宅手当</p>
      <p>休暇制度</p>
      <p>健康・医療支援</p>
      <p>スキルアップ制度</p>
    </div>
  </div>

  
@endsection