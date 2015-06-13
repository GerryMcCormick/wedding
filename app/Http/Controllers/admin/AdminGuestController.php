<?php namespace App\Http\Controllers\Admin;

use App\AttendanceStatus;
use App\Category;
use App\Guest;
use App\Http\Requests;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\CreateGuestRequest;
use Illuminate\Http\Request;

class AdminGuestController extends AdminController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $guests = Guest::get(); // format array to link partners

        return view('admin.guest.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $arr_att_statuses  = AttendanceStatus::lists('name', 'id');
        $categories        = Category::lists('name', 'id');

        return view('admin.guest.create', compact('arr_att_statuses', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateGuestRequest $request)//request empty, use post
    {
        $guest = new Guest();

        // use post, request empty!
        $guest->name         = $request->name;
        $guest->category_id  = $request->category_id;
        $guest->att_status   = $request->att_status;
        $guest->address      = $request->address;

        $guest->save();

        if(isset($_POST['partner_name']) && !empty($_POST['partner_name'])){
            $partner = new Guest();
            $partner->name          = $_POST['partner_name'];
            $partner->category_id   = $_POST['partner_category_id'];
            $partner->att_status    = $_POST['partner_att_status'];
            $partner->address       = $_POST['partner_address'];
            $partner->partner_id    = $guest->id;

            $partner->save();

            //guest had no id until saved, so now find guest saved above, set partner_id, and re-save
            $guest                  = Guest::find($guest->id);
            $guest->partner_id      = $partner->id;
            $guest->save();
        }

        return redirect('admin/guests');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Guest $guest)
    {
        $att_status = AttendanceStatus::find($guest->att_status);
        $category   = Category::find($guest->category_id);
        $partner    = Guest::find($guest->partner_id);

        return view('admin.guest.show', compact('guest', 'category', 'att_status', 'partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Guest $guest)
    {
        $arr_att_statuses  = AttendanceStatus::lists('name', 'id');
        $categories        = Category::lists('name', 'id');
        $attendance_status = AttendanceStatus::find($guest->att_status);
        $partners          = Guest::all();

        // format array
        foreach($partners as $p){

            $partner['id']   = $p->id;
            $partner['name'] = $p->name;

            // don't add guest being edited to list of partners
            if($partner['id'] != $guest->id) {
                $pot_partners[] = $partner;
            }
        }

        // check if guest has a partner
        $att_partner = Guest::find($guest->partner_id); // this will be null if no partner exists

        return view('admin.guest.edit',
            compact('arr_att_statuses', 'categories', 'guest', 'attendance_status', 'pot_partners', 'att_partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Guest $guest)
    {
        $guest->name         = $_POST['name'];
        $guest->category_id  = $_POST['category_id'];
        $guest->att_status   = $_POST['att_status'];
        $guest->address      = $_POST['address'];

        // if a partner is selected
        if($_POST['partner_id'] != 0){

            // if selected partner has changed
            if($guest->partner_id != $_POST['partner_id']){

                //set person edited's new partner
                $guest->partner_id = $_POST['partner_id'];

                // select the new partner
                $partner = Guest::find($guest->partner_id);

                // check if the new partner had a partner before they were selected as $guest's partner
                $partners_partner = Guest::find($partner->partner_id);
                // if the new partner had a partner before, set the partners old partners partner_id to null,
                // this avoids multiple guests having the same partner!!
                if($partners_partner){
                    $partners_partner->partner_id = null;
                    $partners_partner->save();
                }

                $partner->partner_id = $guest->id;
                $partner->save();
            }
        }else{
            $guest->partner_id = null;
        }

        $guest->save();

        return redirect('admin/guest/' . $guest->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}