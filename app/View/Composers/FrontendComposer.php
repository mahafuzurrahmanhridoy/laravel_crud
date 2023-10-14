<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class FrontendComposer
{

    public function compose(View $view): void
    {
        $categories = Category::pluck('title', 'slug')->toArray();

        $view->with('categories', $categories);
    }
}
