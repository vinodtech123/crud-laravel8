<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;

use App\Models\user;
// use Redirect;
class Submitdata extends Controller
{

    // public function index()
    // {
    //     $data = user::paginate(2);
    //     return view('admin',compact('data'));
    // }

    //  public function users(){
        
    //     return view('admin',compact('userCount'));
    //  }


  // this does the work of registration after registration it will redirect to login page with sucess message
    Public function submition(Request $req){
    
        if($req->isMethod("post")){
          
            $name = $req->name;
            $mobile = $req->mobile;
            $password = md5($req->password);
            $dob = $req->dob;

         $row = DB::insert("insert into admin_details (name,mobile,password,dob) values (?,?,?,?)",[$name,$mobile,$password,$dob]);

         if($row == 1){

          return redirect('login')->with('msg','Account created sucessfully,please login !');

       }
    }
}


// check username and password and then redirect to adminpage

public function log(Request $req){

    $name = $req->name;
    $pass = md5($req->password);
     
   $session = DB::select("select * from admin_details where name='$name' && password='$pass'");

  if(count($session)>0){
      $req->session()->put('user_id',$session[0]->id);
      $req->session()->put('user_name',$session[0]->name);

      return redirect('admin');
  }else{
      return redirect('login')->withErrors('Email or password does not match');
  }

  }


  // before redirecting on adminpage it checks if session-> user id key have no value so redirect on login
  // otherwise if session-> user id have so show admin page with session

  public function protect(Request $req){

    

   if($req->session()->get('user_id')== "" ){
       return redirect('login');
   }else{
      
        $data = DB::select("select * from admin_details");
        $username =  $req->session()->get('user_name');
        $userCount = user::count();
        $capsule = [
        'username'=>$username
        ];
        return view('admin',['name'=>$data],compact('userCount'))->with($capsule);
     
   }




  }

   // destroying session and redirect to login page

   public function logout(Request $req){
   $req->session()->forget('user_id');
   $req->session()->forget('user_name');

    return redirect('login')->with('msg','user logout sucessfully');

   }


//   public function edit(user $user){

//    return view('edit',compact('user'));

//   }


   // function for update

//    public function update(Request $req,user $user){
//       $req->validate([
//       'name' => 'required',
//       'mobile' => 'required'
//       ]);
//       $user->update($req->all());

//       return redirect('admin')->with('success','user update sucessfully');
//    }



    // function for update
    Public function update(Request $req,user $user){

        $req->validate([
                  'name' => 'required',
                  'mobile' => 'required'
                ]);
              
                $user->update($req->all());
                return redirect('admin')->with('success','user update sucessfully');

    }

   // function for delete

   public function destroy($id){
       
       DB::delete("delete from admin_details where id = $id");

       return redirect('admin')->with('success','user deleted successfully');


   }

}
