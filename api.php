<?php

$dischi = [
    [
        "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
        "title" => "New jersey",
        "author" => "Bon jovi",
        "genre" => "Rock",
        "year" => "1998"
    ],
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "live at wembly",
        "author" => "Queen",
        "genre" => "Rock",
        "year" => "1992"
    ],
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
        "title" => "Ten's Summoner's Tales",
        "author" => "Sting",
        "genre" => "Pop",
        "year" => "1998"
    ],
    [
        "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
        "title" => "Steve Gadd Band",
        "author" => "Steve Gadd Band",
        "genre" => "Jazz",
        "year" => "2018"
    ],
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
        "title" => "Brave new World",
        "author" => "Iron Maiden",
        "genre" => "2000",
        "year" => "Metal"
    ],


];

header("Content-Type: application/json; charset=utf-8");
echo json_encode($dischi);
