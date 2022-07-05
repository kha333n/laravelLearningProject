<h1>User Login</h1>

<h2>Login Form</h2>
<form action="/login/submit" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>

<hr><hr>
<h2>Get Form</h2>
<form action="/login/get/submit" method="get">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>


<h2>Post Form</h2>
<form action="/login/post/submit" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>

<h2>PUT Form</h2>
<form action="/login/put/submit" method="post">
    @csrf
    {{ method_field('PUT') }}
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>

<h2>DELETE Form</h2>
<form action="/login/delete/submit" method="post">
    @csrf
    {{ method_field('DELETE') }}
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>
