<h1>Store Data</h1>

@if(session('user'))
    <p>Data saved for {{ session('user') }}</p>
@endif

<form action="storedata" method="post">
    @csrf
    <input type="text" name="user" placeholder="User">
    <input type="submit" value="Save">
</form>
