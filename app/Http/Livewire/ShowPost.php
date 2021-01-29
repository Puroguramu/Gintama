<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPost extends Component
{
    public $name;
    public $type;

    public function mount($post) 
    {
        $this->name = $post['name'];
        $this->type = $post['type'];
    }

    public function render()
    {
        return view('livewire.show-post', [
            'name' => $this->name,
            'type' => $this->type
        ]);
    }
}
