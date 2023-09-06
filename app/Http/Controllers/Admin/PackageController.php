<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\BusinessPackage;
use App\Http\Requests\PackageRequest;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::all();
        return view('admin.package', compact('packages'));
    }

    public function create(){
        return view('admin.package-create');
    }

    public function store(Request $request){ 

        $validated = $request->validate([
            'package_name' => 'required|min:3|max:60',
            'package_seflink' => 'required|min:3',
        ], [
            // name
            'package_name.required' => 'Package should not be empty',
            'package_name.min' => 'Your package name must be a minimum of 3 characters',
            'package_name.max' => 'Your package name must be a maximum of 60 characters',

            // seflink
            'package_seflink.required' => 'Seflink should not be empty',
            'package_seflink.min' => 'Seflink must be a minimum of 3 characters',
        ]);

        $filter_package = Package::where('seflink', $request->package_seflink)->first();

        if($filter_package){
            toastr()->error('This is seflink is busy. Please try again', 'Ooops!');
                return redirect()->back();
        } else {
            // create code
            $package=new Package();
            $package->package_name=$request->package_name;
            $package->seflink=$request->package_seflink;
            $data=$package->save();

            if($data){
                toastr()->success('Package has been created successfully', 'Congratulations!');
                return redirect()->route('admin.package.index');
            } else {
                toastr()->error('Something went wrong. Please try again', 'Ooops!');
                return redirect()->back();
            }
        }

        
    }

    public function status(string $id)
    {
        $package = Package::find($id);

        if($package){
            $query=BusinessPackage::where('package_id', $id)->get();
            if($package->status == 0){
                $package->status=1;
            } else {
                for($i=0; $i < $query->count(); $i++){
                    $query[$i]->status=1;
                    $query[$i]->save();
                }
                $package->status=0;
            }
        }

        $package->save();
  
        return back();
    }

    public function delete(string $id)
    {
        $package = Package::find($id);
        if($package){
            if($package->status == 1){
                toastr()->error('This data cannot be deleted. Because Package is active', 'Ooops!');
            } else {
                $query=BusinessPackage::where('package_id', $id)->get();
                if($query->count() > 0){
                    for($i=0; $i < $query->count(); $i++){
                        $query[$i]->delete();
                    }
                }

                toastr()->success('Package has been deleted successfully', 'Congratulations!');
                $package->delete();
            }
        }        
        return redirect()->route('admin.package.index');
    }

    public function edit(string $id)
    {
        $package = Package::find($id);
        return view('admin.package-edit', compact('package'));
    }

    public function update(PackageRequest $request, string $id)
    {      
        // create code
        $package=Package::find($id);
        $package->package_name=$request->package_name;
        $data=$package->save();

        if($data){
            toastr()->success('Package has been updated successfully', 'Congratulations!');
            return redirect()->route('admin.package.index');
        } else {
            toastr()->error('Something went wrong. Please try again', 'Ooops!');
            return redirect()->back();
        }

        return redirect()->back();
    }
}
