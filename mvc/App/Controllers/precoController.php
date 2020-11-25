<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\console;

class esportesController extends Controller {
    
    public function index() {
        //$clients = Clients::getAll();
        //$this->view('clients', ['clients' -> $clients]);
    }
    
    public function preco($console) {
        $consoleModel = new console();
        $console = $consoleModel->getAll($console);

        $this->view('console', ['console' -> $console]);
    }
}