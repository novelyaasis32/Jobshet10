<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <div id="app">
                @section('data')
                ini merupakan master data
                @show
            <main class="py-4">
                @yield('content')
            </main>
            <main class="py-4">
                <p align=center> Novelya Asis Sholikha </p>
            </main>
            <main class="py-4">
                <br><br><br>
                <p align=center>ABOUT : </p>
                @extends('about') 
            </main>
    </div>
</body>
</html>