<?php

use MapasCulturais\i;

date_default_timezone_set('America/Sao_Paulo');

$base_domain = @$_SERVER['HTTP_HOST'];
$base_url = 'https://' . $base_domain . '/';

return [
    'app.siteName' => env('SITE_NAME', 'Mapa Cultural'),
    'app.siteDescription' => env('SITE_DESCRIPTION', "O Mapa Cultural é a plataforma livre, gratuita e colaborativa de mapeamento da Secretaria da Cultura do Estado da Paraíba o sobre cenário cultural Paraíbano. Ficou mais fácil se programar para conhecer as opções culturais que as cidades cearenses oferecem: shows musicais, espetáculos teatrais, sessões de cinema, saraus, entre outras opções. Além de conferir a agenda de eventos, você também pode colaborar na gestão da cultura do estado: basta criar seu perfil de agente culturale e, e partir desse cadastro, facilitará a sua participação em editais e programas da Secretaria, além de divulgar seus eventos, espaços ou projetos."),

    'themes.active' => env('ACTIVE_THEME', 'SantaLuziaMG'),

    'app.lcode' => env('APP_LCODE', 'pt_BR'),

    'app.enabled.apps' => false,
        
    ## Esse módulo é para configurar a funcionalidade de denúncia e/ou sugestões
    'google-recaptcha-sitekey' => env('GOOGLE_RECAPTCHA_SITEKEY', ''),
    'google-recaptcha-secret' => env('GOOGLE_RECAPTCHA_SECRET', ''),

    'namespaces' => array(
        'MapasCulturais\Themes' => THEMES_PATH,
        'ThemesModelo' => THEMES_PATH . '/SantaLuziaMG/',
        'Subsite' => THEMES_PATH . '/SantaLuziaMG/'
    ),

    'module.CompliantSuggestion' => [
        'compliant' => true,
        #'compliantUrl' => 'https://ouvidoria.gov.br/',
        'suggestion' => true,

    ],
];
