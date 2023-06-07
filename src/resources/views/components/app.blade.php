<!DOCTYPE html>
<html lang="ja">
<x-head>
  <x-slot name='title'>{{$title}}</x-slot>
  {{$script}}
</x-head>
<body>
  @include('components.header')
  <!-- /.l-header .p-header -->

  <main class="l-main">
    {{$slot}}
  </main>
  <!-- /.l-main -->

  @include('components.line')
  <!-- /.p-line -->
  <!-- /.l-footer .p-footer -->
  @include('components.footer')
</body>

</html>