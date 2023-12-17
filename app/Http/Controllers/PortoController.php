<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortoController extends Controller
{
    public function index() {
        // Menggunakan paginate() untuk mendapatkan data dengan paginasi
        $portofolios = Portofolio::paginate(4);

        return view("portofoliosiswa", [
            'title' => 'Portofolio',
            'active' => 'portofolio',
            'portofolios' => $portofolios
        ]);
    }
}
