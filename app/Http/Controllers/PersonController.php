<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Mikhail',
                'age' => 21,
                'job' => 'phpLaravel developer'
            ],
            [
                'id' => 2,
                'name' => 'Darna',
                'age' => 20,
                'job' => 'best girl in world'
            ],
            [
                'id' => 3,
                'name' => 'Mira',
                'age' => 3,
                'job' => 'the dog doesnt have a job'
            ]
        ];
        return $persons;
    }
}
