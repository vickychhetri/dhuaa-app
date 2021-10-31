<?php

namespace App\Http\Controllers;
use App\Models\Typepage;
use App\Models\Userpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Agentsessionhandler;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TypepageController;

class UserpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typePagesName=Typepage::all();
        return view('Admin.Pages.Addpage')
        ->with('TypePageName',$typePagesName);
    }



    public function showpage($id){
        $data=Userpage::where('pageName','=',$id)->firstOrFail();
        return view('Template.template1')
         ->with('pageInfo',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'thumbnailimage'=>'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:2048',
            'pagetypestoCreate'=>'required',
            'tags'=>'required',
            'shortdescription'=>'required',
            'mytextarea'=>'required',
        ]);
        $pagename1= strtolower(UserpageController::create_slug($request->title));
       
        $postCat=1;
        if($request->pagetypestoCreate!=null){
            $postCat=$request->pagetypestoCreate;
        }
        $reDbms= new Userpage;
        // $pagenamenewafter="Dhuaa-".time()."-".$pagename1;
         $pagenamenewafter=$pagename1;
        $reDbms->pageName=$pagenamenewafter;
        $reDbms->title=$request->title;
        $reDbms->visible=1;
        $reDbms->keywords=$request->tags;


        $reDbms->typePage=$postCat;
        
        $reDbms->description=$request->shortdescription;

        $filenamelong=$pagenamenewafter."dhuaaPage1.dat";
        
        $reDbms->content=$filenamelong;
        $newImageName= $pagenamenewafter.'-'.time().'.'.$request->thumbnailimage->extension();
        $reDbms->thumbnail =$newImageName;

        //Sesion id :get | Hold Parent or session Information
        $agent = new Agentsessionhandler;
        $reDbms->parentId = $agent->getSessionId();

        $res=$reDbms->save();

        if($res=="1"){
       Storage::disk('local')->put("/longDescArticle/".$filenamelong, $request->mytextarea);
       $request->thumbnailimage->move(public_path('ArticleImages'),$newImageName);
       return redirect()->back()->with('message','Completed !');     
    }    
          else {
            return redirect()->back()->with('Error','Sorry Somehing bad Happen !');
          }
    }

    public static function create_slug($string){
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
     }
     // Store tiny controller image upload
     
     public function upload(Request $request){
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location'=>"/storage/$path"]); 
        
        /*$imgpath = request()->file('file')->store('uploads', 'public'); 
        return response()->json(['location' => "/storage/$imgpath"]);*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userpage  $userpage
     * @return \Illuminate\Http\Response
     */
    public function show(Userpage $userpage)
    {
        //
    }


    
    public function showlist(Userpage $userpage)
    {
        return view('Admin.Pages.editPages');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userpage  $userpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Userpage $userpage,$id)
    { $typePagesName=Typepage::all();
         
        $data = DB::table('userpages')
        ->join('typepages', 'userpages.typePage', '=', 'typepages.id')
        ->select('userpages.*','typepages.page_category','typepages.page_category_description')
        ->where('userpages.id', '=', $id)
        ->get()
        ->first();
        return view('Admin.Pages.editPageNow')
        ->with('pageInfo',$data)
        ->with('TypePageName',$typePagesName);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userpage  $userpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userpage $userpage)
    {
        $request->validate([
            'title'=>'required',
            'thumbnailimage'=>'mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:2048',
            'pagetypestoCreate'=>'required',
            'tags'=>'required',
            'shortdescription'=>'required',
            'mytextarea'=>'required',
        ]);

        $reDbms=Userpage::find($request->id);
        $reDbms->title=$request->title;
        $reDbms->visible=1;
        $reDbms->keywords=$request->tags;
        $reDbms->typePage=$request->pagetypestoCreate;
        $reDbms->description=$request->shortdescription;

        $filenamelong=$reDbms->content;        
        $reDbms->content=$filenamelong;

        $pagenamenewafter=$reDbms->pageName;
        if($request->ChangeImage=="yes"){
        //delete old one
        $fileb=public_path('ArticleImages/').$reDbms->thumbnail;
        unlink($fileb);
        //save new one
        $newImageName= $pagenamenewafter.'-'.time().'.'.$request->thumbnailimage->extension();
        $reDbms->thumbnail =$newImageName;
        }
        //Sesion id :get | Hold Parent or session Information
        $agent = new Agentsessionhandler;
        $reDbms->parentId = $agent->getSessionId();

        $res=$reDbms->save();

        if($res=="1"){

      Storage::disk('local')->put("/longDescArticle/".$filenamelong, $request->mytextarea);
      
      if($request->ChangeImage=="yes"){ 
      $request->thumbnailimage->move(public_path('ArticleImages'),$newImageName);
      }

      return redirect()->back()->with('message','Completed !');     

    }    
          else {
             return redirect()->back()->with('Error','Sorry Somehing bad Happen !');
          }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userpage  $userpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userpage $userpage,$id)
    {
        $reDbms= Userpage::find($id);
        $fileb=public_path('ArticleImages/').$reDbms->thumbnail;
          unlink($fileb);
          if (Storage::exists("/longDescArticle/".$reDbms->content)) {
            Storage::delete("/longDescArticle/".$reDbms->content);
        }
        $reDbms->delete();
        return redirect()->back()->with('message','Completed !');   
    }
}