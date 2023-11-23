<?php

return [
    'mapping' => [
        // __DIR__ . '/../../api/components/json.schema.json' => [
        //     'root-class' => 'JsonComponent',
        //     'namespace' => 'Lenra\\App\\Components\\Json',
        //     'directory' => __DIR__ . '/../../generated/components/json',
        // ],
        // __DIR__ . '/../../api/components/lenra.schema.json' => [
        //     'root-class' => 'LenraComponent',
        //     'namespace' => 'Lenra\\App\\Components\\Lenra',
        //     'directory' => __DIR__ . '/../../generated/components/lenra',
        // ]
        __DIR__ . '/../../api/responses/view.schema.json' => [
            'root-class' => 'ViewResponse',
            'namespace' => 'Lenra\\App\\Response\\View',
            'directory' => __DIR__ . '/../../generated/Response/View',
        ]
    ]
];
