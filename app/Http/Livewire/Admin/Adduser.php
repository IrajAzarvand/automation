<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
use App\Models\Branch;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Adduser extends Component
{

    public $fName, $lName, $birthDate, $mobile, $telegram, $whatsapp, $email, $personnelCode, $localNumber, $branch, $unit, $post;

    public $branches;
    public $units;
    public $posts;



    protected $rules = [
        'fName' => 'required|regex:/^[\pL\s\-]+$/u',
        'lName' => 'required|regex:/^[\pL\s\-]+$/u',
        'mobile' => 'required|numeric',
        'email' => 'nullable|email|unique:users',
        'telegram' => 'nullable|numeric',
        'whatsapp' => 'nullable|numeric',
        'birthDate' => 'required',
        'personnelCode' => 'required|numeric',
        'localNumber' => 'nullable|numeric',
        'branch' => 'required',
        'unit' => 'required',
        'post' => 'required'
    ];
    protected $messages = [
        'fName.required' => 'نام کاربر وارد نشده است',
        'fName.regex' => 'نام کاربر اشتباه وارد است',
        'lName.required' => 'نام خانوادگی کاربر وارد نشده است',
        'lName.regex' => 'نام خانوادگی کاربر اشتباه وارد شده است',
        'email.email' => 'فرمت آدرس ایمیل اشتباه است',
        'email.unique' => ' آدرس ایمیل قبلا وارد شده است',
        'mobile.required' => 'شماره موبایل کاربر وارد نشده است',
        'mobile.numeric' => 'فرمت شماره تلفن صحیح نیست',
        'birthDate.required' => 'تاریخ تولد کاربر وارد نشده است',
        'telegram.numeric' => 'فرمت شماره تلگرام صحیح نیست',
        'whatsapp.numeric' => 'فرمت شماره واتساپ صحیح نیست',
        'personnelCode.required' => 'کد پرسنلی کاربر وارد نشده است',
        'personnelCode.numeric' => 'فرمت کد پرسنلی صحیح نیست',
        'localNumber.numeric' => 'فرمت تلفن داخلی صحیح نیست',
        'branch.required' => 'شعبه محل کار کاربر وارد نشده است',
        'unit.required' => 'واحد محل کار کاربر وارد نشده است',
        'post.required' => 'سمت کاربر وارد نشده است',
    ];




    public function clearSignupForm()
    {
        $this->fName = '';
        $this->lName = '';
        $this->mobile = '';
        $this->telegram = '';
        $this->whatsapp = '';
        $this->email = '';
        $this->birthDate = '';
        $this->personnelCode = '';
        $this->localNumber = '';
        $this->branch = '';
        $this->unit = '';
        $this->post = '';
    }



    public function addNewUser()
    {

        $this->validate();

        //create new user if validation pass
        if (file_exists('storage/Data/sign.png')) {
            $newUser = User::create([
                'fName' => $this->fName,
                'lName' => $this->lName,
                'mobileNumber' => $this->mobile,
                'telegramNumber' => $this->telegram,
                'whatsappNumber' => $this->whatsapp,
                'email' => $this->email,
                'birthDate' => $this->birthDate,
                'personnelCode' => $this->personnelCode,
                'localNumber' => $this->localNumber,
                'branch_id' => $this->branch,
                'unit_id' => $this->unit,
                'post_id' => $this->post,
                'password' => Hash::make('123456'),
            ]);
            Storage::move('public/Data/sign.png', 'public/Data/' . $newUser->id . '/sign/sign.png');
            $this->clearSignupForm();
            $this->dispatchBrowserEvent('toastr:Success');
            $this->emitUp('RefreshUsersList'); //call UserManagement component

        } else {
            $this->dispatchBrowserEvent('toastr:SignNotUploaded');
        }
    }



    // public function StoreSign(Request $request)
    // {
    //     if($request->hasFile('file'))
    //     {
    //         $uploaded = $request->file('file');
    //         $uploaded->storeAs('public/Data/','newUserSign.png');
    //         return true;
    //     }


    // }


    public function mount()
    {
        $this->branches = Branch::all();
        $this->units = Unit::all();
        $this->posts = Post::all();

        //if theres a sign file left in this folder from previous session
        //this will remove that file and prepare for adding new user with
        //related sign file.
        if (file_exists('storage/Data/sign.png')) {
            unlink('storage/Data/sign.png');
        }
    }



    public function render()
    {
        return view('livewire.admin.adduser');
    }
}
