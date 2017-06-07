<a href="{{route('add_user')}}">Tambah</a>
<ol>
@foreach ($users as $key => $user)
  <li><strong>{{ $user->name }}</strong> as <em>{{ $user->role}}</em> | <a href="/admin/deluser/{{$user->id}}">delete</a></li>
@endforeach
</ol>
<p><a href="/logout">Logout</a></p>
