@extends('layout')

@section('title', '入力内容の確認')

@section('content')

@php
  $positionLabels = [
    'web_engineer' => 'Webエンジニア',
    'system_engineer' => 'システムエンジニア',
    'bodyguard' => 'ボディーガード',
    'other' => 'その他',
  ];

  $locationLabels = [
    'tokyo' => '東京',
    'osaka' => '大阪',
    'Los_Angeles' => 'ロサンゼルス',
    'philipin' => 'フィリピン',
    'other' => 'その他',
  ];
@endphp

<div class="confirm-container" style="max-width: 700px; margin: 0 auto; padding: 20px;">
  <h2 style="text-align: center; margin-bottom: 30px;">入力内容の確認</h2>

  <table style="width: 100%; border-collapse: collapse;">
    @foreach([
      '名前' => $data['name'],
      'カナ' => $data['kana'],
      'メールアドレス' => $data['email'],
      '電話番号' => $data['phone'],
      '生年月日' => $data['birthdate'],
      '性別' => $data['gender'],
      '希望職種' => $positionLabels[$data['position']] ?? $data['position'],
      '希望勤務地' => $locationLabels[$data['location']] ?? $data['location'],
      '資格・スキル' => $data['skills'],
      '自己PR文' => $data['pr_text']
    ] as $label => $value)
    <tr>
      <th style="text-align: left; padding: 8px; background: #f7f7f7; border-bottom: 1px solid #ccc; width: 30%;">{{ $label }}</th>
      <td style="padding: 8px; border-bottom: 1px solid #ccc;">{{ $value }}</td>
    </tr>
    @endforeach
  </table>

  <div style="margin-top: 30px; display: flex; justify-content: space-between;">
    <form method="GET" action="{{ route('apply') }}">
      <button type="submit" style="background-color: #aaa; color: white; padding: 10px 20px; border: none; border-radius: 6px;">修正する</button>
    </form>

    <form method="POST" action="{{ route('applicants.store') }}">
      @csrf
      @foreach ($data as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
      @endforeach
      <button type="submit" style="background-color: #2c3e50; color: white; padding: 10px 20px; border: none; border-radius: 6px;">この内容で送信する</button>
    </form>
  </div>
</div>
@endsection