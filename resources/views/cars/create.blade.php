<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="">Criar Carro</h1>

    <div class="">
        @if($errors->any())
        <ul class="">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
   
    <form method="post" action="{{route('car.store')}}" class="">
    @csrf
    @method('post')
        <div class="">
            <label for="" class="">Nome:</label>
            <input type="text" class="" name="name" placeholder="Nome"/>
        </div>
        <div class="">
            <label for="" class="">Modelo:</label>
            <input type="text" class="" name="model" placeholder="Modelo"/>
        </div>
        <div class="">
            <label for="" class="">Ano:</label>
            <input type="text" class="" name="year" placeholder="Ano"/>
        </div>
        <div class="">
            <label for="" class="">Preco:</label>
            <input type="text" class="" name="price" placeholder="Preco"/>
        </div>
        <div class="">
            <label for="" class="">Descricao:</label>
            <input type="text" class="" name="description" placeholder="Descricao"/>
        </div>
        <div class="">
            <input type="submit" class="" value="Criar Novo Carro"/>
        </div>
    </form>
</body>
</html>
