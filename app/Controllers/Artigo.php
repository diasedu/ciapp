<?php 
namespace App\Controllers;

use App\Models\ArtigoModel;

class Artigo extends BaseController {

    private object $ArtigoModel;

    public function __construct() {
        $this->ArtigoModel = new ArtigoModel();
    }

    public function index(): string {        
        /*-----------------------------------------------------+
        | O método findAll equivale a um select * from tabela. |
        +-----------------------------------------------------*/
        $list_artigos = $this->ArtigoModel->findAll();

        return view('Artigo/vw_principal', ['artigos' => $list_artigos]);
    }

    public function mostrar($id): string {
        $artigo = $this->ArtigoModel->find($id);

        return view('Artigo/vw_mostrar', ['artigo' => $artigo]);
    }

    public function inserir(): string {
        return view('Artigo/vw_inserir');
    }

    public function criar() {
        $req = $this->request->getPost();

        $id = $this->ArtigoModel->insert($req);
        
        if (!$id) {
            return redirect()->back()
                                    ->with('errors', $this->ArtigoModel->errors())
                                    ->withInput();
        }

        return redirect()->to("artigo/mostrar/$id")
                         ->with('message', 'Artigo salvo!');
    }

    public function editar() {
        $req = $this->request->getPost();

        $id = $this->ArtigoModel->insert($req);
        
        if (!$id) {
            return redirect()->back()
                                    ->with('errors', $this->ArtigoModel->errors())
                                    ->withInput();
        }

        return redirect()->to("artigo/mostrar/$id")
                         ->with('message', 'Artigo salvo!');
    }
}