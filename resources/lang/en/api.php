<?php

return [
    'messages' => [
        'registration' => [
            'success' => 'Você se registrou com sucesso. Por favor, verifique seu e-mail para ativação!',
        ],
        'login' => [
            'success' => 'Login bem sucedido.',
            'failed' => 'Credenciais inválidas! Por favor, tente novamente.',
        ],
        'logout' => [
            'success' => 'Desconectado com sucesso.',
        ],
        'forgot_password' => [
            'success' => 'Enviamos um e-mail com o link de redefinição de senha. Verifique sua caixa de entrada!',
            'validation' => [
                'email_not_found' => 'Este endereço de email não está registrado.',
            ],
        ],
        'refresh' => [
            'token' => [
                'not_provided' => 'Token não fornecido.',
            ],
            'status' => 'Ok',
        ],
    ],
];
