<?php
require "data.php";

foreach ($students as $key => $student_info) {
    $student_actions = $actionsForStudents[$key];
    if (!empty($student_actions)) {
        $str = "Деканат повідомляє про такі розпорядження:\n";

        foreach ($student_actions as $action_key) {
            $str .= "- {$actions[$action_key]}\n";
        }

        $str .= "\n" . SIGN;

        echo $str;
    }
}