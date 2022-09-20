<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'arthur.avd69@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = "Arthur";
  $contact->from_email = "attendvendredi@gmail.com";
  $contact->subject = "Test";

  $contact->add_message( "Arthur", 'From');
  $contact->add_message( "attendvendredi@gmail.com", 'Email');
  $contact->add_message( "Ceci est un test", 'Message', 10);

  echo $contact->send();
?>
