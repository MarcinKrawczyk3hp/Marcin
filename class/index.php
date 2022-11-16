<?PHP
require_once('User.class.php');

$user = new User('jkowalski', 'tajnehasło');

echo '<pre>';
var_dump($user);
?>