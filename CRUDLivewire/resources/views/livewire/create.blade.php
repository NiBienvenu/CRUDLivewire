<form wire:submit.prevent="store" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group mb-3 col-6">
            <label for="Name">Name:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="Name"
                placeholder="Taper le nom" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group mb-3 col-6">
            <label for="Prenom">Prenom:</label>
            <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="Prenom"
                placeholder="Taper le prenom" wire:model="prenom">
            @error('prenom') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group mb-3 col-6">
            <label for="Adresse">Adresse:</label>
            <input type="text" class="form-control @error('adresse') is-invalid @enderror" id="Adresse"
                placeholder="Taper votre adresse" wire:model="adresse">
            @error('adresse') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group mb-3 col-6">
            <label for="Numero">Numero:</label>
            <input type="text" class="form-control @error('numero') is-invalid @enderror" id="Numero"
                placeholder="Taper votre numero" wire:model="numero">
            @error('numero') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

    <div class="row">
        <div class="form-group mb-3 col-6">
            <label for="Profil">Profil:</label>
            <input type="file" class="form-control @error('profil') is-invalid @enderror" id="Profil"
                placeholder="Votre profil" wire:model="profil">
            @error('profil') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group mb-3 col-6">
            <label for="Description">Description:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="Description"
                wire:model="description" placeholder="Enter Description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success btn-block">Save</button>
    </div>
</form>