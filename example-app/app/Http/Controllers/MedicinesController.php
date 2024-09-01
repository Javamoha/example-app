<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\Validator;
use App\Models\Quantity_Available;
use App\Http\Requests\MedicineRequest;
use Illuminate\Http\RedirectResponse;



class MedicinesController extends Controller
{
  public function AddMedicine(MedicineRequest $request)
  {


    $data = new Medicine;

    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $imageName = time() . '.' . $image->getClientOriginalExtension();
      $image->move('Medicineimage', $imageName);
      $data->image = $imageName;
    }

    $data->scientific_name = $request->scientific_name;
    $data->commercial_name = $request->commercial_name;
    $data->category = $request->category;
    $data->company_name = $request->company_name;
    $data->validity = $request->validity;
    $data->price = $request->price;
    $data->quantity = $request->quantity;
    $data->save();

    return redirect()->back()->with('message', 'successfly');
  }

  public function showmedi($type)
  {
    $medi = Medicine::where('category', $type)->OrWhere('scientific_name', $type)->get();
    $medi->makeHidden('price');
    return response()->json([

      'Medicine' => $medi,
    ]);
  }
  public function showmedici()
  {
    $medi = Medicine::get();
    return view('admin/showmedicine', compact('medi'));
  }

  public function viewhealt()
  {
    $medii = Medicine::get();
    return view('health', compact('medii'));
  }


  public function showonlymedi($id)
  {
    $medi = Medicine::findOrFail($id);
    return view('health', compact('medii'));

  }
  public function browsemedi($type)
  {
    $medi = Medicine::where('category', $type)->OrWhere('scientific_name', $type)->get();
    $medi->makeHidden('price');
    return $medi;
  }
  public function index5(Request $request)
  {

    $medicuneId = $request->input('medicune_id');
    $medii = Medicine::find($medicuneId);
    $meds = [];
    $scientific_name = $medii->scientific_name;
    $commercial_name = $medii->commercial_name;
    $category = $medii->category;
    $company_name = $medii->company_name;
    $validity = $medii->validity;
    $price = $medii->price;
    $meds[] = [
      'scientific_name' => $scientific_name,
      'commercial_name' => $commercial_name,
      'category' => $category,
      'validity' => $validity,
      'price' => $price,
      'company_name' => $company_name

    ];


    return view('user.deatilsmedicine', ['meds' => $meds]);
  }
  public function search(Request $request)
  {
    $query = $request->input('query');

    $results = Medicine::where('scientific_name', 'like', '%' . $query . '%')->get();
    if ($results->isEmpty()) {
      $message='This medicine is not found';
      return  view('user.error',compact('message'));
  }
    if ($results) {
      $meds = [];
      foreach ($results as $result) {
        $scientific_name = $result->scientific_name;
        $commercial_name = $result->commercial_name;
        $category = $result->category;
        $company_name = $result->company_name;
        $validity = $result->validity;
        $price = $result->price;

      }
      $meds[] = [
        'scientific_name' => $scientific_name,
        'commercial_name' => $commercial_name,
        'category' => $category,
        'validity' => $validity,
        'price' => $price,
        'company_name' => $company_name

      ];

      return view('user.deatilsmedicine', ['meds' => $meds]);

    }


  }
}
