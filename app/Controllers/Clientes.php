<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    protected $clientes;
    public function __construct()
    {
        $this->clientes = new ClientesModel();
        helper(['form']);
    }

    public function index()
    {
        $clientes = $this->clientes->where('activo', 1)->findAll();
        $data = ['titulo' => 'Clientes', 'clientes' => $clientes];
        return view('clientes/clientes', $data);
    }

    public function nuevo()
    {
        $data = ['titulo' => 'Agregar Cliente'];

        return view('clientes/nuevo', $data);
    }

    public function insertar()
    {
        $this->clientes->insert(
            [
                'nombre' => mb_strtoupper($this->request->getPost('nombre')),
                'email' => mb_strtolower($this->request->getPost('email')),
                'telefono' => $this->request->getPost('telefono')
            ]
        );
        return redirect()->to(base_url('clientes'));
    }

    public function editar($id)
    {
        $cliente = $this->clientes->where('id', $id)->first();
        $data = ['titulo' => 'Editar Cliente', 'cliente' => $cliente];

        return view('clientes/editar', $data);
    }

    public function actualizar()
    {
        helper(['form', 'url']);
        $clientes = new ClientesModel();
        $clientes->update(
            $this->request->getPost('id'),
            [
                'nombre' => mb_strtoupper($this->request->getPost('nombre')),
                'email' => mb_strtolower($this->request->getPost('email')),
                'telefono' => $this->request->getPost('telefono')
            ]
        );

        return redirect()->to(base_url('clientes'));
    }

    public function eliminar($id)
    {
        if ($this->clientes->update($id, ['activo' => 0])) {
            return redirect()->to(base_url('clientes'));
        }
        return redirect()->to(base_url('clientes'));
    }
}
