<?php

namespace App\Http\Controllers;

use App\Association;
use App\Http\Requests\AssociationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Validator;


class AssociationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin)
        {
            $associations =Association::withTrashed()->paginate(6);
        }
        else 
        {
            $associations = Association::withTrashed()->paginate(6);;
        }
       
        return view('association.index', ['associations' => $associations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('association.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociationRequest $request)
    {
            $association = new Association(); 

            $association->user_id=$request->user()->id;
            $association->الإسم=$request->input('الإسم');
            $association->تاريخ_التأسيس=$request->input('تاريخ_التأسيس');
            $association->الهاتف=$request->input('الهاتف');
            $association->العنوان=$request->input('العنوان'); 
            $association->البريد_الإلكتروني=$request->input('البريد_الإلكتروني');
            $association->الوصف=$request->input('الوصف'); 
            // upload image 
            if($request->hasFile('الشعار')) {
                
                $path= $request->file('الشعار')->store('شعارات_الجمعيات');

                $association->الشعار= $path;
            }
            // upload file pdf
            if($request->hasFile('القانون_الأساسي')) {
                
                $file= $request->file('القانون_الأساسي')->store('القوانين _لأساسية');

                $association->القانون_الأساسي= $file;
            }
            $association->الرئيس=$request->user()->name;
            $association->نائب_الرئيس=$request->input('نائب_الرئيس');
            $association->الكاتب_العام=$request->input('الكاتب_العام');
            $association->نائب_الكاتب_العام=$request->input('نائب_الكاتب_العام'); 
            $association->أمين_المال=$request->input('أمين_المال');
            $association->نائب_أمين_المال=$request->input('نائب_أمين_المال');
            $association->المستشار_الأول=$request->input('المستشار_الأول');
            $association->المستشار_الثاني=$request->input('المستشار_الثاني');  

            $association->save();

            return redirect('/associations')->with('success','الإضافة تمت بنجاح');
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('association.show', ['association' => $association]);
        $association = Association::find($id);
        return response()->json([
            'error' => false,
            'association' => $association
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $association=Association::find($id);

        $this->authorize('update',$association);

        return view('association.edit', [
            'association' => $association
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(AssociationRequest $request,$id)
    {
            $association =Association::find($id);

            $association->user_id=$request->user()->id;
            $association->الإسم=$request->input('الإسم');
            $association->تاريخ_التأسيس=$request->input('تاريخ_التأسيس');
            $association->الهاتف=$request->input('الهاتف');
            $association->العنوان=$request->input('العنوان'); 
            $association->البريد_الإلكتروني=$request->input('البريد_الإلكتروني');
            $association->الوصف=$request->input('الوصف'); 
             // upload image 
             if($request->hasFile('الشعار')) {
                
                $path= $request->file('الشعار')->store('شعارات_الجمعيات');
                if($association->الشعار) {
                    Storage::delete($association->الشعار);
                    $association->الشعار = $path;
                }
                else {
                    $association->الشعار= $path;
                }
            }
            // upload file pdf
            if($request->hasFile('القانون_الأساسي')) {
                
                $file= $request->file('القانون_الأساسي')->store('القوانين _لأساسية');
                if($association->القانون_الأساسي) {
                    Storage::delete($association->القانون_الأساسي);
                    $association->القانون_الأساسي = $path;
                }
                else {
                    $association->القانون_الأساسي= $path;
                }

            }
            $association->الرئيس=$request->input('الرئيس');
            $association->نائب_الرئيس=$request->input('نائب_الرئيس');
            $association->الكاتب_العام=$request->input('الكاتب_العام');
            $association->نائب_الكاتب_العام=$request->input('نائب_الكاتب_العام'); 
            $association->أمين_المال=$request->input('أمين_المال');
            $association->نائب_أمين_المال=$request->input('نائب_أمين_المال');
            $association->المستشار_الأول=$request->input('المستشار_الأول');
            $association->المستشار_الثاني=$request->input('المستشار_الثاني');  

            
            $association->save();
            dd($association);
            return redirect('/associations')->with('success','الإضافة تمت بنجاح');; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Association $association)
    {
        $this->authorize('delete',$association);

        $association->delete();
        return redirect('/associations')->with('success',' ثم الحدف بنجاح');; 

    }

    public function Restore($id)
    {
        $association=Association::onlyTrashed()->where('id',$id)->first();
        $association->restore();
        return redirect('/associations')->with('success','ثم إسترجاع العنصر بنجاح');; 
    }
}
