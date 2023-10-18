@extends('layouts.tamu', ['title'=>'kamar'])

@section('content')

<x-form-pesan />
<h1 class="text-center my-4">Kamar</h1>
<hr>
    <div class="row kamar mb-3">
        <div class="col-md-4">
            <img src="images/kamar_standar.jpg" class="img-fluid rounded img-thumbnail" />
        </div>
        <div class="col-md">
            <h2><a href="#"> Standar Room </a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin leo dui, sit amet finibus ipsum bibendum sed. 
                Nunc lacinia congue scelerisque. Donec ac tincidunt turpis, nec eleifend nisl. Morbi ligula sem, ornare in consectetur vel, molestie at libero. Nullam aliquet lacinia justo vitae tincidunt. Proin non consectetur turpis. Suspendisse nisl ligula, tristique quis vestibulum quis, ultrices eu ligula. 
                Etiam tristique ligula lacinia nunc vehicula faucibus.
            </p>
            <p>
                Rp. 300. 000 / malam
            </p>
        </div>
    </div>
    <hr>
    <div class="row kamar mb-3">
        <div class="col-md-4">
            <img src="images/kamar_suite.jpg" class="img-fluid rounded img-thumbnail" />
        </div>
        <div class="col-md">
            <h2><a href="#"> Suite Room </a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin leo dui, sit amet finibus ipsum bibendum sed. 
                Nunc lacinia congue scelerisque. Donec ac tincidunt turpis, nec eleifend nisl. Morbi ligula sem, ornare in consectetur vel, molestie at libero. Nullam aliquet lacinia justo vitae tincidunt. Proin non consectetur turpis. Suspendisse nisl ligula, tristique quis vestibulum quis, ultrices eu ligula. 
                Etiam tristique ligula lacinia nunc vehicula faucibus.
            </p>
            <p>
                Rp. 400. 000 / malam
            </p>
        </div>
    </div>
    <hr>
    <div class="row kamar mb-3">
        <div class="col-md-4">
            <img src="images/kamar_deluxe.jpg" class="img-fluid rounded img-thumbnail" />
        </div>
        <div class="col-md">
            <h2><a href="#"> Deluxe Room </a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin leo dui, sit amet finibus ipsum bibendum sed. 
                Nunc lacinia congue scelerisque. Donec ac tincidunt turpis, nec eleifend nisl. Morbi ligula sem, ornare in consectetur vel, molestie at libero. Nullam aliquet lacinia justo vitae tincidunt. Proin non consectetur turpis. Suspendisse nisl ligula, tristique quis vestibulum quis, ultrices eu ligula. 
                Etiam tristique ligula lacinia nunc vehicula faucibus.
            </p>
            <p>
                Rp. 700. 000 / malam
            </p>
        </div>
    </div>
@endsection