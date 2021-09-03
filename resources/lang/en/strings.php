<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => 'Are you sure you want to delete this user permanently? Anywhere in the application that references this user\'s id will most likely error. Proceed at your own risk. This can not be un-done.',
                'if_confirmed_off' => '(If confirmed is off)',
                'no_deactivated' => 'There are no deactivated users.',
                'no_deleted' => 'There are no deleted users.',
                'restore_user_confirm' => 'Restore this user to its original state?',
            ],
        ],

        'dashboard' => [
            'title' => 'Dashboard',
            'welcome' => 'Welcome',
        ],

        'general' => [
            'all_rights_reserved' => 'Todos os direitos reservados.',
            'are_you_sure' => 'Você tem certeza dessa operação?',
            'boilerplate_link' => 'SIDCARE',
            'continue' => 'Continar',
            'member_since' => 'Membro desde',
            'minutes' => ' minutos',
            'search_placeholder' => 'Procurando...',
            'timeout' => 'Você foi desconectado automaticamente por motivos de segurança, já que não havia atividade em ',

            'see_all' => [
                'messages' => 'See all messages',
                'notifications' => 'View all',
                'tasks' => 'View all tasks',
            ],

            'status' => [
                'online' => 'Online',
                'offline' => 'Offline',
            ],

            'you_have' => [
                'messages' => '{0} You don\'t have messages|{1} You have 1 message|[2,Inf] You have :number messages',
                'notifications' => '{0} You don\'t have notifications|{1} You have 1 notification|[2,Inf] You have :number notifications',
                'tasks' => '{0} You don\'t have tasks|{1} You have 1 task|[2,Inf] You have :number tasks',
            ],
        ],

        'search' => [
            'empty' => 'Please enter a search term.',
            'incomplete' => 'You must write your own search logic for this system.',
            'title' => 'Search Results',
            'results' => 'Search Results for :query',
        ],

        'welcome' => 'Welcome to the Dashboard',
    ],

    'emails' => [
        'auth' => [
            'account_confirmed' => 'Sua conta foi confirmada.',
            'error' => 'Opa!',
            'greeting' => 'Olá!',
            'regards' => 'Atenciosamente,',
            'trouble_clicking_button' => 'Se estiver com problemas para clicar no botão ":action_text", copie e cole o URL abaixo em seu navegador:',
            'thank_you_for_using_app' => 'Obrigado por usar nosso aplicativo!',

            'password_reset_subject' => 'Redefinir senha',
            'password_cause_of_email' => 'Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.',
            'password_if_not_requested' => 'Se você não solicitou uma redefinição de senha, nenhuma ação adicional é necessária.',
            'reset_password' => 'Clique aqui para redefinir sua senha',

            'click_to_confirm' => 'Clique aqui para confirmar sua conta:',
        ],

        'contact' => [
            'email_body_title' => 'Você tem uma nova solicitação de formulário de contato: Abaixo estão os detalhes:',
            'subject' => 'Um novo :app_name fórmulario de contato foi enviado!',
        ],
    ],

    'frontend' => [
        'test' => 'Teste',

        'tests' => [
            'based_on' => [
                'permission' => 'Permission Based - ',
                'role' => 'Role Based - ',
            ],

            'js_injected_from_controller' => 'Javascript Injected from a Controller',

            'using_blade_extensions' => 'Using Blade Extensions',

            'using_access_helper' => [
                'array_permissions' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles' => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not' => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id' => 'Using Access Helper with Permission ID',
                'permission_name' => 'Using Access Helper with Permission Name',
                'role_id' => 'Using Access Helper with Role ID',
                'role_name' => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works' => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because' => 'You can see this because you have the role of \':role\'!',
            'you_can_see_because_permission' => 'You can see this because you have the permission of \':permission\'!',
        ],

        'general' => [
            'joined' => 'Ingressou',
        ],

        'user' => [
            'change_email_notice' => 'Se você alterar seu e-mail, você será desconectado até que confirme seu novo endereço de e-mail.',
            'email_changed_notice' => 'Você deve confirmar seu novo endereço de e-mail antes de fazer o login novamente.',
            'profile_updated' => 'Perfil atualizado com sucesso.',
            'password_updated' => 'Senha atualizada com sucesso.',
        ],

        'welcome_to' => 'Bem Vindx a :place',
    ],
];
