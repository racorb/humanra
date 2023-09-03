<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BusinessArea;
use App\Models\BusinessPackage;
use App\Http\Requests\BusinessAreaRequest;

class BusinessAreaController extends Controller
{
    public function index(){
        $business = BusinessArea::all();
        return view('admin.business-area', compact('business'));
    }

    public function create(){
        return view('admin.business-area-create');
    }

    public function store(BusinessAreaRequest $request){     

        // create code
        $business=new BusinessArea();
        $business->business_name=$request->business_name;
        $data=$business->save();

        if($data){
            toastr()->success('Business area has been created successfully', 'Congratulations!');
            return redirect()->route('admin.business.area.index');
        } else {
            toastr()->error('Something went wrong. Please try again', 'Ooops!');
            return redirect()->back();
        }
    }

    public function status(string $id)
    {
        $business = BusinessArea::find($id);

        if($business){
            $query=BusinessPackage::where('business_id', $id)->get();
            if($business->status == 0){
                if($query->count() > 0){
                    for($i=0; $i < $query->count(); $i++){
                        $query[$i]->status=0;
                        $query[$i]->save();
                    }
                }
                $business->status=1;
            } else {
                for($i=0; $i < $query->count(); $i++){
                    $query[$i]->status=1;
                    $query[$i]->save();
                }
                $business->status=0;
            }
        }

        $business->save();
  
        return back();
    }

    public function delete(string $id)
    {
        $business = BusinessArea::find($id);
        
        if($business){
            if($business->status == 1){
                toastr()->error('This data cannot be deleted. Because Package is active', 'Ooops!');
            } else {
                $query=BusinessPackage::where('business_id', $id)->get();
                if($query->count() > 0){
                    for($i=0; $i < $query->count(); $i++){
                        $query[$i]->delete();
                    }
                }

                toastr()->success('Item of Business Area has been deleted successfully', 'Congratulations!');
                $business->delete();
            }
        } 
        return redirect()->route('admin.business.area.index');
    }

    public function edit(string $id)
    {
        $business = BusinessArea::find($id);
        return view('admin.business-area-edit', compact('business'));
    }

    public function update(BusinessAreaRequest $request, string $id)
    { 
        // create code
        $business=BusinessArea::find($id);
        $business->business_name=$request->business_name;
        $data=$business->save();

        if($data){
            toastr()->success('Business area has been updated successfully', 'Congratulations!');
            return redirect()->route('admin.business.area.index');
        } else {
            toastr()->error('Something went wrong. Please try again', 'Ooops!');
            return redirect()->back();
        }

        return redirect()->back();


    }
}
