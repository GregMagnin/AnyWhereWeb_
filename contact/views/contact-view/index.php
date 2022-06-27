<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

require_once '../contact/tools/db/db_connect.php';
$db = connectDB();

$sql   = 'SELECT * FROM contacts order by id DESC limit 77';
$query = $db->prepare($sql);
$query->execute();
$contacts = $query->fetchAll(\PDO::FETCH_ASSOC);

// echo implode('<br>', $contacts);

// echo '<pre>';
// var_dump($contacts);
// echo '</pre>';

// 2do media queries pour longs messages
?>

<!-- <table class="table table-hover table-responsive-sm"> -->
<table class="table table-hover">
  
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Cible</th>
      <th scope="col" style="width:100px">Message</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach ($contacts as $contact) { ?>
    <tr>
      <a href="\">
      <td scope="row"><?php echo $contact['id']; ?></th>
      <td><?php echo $contact['username']; ?></td>
      <td><?php echo $contact['email']; ?></td>
      <td><?php echo $contact['object']; ?></td>
      <td class="lg-text"><?php echo $contact['message']; ?></td>
      </a>
    </tr>
   <?php } ?> 
  </tbody>
  
</table>
