<?php

return [
    'plugins' => [
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
        //'Accessibility' => ['namespace' => 'Accessibility'],
        'MultipleLocalAuth' => ['namespace' => 'MultipleLocalAuth'],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        //'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
        'SendEmailUser' => ['namespace' => 'SendEmailUser'],
        'Report' => ['namespace' => 'Report'],
        'ChatTawkto' =>['namespace' => 'ChatTawkto', 'config' => ['chat_link_url' => 'https://tawk.to/chat/655c005191e5c13bb5b2063b/1hfnm2g4p',],],              
    ]
];
