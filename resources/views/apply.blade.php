@extends('layout')

@section('title', '応募フォーム')

@section('content')
  <div class="center">
    <h2>応募フォーム</h2>

    @if ($errors->any())
      <div class="error-box">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('applicants.confirm') }}">
      @csrf

      <!-- 名前 -->
      <label for="name">名前</label><br>
      <input type="text" name="name" id="name" value="{{ old('name') }}" required><br><br>

      <!-- カナ -->
      <label for="kana">カナ</label><br>
      <input type="text" name="kana" id="kana" value="{{ old('kana') }}" required><br><br>

      <!-- メールアドレス -->
      <label for="email">メールアドレス</label><br>
      <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

      <!-- 電話番号 -->
      <label for="phone">電話番号</label><br>
      <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"><br><br>

      <!-- 生年月日 -->
      <label for="birthdate">生年月日</label><br>
      <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate') }}" required><br><br>

      <!-- 性別 -->
      <label>性別</label><br>
      <input type="radio" name="gender" value="男性" {{ old('gender') == '男性' ? 'checked' : '' }}> 男性
      <input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女性
      <input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}> その他<br><br>

      <!-- 希望職種 -->
      <label for="position">希望職種</label><br>
      <select name="position" id="position" required>
        <option value="">選択してください</option>
        <option value="web_engineer" {{ old('position') == 'Webエンジニア' ? 'selected' : '' }}>Webエンジニア</option>
        <option value="system_engineer" {{ old('position') == 'システムエンジニア' ? 'selected' : '' }}>システムエンジニア</option>
        <option value="bodyguard" {{ old('position') == 'ボディーガード' ? 'selected' : '' }}>ボディーガード</option>
        <option value="other" {{ old('position') == 'その他' ? 'selected' : '' }}>その他</option>
      </select><br><br>

      <!-- 希望勤務地 -->
      <label for="location">希望勤務地</label><br>
      <select name="location" id="location" required>
        <option value="">選択してください</option>
        <option value="tokyo" {{ old('location') == '東京' ? 'selected' : '' }}>東京</option>
        <option value="osaka" {{ old('location') == '大阪' ? 'selected' : '' }}>大阪</option>
        <option value="Los_Angeles" {{ old('location') == 'ロサンゼルス' ? 'selected' : '' }}>ロサンゼルス</option>
        <option value="philipin" {{ old('location') == 'フィリピン' ? 'selected' : '' }}>フィリピン</option>
        <option value="other" {{ old('location') == 'その他' ? 'selected' : '' }}>その他</option>
      </select><br><br>

      <!-- 資格・スキル -->
      <label for="skills">資格・スキル</label><br>
      <textarea name="skills" id="skills" rows="3">{{ old('skills') }}</textarea><br><br>

      <!-- 自己PR -->
      <label for="pr_text">自己PR文</label><br>
      <textarea name="pr_text" id="pr_text" rows="10" required style="width: 100%; height: 200px;">{{ old('pr_text') }}</textarea><br><br>
      <button type="submit">確認画面へ進む</button>
    </form>
  </div>
@endsection