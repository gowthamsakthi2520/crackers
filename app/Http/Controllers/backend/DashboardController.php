<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         return view('backend.dashboard');
    }

    public function profile(){
        try{
            $user=User::find(Auth::user()->id);
            $password=encrypt_decrypt("decrypt",$user->encrypt_password);
            // dd($password);
            return view('backend.profile',['user'=>$user,'password'=>$password]);
          } catch (\Exception $e) {
              return back()->with('error',$e->getMessage())->withInput();
          }

    }

    public function update_user(Request $request){
        $user=Auth::user()->id;
        $user_update=User::find($user);
        $validate=$request->validate([
            'name'=>'required',
            'mobile'=>'required|integer',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users'.$user,
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        try{
            $file=$request->file('image');
            if(!empty($file))
            {
                $name = time().rand(1,50).'.'.$file->extension();
                
                $file->move(public_path('user_images'), $name);  
                $file = 'user_images/'.$name;  
                $validate['image']=$file;
            }
            $output=encrypt_decrypt("encrypt",$request->password);
            $validate['encrypt_password']=$output;
            $validate['password']=Hash::make($request->password);
            
            $user_update->update($validate);
            $msg="User updated successfully";
            return redirect('profile')->with(['success'=>$msg]);
          } catch (\Exception $e) {
              return back()->with('error',$e->getMessage())->withInput();
          }

    }
}
