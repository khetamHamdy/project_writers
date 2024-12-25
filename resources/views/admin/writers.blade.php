@extends('layout.adminLayout')

@section('title')
    {{ ucwords(__('cp.writers')) }}
@endsection

@section('content')
    <livewire:writers />
@endsection

@section('js')
    <script>
        $('#edit_image').on('change', function(e) {
            readURL(this, $('#editImage'));
        });
    </script>
@endsection
