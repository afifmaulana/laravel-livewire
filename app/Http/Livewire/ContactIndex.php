<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdate' => 'handleUpdate'
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Contact::find($id);
            $data->delete();
            session()->flash('message', 'Contact was deleted');
        }
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function handleStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was Stored!');
    }

    public function handleUpdate($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was Update!');
    }

}
