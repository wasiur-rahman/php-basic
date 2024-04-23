<?php
require_once('function.php');

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

dd($url);

if($url ==='/phpblog/' ){
    
    require 'controller/index.php';
}else if($url ==='/phpblog/about'){
    dd($url);
    require 'controller/about.php';
}else if($url ==='/phpblog/contact'){
    require 'controller/contact.php';
};

