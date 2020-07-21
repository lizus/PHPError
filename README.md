# PHPError
PHPError

A simple Class for php errors;

## use sample:

```php
use \Lizus\Error\PHPError;
use function \Lizus\Error\{is_error};

$err=new PHPError();
$err->add_error('email_error','please enter email address');
$err->add_error('email_error','must has `@` in email address');

$err->add_error('name_error','need more than 4 characters');

$err->remove_error('sex_error');

var_dump($err->get_all_errors());
```
