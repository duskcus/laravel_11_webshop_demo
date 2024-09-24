<div>
    @if ($step === 1)
        {{-- Basic details --}}
        <div class="card card-normal w-full mx-auto">
            <div>
                <label for="email">Email</label>
                <input type="email" wire:model.defer="formData.email" id="email">
                @error('formData.email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" wire:model.defer="formData.password" id="password">
                @error('formData.password') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
    @elseif ($step === 2)
        {{-- Profile and character --}}
        <div>
            <label for="name">Name</label>
            <input type="text" wire:model.defer="formData.name" id="name">
            @error('formData.name') <span class="error">{{ $message }}</span> @enderror
        </div>
    @elseif ($step === 3)
        {{-- Second auth --}}
        <div>
            <label for="name">Auth2</label>
            <input type="text" wire:model.defer="formData.name" id="name">
            @error('formData.name') <span class="error">{{ $message }}</span> @enderror
        </div>
    @endif

    <div class="step-navigation">
        @if ($step > 1)
            <button class="btn btn-outline" wire:click="previousStep">Previous</button>
        @endif
        @if ($step < 3)
            <button class="btn btn-outline" wire:click="nextStep">Next</button>
        @else
            <button class="btn btn-outline" wire:click="submit">Submit</button>
        @endif
    </div>
</div>
