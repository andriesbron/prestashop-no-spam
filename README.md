# Prestashop 1.7 No Spam #
A basic blacklist solution to prevent annoying spammers from sending messages via the contact form. 
If you are interested in the module version, stay tuned I plan to update this with a module for a more convenient use within the store environment.

# ContactController.php #
* Download ContactController.php and locate it in override/controllers/front/
* Add email addresses to the public variable $spammers as indicacted in the file ContactController.php. Don't forget to add comma's.

# Delete class_index.php #
* Search in var/cache/prod/ for the file _class_index.php and delete it. Prestashop will regenerate it with the override.
