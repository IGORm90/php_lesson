<?php

include_once('model/functions.php');

$left = template('v_contacts_left');
$content = template('v_contacts');



$pageTitle = 'contacts';
$pageContent = template('base/v_con2col', [
    'left' => $left,
    'content' => $content,
    'title' => 'Contacts',
]);
?>