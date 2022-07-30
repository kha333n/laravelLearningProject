<?php

namespace Http\Controllers;

use App\Http\Controllers\CustomersListApi;
use App\Models\Customer;
use Tests\TestCase;
use Psy\Util\Json;

class CustomersListApiTest extends TestCase
{

    public function testGetCustomers()
    {

    }

    public function testDeleteCustomer()
    {

    }

    public function testUpdateCustomer()
    {

    }

    public function testAddCustomer()
    {
//        $customer = new Customer();
//        $customer->CustomerID = 9999;
//        $customer->CustomerName = "Test Customer";
//        $customer->ContactName = "Test Name";
//        $customer->Address = "Test Address";
//        $customer->City = "Test City";
//        $customer->PostalCode = "Test Code";
//        $customer->Country = "Test Country";
//

        $json = new Json('{
        "CustomerID":92,
        "CustomerName":"ksn",
        "ContactName":"sadna",
        "Address":"Syead asdmasklm",
        "City":"adna",
        "PostalCode":"wjiodjq",
        "Country":"asdiuajid"
            }');
        $response = $this->postJson('/api/add', $json);
        $response->assertStatus(200);

    }
}
