<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    @vite(['resources/css/dash-page.css'])
</head>
<style>
    body {
            background-color: white !important;
            margin: 0;
            padding: 0;
        }
        
        .app-container {
            background-color: white;
        }
        
        .main-content {
            background-color: white;
        }

</style>
<body>
    <x-app-layout>
        <div class="app-container">
            <div class="main-content">
                <div class="centered-box">
                    <div class="pokedex-card">
                        <div class="pokedex-content">
                            POKEDEX
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>