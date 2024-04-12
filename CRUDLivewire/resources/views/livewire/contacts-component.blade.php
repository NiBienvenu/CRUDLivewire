<div>
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-body">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
                @endif

                @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
                @endif

                @if($updateContact)
                @include('livewire.update')
                @else
                @include('livewire.create')
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">


                    @if (count($contacts) > 0)
                    @foreach ($contacts as $contact)
                    <div class="card mb-2 cont">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <center>
                                    <img src="" height="80px" style="border-radius: 50%;" width="80px" class="p-1"
                                        alt="...">
                                </center>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card-body">
                                    <h5 class="card-title">{{$contact->name}} {{$contact->pernom}}</h5>
                                    <p class="card-text">{{$contact->numero}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                {{$contact->description}}
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <button wire:click="edit({{$contact->id}})"
                                    class="btn btn-primary btn-sm">Modifier</button>
                                <button onclick="deleteContact({{$contact->id}})"
                                    class="btn btn-danger btn-sm">Supprimer</button>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @else
                    <center>

                        Aucun contacts
                    </center>

                    @endif

                </div>
            </div>
        </div>
    </div>

    <script>
    function deleteContact(id) {
        if (confirm("Voullez Vous supprimer cet enregistrement?" + id))
            window.livewire.emit('deleteContact', id);
    }
    </script>
</div>