<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="">Editar Carro</h1>

    <div class="">
        @if($errors->any())
        <ul class="">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
   
    <form method="put" action="{{route('car.update', ['car' => $car])}}" class="">
    @csrf
    @method('put')
        <div class="">
            <label for="" class="">Nome:</label>
            <input type="text" class="" name="name" value="{{$car->name}}"/>
        </div>
        <div class="">
            <label for="" class="">Modelo:</label>
            <input type="text" class="" name="model" value="{{$car->model}}"/>
        </div>
        <div class="">
            <label for="" class="">Ano:</label>
            <input type="text" class="" name="year" value="{{$car->year}}" />
        </div>
        <div class="">
            <label for="" class="">Preco:</label>
            <input type="text" class="" name="price" value="{{$car->price}}"/>
        </div>
        <div class="">
            <label for="" class="">Descricao:</label>
            <input type="text" class="" name="description" value="{{$car->description}}"/>
        </div>
        <div class="">
            <input type="submit" class="" value="Actualizar Carro"/>
        </div>
    </form>
</body>
</html>
