<h1>Listing header</h1>
@auth
<h1>Welcome {{auth()->user()->name}}</h1>

<form action="/logout" class="" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
@else
<a href="/register"> Register </a>
<a href="/login">Login</a>
@endauth
