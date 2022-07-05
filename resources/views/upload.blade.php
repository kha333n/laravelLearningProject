<h1>Upload File</h1>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>


