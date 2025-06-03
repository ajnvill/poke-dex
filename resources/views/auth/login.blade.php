<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PokeDex</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/auth-css/login-page.css'])
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
        <div class="login-card">
            <div class="login-title">POKEMON DEX</div>
            <h2 class="login-subtitle">LOGIN TO YOUR ACCOUNT</h2>
            
            <!-- Session Status -->
            <x-auth-session-status class="alert" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="input-group">
                    <x-input-label for="email" class="input-label" :value="__('Email')" />
                    <x-text-input id="email" class="text-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="input-error" />
                </div>

                <!-- Password -->
                <div class="input-group">
                    <x-input-label for="password" class="input-label" :value="__('Password')" />
                    <x-text-input id="password" class="text-input" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="input-error" />
                </div>

                <!-- Remember Me -->
                <div class="form-footer">
                    <div class="remember-forgot-row">
                        <div class="remember-me">
                            <input class="styled-checkbox" id="remember_me" type="checkbox" name="remember">
                            <label for="remember_me">{{ __('Remember me') }}</label>
                        </div>
                        
                        @if (Route::has('password.request'))
                            <a class="forgot-password" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    
                    <button type="submit" class="primary-button">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>

            <div class="sign-up-link">
                <label>Don't have an Account? 
                    <a href="{{ route('register') }}">Register</a>
                </label>
            </div>
        </div>
    </div>
</body>
</html>