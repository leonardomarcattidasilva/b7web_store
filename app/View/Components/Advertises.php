<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Advertises extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $advertiseList = [
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'price' => '250,32', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'price' => '250,32', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'price' => '250,32', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'price' => '250,32', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'price' => '250,32', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'price' => '250,32', 'href' => '#'],
            ['img' => 'https://place-hold.it/250x250', 'title' => 'Teste', 'price' => '250,32', 'href' => '#']
        ];

        return view('components.advertises', ['advertiseList' => $advertiseList]);
    }
}
