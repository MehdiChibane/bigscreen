<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class SurveyController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function saveSurvey(Request $request){

      $this->validate($request, [
            'email' => 'required|email',
            'age' =>'required',
            'sex' => 'required',
            'nb_ppl'=> ' required',
            'job' => 'required',
            'headset_type'=> 'required',
            'store_name'=> 'required',
            'future_headset_buy'=> 'required',
             'nb_ppl_using_headset'=> 'required',
           'headset_usage'=> 'required',
           'headset_image_rating'=> 'required',
            'headset_interface_rating'=> 'required',
            'headset_network_rating'=> 'required',
            'headset_graphics_rating'=> 'required',
            'headset_audio_rating'=> 'required',
            'notification_setting'=> 'required',
            'join_via_phone'=> 'required',
            'save_tv_shows'=> 'required',
         'exclusive_games'=> 'required',
           'new_functionnality'=> 'required'
        ]);

        $customer = Customer::create([
        'uiid'=> Str::uuid(),
        'name' =>'BigScreen'.Str::uuid(),
        'email'=> $request->email
        ]);

        $answer = Answer::create([
            'mail_address' => $request->email,
            'age' =>$request->age,
            'sex' =>$request->sex,
            'nb_ppl'=> $request->nb_ppl,
            'job' => $request->job,
             'headset_type'=> $request->headset_type,
            'store_name'=> $request->store_name,
             'future_headset_buy'=>$request->future_headset_buy,
              'nb_ppl_using_headset'=> $request->nb_ppl_using_headset,
           'headset_usage'=> $request->headset_usage,
           'headset_image_rating'=> $request->headset_image_rating,
            'headset_interface_rating'=> $request->headset_interface_rating,
            'headset_network_rating'=> $request->headset_network_rating,
            'headset_graphics_rating'=> $request->headset_graphics_rating,
            'headset_audio_rating'=> $request->headset_audio_rating,
            'notification_setting'=> $request->notification_setting,
            'join_via_phone'=> $request->join_via_phone,
            'save_tv_shows'=> $request->save_tv_shows,
             'exclusive_games'=> $request->exclusive_games,
           'new_functionnality'=> $request->new_functionnality,
            'customer_id'=> $customer->id
            ]);

        // return to view page
        $link = env('APP_URL').'/reponse/'.$answer->id.'/'.$customer->uiid;
        $messageHeader = 'Merci pour votre participation';
        $message = "Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à
            votre investissement, nous vous préparons une application toujours plus
            facile à utiliser, seul ou en famille.
            Si vous désirez consulter vos réponses ultérieurement, vous pouvez consulter
            cette adresse: <a href='$link'>$link</a>";

        return view('answer', ['message' => $message, 'messageHeader' => $messageHeader]);

    }
    public function getSurvey($answer_id, $customer_id)
    {
        $customer = Customer::where('uiid',$customer_id)->first();
        $answer = Answer::where(
            [
                'id'=>(int)$answer_id,
                'customer_id'=>$customer->id,
            ])->first();

        if(!$customer || !$answer){
            $messageHeader = 'Information';
            return view('answer', ['message' => 'Aucun résultat trouvé', 'messageHeader' => $messageHeader]);
        }
        return view('survey', ['customer' => $customer, 'answer' => $answer]);
    }
}
