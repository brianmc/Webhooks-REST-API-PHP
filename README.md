# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Webhooks%20REST%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the WebhooksRESTAPILib library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Webhooks%20REST%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Webhooks%20REST%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Webhooks%20REST%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Webhooks%20REST%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Webhooks%20REST%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Webhooks%20REST%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Webhooks%20REST%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Webhooks%20REST%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Webhooks%20REST%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Webhooks%20REST%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Webhooks%20REST%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Webhooks%20REST%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$basicAuthUserName = "basicAuthUserName"; // The username to use with basic authentication
$basicAuthPassword = "basicAuthPassword"; // The password to use with basic authentication

$client = new WebhooksRESTAPILib\WebhooksRESTAPILibClient($basicAuthUserName, $basicAuthPassword);
```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [MiscController](#misc_controller)

## <a name="misc_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MiscController") MiscController

### Get singleton instance

The singleton instance of the ``` MiscController ``` class can be accessed from the API Client.

```php
$misc = $client->getMisc();
```

### <a name="get_notifications_ora"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.getNotificationsORA") getNotificationsORA

> TODO: Add Description


```php
function getNotificationsORA(
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'application/json';
$authorization = 'Basic bmV3LXZpdGFsLWZuYm86MTIzYWJj';

$misc->getNotificationsORA($contentType, $authorization);

```


### <a name="delete_a_web_hook"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.deleteAWebHook") deleteAWebHook

> TODO: Add Description


```php
function deleteAWebHook(
        $body,
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\r\n  \"eventType\": [\"payment.authorization.created\",\"payment.capture.created\"],\r\n  \"url\": \"https://mysite/callback\",\r\n  \"status\": \"active\"\r\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->deleteAWebHook($body, $contentType, $authorization);

```


### <a name="get_notifications_by_status"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.getNotificationsByStatus") getNotificationsByStatus

> TODO: Add Description


```php
function getNotificationsByStatus(
        $deliveryStatus,
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| deliveryStatus |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$deliveryStatus = 'Failed';
$contentType = 'application/json';
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->getNotificationsByStatus($deliveryStatus, $contentType, $authorization);

```


### <a name="get_notifications_by_date"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.getNotificationsByDate") getNotificationsByDate

> TODO: Add Description


```php
function getNotificationsByDate(
        $fromDate,
        $toDate,
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fromDate |  ``` Required ```  | TODO: Add a parameter description |
| toDate |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fromDate = 2016-08-16;
$toDate = 2016-08-20;
$contentType = 'application/json';
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->getNotificationsByDate($fromDate, $toDate, $contentType, $authorization);

```


### <a name="get_notifications"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.getNotifications") getNotifications

> TODO: Add Description


```php
function getNotifications(
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'application/json';
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->getNotifications($contentType, $authorization);

```


### <a name="update_a_web_hook"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.updateAWebHook") updateAWebHook

> TODO: Add Description


```php
function updateAWebHook(
        $body,
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\n  \"status\": \"inactive\",\n  \"url\": \"http://requestb.in/1msxl041\",\n  \"eventTypes\": [\n    \"net.authorize.payment.authorization.created\"\n  ]\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->updateAWebHook($body, $contentType, $authorization);

```


### <a name="get_a_web_hook"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.getAWebHook") getAWebHook

> TODO: Add Description


```php
function getAWebHook(
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'application/json';
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->getAWebHook($contentType, $authorization);

```


### <a name="get_web_hooks"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.getWebHooks") getWebHooks

> TODO: Add Description


```php
function getWebHooks(
        $contentType,
        $authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'application/json';
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->getWebHooks($contentType, $authorization);

```


### <a name="create_a_new_web_hook"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.createANewWebHook") createANewWebHook

> TODO: Add Description


```php
function createANewWebHook(
        $body,
        $authorization,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| authorization |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\n  \"url\": \"http://requestb.in/14ghojp1\",\n  \"eventTypes\": [\n    \"net.authorize.payment.fraud.held\",\n    \"net.authorize.payment.fraud.approved\",\n    \"net.authorize.payment.fraud.declined\",\n    \"net.authorize.payment.authcapture.created\",\n    \"net.authorize.customer.paymentProfile.created\",\n    \"net.authorize.customer.paymentProfile.updated\",\n    \"net.authorize.customer.paymentProfile.deleted\"\n  ],\n  \"status\": \"active\"\n}";
$body = APIHelper::deserialize($bodyValue);
$authorization = 'Basic M2UzYjVINFlMUDo0Z1czOVA2M0JIbW5rNDUy';
$contentType = 'application/json';

$misc->createANewWebHook($body, $authorization, $contentType);

```


### <a name="create_send_a_test_notification"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.createSendATestNotification") createSendATestNotification

> TODO: Add Description


```php
function createSendATestNotification($authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$authorization = 'Basic ODluRTRCZWg6N3MyZzN5V0MzVGZDOTJwMg==';

$misc->createSendATestNotification($authorization);

```


### <a name="get_event_types"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.getEventTypes") getEventTypes

> TODO: Add Description


```php
function getEventTypes($authorization)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$authorization = 'Basic M2UzYjVINFlMUDo0Z1czOVA2M0JIbW5rNDUy';

$misc->getEventTypes($authorization);

```


[Back to List of Controllers](#list_of_controllers)



