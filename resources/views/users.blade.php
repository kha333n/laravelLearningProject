<x-header componentName="User"/>
<h1>Users Page</h1>

<a href="{{ URL::to('/') }}">Home</a>

<hr><hr>
@include('inner')


<hr><hr>
<h1>Login</h1>

<form action="users" method="post">
    @csrf
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>
