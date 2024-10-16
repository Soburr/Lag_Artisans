@extends('layouts.guest')

@section('content')

        <form method="POST" action="{{ url('register-artisan') }}">
            @csrf
<div>
    <form wire:submit="register">

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Artisan -->
        <div class="mt-4">
            <x-input-label for="artisan" :value="__('Artisan')" />
            <x-text-input  id="artisan" class="block mt-1 w-full" type="text" name="artisan" required autocomplete="artisan" placeholder="What do you do?"/>
            <x-input-error :messages="$errors->get('artisan')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="number" :value="__('Phone Number')" />
            <x-text-input id="number" class="block mt-1 w-full" type="text" name="number" required autocomplete="number" />
            <x-input-error :messages="$errors->get('number')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" required autocomplete="department" />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>

           <!-- Hostel Selection -->
           <div class="mt-4">
            <x-input-label for="hostel" :value="__('Select Hostel')" />
            <select name="hostel" id="hostel" class="block mt-1 w-full">
                <option value="">Choose an hostel</option>
                <option value="Amina">AMINA</option>
                <option value="Biobaku">BIOBAKU</option>
                <option value="El-Kanemi">EL KANEMI</option>
                <option value="Eni-njoku">ENI-NJOKU</option>
                <option value="Fagunwa">FAGUNWA</option>
                <option value="Gbajabiamila">GBAJABIAMILA</option>
                <option value="Honours">HONOURS</option>
                <option value="Kofo">KOFO</option>
                <option value="Mariere">MARIERE</option>
                <option value="Makama">MAKAMA</option>
                <option value="Moremi">MOREMI</option>
                <option value="Sodeinde">SODEINDE</option>
            </select>
            <x-input-error :messages="$errors->get('hostel')" class="mt-2" />
        </div>
        
        <!-- Level Selection -->
        <div class="mt-4">
            <x-input-label for="level" :value="__('Select Level')" />
            <select name="level" id="level" class="block mt-1 w-full">
                <option value="">Choose a year</option>
                <option value="Year1">YEAR 1</option>
                <option value="Year2">YEAR 2</option>
                <option value="Year3">YEAR 3</option>
                <option value="Year4">YEAR 4</option>
                <option value="Year5">YEAR 5</option>
            </select>
            <x-input-error :messages="$errors->get('level')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
@endsection