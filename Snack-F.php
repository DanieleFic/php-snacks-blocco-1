<?php
//live coding fatto in classe 
$posts = [

'10/01/2019' => [
    [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
    ],
    [
        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 2'
    ],
],
'10/02/2019' => [
    [
        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 3'
    ]
],
'15/05/2019' => [
    [
        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 4'
    ],
    [
        'title' => 'Post 5',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 5'
    ],
    [
        'title' => 'Post 6',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 6'
    ]
],
];

foreach ($posts as  $data => $element){
    echo $data."<br>";
    foreach ($element as  $key => $post){
        echo "<ul>";
        foreach ($post as  $key => $valore){

            echo "<li> $key: $valore</li>";
        }
        
        echo "</ul>";
        echo "<hr>";
    }
}

















?>
