<a href="{{route('add_user')}}">Tambah</a>

{{-- {{ dd($users) }} --}}
@foreach ($users as $key => $user)
  <li>{{ $user->name }} - {{ $user->role}} <a href="/admin/deluser/{{$user->id}}">delete</a></li>
@endforeach
