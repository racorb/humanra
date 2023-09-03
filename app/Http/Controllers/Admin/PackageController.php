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

    public function store(PackageRequest $request){      

        // create code
        $package=new Package();
        $package->package_name=$request->package_name;
        $data=$package->save();

        if($data){
            toastr()->success('Package has been created successfully', 'Congratulations!');
            return redirect()->route('admin.package.index');
        } else {
            toastr()->error('Something went wrong. Please try again', 'Ooops!');
            return redirect()->back();
        }
    }

    public function status(string $id)
    {
        $package = Package::find($id);

        if($package){
            $query=BusinessPackage::where('package_id', $id)->get();
            if($package->status == 0){
                if($query->count() > 0){
                    for($i=0; $i < $query->count(); $i++){
                        $query[$i]->status=0;
                        $query[$i]->save();
                    }
                }
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
