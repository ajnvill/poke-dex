<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PokeDex</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/auth-css/register-page.css'])
    <style>
        body {
            background: 
                linear-gradient(rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.02)),
                url('/build/assets/imgs/wp-pokemon.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="glass-container">
        <div class="register-card">
            <div class="register-title">POKEMON DEX</div>
            <h2 class="register-subtitle">CREATE YOUR ACCOUNT</h2>
            
            <x-auth-session-status class="alert" :status="session('status')" />
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="input-group">
                    <x-input-label for="name" class="input-label" :value="__('Name')" />
                    <x-text-input id="name" class="text-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="input-error" />
                </div>

                <!-- Email Address -->
                <div class="input-group">
                    <x-input-label for="email" class="input-label" :value="__('Email')" />
                    <x-text-input id="email" class="text-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="input-error" />
                </div>

                <!-- Password -->
                <div class="input-group">
                    <x-input-label for="password" class="input-label" :value="__('Password')" />
                    <x-text-input id="password" class="text-input" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="input-error" />
                </div>

                <!-- Confirm Password -->
                <div class="input-group">
                    <x-input-label for="password_confirmation" class="input-label" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="text-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="input-error" />
                </div>

                <div class="form-footer-column">
                    <div class="already-registered-text">
                        {{ __('Already registered?') }}
                        <a class="register-link" href="{{ route('login') }}">
                            {{ __('Login Here') }}
                        </a>
                    </div>
                    <x-primary-button class="primary-button">
                        {{ __('Create Account') }}  <!-- Changed text for clarity -->
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>