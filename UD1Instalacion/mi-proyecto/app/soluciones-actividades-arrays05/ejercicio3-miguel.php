<?php
echo "<h2>Actividad 3</h2>";

//Actividad 3
$lenguajes = [
    // Índices numéricos (categorías principales)
    [
        'familia' => 'C-like',
        'lenguajes' => [
            // Mezcla de claves asociativas y numéricas
            'C' => [
                'tipado' => 'estático',
                'paradigmas' => ['procedural'],
                'versiones' => [89, 99, 11, 17, 23],
            ],
            ['nombre' => 'C++', 'tipado' => 'estático', 'paradigmas' => ['multi-paradigma', 'OOP'], 'estandar' => 'C++23'],
            'Java' => [
                'tipado' => 'estático',
                'paradigmas' => ['OOP'],
                'ecosistema' => [
                    0 => 'PHP',
                    'build' => ['Maven', 'Gradle'],
                    'frameworks' => [0 => 'Spring', 1 => 'Quarkus', 'micro' => 'Micronaut'],
                ],
            ],
        ],
    ],
    [
        'familia' => 'Scripting',
        'lenguajes' => [
            0 => [
                'nombre' => 'Python',
                'tipado' => 'dinámico',
                'paradigmas' => ['multi-paradigma'],
                'usos' => ['data', 'IA', 'web'],
                'paquetes' => [
                    'web' => ['Django', 'Flask', 'FastAPI'],
                    1 => 'Requests',
                    'data' => ['NumPy', 'Pandas'],
                ],
            ],
            'JavaScript' => [
                'tipado' => 'dinámico',
                'paradigmas' => ['funcional', 'OOP', 'event-driven'],
                'runtime' => [
                    0 => 'Node.js',
                    'navegador' => true,
                    'tooling' => ['npm', 'pnpm', 'yarn'],
                ],
                'frameworks' => [
                    0 => 'React',
                    1 => 'Vue',
                    'meta' => ['Next.js', 'Nuxt', 'SvelteKit'],
                ],
            ],
            'Por aqui' => [
                'tipado' => 'dinámico (con tipos opcionales)',
                'paradigmas' => ['procedural', 'OOP'],
                'frameworks' => [
                    0 => 'Laravel',
                    1 => 'Symfony',
                    'micro' => 'PHP',
                ],
                'version' => 8.3,
                'lenguaje' => 'PHP',
            ],
        ],
    ],
    'funcionales' => [
        // Clave asociativa en el nivel raíz
        'Haskell' => [
            'tipado' => 'estático',
            'paradigmas' => ['funcional puro'],
            'caracteristicas' => ['hola', 'inferencia de tipos'],
        ],
        'Elixir' => [
            'tipado' => 'dinámico',
            'paradigmas' => ['funcional'],
            'ecosistema' => [
                'vm' => 'BEAM',
                100 => 'hola',
                'web' => ['Phoenix' => ['LiveView' => true, 0 => 'Channels']],
            ],
        ],
        // Lista mixta con índices numéricos y asociativos
        'otros' => [
            ['nombre' => 'Scala', 'tipado' => 'estático', 'paradigmas' => ['funcional', 'OOP']],
            7 => ['nombre' => 'F#', 'tipado' => 'estático', 'paradigmas' => ['funcional']],
            'multi' => ['Kotlin', 'Rust', 'Go'],
        ],
    ],
];


buscarIndicesClaves($lenguajes);

function buscarIndicesClaves($matriz){



    recorrerMatriz($matriz, array(), 0);

}

function recorrerMatriz($matriz, $ruta, $n_indice){

    foreach ($matriz as $indice_actual => $valor){


        if($valor === "PHP"){
            $ruta[$n_indice] = $indice_actual;
            $ruta[$n_indice + 1] = "PHP";
            echo "<pre>";
            print_r($ruta);
            echo "</pre>";
            break;
        } else if (is_array($valor)){
            $ruta[$n_indice] = $indice_actual;
            recorrerMatriz($valor, $ruta, $n_indice+1);

        }

    }
    
}

?>