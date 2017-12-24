<?php
use Illuminate\Http\Request;
$app = require __DIR__.'/../bootstrap/app.php';

class Users extends \Illuminate\Database\Eloquent\Model {
  protected $table = 'users';
}

$app->run();
