# prestashop-no-spam #
A basic solution to prevent annoying spammer from sending messages to your contact form.

# ContactController.php #
* Create a file ContactController.php and locate it in overrides/controllers/front/
* Add email addresses to the public variable $spammers as indicacted below in the code below. Don't forget to add a comma.

```<?php

class ContactController extends ContactControllerCore {
    public $spammers = [
        "annoying.spammer.from@gmail.com",
        "another.annoying.spammer.from@gmail.com
    ];
    
    public function postProcess()
    {
        if (Tools::isSubmit('submitMessage')) {
            if (!in_array(Tools::getValue('from'), $this->spammers))
            {
                parent::postProcess();
            }
            else {
                Tools::redirect('pagenotfound');
            }
        }
    }
}
```


# Delete _class_index.php #

Search in var/cache/prod/ for the file _class_index.php and delete it. Prestashop will regenerate it with the override.
