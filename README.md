# Email Notification Library using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require rafaeldms/notification
```

To make use of the library, simply require the autoload of the composer, invoke the class and make the method call:

```sh
<? php

require __DIR__ . '/vendor/autoload.php';

use Notification\Email;

$mail = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$email-> sendEmail ("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic method builder! Once you've invoked the constructor method within your application, your system will be able to fire the shots.

### Developers
* [Rafael Damasceno Ferreira] - Developer of this library and Developer of the Library and in [CAGEP - Developer] - Consultancy and Advice in Public Management!
* [CAGEP] - Consulting and Advisory in Public Management
* [phpMailer] - Lib to send Email

# License
....

MIT

** Plus One UpInside Training Courses, Make Good Use! **

[//]: #
[Rafael Damasceno Ferreira]: <mailto: mds_rafinha@hotmail.com>
[CAGEP - Developer]: <https://www.cagep.com.br/profissional/rafael-damasceno-ferreira>
[CAGEP]: <https://www.cagep.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer> 