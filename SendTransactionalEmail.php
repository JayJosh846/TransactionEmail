<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(
    new GuzzleHttp\Client(),
    $config
);


$container = [];
$email = ['name' => 'Ebuka', 'email' => 'ebukaonyekwe@gmail.com'];
$container['textContent'] = 'The receipt of your transaction :-)';
$container['subject'] = 'API call Receipt'; 
$container['sender'] = new \SendinBlue\Client\Model\SendSmtpEmailSender(['name' => 'Jesudara Jeminusi', 'email' => 'jesudara.j@gmail.com']);
$container['to'] = [$email];

$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail($container);

//return $this->smtpApi->sendTransacEmail($sendSmtpEmail);


try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>

