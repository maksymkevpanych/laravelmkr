<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function destroy($id)
    {
        
        Grade::destroy($id);

        
        return redirect()->route('/students/{id}');
    }
}
