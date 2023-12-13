<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function destroy($id)
    {
        // Logic to delete the grade with the given ID from the database
        Grade::destroy($id);

        // Redirect back or to a specific page after deletion
        return redirect()->route('routes/web.php');
    }
}
