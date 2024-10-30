<!-- <x-layout>
    <x-slot name="title">
        Login Page
    </x-slot>
    <x-slot name="main">
    <div class="content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; background-color: #f9f9f9;">
        <h1 style="font-size: 2rem; font-weight: bold; margin-bottom: 20px;">User Login</h1>
        <input type="text" name="username" id="username" placeholder="Name" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">
        <input type="password" name="password" id="password" placeholder="Password" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px;">
        <button style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;">Login</button>
    </div>
    </x-slot>
</x-layout> -->
<!-- its a inheritance -->
@extends('layout');
 <!-- It passes dynamic title to all pages  -->
 @section('title',' login2 page');
 @section('main')
 <div class="content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; background-color: #f9f9f9;">
        <h1 style="font-size: 2rem; font-weight: bold; margin-bottom: 20px;">User Login</h1>
        <input type="text" name="username" id="username" placeholder="Name" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">
        <input type="password" name="password" id="password" placeholder="Password" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px;">
        <button style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;">Login</button>
    </div>
 @endsection
