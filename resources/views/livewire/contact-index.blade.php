
<div>
    <livewire:contact-create></livewire:contact-create>
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
                    <button class="btn btn-sm btn-info text-white">Edit</button>
                    <button class="btn btn-sm btn-danger text-white">Delete</button>
                </th>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>