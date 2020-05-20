# SendinBlue's API v3 Php Library

SendinBlue's API exposes the entire SendinBlue features via a standardized programmatic interface. Please refer to the full [documentation](https://developers.sendinblue.com) to learn more.

This is the wrapper for the API. It implements all the features of the API v3.

SendinBlue's API matches the [OpenAPI v2 definition](https://www.openapis.org/). The specification can be downloaded [here](https://api.sendinblue.com/v3/swagger_definition.yml).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project and is reviewed and maintained by SendinBlue:

- API version: 3.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://account.sendinblue.com/support](https://account.sendinblue.com/support)

## Requirements

PHP 5.6 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/):

```
composer require sendinblue/api-v3-sdk "^6.1.0"
```

Further do:
* run ``composer install`` to get these dependencies added to your vendor directory
* add the autoloader to your application with this line: ``require("vendor/autoload.php")``


## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.sendinblue.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Get your account informations, plans and credits details
*AttributesApi* | [**createAttribute**](docs/Api/AttributesApi.md#createattribute) | **POST** /contacts/attributes/{attributeCategory}/{attributeName} | Creates contact attribute
*AttributesApi* | [**deleteAttribute**](docs/Api/AttributesApi.md#deleteattribute) | **DELETE** /contacts/attributes/{attributeCategory}/{attributeName} | Deletes an attribute
*AttributesApi* | [**getAttributes**](docs/Api/AttributesApi.md#getattributes) | **GET** /contacts/attributes | Lists all attributes
*AttributesApi* | [**updateAttribute**](docs/Api/AttributesApi.md#updateattribute) | **PUT** /contacts/attributes/{attributeCategory}/{attributeName} | Updates contact attribute
*ContactsApi* | [**addContactToList**](docs/Api/ContactsApi.md#addcontacttolist) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
*ContactsApi* | [**createAttribute**](docs/Api/ContactsApi.md#createattribute) | **POST** /contacts/attributes/{attributeCategory}/{attributeName} | Creates contact attribute
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | Create a contact
*ContactsApi* | [**createFolder**](docs/Api/ContactsApi.md#createfolder) | **POST** /contacts/folders | Create a folder
*ContactsApi* | [**createList**](docs/Api/ContactsApi.md#createlist) | **POST** /contacts/lists | Create a list
*ContactsApi* | [**deleteAttribute**](docs/Api/ContactsApi.md#deleteattribute) | **DELETE** /contacts/attributes/{attributeCategory}/{attributeName} | Deletes an attribute
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /contacts/{email} | Deletes a contact
*ContactsApi* | [**deleteFolder**](docs/Api/ContactsApi.md#deletefolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
*ContactsApi* | [**deleteList**](docs/Api/ContactsApi.md#deletelist) | **DELETE** /contacts/lists/{listId} | Delete a list
*ContactsApi* | [**getAttributes**](docs/Api/ContactsApi.md#getattributes) | **GET** /contacts/attributes | Lists all attributes
*ContactsApi* | [**getContactInfo**](docs/Api/ContactsApi.md#getcontactinfo) | **GET** /contacts/{email} | Retrieves contact informations
*ContactsApi* | [**getContactStats**](docs/Api/ContactsApi.md#getcontactstats) | **GET** /contacts/{email}/campaignStats | Get the campaigns statistics for a contact
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | Get all the contacts
*ContactsApi* | [**getContactsFromList**](docs/Api/ContactsApi.md#getcontactsfromlist) | **GET** /contacts/lists/{listId}/contacts | Get the contacts in a list
*ContactsApi* | [**getFolder**](docs/Api/ContactsApi.md#getfolder) | **GET** /contacts/folders/{folderId} | Returns folder details
*ContactsApi* | [**getFolderLists**](docs/Api/ContactsApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get the lists in a folder
*ContactsApi* | [**getFolders**](docs/Api/ContactsApi.md#getfolders) | **GET** /contacts/folders | Get all the folders
*ContactsApi* | [**getList**](docs/Api/ContactsApi.md#getlist) | **GET** /contacts/lists/{listId} | Get the details of a list
*ContactsApi* | [**getLists**](docs/Api/ContactsApi.md#getlists) | **GET** /contacts/lists | Get all the lists
*ContactsApi* | [**importContacts**](docs/Api/ContactsApi.md#importcontacts) | **POST** /contacts/import | Import contacts
*ContactsApi* | [**removeContactFromList**](docs/Api/ContactsApi.md#removecontactfromlist) | **POST** /contacts/lists/{listId}/contacts/remove | Remove existing contacts from a list
*ContactsApi* | [**requestContactExport**](docs/Api/ContactsApi.md#requestcontactexport) | **POST** /contacts/export | Export contacts
*ContactsApi* | [**updateAttribute**](docs/Api/ContactsApi.md#updateattribute) | **PUT** /contacts/attributes/{attributeCategory}/{attributeName} | Updates contact attribute
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{email} | Updates a contact
*ContactsApi* | [**updateFolder**](docs/Api/ContactsApi.md#updatefolder) | **PUT** /contacts/folders/{folderId} | Update a contact folder
*ContactsApi* | [**updateList**](docs/Api/ContactsApi.md#updatelist) | **PUT** /contacts/lists/{listId} | Update a list
*EmailCampaignsApi* | [**createEmailCampaign**](docs/Api/EmailCampaignsApi.md#createemailcampaign) | **POST** /emailCampaigns | Create an email campaign
*EmailCampaignsApi* | [**deleteEmailCampaign**](docs/Api/EmailCampaignsApi.md#deleteemailcampaign) | **DELETE** /emailCampaigns/{campaignId} | Delete an email campaign
*EmailCampaignsApi* | [**emailExportRecipients**](docs/Api/EmailCampaignsApi.md#emailexportrecipients) | **POST** /emailCampaigns/{campaignId}/exportRecipients | Export the recipients of a campaign
*EmailCampaignsApi* | [**getAbTestCampaignResult**](docs/Api/EmailCampaignsApi.md#getabtestcampaignresult) | **GET** /emailCampaigns/{campaignId}/abTestCampaignResult | Get A/B test email campaign result
*EmailCampaignsApi* | [**getEmailCampaign**](docs/Api/EmailCampaignsApi.md#getemailcampaign) | **GET** /emailCampaigns/{campaignId} | Get campaign informations
*EmailCampaignsApi* | [**getEmailCampaigns**](docs/Api/EmailCampaignsApi.md#getemailcampaigns) | **GET** /emailCampaigns | Return all your created campaigns
*EmailCampaignsApi* | [**getSharedTemplateUrl**](docs/Api/EmailCampaignsApi.md#getsharedtemplateurl) | **GET** /emailCampaigns/{campaignId}/sharedUrl | Get a shared template url
*EmailCampaignsApi* | [**sendEmailCampaignNow**](docs/Api/EmailCampaignsApi.md#sendemailcampaignnow) | **POST** /emailCampaigns/{campaignId}/sendNow | Send an email campaign immediately, based on campaignId
*EmailCampaignsApi* | [**sendReport**](docs/Api/EmailCampaignsApi.md#sendreport) | **POST** /emailCampaigns/{campaignId}/sendReport | Send the report of a campaigns
*EmailCampaignsApi* | [**sendTestEmail**](docs/Api/EmailCampaignsApi.md#sendtestemail) | **POST** /emailCampaigns/{campaignId}/sendTest | Send an email campaign to your test list
*EmailCampaignsApi* | [**updateCampaignStatus**](docs/Api/EmailCampaignsApi.md#updatecampaignstatus) | **PUT** /emailCampaigns/{campaignId}/status | Update a campaign status
*EmailCampaignsApi* | [**updateEmailCampaign**](docs/Api/EmailCampaignsApi.md#updateemailcampaign) | **PUT** /emailCampaigns/{campaignId} | Update a campaign
*FoldersApi* | [**createFolder**](docs/Api/FoldersApi.md#createfolder) | **POST** /contacts/folders | Create a folder
*FoldersApi* | [**deleteFolder**](docs/Api/FoldersApi.md#deletefolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
*FoldersApi* | [**getFolder**](docs/Api/FoldersApi.md#getfolder) | **GET** /contacts/folders/{folderId} | Returns folder details
*FoldersApi* | [**getFolderLists**](docs/Api/FoldersApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get the lists in a folder
*FoldersApi* | [**getFolders**](docs/Api/FoldersApi.md#getfolders) | **GET** /contacts/folders | Get all the folders
*FoldersApi* | [**updateFolder**](docs/Api/FoldersApi.md#updatefolder) | **PUT** /contacts/folders/{folderId} | Update a contact folder
*ListsApi* | [**addContactToList**](docs/Api/ListsApi.md#addcontacttolist) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
*ListsApi* | [**createList**](docs/Api/ListsApi.md#createlist) | **POST** /contacts/lists | Create a list
*ListsApi* | [**deleteList**](docs/Api/ListsApi.md#deletelist) | **DELETE** /contacts/lists/{listId} | Delete a list
*ListsApi* | [**getContactsFromList**](docs/Api/ListsApi.md#getcontactsfromlist) | **GET** /contacts/lists/{listId}/contacts | Get the contacts in a list
*ListsApi* | [**getFolderLists**](docs/Api/ListsApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get the lists in a folder
*ListsApi* | [**getList**](docs/Api/ListsApi.md#getlist) | **GET** /contacts/lists/{listId} | Get the details of a list
*ListsApi* | [**getLists**](docs/Api/ListsApi.md#getlists) | **GET** /contacts/lists | Get all the lists
*ListsApi* | [**removeContactFromList**](docs/Api/ListsApi.md#removecontactfromlist) | **POST** /contacts/lists/{listId}/contacts/remove | Remove existing contacts from a list
*ListsApi* | [**updateList**](docs/Api/ListsApi.md#updatelist) | **PUT** /contacts/lists/{listId} | Update a list
*ProcessApi* | [**getProcess**](docs/Api/ProcessApi.md#getprocess) | **GET** /processes/{processId} | Return the informations for a process
*ProcessApi* | [**getProcesses**](docs/Api/ProcessApi.md#getprocesses) | **GET** /processes | Return all the processes for your account
*ResellerApi* | [**addCredits**](docs/Api/ResellerApi.md#addcredits) | **POST** /reseller/children/{childAuthKey}/credits/add | Add Email and/or SMS credits to a specific child account
*ResellerApi* | [**associateIpToChild**](docs/Api/ResellerApi.md#associateiptochild) | **POST** /reseller/children/{childAuthKey}/ips/associate | Associate a dedicated IP to the child
*ResellerApi* | [**createChildDomain**](docs/Api/ResellerApi.md#createchilddomain) | **POST** /reseller/children/{childAuthKey}/domains | Creates a domain for a child account
*ResellerApi* | [**createResellerChild**](docs/Api/ResellerApi.md#createresellerchild) | **POST** /reseller/children | Creates a reseller child
*ResellerApi* | [**deleteChildDomain**](docs/Api/ResellerApi.md#deletechilddomain) | **DELETE** /reseller/children/{childAuthKey}/domains/{domainName} | Deletes the sender domain of the reseller child based on the childAuthKey and domainName passed
*ResellerApi* | [**deleteResellerChild**](docs/Api/ResellerApi.md#deleteresellerchild) | **DELETE** /reseller/children/{childAuthKey} | Deletes a single reseller child based on the childAuthKey supplied
*ResellerApi* | [**dissociateIpFromChild**](docs/Api/ResellerApi.md#dissociateipfromchild) | **POST** /reseller/children/{childAuthKey}/ips/dissociate | Dissociate a dedicated IP to the child
*ResellerApi* | [**getChildAccountCreationStatus**](docs/Api/ResellerApi.md#getchildaccountcreationstatus) | **GET** /reseller/children/{childAuthKey}/accountCreationStatus | Returns the status of reseller&#x27;s child account creation, whether it is successfully created (exists) or not based on the childAuthKey supplied
*ResellerApi* | [**getChildDomains**](docs/Api/ResellerApi.md#getchilddomains) | **GET** /reseller/children/{childAuthKey}/domains | Gets all the sender domains of a specific child account
*ResellerApi* | [**getChildInfo**](docs/Api/ResellerApi.md#getchildinfo) | **GET** /reseller/children/{childAuthKey} | Gets the info about a specific child account
*ResellerApi* | [**getResellerChilds**](docs/Api/ResellerApi.md#getresellerchilds) | **GET** /reseller/children | Gets the list of all reseller&#39;s children accounts
*ResellerApi* | [**getSsoToken**](docs/Api/ResellerApi.md#getssotoken) | **GET** /reseller/children/{childAuthKey}/auth | Get session token to access Sendinblue (SSO)
*ResellerApi* | [**removeCredits**](docs/Api/ResellerApi.md#removecredits) | **POST** /reseller/children/{childAuthKey}/credits/remove | Remove Email and/or SMS credits from a specific child account
*ResellerApi* | [**updateChildAccountStatus**](docs/Api/ResellerApi.md#updatechildaccountstatus) | **PUT** /reseller/children/{childAuthKey}/accountStatus | Updates infos of reseller&#39;s child account status based on the childAuthKey supplied
*ResellerApi* | [**updateChildDomain**](docs/Api/ResellerApi.md#updatechilddomain) | **PUT** /reseller/children/{childAuthKey}/domains/{domainName} | Updates the sender domain of reseller&#39;s child based on the childAuthKey and domainName passed
*ResellerApi* | [**updateResellerChild**](docs/Api/ResellerApi.md#updateresellerchild) | **PUT** /reseller/children/{childAuthKey} | Updates infos of reseller&#39;s child based on the childAuthKey supplied
*SMSCampaignsApi* | [**createSmsCampaign**](docs/Api/SMSCampaignsApi.md#createsmscampaign) | **POST** /smsCampaigns | Creates an SMS campaign
*SMSCampaignsApi* | [**deleteSmsCampaign**](docs/Api/SMSCampaignsApi.md#deletesmscampaign) | **DELETE** /smsCampaigns/{campaignId} | Delete the SMS campaign
*SMSCampaignsApi* | [**getSmsCampaign**](docs/Api/SMSCampaignsApi.md#getsmscampaign) | **GET** /smsCampaigns/{campaignId} | Get an SMS campaign
*SMSCampaignsApi* | [**getSmsCampaigns**](docs/Api/SMSCampaignsApi.md#getsmscampaigns) | **GET** /smsCampaigns | Returns the informations for all your created SMS campaigns
*SMSCampaignsApi* | [**requestSmsRecipientExport**](docs/Api/SMSCampaignsApi.md#requestsmsrecipientexport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Exports the recipients of the specified campaign.
*SMSCampaignsApi* | [**sendSmsCampaignNow**](docs/Api/SMSCampaignsApi.md#sendsmscampaignnow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately
*SMSCampaignsApi* | [**sendSmsReport**](docs/Api/SMSCampaignsApi.md#sendsmsreport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send report of SMS campaigns
*SMSCampaignsApi* | [**sendTestSms**](docs/Api/SMSCampaignsApi.md#sendtestsms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send an SMS
*SMSCampaignsApi* | [**updateSmsCampaign**](docs/Api/SMSCampaignsApi.md#updatesmscampaign) | **PUT** /smsCampaigns/{campaignId} | Updates an SMS campaign
*SMSCampaignsApi* | [**updateSmsCampaignStatus**](docs/Api/SMSCampaignsApi.md#updatesmscampaignstatus) | **PUT** /smsCampaigns/{campaignId}/status | Update the campaign status
*SMTPApi* | [**createSmtpTemplate**](docs/Api/SMTPApi.md#createsmtptemplate) | **POST** /smtp/templates | Create a transactional email template
*SMTPApi* | [**deleteHardbounces**](docs/Api/SMTPApi.md#deletehardbounces) | **POST** /smtp/deleteHardbounces | Delete hardbounces
*SMTPApi* | [**deleteSmtpTemplate**](docs/Api/SMTPApi.md#deletesmtptemplate) | **DELETE** /smtp/templates/{templateId} | Delete an inactive transactional email template
*SMTPApi* | [**getAggregatedSmtpReport**](docs/Api/SMTPApi.md#getaggregatedsmtpreport) | **GET** /smtp/statistics/aggregatedReport | Get your transactional email activity aggregated over a period of time
*SMTPApi* | [**getEmailEventReport**](docs/Api/SMTPApi.md#getemaileventreport) | **GET** /smtp/statistics/events | Get all your transactional email activity (unaggregated events)
*SMTPApi* | [**getSmtpReport**](docs/Api/SMTPApi.md#getsmtpreport) | **GET** /smtp/statistics/reports | Get your transactional email activity aggregated per day
*SMTPApi* | [**getSmtpTemplate**](docs/Api/SMTPApi.md#getsmtptemplate) | **GET** /smtp/templates/{templateId} | Returns the template informations
*SMTPApi* | [**getSmtpTemplates**](docs/Api/SMTPApi.md#getsmtptemplates) | **GET** /smtp/templates | Get the list of transactional email templates
*SMTPApi* | [**getTransacBlockedContacts**](docs/Api/SMTPApi.md#gettransacblockedcontacts) | **GET** /smtp/blockedContacts | Get the list of blocked or unsubscribed transactional contacts
*SMTPApi* | [**getTransacEmailContent**](docs/Api/SMTPApi.md#gettransacemailcontent) | **GET** /smtp/emails/{uuid} | Get the personalized content of a sent transactional email
*SMTPApi* | [**getTransacEmailsList**](docs/Api/SMTPApi.md#gettransacemailslist) | **GET** /smtp/emails | Get the list of transactional emails on the basis of allowed filters
*SMTPApi* | [**sendTemplate**](docs/Api/SMTPApi.md#sendtemplate) | **POST** /smtp/templates/{templateId}/send | Send a template
*SMTPApi* | [**sendTestTemplate**](docs/Api/SMTPApi.md#sendtesttemplate) | **POST** /smtp/templates/{templateId}/sendTest | Send a template to your test list
*SMTPApi* | [**sendTransacEmail**](docs/Api/SMTPApi.md#sendtransacemail) | **POST** /smtp/email | Send a transactional email
*SMTPApi* | [**smtpBlockedContactsEmailDelete**](docs/Api/SMTPApi.md#smtpblockedcontactsemaildelete) | **DELETE** /smtp/blockedContacts/{email} | Unblock or resubscribe a transactional contact
*SMTPApi* | [**smtpLogMessageIdDelete**](docs/Api/SMTPApi.md#smtplogmessageiddelete) | **DELETE** /smtp/log/{messageId} | Delete an SMTP transactional log
*SMTPApi* | [**updateSmtpTemplate**](docs/Api/SMTPApi.md#updatesmtptemplate) | **PUT** /smtp/templates/{templateId} | Updates a transactional email templates
*SendersApi* | [**createSender**](docs/Api/SendersApi.md#createsender) | **POST** /senders | Create a new sender
*SendersApi* | [**deleteSender**](docs/Api/SendersApi.md#deletesender) | **DELETE** /senders/{senderId} | Delete a sender
*SendersApi* | [**getIps**](docs/Api/SendersApi.md#getips) | **GET** /senders/ips | Return all the dedicated IPs for your account
*SendersApi* | [**getIpsFromSender**](docs/Api/SendersApi.md#getipsfromsender) | **GET** /senders/{senderId}/ips | Return all the dedicated IPs for a sender
*SendersApi* | [**getSenders**](docs/Api/SendersApi.md#getsenders) | **GET** /senders | Get the list of all your senders
*SendersApi* | [**updateSender**](docs/Api/SendersApi.md#updatesender) | **PUT** /senders/{senderId} | Update a sender
*TransactionalSMSApi* | [**getSmsEvents**](docs/Api/TransactionalSMSApi.md#getsmsevents) | **GET** /transactionalSMS/statistics/events | Get all the SMS activity (unaggregated events)
*TransactionalSMSApi* | [**getTransacAggregatedSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacaggregatedsmsreport) | **GET** /transactionalSMS/statistics/aggregatedReport | Get your SMS activity aggregated over a period of time
*TransactionalSMSApi* | [**getTransacSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacsmsreport) | **GET** /transactionalSMS/statistics/reports | Get your SMS activity aggregated per day
*TransactionalSMSApi* | [**sendTransacSms**](docs/Api/TransactionalSMSApi.md#sendtransacsms) | **POST** /transactionalSMS/sms | Send the SMS campaign to the specified mobile number
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create a webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhookId} | Get a webhook details
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | Get all webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhookId} | Update a webhook


## Documentation For Models

 - [AbTestCampaignResult](docs/Model/AbTestCampaignResult.md)
 - [AddChildDomain](docs/Model/AddChildDomain.md)
 - [AddContactToList](docs/Model/AddContactToList.md)
 - [AddCredits](docs/Model/AddCredits.md)
 - [CreateAttribute](docs/Model/CreateAttribute.md)
 - [CreateAttributeEnumeration](docs/Model/CreateAttributeEnumeration.md)
 - [CreateChild](docs/Model/CreateChild.md)
 - [CreateContact](docs/Model/CreateContact.md)
 - [CreateEmailCampaign](docs/Model/CreateEmailCampaign.md)
 - [CreateEmailCampaignRecipients](docs/Model/CreateEmailCampaignRecipients.md)
 - [CreateEmailCampaignSender](docs/Model/CreateEmailCampaignSender.md)
 - [CreateList](docs/Model/CreateList.md)
 - [CreateModel](docs/Model/CreateModel.md)
 - [CreateReseller](docs/Model/CreateReseller.md)
 - [CreateSender](docs/Model/CreateSender.md)
 - [CreateSenderIps](docs/Model/CreateSenderIps.md)
 - [CreateSenderModel](docs/Model/CreateSenderModel.md)
 - [CreateSmsCampaign](docs/Model/CreateSmsCampaign.md)
 - [CreateSmsCampaignRecipients](docs/Model/CreateSmsCampaignRecipients.md)
 - [CreateSmtpEmail](docs/Model/CreateSmtpEmail.md)
 - [CreateSmtpTemplate](docs/Model/CreateSmtpTemplate.md)
 - [CreateSmtpTemplateSender](docs/Model/CreateSmtpTemplateSender.md)
 - [CreateUpdateContactModel](docs/Model/CreateUpdateContactModel.md)
 - [CreateUpdateFolder](docs/Model/CreateUpdateFolder.md)
 - [CreateWebhook](docs/Model/CreateWebhook.md)
 - [CreatedProcessId](docs/Model/CreatedProcessId.md)
 - [DeleteHardbounces](docs/Model/DeleteHardbounces.md)
 - [EmailExportRecipients](docs/Model/EmailExportRecipients.md)
 - [ErrorModel](docs/Model/ErrorModel.md)
 - [GetAccountMarketingAutomation](docs/Model/GetAccountMarketingAutomation.md)
 - [GetAccountPlan](docs/Model/GetAccountPlan.md)
 - [GetAccountRelay](docs/Model/GetAccountRelay.md)
 - [GetAccountRelayData](docs/Model/GetAccountRelayData.md)
 - [GetAggregatedReport](docs/Model/GetAggregatedReport.md)
 - [GetAttributes](docs/Model/GetAttributes.md)
 - [GetAttributesAttributes](docs/Model/GetAttributesAttributes.md)
 - [GetAttributesEnumeration](docs/Model/GetAttributesEnumeration.md)
 - [GetCampaignOverview](docs/Model/GetCampaignOverview.md)
 - [GetCampaignRecipients](docs/Model/GetCampaignRecipients.md)
 - [GetCampaignStats](docs/Model/GetCampaignStats.md)
 - [GetChildAccountCreationStatus](docs/Model/GetChildAccountCreationStatus.md)
 - [GetChildDomain](docs/Model/GetChildDomain.md)
 - [GetChildDomains](docs/Model/GetChildDomains.md)
 - [GetChildInfoApiKeys](docs/Model/GetChildInfoApiKeys.md)
 - [GetChildInfoApiKeysV2](docs/Model/GetChildInfoApiKeysV2.md)
 - [GetChildInfoApiKeysV3](docs/Model/GetChildInfoApiKeysV3.md)
 - [GetChildInfoCredits](docs/Model/GetChildInfoCredits.md)
 - [GetChildInfoStatistics](docs/Model/GetChildInfoStatistics.md)
 - [GetChildrenList](docs/Model/GetChildrenList.md)
 - [GetClient](docs/Model/GetClient.md)
 - [GetContactCampaignStats](docs/Model/GetContactCampaignStats.md)
 - [GetContactCampaignStatsClicked](docs/Model/GetContactCampaignStatsClicked.md)
 - [GetContactCampaignStatsOpened](docs/Model/GetContactCampaignStatsOpened.md)
 - [GetContactCampaignStatsTransacAttributes](docs/Model/GetContactCampaignStatsTransacAttributes.md)
 - [GetContactCampaignStatsUnsubscriptions](docs/Model/GetContactCampaignStatsUnsubscriptions.md)
 - [GetContactDetails](docs/Model/GetContactDetails.md)
 - [GetContacts](docs/Model/GetContacts.md)
 - [GetDeviceBrowserStats](docs/Model/GetDeviceBrowserStats.md)
 - [GetEmailCampaign](docs/Model/GetEmailCampaign.md)
 - [GetEmailCampaigns](docs/Model/GetEmailCampaigns.md)
 - [GetEmailEventReport](docs/Model/GetEmailEventReport.md)
 - [GetEmailEventReportEvents](docs/Model/GetEmailEventReportEvents.md)
 - [GetExtendedCampaignOverviewSender](docs/Model/GetExtendedCampaignOverviewSender.md)
 - [GetExtendedCampaignStats](docs/Model/GetExtendedCampaignStats.md)
 - [GetExtendedClientAddress](docs/Model/GetExtendedClientAddress.md)
 - [GetExtendedContactDetailsStatistics](docs/Model/GetExtendedContactDetailsStatistics.md)
 - [GetExtendedContactDetailsStatisticsClicked](docs/Model/GetExtendedContactDetailsStatisticsClicked.md)
 - [GetExtendedContactDetailsStatisticsLinks](docs/Model/GetExtendedContactDetailsStatisticsLinks.md)
 - [GetExtendedContactDetailsStatisticsMessagesSent](docs/Model/GetExtendedContactDetailsStatisticsMessagesSent.md)
 - [GetExtendedContactDetailsStatisticsOpened](docs/Model/GetExtendedContactDetailsStatisticsOpened.md)
 - [GetExtendedContactDetailsStatisticsUnsubscriptions](docs/Model/GetExtendedContactDetailsStatisticsUnsubscriptions.md)
 - [GetExtendedContactDetailsStatisticsUnsubscriptionsAdminUnsubscription](docs/Model/GetExtendedContactDetailsStatisticsUnsubscriptionsAdminUnsubscription.md)
 - [GetExtendedContactDetailsStatisticsUnsubscriptionsUserUnsubscription](docs/Model/GetExtendedContactDetailsStatisticsUnsubscriptionsUserUnsubscription.md)
 - [GetExtendedListCampaignStats](docs/Model/GetExtendedListCampaignStats.md)
 - [GetFolder](docs/Model/GetFolder.md)
 - [GetFolderLists](docs/Model/GetFolderLists.md)
 - [GetFolders](docs/Model/GetFolders.md)
 - [GetIp](docs/Model/GetIp.md)
 - [GetIpFromSender](docs/Model/GetIpFromSender.md)
 - [GetIps](docs/Model/GetIps.md)
 - [GetIpsFromSender](docs/Model/GetIpsFromSender.md)
 - [GetList](docs/Model/GetList.md)
 - [GetLists](docs/Model/GetLists.md)
 - [GetProcess](docs/Model/GetProcess.md)
 - [GetProcesses](docs/Model/GetProcesses.md)
 - [GetReports](docs/Model/GetReports.md)
 - [GetReportsReports](docs/Model/GetReportsReports.md)
 - [GetSendersList](docs/Model/GetSendersList.md)
 - [GetSendersListIps](docs/Model/GetSendersListIps.md)
 - [GetSendersListSenders](docs/Model/GetSendersListSenders.md)
 - [GetSharedTemplateUrl](docs/Model/GetSharedTemplateUrl.md)
 - [GetSmsCampaignOverview](docs/Model/GetSmsCampaignOverview.md)
 - [GetSmsCampaignStats](docs/Model/GetSmsCampaignStats.md)
 - [GetSmsCampaigns](docs/Model/GetSmsCampaigns.md)
 - [GetSmsEventReport](docs/Model/GetSmsEventReport.md)
 - [GetSmsEventReportEvents](docs/Model/GetSmsEventReportEvents.md)
 - [GetSmtpTemplateOverview](docs/Model/GetSmtpTemplateOverview.md)
 - [GetSmtpTemplateOverviewSender](docs/Model/GetSmtpTemplateOverviewSender.md)
 - [GetSmtpTemplates](docs/Model/GetSmtpTemplates.md)
 - [GetSsoToken](docs/Model/GetSsoToken.md)
 - [GetStatsByBrowser](docs/Model/GetStatsByBrowser.md)
 - [GetStatsByDevice](docs/Model/GetStatsByDevice.md)
 - [GetStatsByDomain](docs/Model/GetStatsByDomain.md)
 - [GetTransacAggregatedSmsReport](docs/Model/GetTransacAggregatedSmsReport.md)
 - [GetTransacBlockedContacts](docs/Model/GetTransacBlockedContacts.md)
 - [GetTransacBlockedContactsContacts](docs/Model/GetTransacBlockedContactsContacts.md)
 - [GetTransacBlockedContactsReason](docs/Model/GetTransacBlockedContactsReason.md)
 - [GetTransacEmailContent](docs/Model/GetTransacEmailContent.md)
 - [GetTransacEmailContentEvents](docs/Model/GetTransacEmailContentEvents.md)
 - [GetTransacEmailsList](docs/Model/GetTransacEmailsList.md)
 - [GetTransacEmailsListTransactionalEmails](docs/Model/GetTransacEmailsListTransactionalEmails.md)
 - [GetTransacSmsReport](docs/Model/GetTransacSmsReport.md)
 - [GetTransacSmsReportReports](docs/Model/GetTransacSmsReportReports.md)
 - [GetWebhook](docs/Model/GetWebhook.md)
 - [GetWebhooks](docs/Model/GetWebhooks.md)
 - [ManageIp](docs/Model/ManageIp.md)
 - [PostContactInfo](docs/Model/PostContactInfo.md)
 - [PostContactInfoContacts](docs/Model/PostContactInfoContacts.md)
 - [PostSendFailed](docs/Model/PostSendFailed.md)
 - [PostSendSmsTestFailed](docs/Model/PostSendSmsTestFailed.md)
 - [RemainingCreditModel](docs/Model/RemainingCreditModel.md)
 - [RemainingCreditModelChild](docs/Model/RemainingCreditModelChild.md)
 - [RemainingCreditModelReseller](docs/Model/RemainingCreditModelReseller.md)
 - [RemoveContactFromList](docs/Model/RemoveContactFromList.md)
 - [RemoveCredits](docs/Model/RemoveCredits.md)
 - [RequestContactExport](docs/Model/RequestContactExport.md)
 - [RequestContactExportCustomContactFilter](docs/Model/RequestContactExportCustomContactFilter.md)
 - [RequestContactImport](docs/Model/RequestContactImport.md)
 - [RequestContactImportNewList](docs/Model/RequestContactImportNewList.md)
 - [RequestSmsRecipientExport](docs/Model/RequestSmsRecipientExport.md)
 - [SendEmail](docs/Model/SendEmail.md)
 - [SendEmailAttachment](docs/Model/SendEmailAttachment.md)
 - [SendReport](docs/Model/SendReport.md)
 - [SendReportEmail](docs/Model/SendReportEmail.md)
 - [SendSms](docs/Model/SendSms.md)
 - [SendSmtpEmail](docs/Model/SendSmtpEmail.md)
 - [SendSmtpEmailAttachment](docs/Model/SendSmtpEmailAttachment.md)
 - [SendSmtpEmailBcc](docs/Model/SendSmtpEmailBcc.md)
 - [SendSmtpEmailCc](docs/Model/SendSmtpEmailCc.md)
 - [SendSmtpEmailReplyTo](docs/Model/SendSmtpEmailReplyTo.md)
 - [SendSmtpEmailSender](docs/Model/SendSmtpEmailSender.md)
 - [SendSmtpEmailTo](docs/Model/SendSmtpEmailTo.md)
 - [SendTemplateEmail](docs/Model/SendTemplateEmail.md)
 - [SendTestEmail](docs/Model/SendTestEmail.md)
 - [SendTestSms](docs/Model/SendTestSms.md)
 - [SendTransacSms](docs/Model/SendTransacSms.md)
 - [UpdateAttribute](docs/Model/UpdateAttribute.md)
 - [UpdateAttributeEnumeration](docs/Model/UpdateAttributeEnumeration.md)
 - [UpdateCampaignStatus](docs/Model/UpdateCampaignStatus.md)
 - [UpdateChild](docs/Model/UpdateChild.md)
 - [UpdateChildAccountStatus](docs/Model/UpdateChildAccountStatus.md)
 - [UpdateChildDomain](docs/Model/UpdateChildDomain.md)
 - [UpdateContact](docs/Model/UpdateContact.md)
 - [UpdateEmailCampaign](docs/Model/UpdateEmailCampaign.md)
 - [UpdateEmailCampaignRecipients](docs/Model/UpdateEmailCampaignRecipients.md)
 - [UpdateEmailCampaignSender](docs/Model/UpdateEmailCampaignSender.md)
 - [UpdateList](docs/Model/UpdateList.md)
 - [UpdateSender](docs/Model/UpdateSender.md)
 - [UpdateSmsCampaign](docs/Model/UpdateSmsCampaign.md)
 - [UpdateSmtpTemplate](docs/Model/UpdateSmtpTemplate.md)
 - [UpdateSmtpTemplateSender](docs/Model/UpdateSmtpTemplateSender.md)
 - [UpdateWebhook](docs/Model/UpdateWebhook.md)
 - [GetChildInfo](docs/Model/GetChildInfo.md)
 - [GetExtendedCampaignOverview](docs/Model/GetExtendedCampaignOverview.md)
 - [GetExtendedClient](docs/Model/GetExtendedClient.md)
 - [GetExtendedContactDetails](docs/Model/GetExtendedContactDetails.md)
 - [GetExtendedList](docs/Model/GetExtendedList.md)
 - [GetSmsCampaign](docs/Model/GetSmsCampaign.md)
 - [GetAccount](docs/Model/GetAccount.md)
 - [GetEmailCampaign](docs/Model/GetEmailCampaign.md)


## Documentation For Authorization


## api-key

The API key should be passed in the request headers as `api-key` for authentication.

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header

## partner-key

The partner key should be passed in the request headers as `partner-key` along with `api-key` pair for successful authentication of partner (Optional).

- **Type**: API key
- **API key parameter name**: partner-key
- **Location**: HTTP header


If you find a bug, please post the issue on [Github](https://github.com/sendinblue/APIv3-php-library/issues).

As always, if you need additional assistance, drop us a note [here](https://account.sendinblue.com/support).
