<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

session_start();

require_once '../../classes/Nett.php';
require_once dirname(__FILE__, 3) . '/tools/mail/send_mail.php';
// require_once dirname(__FILE__,3).'/tools/save_contact.php';
// require_once '../../tools/db/save_contact.php';

$_SESSION['result'] = (
	($_POST['username'] ?? null) &&
	($_POST['email'] ?? null) &&
  (($_POST['object'] ?? null) &&
  $_POST['message'] ?? null) && strlen($_POST['message']) > 3 &&
  Nett::ss($_POST) &&
  sendMail($_POST)
  //  &&
  // saveContact($_POST)
)
?
  '<div class="msg-green">Votre message a été parfaitement envoyé.<br>
  Aussi, nous vous y feront suite dans les plus brefs délais si nécessaire.</div>'

:'<div class="msg-red">Merci de remplir correctement tous les champs !</div>';

// echo $host . $uri . '/page=feature_contact-form/contact-form.php';

header('Location: http://localhost/AWW/page/contact/index.php');
