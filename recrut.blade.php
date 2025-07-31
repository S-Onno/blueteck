@extends('layout')

@section('title', 'recrut')

@section('content')
<div class="container">
    <h1>採用情報</h1>
    <p>現在、私たちは新しい仲間を募集しています！</p>
    <p>詳細は以下のリンクからご確認ください。</p>
    <ul>
        <li><a href="{{ route('recruitment.positions') }}">募集職種一覧</a></li>
         <li><a href="{{ route('recruitment.application') }}">応募方法</a></li> 
        <li><a href="{{ route('recruitment.faq') }}">よくある質問</a></li>
    </ul>
    <p>興味のある方は、ぜひご応募ください！</p>
</div> 
<div class="text-center mt-5">
    <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
</div>
</div>
@endsection