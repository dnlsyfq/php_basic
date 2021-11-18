
```
<?php 
    $name = 'Hoba';
    echo 'Meteor Name: ' . $name;
?>
```

### Array

* create array 

```
$meteors = array();

$meteors = [];
```

```
$meteors = array('Hoba');
$meteors = ['Hoba'];

$meteors = array('Hoba','Cape York');
```

```
echo($meteors)
print_r($meteors)
```

* append array

```
$meteors[] = 'Campo del Cielo';
$meteors[] = 'Canyon Diablo';

print_r($meteors);
```

* array method

$people = array(
    'David',
    'Jennifer',
    'Falken',
    'Joshua'
);

count($people);
implode(' ',$people);
shuffle($people);
asort($people);

### Associative Meteorite Array

```
$meteors = array(
    'Hoba' => 600000,
    'Cape York' => 3423,
    'Campo del Cielo' => 3435,
    'Canyon Diablo' => 2434
)


foreach($meteors as $name => $weight){
    echo "$name : $weight";
}
```

### Multidimensional Array

```
$games = array(
    'tabletop' => array(
        'sorry',
        'life',
        'scrabble'
    ),
    'card' => array(
        'poker',
        'blackjack'
    )
)

$games['card'];
$games['card'][0] = 'rummy';



print_r($games['card']);
echo $games['tabletop'][0];
```

### Conditional statements 

if( $year ){

} elseif( $year ) {
 
} else {

}

### while loops 

```
    $i = 1;

    while($i <= 12){
        $value = $i * 12;
        echo "<br>$i times 12 is $value";
        $i++;
    }
```

### for loops 

```
   for($i = 1; $i <= 12; $i++){
        $value = $i * 12;
        echo "<br>$i times 12 is $value";
    }

```

* foreach array
```
    foreach($meteors as $meteor){
        echo "<br> $meteor";
    }
```

# Laravel

<img src="img/mvc.jpg">


### blade templating engine

* install via composer
```
composer create-project laravel/laravel --prefer-dist
composer create-project laravel/laravel <name>
```

* blade display data

```
<div>
    <p>Hello {{$name}} </p>
</div>
```

* blade layouts , inheritance and modules

```
@extends('layout')
@section('content')
    <div>
        <p>Insert this!</p>
    </div>
@endsection
```

```
<div>
    @yield('content')
</div>
```

* collect function
to create a collection from array


$c = collect ([
    value,value,...
]);

$c = collect ([
    [
        key => value
    ] ,
    [
        key => value
    ],
    [
        key => value
    ]
]);

$c -> fetch(key); 

* eloquent 
find in the database 

$m = Market::find(3);
$m['name];
$m -> name;

### eloquent crud 

* use model to create a new market 

```
$m = new Market;

$m -> name = 'Winter Garden Market';

$m -> save();
```

```
$data = [
    'name' => 'Winter Garden Market',
    'city' => 'Winter Garden'
];

Market::create($data);
```

* query 
```
$m = Market::find(3);

echo $m -> name;

$markets = Market::all();

$markets = Market::where('city','Orlando') -> get();

$markets = Market::where('city','Orlando')
            ->orderBy('name','desc')
            ->take(5)
            ->get();
```

* update 

```
$m = Market::find(3);
$m -> name = 'Winter Garden Co-op Market';
$m -> save();
```

```
$m = Market::find(3);
$data = [
    'name' => 'Winter Garden Co-op Market',
    'website' => 'wgcoop.com'
];

$m -> fill($data);
```

* delete

```
$m = Market::find(3);

$m -> delete();

Market::destroy(3);

Market::destroy([3,4,5]);
```

### Eloquent models associate database tables 

$m = Market::find(3);

app/Market.php
```
use Illuminate\Database\Eloquent\Model;

Class Market extends Model{

}
```

* local scopes

```
Class Market extends Model {
    public function scopeOrlando(){
        return $query->where('city','Orlando')
                     ->orderBy('name','desc')
                     ->get();
    }
}

$orlandoMarkets = Market::orlando() -> get();
```

### Views

* Resources/views/markets/show.blade.php
```
<body>
    @php
        $market = Market::find(3);
    @endphp

    <h1>{{ $market -> name  }}</h1>
    <h3>{{ $market -> city  }}</h3>
    Website:
    <a href="{{ $market -> website }}">{{ $market -> website  }} </a>

</body>
```

* listing all markets with a view 

* Resources/views/markets/show.blade.php
```
@php
    $markets = Market::all();
@endphp

@foreach($markets as $market)
    <a href="{{ $market -> website }}">
        <h2>{{ $market -> name }}</h2>
    </a>
@endforeach
```

* creating layout

    * resources/views/layouts/app.blade.php
    ```
    <!DOCTYPE html>
    <head></head>
    <body>
        @yield('main)
    </body>
    ```

    * resources/views/markets/index.blade.php
    ```
    @extends('layouts.app')
    @section('main')
        @php
            $markets = Market::all();
        @endphp
        @foreach($markets as $market)
            <a href="{{ $market -> website }}">
                <h2>{{ $market -> name  }}</h2>
            </a>
        @endforeach
    @endsection
    ```

# Vanilla

```
<?php $numbers = [1,2,3]; ?>

    <ul>
        <?php foreach($numbers as $number): ?> 
            <li>Number is <?= $number ?></li>
        <?php endforeach; ?>
    </ul>
```