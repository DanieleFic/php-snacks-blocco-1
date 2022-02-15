<!-- Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [
        [
            'team1' => 'Milan',
            'team2' => 'Inter',
            'point_team_1' => 5,
            'point_team_2' => '0'
        ],
        [
            'team1' => 'Juventus',
            'team2' => 'Sampdoria',
            'point_team_1' => 0,
            'point_team_2' => '3'
        ],
        [
            'team1' => 'Roma',
            'team2' => 'Bologna',
            'point_team_1' => 1,
            'point_team_2' => '1'
        ],
        [
            'team1' => 'Napoli',
            'team2' => 'Fiorentina',
            'point_team_1' => 0,
            'point_team_2' => '0'
        ],
    ];

    for ($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]['team1'].'-'.$partite[$i]['team2'].'-'.$partite[$i]['point_team_1'].'-'.$partite[$i]['point_team_2'].'<br>';
    }; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack A</title>
</head>
<body>
</body>
</html>