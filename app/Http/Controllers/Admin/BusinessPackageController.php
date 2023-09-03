<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BusinessArea;
use App\Models\Package;
use App\Models\BusinessPackage;

class BusinessPackageController extends Controller
{
    public function index()
    {
        $business_areas=BusinessArea::where('status', 1)->get();
        $business_area_lists=BusinessPackage::all();


        return view('admin.business-package', compact('business_areas', 'business_area_lists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'business_areas' => 'required',
            'packages' => 'required',
        ], [
            'business_areas.required' => 'Business Area should not be empty',
            'packages.required' => 'Package should not be empty',
        ]);

        // create code
        $business_package=new BusinessPackage();
        $business_package->business_id=$request->business_areas;
        $business_package->package_id=$request->packages;
        $data=$business_package->save();

        if($data){
            toastr()->success('Business Package was created successfully', 'Congratulations!');
        } else {
            toastr()->error('Something went wrong. Please try again', 'Ooops!');
        }

        return redirect()->route('admin.business.package.index');
    }

    public function change(Request $request){  
        $package=array();      
        $package_data=Package::all();

        for($i=0; $i < $package_data->count(); $i++ ){
            $query=BusinessPackage::where('business_id', $request->businessarea_id)->where('package_id', $package_data[$i]->id)->first();

            if(!$query){
                array_push($package, $package_data[$i]);
            }
        }

        return response()->json($package);
    }

    public function status(string $id)
    {
        $business_package = BusinessPackage::find($id);

        if($business_package){
            if($business_package->status == 0){
                $business_package->status=1;
            } else {
                $business_package->status=0;
            }
        }

        $business_package->save();
  
        return back();
    }

    public function delete(string $id)
    {
        $business_package = BusinessPackage::find($id);
        if($business_package){
            if($business_package->status == 0){
                toastr()->error('This data cannot be deleted', 'Ooops!');
            } else {
                toastr()->success('Item of Business Package has been deleted successfully', 'Congratulations!');
                $business_package->delete();
            }
        }        
        return redirect()->route('admin.business.package.index');
    }
}
