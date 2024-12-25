@extends('layouts.master_admin')
@section('css')
@livewireStyles
@endsection

@section('title')
    المقاسات 
@endsection

@section('content')
@livewire('show-size')
@livewireScripts
@endsection
@section('js')
<script>
  window.addEventListener('close-modal', event => {
      $('#deleteSizeModal').modal('hide');
      $('#addSizeModal').modal('hide');
  });
</script>
@endsection
