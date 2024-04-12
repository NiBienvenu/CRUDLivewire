<form>
    <input type="hidden" wire:model="contact_id">
    <div class="form-group mb-3">
        <label for="Name">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="Name" placeholder="Taper le nom"
            wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="Prenom">Prenom:</label>
        <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="Prenom"
            placeholder="Taper le prenom" wire:model="prenom">
        @error('prenom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="Adresse">Adresse:</label>
        <input type="text" class="form-control @error('adresse') is-invalid @enderror" id="Adresse"
            placeholder="Taper votre adresse" wire:model="adresse">
        @error('adresse') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="Numero">Numero:</label>
        <input type="text" class="form-control @error('numero') is-invalid @enderror" id="Numero"
            placeholder="Taper votre numero" wire:model="numero">
        @error('numero') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="Description">Description:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="Description"
            wire:model="description" placeholder="Enter Description"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</form>