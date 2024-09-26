<div>
    <!-- Logo -->
    <div class="text-center flex-shrink-0 my-6 mx-auto hover:opacity-75">
        <!-- Img -->
        {{-- <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" class="h-[50px] cursor-pointer"> --}}
        <a href="{{ route('home') }}"><span class="font-semibold text-xl">LOGONAME</span></a>
    </div>
    @if ($step === 1)
        {{-- Basic details --}}
        <div class="card card-normal w-full mx-auto">
            <div class="form-control mt-4">
                <label for="email">E-mail</label>
                <input class="input input-bordered w-full max-w-xs" type="email" wire:model.defer="formData.email" id="email">
                @error('formData.email') <span class="text-error">E-mail field must be a valid email address.</span> @enderror
            </div>
            <div class="form-control mt-4">
                <label for="password">Password</label>
                <input class="input input-bordered w-full max-w-xs" type="password" wire:model.defer="formData.password" id="password">
                @error('formData.password') <span class="text-error">Password must be at least 8 characters.</span> @enderror
            </div>
        </div>
    @elseif ($step === 2)
        {{-- Profile and character --}}
        <div class="form-control mt-4">
            <label for="name">Name</label>
            <input class="input input-bordered w-full max-w-xs" type="text" wire:model.defer="formData.name" id="name">
            @error('formData.name') <span class="text-error">Username taken/empty</span> @enderror
        </div>
    @elseif ($step === 3)
        {{-- Second auth --}}
        <div class="form-control mt-4">
            <label for="name">Auth2</label>
            <input class="input input-bordered w-full max-w-xs" type="text" wire:model.defer="formData.name" id="name">
            @error('formData.name') <span class="text-error">Incorrect/expired code</span> @enderror
        </div>
    @endif


    <div class="step-navigation mt-4">
        @if ($step > 1)
            <button class="btn btn-primary" wire:click="previousStep">Previous</button>
        @endif
        @if ($step < 3)
            <button class="btn btn-primary" wire:click="nextStep">Next</button>
        @else
            <button class="btn btn-primary" wire:click="submit">Submit</button>
        @endif


        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="link link-primary">Already have an account?</a>
        </div>
    </div>
</div>
