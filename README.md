# prestashop-no-spam
A basic solution to prevent annoying spammer from sending messages to your contact form.

Create a file ContactController.php and locate it in overrides/controllers/front/
<?php

class ContactController extends ContactControllerCore {
    public $spammers = [
        "annoying.spammer.from@gmail.com"
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

# Delete _class_index.php 
Search in var/cache/prod/ for the file _class_index.php and delete it. Prestashop will regenerate it with the override.
