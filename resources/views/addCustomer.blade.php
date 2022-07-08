<h1>Add Customer</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(isset($collection))
    <form action="" method="post">
        @csrf
        <input type="hidden" name="CustomerID" value={{ $collection['CustomerID'] }}>
        <input type="text" name="CustomerName" value="{{ $collection['CustomerName'] }}"> <br> <br>
        <input type="text" name="ContactName" value="{{ $collection['ContactName'] }}"> <br> <br>
        <input type="text" name="Address" value="{{ $collection['Address'] }}"> <br> <br>
        <input type="text" name="City" value="{{ $collection['City'] }}"> <br> <br>
        <input type="text" name="PostalCode" value="{{ $collection['PostalCode'] }}"> <br> <br>
        <input type="text" name="Country" value="{{ $collection['Country'] }}"> <br> <br>
        <input type="submit" value="Edit Customer">
    </form>

@else
    <form action="" method="post">
        @csrf
        <input type="text" name="CustomerName" placeholder="Customer Name"> <br> <br>
        <input type="text" name="ContactName" placeholder="Contact Name"> <br> <br>
        <input type="text" name="Address" placeholder="Address"> <br> <br>
        <input type="text" name="City" placeholder="City"> <br> <br>
        <input type="text" name="PostalCode" placeholder="Postal Code"> <br> <br>
        <input type="text" name="Country" placeholder="Country"> <br> <br>
        <input type="submit" value="Add Customer">
    </form>

@endif
