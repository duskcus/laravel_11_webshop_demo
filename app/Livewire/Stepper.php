<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Stepper extends Component
{
    public $step = 1;
    public $formData = [
        'name' => '',
        'email' => '',
        'password' => '',
    ];

    protected $rules = [
        'formData.name' => 'required',
        'formData.email' => 'required|email',
        'formData.password' => 'required|min:8',
    ];

    public function nextStep()
    {
        $this->validateStep();

        if ($this->step < 3) {
            $this->step++;
        }
    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function submit()
    {
        $this->validate();

        // Create the user
        $user = User::create([
            'name' => $this->formData['name'],
            'email' => $this->formData['email'],
            'password' => Hash::make($this->formData['password']),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        // Log the user in
        Auth::login($user);

        session()->flash('message', 'User registered and logged in successfully!');

        // Redirect to home or dashboard
        return redirect()->to('/');
    }


    protected function validateStep()
    {
        $rules = [];
        switch ($this->step) {
            case 1:
                $rules['formData.email'] = 'required|email';
                $rules['formData.password'] = 'required|min:8';
                break;
            case 2:
                $rules['formData.name'] = 'required';
                break;
            case 3:
                break;
        }
        $this->validate($rules);
    }

    public function render()
    {
        return view('livewire.stepper');
    }
}