# plugin-MetadataKeyword
plugin para definir keywords nos campos que estão nas tabelas de metadado Ex.: AgenteMeta

# Configuração básica
Basicamente basta definir um array na configuração do plugin, onde se define uma chave usada como slug, que possui outro array com todos os campos de metadados que deseja que seja aplicado o filtro. No exemplo abaixo, definimos **agent** como chave e essa chave tem os campos **'En_Municipio', 'En_Nome_Logradouro'** que são os campo que terão o filtro aplicado.

```
 'MetadataKeyword' => [
    'namespace' => 'MetadataKeyword',
    'config' => [
        'agent' => ['En_Municipio', 'En_Nome_Logradouro']
    ]
],

```
