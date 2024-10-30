<!-- <x-layout>
    <x-slot name="title">
    Home Page
    </x-slot>
    <x-slot name="main">
    <div class="content">
        <h1>This is the home page</h1>
        <h3>Subheading of the home page</h3>
        <p>Paragraph text</p>
    </div>
    </x-slot>
</x-layout> -->

<!-- its a inheritance -->
 @extends('layout');
 <!-- It passes dynamic title to all pages  -->
 @section('title',' home 2 page');