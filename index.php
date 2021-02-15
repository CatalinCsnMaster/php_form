<?php
require './Includes/Form.php';
require './Includes/InputField.php';
require './Includes/Textarea.php';
require './Includes/Checkbox.php';
$action = '/doStuff';
$method = 'POST';

$form = new Form($action, $method);
$form->addField(new InputField('nume'));
$form->addField(new InputField('prenume'));
$form->addField(new Textarea('adresa'));
$form->addField(new Checkbox('termeni_si_conditii'));
$form->display();