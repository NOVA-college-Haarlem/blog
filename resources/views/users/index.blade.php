
<div>
    <a href="{{route('maak-gebruiker')}}">Maak nieuwe gebruiker</a>
</div>
<table>
    <thead>
        <tr>
            <th>voornaam</th>
            <th>achternaam</th>
            <th>email</th>
            <th>password</th>
        </tr>
    </thead>
    @foreach($users as $user)
    <tr>
        <td>{{$user->firstname}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
</table>