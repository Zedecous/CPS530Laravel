@extends('page4')


@section('recipeTitle', 'Pumpkin Pie')
@section('foodImage', 'https://images.media-allrecipes.com/userphotos/720x405/5895606.jpg')

@section('ingredients')
  <p>1 (15 ounce) can Pumpkin</p>
  <p>1 (14 ounce) can Eagle Brand Sweetened Condensed Milk</p>
  <p>2 large eggs</p>
  <p>1 teaspoon ground cinnamon</p>
  <p>1/2 teaspoon ground ginger</p>
  <p>1/2 teaspoon ground nutmeg</p>
  <p>1/2 teaspoon salt</p>
  <p>1 (9 inch) unbaked pie crust</p>
@endsection

@section('instructions')
  <p>Preheat oven to 425 degrees F. Whisk pumpkin, sweetened condensed milk, eggs, spices and salt in medium bowl until smooth. Pour into crust. Bake 15 minutes.</p>
  <p>Reduce oven temperature to 350 degrees F and continue baking 35 to 40 minutes or until knife inserted 1 inch from crust comes out clean. Cool. Garnish as desired. Store leftovers covered in refrigerator.</p>
@endsection

@section('previous','{{ route('demo')}}')
@section('next','{{ route('demo1')}}')
