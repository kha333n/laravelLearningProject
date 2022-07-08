<h1>Customers List</h1>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Customer Name</th>
        <th>Contact Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Postal Code</th>
        <th>Country</th>
        <th>Operations</th>
    </tr>

    @foreach($collection as $customer)
    <tr>
        <td>{{ $customer['CustomerID'] }}</td>
        <td>{{ $customer['CustomerName'] }}</td>
        <td>{{ $customer['ContactName'] }}</td>
        <td>{{ $customer['Address'] }}</td>
        <td>{{ $customer['City'] }}</td>
        <td>{{ $customer['PostalCode'] }}</td>
        <td>{{ $customer['Country'] }}</td>
        <td><a href={{"deleteCustomer/" . $customer['CustomerID']}} >Delete</a> <br>
            <a href={{ "editCustomer/" . $customer['CustomerID'] }}>Edit</a> </td>
    </tr>
    @endforeach
</table>

<div>
    {{ $collection->links() }}
</div>

<style>
    .w-5 {
        display: none;
    }
</style>
