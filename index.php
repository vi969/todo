<?php
require('helpers.php');
require('function.php');
require('data.php');


$page_content = include_template("main.php", [
    "show_complete_tasks" => $show_complete_tasks,
    "tasks" => $tasks,
    "projects" => $projects
]);


$layout_content = include_template("layout.php", [
    "content" => $page_content,
    "title"  => "Главная"
]);

print($layout_content);
