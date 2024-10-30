<!-- <x-layout>
    <x-slot name="title">
   About Page
    </x-slot>
    <x-slot name="main">
    <div class="content">
        <h1>This is the about page</h1>
        <h3>Subheading of the about page</h3>
        <p>Paragraph text</p>
    </div>
    </x-slot>
</x-layout> -->
<!-- its a inheritance -->
@extends('layout');
 <!-- It passes dynamic title to all pages  -->
 @section('title',' about 2 page');
 @section('main')
 @endsection