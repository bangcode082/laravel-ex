@if (session('message'))
  <p>{{ session('message') }}</p>
@endif
@if (Auth::check())
  <p>Selamat datang {{ Auth::user()->name }}</p>
@endif
@can('admin')
  <p>horee admin</p>
@endcan
