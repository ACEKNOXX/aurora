<?php
// headers
header('Access-Control-Allow-Origin: *');
header('Content-Type:application/json');

include '../config/db.php';
include '../models/POST.php';


// Instantiate DB & connect
$database = new Database();
$db = $database->conn;

// instantiate Blog Post Object
$post = new Post($db);

//Blog POST query
$result = $post->read();
// Get row Count
$num = $result->rowCount();

// Check if any posts
if($num>0){
    // POST array
    $post_arr = array();
    $post_arr['data'] = array();
    while( $row = $result->fetch(PDO::FETCH_ASSOC) ){
        extract($row);

        $post_item = [
            'id'=>$id,
            'title'=>$title,
            'body'=>html_entity_decode($body),
            'author'=>$author,
            'category_id'=>$category_id,
            'category_name'=>$category_name
        ];

        // Push to db
        array_push($post_arr['data'],$post_item);
    } 

    echo json_encode($post_arr);
}else{
    $res=[
        'message'=>'No Post Found'
    ];
    echo json_encode($res);
}