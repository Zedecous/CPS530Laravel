@extends('page4')


@section('recipeTitle', 'Scrambled Eggs')
@section('foodImage', 'https://x9wsr1khhgk5pxnq1f1r8kye-wpengine.netdna-ssl.com/wp-content/uploads/Scrambled-with-Milk-930x620.jpg')

@section('ingredients')
  <p>4 Eggs<p>
  <p>1/4 cup milk</p>
  <p>Salt and pepper</p>
  <p>2 tsp. butter</p>
@endsection

@section('instructions')
  <p>Beat eggs, milk, salt and pepper in medium bowl until blended</p>
  <p>Heat butter in large nonstick skillet over medium heat until hot. Pour in egg mixture. As eggs begin to set, gentry pull the eggs across the pan with a spatula, forming large soft curds.</p>
  <p>Continue cooking - pulling, lifting and folding eggs - until thickened and no visible liquid egg remains. Do not stir constantly. REMOVE from heat. Serve IMMEDIATELY</p>
@endsection

@section('previous','{{ route('demo')}}')
@section('next','{{ route('demo1')}}')
