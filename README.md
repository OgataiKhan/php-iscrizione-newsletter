# PHP Iscrizione Newsletter

This project is the mockup of a simple newsletter registration form.  
The user is asked to enter an email address into the input form. The input is then validated by checking whether it contains a dot (".") and an "at" symbol ("@"). If the address is invalid, an alert is displayed inviting the user to enter a valid address. If the address is valid, the user is redirected towards a thankyou page showing a successful alert with the entered address.

PHP sessions are used to access the email address from different pages.  
The logic is delegated to a separate file by using require_once.