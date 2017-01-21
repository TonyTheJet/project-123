<?php
/**
 * Created by PhpStorm.
 * User: tanderson
 * Date: 1/20/17
 * Time: 5:03 PM
 */

namespace App\Http\Controllers\Account;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Eloquent\User;

class UpdateUserInfoController extends Controller
{
    public function showForm(Request $request){
        return view('account.settings', ['title' => 'Update Account Info/Preferences']);
    }

    public function submit(Request $request){

        $this->validator($request->all())->validate();

        if ($this->update($request->all()))
            return redirect(url('/account/settings/updated'));
        else
            return redirect(url('/account/settings/update-error'));
    }


    /**
     * returns a view to tell the user that the data was updated successfully
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updated(Request $request){
        return view('account.settings', ['title' => 'Update Account Info/Preferences', 'message' => 'Account info updated successfully!']);
    }

    /**
     * validates the user input
     *
     * @param array $data
     * @return mixed
     */

    /**
     * view to let the user know there was an error updating their record
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateError(){
        return view('account.settings', ['title' => 'Update Account Info/Preferences', 'error_message' => 'Error saving updated info']);
    }


    //private methods
    /**
     * attempts to update the user, and returns bool on success/failure
     *
     * @param array $data
     * @return bool
     */
    private function update(array $data): bool{
        $user = User::find(Auth::user()['attributes']['id']);
        $user->name = $data['name'];
        if (!empty($data['password'])):
            $user->password = bcrypt($data['password']);
        endif;
        $user->phone = $data['phone'];
        $user->send_newsletter = $data['send_newsletter'] ?? false;
        $user->send_sms = $data['send_sms'] ?? false;

        return $user->save();
    }


    private function validator(array $data){

        $validation_arr = [
            'name' => 'required|max:255',
            'phone' => 'min:6'
        ];
        if (!empty(trim($data['password']))):
            $validation_arr['password'] = 'required|min:6|confirmed';
        endif;


        return Validator::make($data, $validation_arr);
    }
    //end private methods
}