

<form action="" method="post">
    @csrf
    <div class="form-control">
        <label for="firstname">Voornaam</label>
        <input type="text" name=" firstname" id="firstname">
    </div>
    <div class="form-control">
        <label for="lastname">Achternaam</label>
        <input type="text" name="lastname" id="lastname">
    </div>
    <div class="form-control">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div class="form-control">
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
    </div>
    <select name="role" id="">
        <option value="admin">Admin</option>
        <option value="blogger">Blogger</option>
    </select>
    <button type="submit">Maak aan!</button>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>