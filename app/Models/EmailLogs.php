<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Carbon;

class EmailLogs extends Model
{
    use HasFactory;

    public function SaveData($params, $force = false)
    {

        $email = new EmailLogs;
        $email->to = $params['to'];
        $email->from = $params['from'];
        $email->subject = $params['subject'];
        $email->body = $params['body'];
        $email->save();

        if ($force == true) {
            Self::SendMail($email->id);
        }

    }
    public function SendMail($id)
    {

        $emailData = Self::find($id);

        $to = $emailData->to;
        $data = [];
        $data += array('body' => $emailData->body);
        $subject = $emailData->subject;

        FacadesMail::send('email-template.general', $data, function ($message) use ($to,$subject) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to($to);
            $message->subject($subject);
            $message->priority(3);
        });

        Self::where('id', $id)->update(['is_sent' => '1']);

    }
}
