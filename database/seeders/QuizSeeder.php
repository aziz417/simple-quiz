<?php

namespace Database\Seeders;


use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function run()
    {
        $quizzes = [
            ['title' => 'Which is the deepest loch in Scotland?', 'options' =>
                [
                    [
                        'title' => 'Loch Ness',
                        'answer' => false
                    ],
                    [
                        'title' => 'Loch Lomand',
                        'answer' => false
                    ],
                    [
                        'title' => 'Loch Morar',
                        'answer' => true
                    ]
                ]
            ],
            ['title' => 'How did the country of Greenland get its name?', 'options' =>
                [
                    [
                        'title' => 'From its formerly green landscape',
                        'answer' => false
                    ],
                    [
                        'title' => 'From a man named Greene, an early explorer',
                        'answer' => false
                    ],
                    [
                        'title' => ' From the color of the northern lights',
                        'answer' => true
                    ],
                    [
                        'title' => 'A ploy to entice people to move there',
                        'answer' => false
                    ]
                ]
            ],
            ['title' => 'How many square miles does the principality of Monaco have?', 'options' =>
                [
                    [
                        'title' => '0.25',
                        'answer' => false
                    ],
                    [
                        'title' => '0.75',
                        'answer' => true
                    ],
                    [
                        'title' => '0.8',
                        'answer' => false
                    ],
                    [
                        'title' => '280',
                        'answer' => false
                    ]
                ]
            ],
            ['title' => 'Which is the only country to have played in every World Cup soccer tournament?', 'options' =>
                [
                    [
                        'title' => 'Argentina ',
                        'answer' => true
                    ],
                    [
                        'title' => 'Brazil',
                        'answer' => false
                    ],
                    [
                        'title' => 'England',
                        'answer' => false
                    ],
                    [
                        'title' => 'Italy',
                        'answer' => false
                    ],
                ]
            ]
            , ['title' => 'Which of the following are bocce balls?', 'options' =>
                [
                    [
                        'title' => 'A',
                        'answer' => false
                    ],
                    [
                        'title' => 'B',
                        'answer' => false
                    ],
                    [
                        'title' => 'C',
                        'answer' => true
                    ]
                ]
            ],
            ['title' => 'How many continents are there?', 'options' =>
                [
                    [
                        'title' => '1',
                        'answer' => false
                    ],
                    [
                        'title' => '2',
                        'answer' => false
                    ],
                    [
                        'title' => '3',
                        'answer' => true
                    ],
                    [
                        'title' => '4',
                        'answer' => true
                    ],
                    [
                        'title' => '5',
                        'answer' => true
                    ],
                ]
            ]

        ];
        foreach ($quizzes  as $quiz){
            $quizData = Quiz::create([
                'title' => $quiz['title']
            ]);
            info($quiz['options']);
            $quizData->options()->createMany($quiz['options']);
        }
    }
}
