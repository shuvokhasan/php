<?php
$students = [
    [
        'name' => 'John',
        'grades' => [85, 90, 92, 88]
    ],
    [
        'name' => 'Jane' ,
        'grades' => [75, 100, 72, 83]
    ],
    [
        'name' => 'Joe',
        'grades' => [56, 67, 60, 100]
    ],
];

foreach($students as $student){
    echo $student['name'], '\'s GPA = ', array_sum($student['grades'])/4, '<br>';
}