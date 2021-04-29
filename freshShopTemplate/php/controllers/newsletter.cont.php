<?php
require_once('../models/dbconnection.php');
require_once('../models/Newsletter.class.php');


if(isset($_POST['Email']))
{
  $newsletter = new Newsletter($_POST['Email']);
  $newsletter->saveEmail($_POST['Email']);

  require_once('../views/indexView.php');

}

