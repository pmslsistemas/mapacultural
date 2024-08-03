<?php
namespace SantaLuziaMG;
use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;

class Theme extends BaseV1\Theme{

    protected static function _getTexts(){
        $app = App::i();
        $self = $app->view;
        $url_search_agents = $self->searchAgentsUrl;
        $url_search_spaces = $self->searchSpacesUrl;
        $url_search_events = $self->searchEventsUrl;
        $url_search_projects = $self->searchProjectsUrl;

        return [
//            'site: name' => App::i()->config['app.siteName'],
//            'site: description' => App::i()->config['app.siteDescription'],
            'site: in the region' => 'no Município',
            'site: of the region' => 'do Município',
            'site: owner' => 'Secretaria Municipal de Cultura e Turismo',
            'site: by the site owner' => 'pela Secretaria Municipal de Cultura e Turismo',
//
            'home: title' => "Seja Bem Vindo!",
//            'home: abbreviation' => "MC",
//            'home: colabore' => "Colabore com o Mapas Culturais",
//            'home: welcome' => "O Mapas Culturais é uma plataforma livre, gratuita e colaborativa de mapeamento cultural.",
            'home: welcome' => "A plataforma livre, colaborativa e interativa de mapeamento do cenário cultural e instrumento de governança digital no aprimoramento da gestão pública, dos mecanismos de participação e da democratização do acesso às políticas culturais promovidas pela Secretaria Municipal de Cultura e Turismo de Santa Luzia-MG.
            <br><br>O Mapa Cultural de Santa Luzia é uma ferramenta de comunicação que visibiliza os eventos do circuito de festivais de artes e do calendário cultural, os projetos desenvolvidos e os espaços promovidos pelos agentes e instituições culturais de Santa Luzia. É também a plataforma de acesso e execução dos editais realizados pela Secretaria Municipal de Cultura e Turismo.
            <br><br>Além de conferir a agenda de eventos, você também pode colaborar na gestão da cultura do estado: basta criar seu perfil de agente cultural. A partir do cadastro, fica mais fácil participar dos editais e programas da Secretaria e também divulgar seus eventos, espaços ou projetos.
            <br><br><b><span style='color: black;'>Aviso Importante!</span></b>
            <br><br><a href='{{asset:portaria_SMCT_44_2024_de_2_de_julho_de_2024_1.pdf}}' download>A SECRETARIA MUNICIPAL DA CULTURA E DO TURISMO DE SANTA LUZIA/MG PUBLICA PORTARIA SMCT Nº 44/2024, DE 2 DE JULHO DE 2024. Que dispõe sobre a utilização da Plataforma Mapa Cultural de Santa Luzia/MG durante o período eleitoral.</a>,
            <br><br><b><span style='color: black;'>Aviso de Manutenção</span></b>
            <br><br><b><span style='color: black;'>O Mapa Cultural de Santa Luzia ficará inoperante entre os dias 04/08/2024 e 06/08/2024 em virtude de manutenções e atualizações dos serviços de hospedagem.</span></b>
            <br><br><b><span style='color: black;'>Agradecemos a sua compreensão.</span></b>"
//            'home: events' => "Você pode pesquisar eventos culturais nos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente.",
//            'home: agents' => "Você pode colaborar na gestão da cultura com suas próprias informações, preenchendo seu perfil de agente cultural. Neste espaço, estão registrados artistas, gestores e produtores; uma rede de atores envolvidos na cena cultural da região. Você pode cadastrar um ou mais agentes (grupos, coletivos, bandas instituições, empresas, etc.), além de associar ao seu perfil eventos e espaços culturais com divulgação gratuita.",
//            'home: spaces' => "Procure por espaços culturais incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades artísticas e culturais.",
//            'home: projects' => "Reúne projetos culturais ou agrupa eventos de todos os tipos. Neste espaço, você encontra leis de fomento, mostras, convocatórias e editais criados, além de diversas iniciativas cadastradas pelos usuários da plataforma. Cadastre-se e divulgue seus projetos.",
//            'home: home_devs' => 'Existem algumas maneiras de desenvolvedores interagirem com o Mapas Culturais. A primeira é através da nossa <a href="https://github.com/hacklabr/mapasculturais/blob/master/documentation/docs/mc_config_api.md" target="_blank">API</a>. Com ela você pode acessar os dados públicos no nosso banco de dados e utilizá-los para desenvolver aplicações externas. Além disso, o Mapas Culturais é construído a partir do sofware livre <a href="http://institutotim.org.br/project/mapas-culturais/" target="_blank">Mapas Culturais</a>, criado em parceria com o <a href="http://institutotim.org.br" target="_blank">Instituto TIM</a>, e você pode contribuir para o seu desenvolvimento através do <a href="https://github.com/hacklabr/mapasculturais/" target="_blank">GitHub</a>.',
//
//            'search: verified results' => 'Resultados Verificados',
//            'search: verified' => "Verificados"
        ];
    }

    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();
        $app = App::i();
        $app->hook('view.render(<<*>>):before', function() use($app) {
            $this->_publishAssets();
        });
    }

    protected function _publishAssets() {
        $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);
    }   

}
