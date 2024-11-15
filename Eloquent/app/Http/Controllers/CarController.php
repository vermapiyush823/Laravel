<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function index()
    {
        return view('carAdd');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $car = new Car();
        $car->name = $request->name;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->save();

        return redirect("/car/" . $car->id);
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('showCar', ['car' => $car]);
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('editCar', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $car = Car::find($id);
        $car->name = $request->name;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->save();
        return view('showCar', ['car' => $car]);
    }
}
