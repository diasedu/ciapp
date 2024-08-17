<?php 

namespace App\Models;

use CodeIgniter\Model;

class ArtigoModel extends Model {
    protected $table = 'artigo';

    protected $allowedFields = ['titulo', 'conteudo'];

    protected $validationRules = [
        'titulo' => 'required|max_length[128]',
        'conteudo' => 'required'
    ];

    protected $validationMessages = [
        'titulo' => [
            'required' => 'Por gentileza, informe o {field}.',
            'max_length' => "{param} máximo de caracteres para o campo {field}"
        ],
        'conteudo' => [
            'required' => "Por gentileza, informe o {field}",
        ],
    ];
}