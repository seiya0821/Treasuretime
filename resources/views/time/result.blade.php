@extends('layouts.master_time')
@section('title', '診断結果｜あなたの宝の時間')
@section('content')

  <div class="jumbotron">
  <h1 style="text-align:center">宝に変わる時間を計算</h1>
  <p style="text-align:center">あなたが変われる時間の計算を自動でいたします。今から変われます</p>
  <p style="text-align:center">If today were the last day of my life, would I want to do what I am about to do today?</p>
  </div>
 
  <p style="text-align:center">あなたの1日あたりのお宝時間は <span style="color:tomato; font-size:24px; font-weight:bold;">{{ $day }}</span>時間 です。</p>
  <p style="text-align:center">あなたの1ヶ月あたりのお宝時間は <span style="color:tomato; font-size:24px; font-weight:bold;">{{ $month }}</span>時間です。</p>
  <p style="text-align:center">あなたの１年間あたりのお宝時間は <span style="color:tomato; font-size:24px; font-weight:bold;">{{ $year }}</span>時間です。</p>
  
　 <br>


 
  <a href="{{ route('time.form') }}"><button class="btn btn-default">戻る</button></a>
@endsection