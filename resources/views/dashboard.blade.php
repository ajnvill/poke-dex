<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/dash-page.css'])
</head>
<body>
    <x-app-layout>
        <div class="head-container">
            <div class="pokedex-header">
                POKEDEX
            </div>
        </div>
        <div class="body-container">
            <div class="filter-container">
                <div class="div-filter">
                    <!-- Filter content goes here -->
                </div>
            </div>
            <div class="search-container">
                <div class="div-search">
                    <input type="text" placeholder="Search.." class="search-input">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>