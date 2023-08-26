<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    //
    public function index(){
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }

    public function create(){
        return view('cars.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newCar = Car:: create($data);
        return redirect(route('car.index'))->with('success', 'Produto criado com sucesso!');
    }

    public function edit (Car $car){
        return view('cars.edit', ['car' =>$car]);
    }

    public function update(Car $car, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $car->update($data);
        return redirect(route('car.index'))->with('success', 'Produto actualizado com sucesso!');
    }

    public function destroy(Car $car){
        $car->delete();
        return redirect(route('car.index'))->with('success', 'Produto apagado com sucesso!');
    }
}
