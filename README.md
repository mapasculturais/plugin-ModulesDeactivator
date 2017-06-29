# plugin-ModulesDeactivator
Plugin para desligar módulos do MapasCulturais

## instalação
clone o repositório em dentro da pasta `protected/application/plugins` com o nome ModulesDeactivator
```
$ git clone https://github.com/mapasculturais/plugin-ModulesDeactivator/ ModulesDeactivator
```

adicione dentro do array `plugins` do config.php de sua instação a seguinte entrada, descomentando do array config[1] os módulos que você deseja desligar:

```PHP
        'plugins' => [
            'ModulesDeactivator' => [
                'namespace' => 'ModulesDeactivator',
                'config' => [
//                    'AgendaSingles',
//                    'CompliantSuggestion',
//                    'Notifications',
//                    'ProjectPhases',

                ]
            ],
            .....
```

[1] No momento da publicação deste plugin os módulos existentes eram estes quatro.
         
