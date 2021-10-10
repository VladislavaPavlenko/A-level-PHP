<?php
$myName = 'Vlada';
$myAge = 19;
$pi = pi();
$arr1 = ['Alex', 'Vova', 'Tolya'];
$arr2 = ['Alex', 'Vova', 'Tolya',
    ['Kostya', 'Olya']
];
$arr3 = ['Alex', 'Vova', 'Tolya',
    ['Kostya', 'Olya',
        ['Gosha', 'Mila']
    ]
];
$arr4 = [
    ['Alex', 'Vova', 'Tolya'],
    ['Kostya', 'Olya'],
    ['Gosha', 'Mila']
];
echo "My name is $myName\n";
echo "My age is $myAge\n";
echo "Number pi is $pi\n";
print_r($arr1);
print_r($arr2);
print_r($arr3);
print_r($arr4);

