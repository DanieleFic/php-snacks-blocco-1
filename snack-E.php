<?php
    $alunni = [
        [
            'nome' => 'Daniele',
            'Cognome' => 'Ficus',
            'voti' => [
                'Italiano' => "5",
                'Matematica' => "8",
                'Storia' => "6",
                'Geografia' => "1"
            ]
        ],
        [
            'nome' => 'Mario',
            'Cognome' => 'Rossi',
            'voti' => [
                'Italiano' => "3",
                'Matematica' => "6",
                'Storia' => "3",
                'Geografia' => "3"
            ]
        ],
        [
            'nome' => 'Albano',
            'Cognome' => 'Romina',
            'voti' => [
                'Italiano' => "5",
                'Matematica' => "6",
                'Storia' => "1",
                'Geografia' => "3"
            ]
        ],
        [
            'nome' => 'Milan',
            'Cognome' => 'Inter',
            'voti' => [
                'Italiano' => "3",
                'Matematica' => "5",
                'Storia' => "8",
                'Geografia' => "1"
            ]
        ],
    ];



    for ($i = 0; $i < count($alunni); $i++) {

        $average = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']); //media dei voti 

        echo $alunni[$i]['nome'].' '.$alunni[$i]['Cognome'].'-'.$average.'<br>';
    };

?>