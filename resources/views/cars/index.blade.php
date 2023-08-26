<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="">Tabela de Carros</h1>
    <div class="">
        <a href=" {{route('car.create')}} " class="">
            Criar novo Carro
        </a>
    </div> 
    <div class="">
        @if(session()->has('success'))
            <div class="">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="">
        <table class="" border="2">
            <tr class="">
                <th>ID</th>
                <th>Nome</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Preco</th>
                <th>descricao</th>
                <th>Editar</th> 
                <th>Deletar</th> 
            </tr>
            @foreach($cars as $car)
                <tr>
                    <td> {{$car->id}} </td>
                    <td> {{$car->name}} </td>
                    <td> {{$car->model}} </td>
                    <td> {{$car->year}} </td>
                    <td> {{$car->price}} </td>
                    <td> {{$car->description}} </td>
                    <td>
                        <a href="{{route('car.edit', ['car' => $car])}}" class="">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{route('car.destroy', ['car' => $car])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Apagar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>