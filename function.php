<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

function get_quantity_task($project, array $tasks)
{
    $quantity = 0;
    foreach ($tasks as $task) {
        if ($task["category"] === $project) {
            $quantity++;
        }
    }
    return $quantity;
}
