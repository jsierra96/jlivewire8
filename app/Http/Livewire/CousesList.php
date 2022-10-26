<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CousesList extends Component
{
    public function render()
    {
        return view('livewire.couses-list', ['courses' => Course::latest()->with('user')->take(9)->get()]);
    }
}
