<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\View\View;

class MenuComposer {
    public function courses()
    {
        return Course::all();
    }

    public function compose(View $view)
    {
        $view->with([
            'courses' => $this->courses(),
        ]);
    }
}
