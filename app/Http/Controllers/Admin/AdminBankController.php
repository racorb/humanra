<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Bank;
use App\Http\Requests\BankRequest;

class AdminBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::all();

        return view('admin.bank', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bank-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BankRequest $request)
    {
        $request->validate([
            'companyname' => 'required',
            'companyiban' => 'required',
            'companyswift' => 'required',
            'companyaccount' => 'required',
        ]);

        // create code
        $bank=new Bank();
        $bank->name=$request->companyname;
        $bank->iban=$request->companyiban;
        $bank->account=$request->companyswift;
        $bank->swift=$request->companyaccount;
        $data=$bank->save();

        if($data){
            toastr()->success('Bank was created successfully', 'Congratulations!');
        } else {
            toastr()->error('Something went wrong. Please try again', 'Ooops!');
        }

        return redirect()->route('admin.bank.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bank = Bank::find($id);
        return view('admin.bank-edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BankRequest $request, string $id)
    {
        $request->validate([
            'companyname' => 'required',
            'companyiban' => 'required',
            'companyswift' => 'required',
            'companyaccount' => 'required',
        ]);

        // update code
        $bank=Bank::find($id);
        $bank->name=$request->companyname;
        $bank->iban=$request->companyiban;
        $bank->account=$request->companyswift;
        $bank->swift=$request->companyaccount;
        $data=$bank->save();

        if($data){
            toastr()->success('Bank was updated successfully', 'Congratulations!');
        } else {
            toastr()->error('Something went wrong. Please try again', 'Ooops!');
        }

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete(string $id)
    {
        $bank = Bank::find($id);
        if($bank){
            if($bank->status == 0){
                toastr()->error('This data cannot be deleted', 'Ooops!');
            } else {
                toastr()->success('Bank has been deleted successfully', 'Congratulations!');
                $bank->delete();
            }
        }        
        return redirect()->route('admin.bank.index');
    }

    public function detail(string $id)
    {
        $bank = Bank::find($id);
  
        return response()->json($bank);
    }

    public function status(string $id)
    {
        $bank = Bank::find($id);

        if($bank){
            if($bank->status == 0){
                $bank->status=1;
            } else {
                $bank->status=0;
            }
        }

        $bank->save();
  
        return back();
    }
}
