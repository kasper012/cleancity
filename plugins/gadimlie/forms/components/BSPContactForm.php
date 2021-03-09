<?php namespace Gadimlie\Forms\Components;

use Cms\Classes\ComponentBase;
use Validator;
use October\Rain\Exception\ValidationException;
use Input;
use Mail;

class BSPContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'BSPContactForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSend()
    {
        $customMessages = [
            'fullname.required' => trans('gadimlie.forms::lang.fullname.required'),
            'subject.required' => trans('gadimlie.forms::lang.subject.required'),
            'email.required' => trans('gadimlie.forms::lang.email.required'),
            'email.email' => trans('gadimlie.forms::lang.email.email'),
            'phone.required' => trans('gadimlie.forms::lang.phone.required'),
            'msg.required' => trans('gadimlie.forms::lang.msg.required'),
        ];

        $flash_message = [
            'status' => 200,
            'msg' => null
        ];        

        $validation = Validator::make(
            $form = Input::all(), [
                'fullname' => 'required|string',
                'subject' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required',
                'msg' => 'required',
            ], $customMessages
        );

        if ($validation->fails()) {
            return $flash_message = [
                'status' => 406,
                'msg'  => $validation->errors()->first()
            ];
        } else {
            $params = Input::all();
            Mail::send('ContactForm', $params, function($message) {
                $message->to('ceo@gadimlie', 'Renova Soft');
                $message->subject('New message from Website (Main Contact Form)');
            });
        }

        return $flash_message = [
            'status' => 200,
            'msg'  => trans('gadimlie.forms::lang.msg.sent')
        ];
    }
}
