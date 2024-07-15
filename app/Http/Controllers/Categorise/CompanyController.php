<?php

namespace App\Http\Controllers\Categorise;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function CompanyList(){
        $company = Company::all();
        return view('Categorise/Company/company-list', ['company' => $company]);
    }
    public function CompanyAdd(){
        return view('Categorise/Company/company-add');
    }
    public function CompanyAddSave(Request $request){

        $ckeck = $request->input('companyName');
        $existingEmail = Company::where('name_company', $ckeck)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }
        $company = Company::create([
            'name_company' => $request->companyName,
            'created_at' =>now()->toDateTimeString()
        ]);
        return redirect()->back()->with('redirect', true);
    }

    public function CompanyEdit($id){
        $company = Company::find($id);
        return view('Categorise/Company/company-edit', compact('company'));
    }

    public function CompanyEditSave(Request $request , $id){
        $company = Company::find($id);
        $ckeck = $request->input('companyName');
        $existingEmail = Company::where('name_company', $ckeck)->where('id', '!=', $id)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }
        $company->name_company = $request->input('companyName');
        $company->updated_at = now()->toDateTimeString();
        $company->save();
        return redirect()->back()->with('redirect', true);
    }

    public function CompanyDelete($id){
        $company = Company::find($id);
        $company->delete();
        return redirect()->route(route:'listCompany');
    }
}
