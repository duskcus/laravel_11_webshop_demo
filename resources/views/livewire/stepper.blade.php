<div>
    <!-- Logo -->
    <div class="text-center flex-shrink-0 my-6 mx-auto hover:opacity-75">
        <!-- Img -->
        {{-- <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" class="h-[50px] cursor-pointer"> --}}
        {{-- <a href="{{ route('home') }}"><span class="font-semibold text-xl">LOGONAME</span></a> --}}
        <span class="font-semibold text-xl">Register</span>
    </div>
    @if ($step === 1)
        {{-- Basic details --}}
        <div class="card card-normal w-full mx-auto">
            <div class="form-control mt-4">
                <label for="email">E-mail</label>
                <input class="input input-bordered w-full" type="email" wire:model.defer="formData.email" id="email">
                @error('formData.email') <span class="text-error">E-mail field must be a valid email address.</span> @enderror
            </div>
            <div class="form-control mt-4">
                <label for="password">Password</label>
                <input class="input input-bordered w-full" type="password" wire:model.defer="formData.password" id="password">
                @error('formData.password') <span class="text-error">Password must be at least 8 characters.</span> @enderror
            </div>
        </div>
    @elseif ($step === 2)
        {{-- Second auth --}}
        <div class="form-control mt-4 text-center">
            <div class="inline-flex mx-auto mb-4">
                <a class="mx-3" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&pcampaignid=web_share"><i class="fa fa-android fa-5x"></i></a>
                <a class="mx-3" href="https://apps.apple.com/nl/app/google-authenticator/id388497605"><i class="fa fa-apple fa-5x"></i></a>
            </div>
            <p>To finish your registration you will need to set-up second authentication. You can click these icon's to download google authenticator</p>
        </div>
    @elseif ($step === 3)
        {{-- Second auth --}}
        <div class="form-control mt-4">
            <label for="name">Fill in your code:</label>
        </div>
    @elseif ($step === 4)
        {{-- Profile and character --}}
        <div class="form-control mt-4">
            <label for="name">Name</label>
            <input class="input input-bordered w-full" type="text" wire:model.defer="formData.name" id="name">
            @error('formData.name') <span class="text-error">Username taken/empty</span> @enderror
        </div>
    @endif


    <div class="step-navigation mt-4">
        @if ($step < 4)
            <button class="btn btn-primary w-full mb-3" wire:click="nextStep">Next</button>
        @else
            <button class="btn btn-primary w-full mb-3" wire:click="submit">Submit</button>
        @endif
        @if ($step > 1)
            <button class="btn btn-error w-full" wire:click="previousStep">Previous</button>
        @endif

        @if ($step === 1)
        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="link">Already have an account?</a>
        </div>
        @endif
    </div>
</div>
