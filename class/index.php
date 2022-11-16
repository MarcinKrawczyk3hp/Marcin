<?PHP
require_once('User.class.php');

$user = new User('jkowalski', 'tajnehasło');
/*$user->register();*/

/*
if($user->register()) {
    echo "Zarejestrowano poprawnie";
} else {
    echo "Błąd rejestracji użytkownika";
}
*/

if($user->login()) {
    echo "Zalogowano poprawnie";
} else {
    echo "Błędny login lub hasło";
}

echo '<pre>';
var_dump($user);
?>