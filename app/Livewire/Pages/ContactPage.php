<?php

namespace App\Livewire\Pages;

use App\Models\Contact;
use Livewire\Component;

class ContactPage extends Component
{
    public $name, $email, $message;
    public function render()
    {
        return view('livewire.pages.contact_page');
    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ];

    public function sendMessage(){
        $this->validate();

        sleep(10);
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'created_at' => now()
        ]);

        $this->reset(['name', 'email', 'message']);
        session()->flash('success', 'Your message has been sent successfully.');
    }
}
