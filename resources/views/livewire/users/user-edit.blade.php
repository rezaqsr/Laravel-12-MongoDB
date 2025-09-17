<div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit {{ $this->name }} User</h2>
            </div>
            <div class="pull-right">
                <a class="btn waves-effect waves-light btn-primary"  wire:navigate href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form wire:submit="update">
        <div class="row">
            <div class="input-field col s4">
                <input wire:model="name" id="name" type="text" class="validate">
                <label for="name">Name</label>
                @error('name') <span class="red-text">{{ $message }}</span> @enderror
            </div>
            <div class="input-field col s4">
                <input wire:model="email" id="email" type="email" class="validate">
                <label for="email">Email</label>
                @error('email') <span class="red-text">{{ $message }}</span> @enderror
            </div>
            <div class="input-field col s4">
                <input wire:model="password" id="password" type="password" class="validate">
                <label for="password">Password (leave blank to keep current)</label>
                @error('password') <span class="red-text">{{ $message }}</span> @enderror
            </div>
            <div class="col s12">
                <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
