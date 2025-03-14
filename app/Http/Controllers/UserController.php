<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function forgetPassword()
    {
        return view('auth.passwords.email');
    }
    public function verfiyEmail(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email'
        ]);
    
        // Find the user by email
        $user = User::where('email', $request->email)->select('name', 'email')->first();
    
        if ($user) {

            $email = $user->email;
            $data['email'] = $user->email;
            $data['name'] = $user->name;

            $otp = rand(pow(10, 6 - 1), pow(10, 6) - 1);
            
            session(['otp' => $otp]);
            session(['email' => $user->email]);
            $data['otp'] = $otp;
            Mail::send('emails.otp', $data, function($message) use ($data) {
                $message->to($data["email"], $data["name"])
                    ->subject('Verify Email - NOVA ');
            });
            return view('auth.passwords.verify_otp', compact('otp','email'));
        }
    
        return redirect()->back()->with('error', 'Your entered email is not found in our records.');
    }
    public function resetPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed'
        ]);

        $email = session('email');

        $user = User::where('email', $email)->first();
        if ($user) {
            if ($request->email === $email) {
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect()->route('login')->with('success', 'Your password has been successfully reset.');
            }
        }
        return redirect()->back()->with('error', 'Invalid email or password confirmation did not match.');
    }

    public function verifyEmailOtp(Request $request)
    {
        $sessionOtp = session('otp');
        $email = session('email');

        if($request->otp == $sessionOtp)
        {
            $user = User::where('email',$request->email)->first();
            return view('auth.passwords.reset',compact('user','email'));
        }
        return redirect()->back()->with('error', 'Your entered otp is encorrect.');
    }
    
    public function index(Request $request)
    {
        $search = $request->input('search');

        // If there is a search query, filter users by name or email
        if ($search) {
            $users = User::where('name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->get();
        } else {
            // Otherwise, retrieve all users
            $users = User::all();
        }
        $Courses = [];
        $PDFBooks = [];
        return view('admin.user.index', compact('users','Courses','PDFBooks'));
    }


    public function create()
    {
        $courses = [];

        return view('admin.user.create',compact('courses'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $data['pdf_books_ids'] = isset($data['pdf_books_ids']) ? json_encode($data['pdf_books_ids'], true) : null;
        $data['package_id'] = isset($data['package_id']) ? json_encode($data['package_id'], true) : null;

        if ($request->hasFile('image'))
            $data['image'] = $this->saveFile($request->image, 'images/user');
            
        try {
            User::create($data);
            return redirect()->route('user.index')->with('message','User Created Successfully!');

        } catch (\Illuminate\Database\QueryException $ex) {
            $errorCode = $ex->errorInfo[1];
            if ($errorCode == 1062) {
                // Duplicate entry error
                return redirect()->back()->with('error' , 'Email address already exists');
            } else {
                return redirect()->back()->with('error' , 'Database error');
            }
        }
    }
    protected static function saveFile($file_data, $path): string
    {
       
        if (!is_dir(public_path($path))) {
            mkdir(public_path($path), 0755, true);
        }
        $file = $file_data;

        $name = round(microtime(true) * 10000). '.' . $file->getClientOriginalExtension();
        $file->move(public_path($path), $name);
        return $path.'/'.$name;
    }
    public function edit($id)
    {
        $user = User::find($id);
        $courses = [];
        $pdf_books = [];
        return view('admin.user.edit',compact('user','courses','pdf_books'));

    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        
        $data = $request->all();
        $data['pdf_books_ids'] = isset($data['pdf_books_ids']) ? json_encode($data['pdf_books_ids'], true) : null;
        $data['package_id'] = isset($data['package_id']) ? json_encode($data['package_id'], true) : null;

        if ($request->password != $user->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }
        if ($request->hasFile('image')) {
            $data['image'] = $this->saveFile($request->image, 'images/user');
        }
        $user->update($data);
        return redirect()->route('user.index')->with('message', 'User Edited Successfully!');
    }

    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('user.index')->with('message','User Deleted Successfully!');
    }
}
