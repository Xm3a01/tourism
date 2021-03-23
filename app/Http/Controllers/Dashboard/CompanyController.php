<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use Illuminate\Http\Request;
use App\Traits\AttachmentTrait;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
   use AttachmentTrait;

   
    public function index()
    {
        $companies = Company::latest()->paginate(100);

        return view('dashboard.companies.index' , ['companies' => $companies]);
    }

    
    public function create()
    {
        return view('dashboard.companies.create');

    }

    
    public function store(Request $request)
    {
        $company = Company::create($request->except('image'));
        if($request->has('image')){
           $this->singleFile($request->image , $company , 'companies');
        }

        \Session::flash('success' , 'تم الحفظ بنجاح');
        return redirect()->route('companies.index');
    }


    public function edit(Company $company)
    {
        return view('dashboard.companies.edit' , ['company' => $company]);

    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->except('image'));
        if($request->has('image')){
            $company->clearMediaCollection('companies');
            $this->singleFile($request->image , $company , 'companies');
        }

        \Session::flash('success' , 'تم التعديل بنجاح');
        return redirect()->route('companies.index');
    }

    public function destroy(Company $company)
    {
        if($company->image){
          $company->clearMediaCollection('companies');
        }

        $company->delete();

        \Session::flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('companies.index');
    }
}
