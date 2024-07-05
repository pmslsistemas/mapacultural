<?php

use MapasCulturais\i;

date_default_timezone_set('America/Sao_Paulo');

$base_domain = @$_SERVER['HTTP_HOST'];
$base_url = 'https://' . $base_domain . '/';

return [
    'app.siteName' => env('SITE_NAME', 'Mapa Cultural'),
    'app.siteDescription' => env('SITE_DESCRIPTION', "A plataforma livre, colaborativa e interativa de mapeamento do cenário cultural e instrumento de governança digital no aprimoramento da gestão pública, dos mecanismos de participação e da democratização do acesso às políticas culturais promovidas pela Secretaria Municipal de Cultura e Turismo de Santa Luzia-MG. O Mapa cultural é uma ferramenta de comunicação que visibiliza os eventos do circuito de festivais de artes e do calendário cultural, os projetos desenvolvidos e os espaços promovidos pelos agentes e instituições culturais de Santa Luzia. É também a plataforma de acesso e execução dos editais realizados pela Secretaria Municipal de Cultura e Turismo. Além de conferir a agenda de eventos, você também pode colaborar na gestão da cultura do estado: basta criar seu perfil de agente cultural. A partir do cadastro, fica mais fácil participar dos editais e programas da Secretaria e também divulgar seus eventos, espaços ou projetos"),

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
