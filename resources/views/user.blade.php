<h3>User #{{$users->id}}</h3>
<ul>
<li>Nama: {{ $users->name }}</li>
<li>Status: {{ $users->role }}</li>
<li>Email: {{ $users->email }}</li>
<li>Username: {{$users->username}}</li>
</ul>

<a href="/admin/deluser/{{$users->id}}">Hapus user ini</a> | <a href="{{route('admin')}}">Kembali</a>
