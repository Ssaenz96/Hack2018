<?php

return [
    'seeders' => [
        'tipos' => [
        	0 => [
        		'nombre' => 'Robo con arma blanca',
        		'peso' => 10
        	],

        	1 => [
        		'nombre' => 'Robo con arma de fuego',
        		'peso' => 20
        	],

        	2 => [
        		'nombre' => 'Carterista',
        		'peso' => 5
        	],

        	3 => [
        		'nombre' => 'Robo a vehiculo',
        		'peso' => 15
        	],

        	4 => [
        		'nombre' => 'Secuestro a menor de edad',
        		'peso' => 50
        	]
        ],

        'incidencias' => [
            0 => [
                'latitud' => 25.723907, 
                'longitud' => -100.314741,
                'fecha' => '2018-10-18',
                'comentarios' => 'comentario 1',
                'tipo_id' => 1,
                'user_id' => 1
            ],

            1 => [
                'latitud' => 25.723921, 
                'longitud' => -100.314824,
                'fecha' => '2018-10-22',
                'comentarios' => 'comentario 2',
                'tipo_id' => 2,
                'user_id' => 1
            ],

            2 => [
                'latitud' => 25.723853,
                'longitud' => -100.313032,
                'fecha' => '2018-10-12',
                'comentarios' => 'comentario 3',
                'tipo_id' => 2,
                'user_id' => 1
            ],

            3 => [
                'latitud' => 25.723829,
                'longitud' => -100.312469,
                'fecha' => '2018-10-12',
                'comentarios' => 'comentario 4',
                'tipo_id' => 4,
                'user_id' => 1
            ],

            4 => [
                'latitud' => 25.723902,
                'longitud' => -100.312523,
                'fecha' => '2018-10-26',
                'comentarios' => 'comentario 5',
                'tipo_id' => 3,
                'user_id' => 1
            ],

            5 => [
                'latitud' => 25.724277, 
                'longitud' => -100.307848,
                'fecha' => '2018-10-16',
                'comentarios' => 'comentario 6',
                'tipo_id' => 1,
                'user_id' => 1
            ],

            6 => [
                'latitud' => 25.724598, 
                'longitud' => -100.306967,
                'fecha' => '2018-10-11',
                'comentarios' => 'comentario 7',
                'tipo_id' => 2,
                'user_id' => 1
            ],

            7 => [
                'latitud' => 25.724198,
                'longitud' => -100.307222,
                'fecha' => '2018-10-12',
                'comentarios' => 'comentario 8',
                'tipo_id' => 2,
                'user_id' => 1
            ],

            8 => [
                'latitud' => 25.724552,
                'longitud' => -100.307178,
                'fecha' => '2018-10-10',
                'comentarios' => 'comentario 9',
                'tipo_id' => 4,
                'user_id' => 1
            ],

            9 => [
                'latitud' => 25.724296,
                'longitud' => -100.307863,
                'fecha' => '2018-10-22',
                'comentarios' => 'comentario 10',
                'tipo_id' => 3,
                'user_id' => 1
            ]
        ]
    ]
];
