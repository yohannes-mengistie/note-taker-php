<?php
    $books = [
        [
            'author' => 'alie walker',
            'title' => 'the blak marry',
            'placeholderUrl' => 'www.example.com'
        ],
        [
            'author' => 'alie josh',
            'title' =>'the little boy',
            'placeholderUrl' => 'www.example.com'
        ],
        [
            'author' => 'joe walker',
            'title' => 'the guy found ',
            'placeholderUrl' => 'www.example.com'
        ],
        [
            'author' => 'joe walker',
            'title' => 'the big boy',
            'placeholderUrl' => 'www.example.com'
        ]
        
        
        
        ];

     function findByAuthor($books){
        $filteredBook = [];
        foreach($books as $book){
            if($book['author'] === 'joe walker'){
                $filteredBook[] = $book;
            }
            
        }
        return $filteredBook;
     }

$heading = 'About us';
// echo $_SERVER['REQUEST_URI'];
// require base_path('function.php');
view('about.view.php',[
    'heading' => $heading
]);


