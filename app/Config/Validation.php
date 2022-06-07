<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];
public $productos=[
    'nombre' => 'required',
    'descripcion' => 'required|min_length[5]',
    'cantidad' => 'required|integer',
];

public $users=[
    'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
    'email' => 'required|min_length[3]|max_length[20]|is_unique[users.email]',
    'password' => 'required|min_length[5]|max_length[20]',
];
public $usersUpdate = [
    'password'=>'required|min_length[5]|max_length[15]'
];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
