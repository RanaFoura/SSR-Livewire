<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MyComponent extends Component
{
    public $data;


    public function render()
    {
        // Fetch data or do some server-side processing
        $this->data = ['item1', 'item2', 'item3'];

        // Return the view with the data
        return view('livewire.my-component', ['data' => $this->data]);
    }
}
