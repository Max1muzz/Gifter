<?php

namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use App\Models\Page;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Interview $interview)
    {
        $interview->delete();
        return redirect()->route('profile.base');
    }
}
