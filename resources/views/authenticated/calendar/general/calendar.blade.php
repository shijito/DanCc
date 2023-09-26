@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF; box-shadow:2px 2px 4px gray;">
    <div class="w-75 m-auto" >
      <p class="text-center m-0 mb-2" style="font-size:20px;">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary mt-4" value="予約する" form="reserveParts"> 
    </div>
  </div>
</div>

<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <form action="{{ route('deleteParts') }}" method="post">
      <div class="w-100">
        <div class="modal-setting-resreve">
          <p>予約日：<input type="text" name="setting_resreve" disabled></p>
        </div>
        <div class="modal-setting-part">
          <p>時間：<input type="text"  name="setting_part" disabled></p>
        </div>
        <div class="modal-setting-lan"> 
          <p>上記の予約をキャンセルしてもよろしいですか？</p>
        </div>
        <div class="w-50 m-auto edit-modal-btn d-flex">
          <a class="js-modal-close btn btn-primary d-inline-block" href="">閉じる</a>
          <input type="hidden" class="delete-modal-hidden" name="setting_id" value="">
          <input type="submit" class="btn btn-danger d-block" value="キャンセル">
        </div>
      </div>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
