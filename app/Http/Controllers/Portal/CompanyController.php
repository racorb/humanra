<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\CompanyRequest;

use App\Models\BusinessArea;
use App\Models\Company;
use App\Models\User;
use App\Models\BusinessCompanyIntegration;
use App\Models\DeadlineCompany;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(){
        $business_areas=BusinessArea::where('status', 1)->get();
        return view('portal.profile', compact('business_areas'));
    }

    public function create(CompanyRequest $request) {
        $email=Company::where('email', $request->email)->first();

        if($email){
            toastr()->error('Bu hesabda istifadəçi artıq qeydiyyatdan keçmişdir. Yenidən cəhd edin!', 'Ooops!');
            return redirect()->back();
        }

        // create code
        $company=new Company();
        $company->company_name=$request->company_name;
        $company->seflink=$request->seflink;
        $company->area=$request->business_areas;
        $company->email=$request->email;
        $company->phone=$request->phone;
        $company->location=$request->location;
        $company->agent=$request->agent;
        $company->detail=$request->description;
        $data=$company->save();

        // search company
        $query_company=Company::where('email', $request->email)->first();

        $user=User::find(Auth::guard('web')->user()->id);
        $user->company_id=$query_company->id;
        $user->save();

        $business_company=new BusinessCompanyIntegration();
        $business_company->company_id=$query_company->id;
        $business_company->business_id=$request->business_areas;
        $business_company->save();

        $deadline=new DeadlineCompany();
        $deadline->company_id=$query_company->id;
        $deadline->start_date=Carbon::now();
        $deadline->finish_date=Carbon::now()->addMonths();
        $deadline->save();

        if($data){
            toastr()->success('Şirkət başarılı şəkildə qeydiyyatdan keçdi', 'Təbriklər!');
            return redirect()->route('portal.profile.index');
        } else {
            toastr()->error('Qeydiyyat zamanı xəta yarandı. Yenidən cəhd edin', 'Ooops!');
            return redirect()->back();
        }

    }
}
