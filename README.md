# prestashop-no-spam #
A basic solution to prevent annoying spammer from sending messages to your contact form.

# ContactController.php #
* Download ContactController.php and locate it in overrides/controllers/front/
* Add email addresses to the public variable $spammers as indicacted in the file ContactController.php. Don't forget to add comma's.

# Delete _class_index.php #
* Search in var/cache/prod/ for the file _class_index.php and delete it. Prestashop will regenerate it with the override.
