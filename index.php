<!-- Snack 1 -->

<?php
    //1) Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    //Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    $campionato = [
        [
            'squadra_casa' => 'Padova',
            'squadra_ospiti' => 'Reggina',
            'puntiCasa' => 127,
            'puntiOspiti' => 16,
        ],
        [
            'squadra_casa' => 'Milano Porta Nuova',
            'squadra_ospiti' => 'Milano Malpensa',
            'puntiCasa' => 77,
            'puntiOspiti' => 78,
        ],  
        [
            'squadra_casa' => 'Catania',
            'squadra_ospiti' => 'Catanzaro',
            'puntiCasa' => 56,
            'puntiOspiti' => 88,
        ],
    ];
    //2) Stampiamo a schermo tutte le partite con questo schema. 
    //es: Olimpia Milano - Cantù | 55-60
    for ($i = 0; $i < count($campionato); $i++) {
        echo '<div>'.$campionato[$i]['squadra_casa'].' '.'-'.' '.$campionato[$i]['squadra_ospiti'].' '.'|'.' '.$campionato[$i]['puntiCasa'].'-'.$campionato[$i]['puntiOspiti'].'<div/>';
    };
?>

<!-- Snack 2 -->

<?php
    //1) Passare come parametri GET name, mail e age
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    /*2) verificare (cercando i metodi che non conosciamo nella documentazione) che:
        a) name sia più lungo di 3 caratteri,
        b) che mail contenga un punto e una chiocciola 
        c) che age sia un numero. */  
    if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
        //3) se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>