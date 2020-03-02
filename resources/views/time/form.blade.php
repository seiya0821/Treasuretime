@extends('layouts.master_time')
@section('title', '入力画面｜time')
@section('content')
  <div class="jumbotron">
  <h1 style="text-align:center">あなたの隠れた宝の時間を診断します</h1>
  <p style="text-align:center">あなたの日頃の隠れたお宝時間を測定します。</p>
  <p style="text-align:center">これから出る時間を少しでも興味のある事に当ててみてください。</p>
  </div>
 
  <form action="{{ route('time.result') }}" method="post" role="form">
  {!! csrf_field() !!}
  <div class="form-group" style="text-align:center">
  <label for="Inputbefore" >仕事中の暇時間は <input type="text" name="before" class="form-control" id="Inputbefore" placeholder="半角英数字のみ">時間</label>
  </div>
  <div class="form-group" style="text-align:center">
  <label for="Inputafter">仕事後の暇時間は<input type="text" name="after" class="form-control" id="Inputafter" placeholder="半角英数字のみ">時間</label>

  </div>
  <div style="text-align: center;">
  <button type="submit" class="btn btn-success" >あなたのお宝時間診断結果はこちらから</button>
  </div>
  </form>
@endsection
