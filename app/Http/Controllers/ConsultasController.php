<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Copy;
use App\Models\Book;
use App\Models\Author;
use App\Models\Editorial;

class ConsultasController extends Controller
{
    public function consulta1()
    {
        return Customer::with('copies')->get();
    }

    public function consulta2()
    {
        return Author::with('books.editorial')->get();
    }

    public function consulta3()
    {
        return Editorial::with('books.copies')->get();
    }
}
