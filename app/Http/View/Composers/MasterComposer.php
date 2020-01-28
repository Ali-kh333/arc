<?php


namespace App\Http\View\Composers;


use Illuminate\View\View;

class MasterComposer
{
    public function compose(View $view)
    {
        $view->with('user', auth()->user());
    }
}
