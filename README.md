## mailChip-Api-
Using MailChip API to manage subscriber , delete,add subscribers to mailList Using PHP With Ajax

## Usage

**include mailC.php file in your principale file**
```



include('./mailC.php');
```
** assign new MailChip Object to a Varaible**
```

$MailChimp = new MailChimp('4bc5602cf2ea3fcf8ecd35e9f09866f1-us17');
```
** to get mailChip List** 
use get Method
```
$result = $MailChimp->get('lists');
print_r($result)
```
** To add new Subscriber to an List **
Use post Method
```
// add subscriber to mail list
$result = $MailChimp->post("lists/$list_id/members", [
				'email_address' => $mail,
				'status'        => 'subscribed',
			]);
      ```
      *** That 's it :) ***
