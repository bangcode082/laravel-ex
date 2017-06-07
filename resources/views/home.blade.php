@if (session('message'))
  <p>{{ session('message') }}</p>
@endif
@if (Auth::check())
  <p>Selamat datang {{ Auth::user()->name }}</p>
  <p>Anda adalah seorang {{ Auth::user()->role }}</p>
@endif
@can('admin')
  <p>Anda bisa menambah dan menghapus user <a href="{{route('admin')}}">di sini</a></p>
@endcan

<p><a href="/logout">Logout</a></p>
