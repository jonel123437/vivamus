<?php
require './backend/db.php';

$action = isset($_POST['action']) && !empty($_POST['action']) ? $_POST['action'] : '';

$db = new Database();
$result = $db->createDb();
echo $action;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    switch ($action) {
        case 'donate':

            $firstName = htmlspecialchars($_POST['f_name']);
            $lastName = htmlspecialchars($_POST['l_name']);
            $email = htmlspecialchars($_POST['email']);
            $mobileNumber = htmlspecialchars($_POST['number']);
            $donationAmount = htmlspecialchars($_POST['amount']);
            $cardHolderName = htmlspecialchars($_POST['holder_name']);
            $creditCardNo = htmlspecialchars($_POST['card_no']);
            $securityCode = htmlspecialchars($_POST['sec_code']);
            $expiryDate = htmlspecialchars($_POST['expire_date']);
            $message = htmlspecialchars($_POST['message']);
            $anonymous = isset($_POST['anonymous']) ? "Yes" : "No";

            $res = $db->insertDonation($firstName, $lastName, $email, $mobileNumber, $donationAmount, $cardHolderName, $creditCardNo, $securityCode, $expiryDate, $message, $anonymous);
            echo $res;
            return json_encode($res);
            break;
        default:
            include './view/VivamusRegistration.php';
            echo "Invalid action";
    }

}
?>