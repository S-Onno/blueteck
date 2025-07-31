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

    <form method="POST" action="{{ route('applicants.store') }}">
      @csrf

      <label for="name">名前</label><br>
      <input type="text" name="name" id="name" value="{{ old('name') }}" required><br><br>

      <label for="kana">カナ</label><br>
      <input type="text" name="kana" id="kana" value="{{ old('kana') }}" required><br><br>


      <label for="email">メールアドレス</label><br>
      <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

      <label for="pr_text">自己PR文</label><br>
      <textarea name="pr_text" id="pr_text" rows="5" required>"{{ old('pr_text') }}"</textarea><br><br>

      <button type="submit">応募する</button>
    </form>
  </div>
@endsection