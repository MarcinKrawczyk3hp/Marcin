<?PHP
require_once('User.class.php');

$user = new User('jkowalski', 'tajnehasło');
$user->register();

echo '<pre>';
var_dump($user);
?>