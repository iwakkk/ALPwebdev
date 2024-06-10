<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Dog;


class AdminCatalogController extends Controller
{

    public function admincatalog(Request $request)
    {
        // Cek Login
        if (session()->has('role')) {
            if (session()->get('role') !== 'Admin') {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }

        $current_page = $request->query('catalog_page') ?? 1;
        $keyword = session()->get('keyword') ?? false;
        $query = Dog::select('*');
        if ($keyword) {
            $query->where('nama', 'like', "%{$keyword}%");
        }
        $total_products = $query->count();
        $list_products = $query->paginate(9, ['*'], 'catalog_page', intval($current_page), $total_products);
        return view("admincatalog", [
            'dogs' => $list_products,
        ]);
    }

    public function search_catalog_action(Request $request)
    {
        $keyword = $request->input('keyword');
        session()->put('keyword', $keyword);
        return redirect()->back();
    }

    public function create_catalog(Request $request)
    {
        // Cek Login
        if (session()->has('role')) {
            if (session()->get('role') !== 'Admin') {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
        return view('createcatalog');
    }

    public function create_catalog_action(Request $request)
    {
        try {
            // Validation rules
            $rules = [
                'jenis' => 'required|string',
                'nama' => 'required|string',
                'tanggal_lahir' => 'required',
                'warna' => 'required|string',
                'berat' => 'required',
                'gender' => 'required|string|in:Male,Female',
                'harga' => 'required|numeric',
                'deskripsi' => 'required|string|min:50|max:200',
                'status_jual' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ];
    
            // Validate the request
            $validatedData = $request->validate($rules);
    
            // Store the image
            $fileName = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('img/products'), $fileName);
    
            // Insert data into the database
            Dog::insert([
                'jenis' => $validatedData['jenis'],
                'nama' => $validatedData['nama'],
                'warna' => $validatedData['warna'],
                'gender' => $validatedData['gender'],
                'tanggal_lahir' => $validatedData['tanggal_lahir'],
                'harga' => $validatedData['harga'],
                'berat' => $validatedData['berat'].' KG',
                'deskripsi' => $validatedData['deskripsi'],
                'status_jual' => $validatedData['status_jual'],
                'gambar' => 'img/products/'.$fileName, // Save the image path
            ]);
    
            // Redirect back with success message
            return redirect(url('admincatalog'))->with('success', 'Catalog created successfully!');
        } catch (ValidationException $e) {
            // Redirect back with validation error messages
            return redirect()->back()->with('error', 'Data is not valid, please check again!');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        }
    }

    public function delete_catalog_action(Request $request)
    {
        // Assuming you have a unique identifier for the record, such as an ID
        $id = $request->input('id');

        // Delete the record from the database
        $dog = Dog::where('id_anjing', $id)->first();
        if ($dog) {
            $dog->delete();
            return redirect()->back()->with('success', 'Catalog deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Catalog not found!');
        }
    }

    public function edit_catalog(Request $request, $id)
    {
        // Cek Login
        if (session()->has('role')) {
            if (session()->get('role') !== 'Admin') {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
        
        $dog_detail = Dog::where('id_anjing', '=', $id)->first();
        return view('editcatalog', [
            'dog_detail' => $dog_detail
        ]);
    }

    public function edit_catalog_action(Request $request)
    {
        try {
            // Validation rules
            $rules = [
                'id_anjing' => 'required|string',
                'jenis' => 'required|string',
                'nama' => 'required|string',
                'tanggal_lahir' => 'required',
                'warna' => 'required|string',
                'berat' => 'required',
                'gender' => 'required|string|in:Male,Female',
                'harga' => 'required|numeric',
                'deskripsi' => 'required|string',
                'status_jual' => 'required',
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional, but with constraints if provided
            ];
    
            // Validate the request
            $validatedData = $request->validate($rules);

            // Get the previous image path from database
            $previousImagePath = Dog::where('id_anjing', $validatedData['id_anjing'])->value('gambar');
    
            // Check if there is an uploaded image
            if ($request->hasFile('gambar')) {
    
                // Delete the previous image if it exists
                if ($previousImagePath) {
                    unlink(public_path($previousImagePath));
                }
    
                // Store the new image
                $fileName = $request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->move(public_path('img/products'), $fileName);
                $imagePath = 'img/products/'.$fileName;
            } else {
                // No new image provided, keep the previous one
                $imagePath = $previousImagePath ?? null;
            }
    
            // Update data in the database
            Dog::where('id_anjing', $validatedData['id_anjing'])->update([
                'jenis' => $validatedData['jenis'],
                'nama' => $validatedData['nama'],
                'warna' => $validatedData['warna'],
                'gender' => $validatedData['gender'],
                'tanggal_lahir' => $validatedData['tanggal_lahir'],
                'harga' => $validatedData['harga'],
                'berat' => $validatedData['berat'].' KG',
                'deskripsi' => $validatedData['deskripsi'],
                'status_jual' => $validatedData['status_jual'],
                'gambar' => $imagePath, // Save the image path
            ]);
    
            // Redirect back with success message
            return redirect(url('admincatalog'))->with('success', 'Catalog updated successfully!');
        } catch (ValidationException $e) {
            // Redirect back with validation error messages
            return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        }
    }
}
