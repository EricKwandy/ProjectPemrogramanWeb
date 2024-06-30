<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Exception;
use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:inputs,email',
            'studentId' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:51200',
        ]);

        try {
            $input = new Input();
            $input->name = $validate['name'];
            $input->email = $validate['email'];
            $input->studentId = $validate['studentId'];
            $input->address = $validate['address'];

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $input->image = $imagePath;
            } else {
                $input->image = null; // or some default value
            }

            $input->save();

            return response()->json([
                'status_code' => 200,
                'status' => 'success',
                'message' => 'Data successfully added',
                'data' => $input,
            ], 200);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'status' => 'error',
                'message' => $error->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
