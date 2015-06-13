<?php namespace App\Http\Controllers;

use App\Guest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller { //rename to guest controller


	public function allGuests()
	{
        $title = 'All Guests';
		$all_guests      = Guest::orderBy('name')->get();
        $guests          = [];
        $arr_partner_ids = [];

        foreach($all_guests as $key => $g){
            if(!in_array($g->id, $arr_partner_ids)){

                if($g->partner_id != null){
                    // if guest has partner, add partner and id to array
                    $partner               = Guest::find($g->partner_id);
                    if($partner){
                        $guest = [
                            'id'           => $g->id,
                            'name'         => $g->name,
                            'partner_id'   => $partner->id,
                            'partner_name' => $partner->name,
                        ];
                        $arr_partner_ids[] = $partner->id;

                        $guests[]  = $guest;
                    }
                }else{
                    $guest = [
                        'id'   => $g->id,
                        'name' => $g->name,
                        'partner_id'   => null,
                        'partner_name' => null,
                    ];
                    $guests[] = $guest;
                }
            }
        }

        return view('pages.guestlist', compact('guests', 'title', 'arr_partner_ids'));
	}

    public function guestsGoing()// get all guests who are going and associate partners
    {
        $title = 'Guests Going';
        $all_guests      = Guest::where('att_status', '=', 2)->orderBy('name')->get();
        $guests          = [];
        $arr_partner_ids = [];

        foreach($all_guests as $key => $g){
            if(!in_array($g->id, $arr_partner_ids)){

                if($g->partner_id != null){
                    // if guest has partner, add partner and id to array
                    $partner               = Guest::find($g->partner_id);
                    if($partner){
                        $guest = [
                            'id'           => $g->id,
                            'name'         => $g->name,
                            'partner_id'   => $partner->id,
                            'partner_name' => $partner->name,
                        ];
                        $arr_partner_ids[] = $partner->id;

                        $guests[]  = $guest;
                    }
                }else{
                    $guest = [
                        'id'   => $g->id,
                        'name' => $g->name,
                        'partner_id'   => null,
                        'partner_name' => null,
                    ];
                    $guests[] = $guest;
                }
            }
        }

        return view('pages.guestlist', compact('guests', 'title', 'arr_partner_ids'));
    }

    public function guestsMaybeGoing()
    {
        $title = 'Guests Maybe Going';
        $all_guests      = Guest::where('att_status', '=', 1)->orderBy('name')->get();
        $guests          = [];
        $arr_partner_ids = [];

        foreach($all_guests as $key => $g){
            if(!in_array($g->id, $arr_partner_ids)){

                if($g->partner_id != null){
                    // if guest has partner, add partner and id to array
                    $partner               = Guest::find($g->partner_id);
                    if($partner){
                        $guest = [
                            'id'           => $g->id,
                            'name'         => $g->name,
                            'partner_id'   => $partner->id,
                            'partner_name' => $partner->name,
                        ];
                        $arr_partner_ids[] = $partner->id;

                        $guests[]  = $guest;
                    }
                }else{
                    $guest = [
                        'id'   => $g->id,
                        'name' => $g->name,
                        'partner_id'   => null,
                        'partner_name' => null,
                    ];
                    $guests[] = $guest;
                }
            }
        }

        return view('pages.guestlist', compact('guests', 'title', 'arr_partner_ids'));
    }

    public function guestsNotGoing()
    {
        $title = 'Guests Not Going';
        $all_guests      = Guest::where('att_status', '=', 3)->orderBy('name')->get();
        $guests          = [];
        $arr_partner_ids = [];

        foreach($all_guests as $key => $g){
            if(!in_array($g->id, $arr_partner_ids)){

                if($g->partner_id != null){
                    // if guest has partner, add partner and id to array
                    $partner               = Guest::find($g->partner_id);
                    if($partner){
                        $guest = [
                            'id'           => $g->id,
                            'name'         => $g->name,
                            'partner_id'   => $partner->id,
                            'partner_name' => $partner->name,
                        ];
                        $arr_partner_ids[] = $partner->id;

                        $guests[]  = $guest;
                    }
                }else{
                    $guest = [
                        'id'   => $g->id,
                        'name' => $g->name,
                        'partner_id'   => null,
                        'partner_name' => null,
                    ];
                    $guests[] = $guest;
                }
            }
        }

        return view('pages.guestlist', compact('guests', 'title', 'arr_partner_ids'));
    }

    public function showGuest(Guest $guest){

        //return view(compact('guest));
    }

    public function emailAllGuestsList(){

        $all_guests      = Guest::where('category_id', '=', 4)->orderBy('name')->get();
        $guests          = [];
        $arr_partner_ids = [];

        foreach($all_guests as $key => $g){
            if(!in_array($g->id, $arr_partner_ids)){

                if($g->partner_id != null){
                    // if guest has partner, add partner and id to array
                    $partner               = Guest::find($g->partner_id);
                    if($partner){
                        $guest = [
                            'id'           => $g->id,
                            'name'         => $g->name,
                            'partner_id'   => $partner->id,
                            'partner_name' => $partner->name,
                        ];
                        $arr_partner_ids[] = $partner->id;

                        $guests[]  = $guest;
                    }
                }else{
                    $guest = [
                        'id'   => $g->id,
                        'name' => $g->name,
                        'partner_id'   => null,
                        'partner_name' => null,
                    ];
                    $guests[] = $guest;
                }
            }
        }

        $filename = "txtfiles/all_guests.txt";
        $text = "Header \n\n";

        // write list of all guests to file
        foreach($guests as $person)
        {
            $text .= $person['name'];
            if($person['partner_name']){
                $text .= ' and ' . $person['partner_name'];
            }
            $text .= "\n";
        }
        $fh = fopen($filename, "w") or die("Could not open log file.");
        fwrite($fh, $text) or die("Could not write file!");
        fclose($fh);

        //send email
        $this->sendEmailWithAttachment($filename);
    }

    public function sendEmailWithAttachment($attachment_path){

//        $data['message']         = "Hello " . Auth::user()->name . ", \n\n attached is a list of your wedding guests.";
        $data['message']         = "Hello Gerry \n\n attached is a list of your wedding guests.";
        $data['attachment_path'] = $attachment_path;



        Mail::send('emails.guestlist', $data, function($message)
        {
//            $message->from('your@wedding.com', 'Wedding');

//            $message->to(Auth::user()->email);
//            $message->to(Auth::user()->email);
            $message->to('example@gmail.com')->subject('Guests');

//            $message->attach($data['attachment_path']);
            $message->attach("txtfiles/all_guests.txt");
        });
    }

}
