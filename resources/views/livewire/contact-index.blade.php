
<div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>

    @endif

    @if ($statusUpdate)
    <livewire:contact-update></livewire:contact-update>
    @else
    <livewire:contact-create></livewire:contact-create>
    @endif



    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($contacts as $contact)
            <tr>
            <th scope="row"></th>
                <th>{{$contact->name}}</th>
                <th>{{$contact->phone}}</th>
                <th>
                    <button wire:click="getContact({{ $contact->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="destroy({{ $contact->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
                </th>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
