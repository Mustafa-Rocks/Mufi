<style>
.razorpay-payment-button {
    padding: 4px;
    background-color: #5A9E6F;
    color: #fff;
    border: 0;
}
</style>
<?php

require 'config.php';
require 'razorpay-php/Razorpay.php';
include('session.php');

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$add=$address.",".$city.",".$state.",".$country;
$tot=$_SESSION['item_total'];
$profit=$_SESSION['profit'];

$_SESSION['address']=$address;
$_SESSION['city']=$city;
$_SESSION['state']=$state;
$_SESSION['country']=$country;
$_SESSION['zip']=$zip;
$_SESSION['add']=$add;
$_SESSION['tot']=$tot;
$_SESSION['profit']=$profit;




$orderData = [
    'receipt' => 3456,
    'amount' => $_SESSION['tot'] * 100, // 2000 rupees in paise
    'currency' => 'INR',
    'payment_capture' => 1, // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key" => $keyId,
    "amount" => $amount,
    "name" => "Mustafa",
    "description" => "PT",
    "image" => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill" => [
        "name" => "",
        "email" => "",
        "contact" => "",
    ],
    "notes" => [
        "address" => "Hello World",
        "merchant_order_id" => "12312321",
    ],
    "theme" => [
        "color" => "#F37254",
    ],
    "order_id" => $razorpayOrderId,
];

if ($displayCurrency !== 'INR') {
    $data['display_currency'] = $displayCurrency;
    $data['display_amount'] = $displayAmount;
}

$json = json_encode($data);

?>


<form action="verify.php" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $data['key'] ?>"
        data-amount="<?php echo $data['amount'] ?>" data-currency="INR" data-name="<?php echo $data['name'] ?>"
        data-image="<?php echo $data['image'] ?>" data-description="<?php echo $data['description'] ?>"
        data-prefill.name="<?php echo $data['prefill']['name'] ?>"
        data-prefill.email="<?php echo $data['prefill']['email'] ?>"
        data-prefill.contact="<?php echo $data['prefill']['contact'] ?>" data-notes.shopping_order_id="3456"
        data-order_id="<?php echo $data['order_id'] ?>" <?php if ($displayCurrency !== 'INR') {?>
        data-display_amount="<?php echo $data['display_amount'] ?>" <?php }?> <?php if ($displayCurrency !== 'INR') {?>
        data-display_currency="<?php echo $data['display_currency'] ?>" <?php }?>>
    </script>
    <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
    <input type="hidden" name="shopping_order_id" value="3456">
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script>
$(window).on('load', function() {
    jQuery('.razorpay-payment-button').click();
});
</script>