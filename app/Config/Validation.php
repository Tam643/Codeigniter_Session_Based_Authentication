<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public array $signup = [
        'email' => [
            'rules' => 'required|max_length[254]|valid_email',
            'errors' => [
                'required' => 'Please check the Email field. It does appear to be empty.',
                'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            ],
        ],
        'name' => [
            'rules' => 'required|alpha_space|max_length[100]',
            'errors' => [
                'required' => 'Please check the Name field. It does appear to be empty.',
                'alpha_space' => 'Please check the Name field. It does not appear to be alphabetic characters or spaces.',
            ],
        ],
        'password' => [
            'rules' => 'required|alpha_numeric_punct|min_length[8]|max_length[100]',
            'errors' => [
                'required' => 'Please check the Password field. It does appear to be empty.',
                'alpha_numeric_punct' => 'Please check the Password field. It does not appear to be alphanumeric, space, or this limited set of punctuation characters.',
            ],
        ],
        'confirmpassword' => [
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'Please check the Confirmpassword field. It does appear to be empty.',
                'matches' => 'Please check the Confirmpassword field. It does not appear to be match Password Field',
            ],
        ],
    ];
    
    public array $signin = [
        'email' => [
            'rules' => 'required|max_length[254]|valid_email',
            'errors' => [
                'required' => 'Please check the Email field. It does appear to be empty.',
                'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            ],
        ],
        'password' => [
            'rules' => 'required|alpha_numeric_punct|min_length[8]|max_length[100]',
            'errors' => [
                'required' => 'Please check the Password field. It does appear to be empty.',
                'alpha_numeric_punct' => 'Please check the Password field. It does not appear to be alphanumeric, space, or this limited set of punctuation characters.',
            ],
        ],
    ];

    public array $forgotpassword = [
        'email' => [
            'rules' => 'required|max_length[254]|valid_email',
            'errors' => [
                'required' => 'Please check the Email field. It does appear to be empty.',
                'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            ],
        ],
    ];
}
