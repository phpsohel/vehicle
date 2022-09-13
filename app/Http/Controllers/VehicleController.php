<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Models\Report;
use App\Models\Vehicle;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $count = DB::table('reports')->count();
        $active = DB::table('reports')->where('v_status', '1')->count();
        $Last_expiry_date = DB::table('reports')->where('sticker_expire_date', '0')->count();
        return view('admin.dashboard',compact('count','active', 'Last_expiry_date'));
    }
    public function add_vehicle(){
        return view('admin.vehicle.add-vehicle');
    }
     // Data Store
    public function store(Request $request){
        $vehilces = new Report();
        $vehilces->v_serial_no = $request->v_serial_no;
        $vehilces->v_reg_no = $request->v_reg_no;
        $vehilces->v_chasis_no = $request->v_chasis_no;
        $vehilces->v_engine_no = $request->v_engine_no;
        $vehilces->v_route_no = $request->v_route_no;
        $vehilces->v_route_name_start = $request->v_route_name_start;
        $vehilces->v_route_name_end = $request->v_route_name_end;
        $vehilces->v_fitness_expiry_date = $request->v_fitness_expiry_date;
        $vehilces->v_tax_expiry_date = $request->v_tax_expiry_date;
        $vehilces->v_route_permit_expire_date = $request->v_route_permit_expire_date;
        $vehilces->v_owner_name = $request->v_owner_name;
        $vehilces->v_owner_address = $request->v_owner_address;
        $vehilces->owner_phone_no = $request->owner_phone_no;
        $vehilces->sticker_printed_date = $request->sticker_printed_date;
        $vehilces->sticker_status = $request->sticker_status;
        $vehilces->sticker_printed_date = $request->sticker_printed_date;
        $vehilces->sticker_expire_date = $request->sticker_expire_date;

        $serial = $request->v_serial_no;
        $name = $request->v_owner_name;
        $now = Carbon::now();
        $token = $serial.'-'.$now.$name;
        $token = Str::random(16,$token);
        $vehilces->v_idetify_code = $token;
        $vehilces->save();
        return redirect()->route('admin.vehicle.all-report');
    }
    public function all_report(Request $request){
        $all_reports = DB::table('reports')->get();
        return view('admin.vehicle.all-report-vehicle', compact('all_reports'));
    }
    // Data Edit
    public function edit($id){
        $edit = DB::table('reports')->where('id', $id)->first();
        return view('admin.vehicle.edit', compact('edit'));
    }
     // Data Update
    public function update(Request $request, $id){
        $update = Report::find($id);
        $update->v_serial_no = $request->v_serial_no;
        $update->v_reg_no = $request->v_reg_no;
        $update->v_chasis_no = $request->v_chasis_no;
        $update->v_engine_no = $request->v_engine_no;
        $update->v_route_no = $request->v_route_no;
        $update->v_route_name_start = $request->v_route_name_start;
        $update->v_route_name_end = $request->v_route_name_end;
        $update->v_fitness_expiry_date = $request->v_fitness_expiry_date;
        $update->v_tax_expiry_date = $request->v_tax_expiry_date;
        $update->v_route_permit_expire_date = $request->v_route_permit_expire_date;
        $update->v_owner_name = $request->v_owner_name;
        $update->v_owner_address = $request->v_owner_address;
        $update->owner_phone_no = $request->owner_phone_no;
        $update->sticker_printed_date = $request->sticker_printed_date;
        $update->sticker_expire_date = $request->sticker_expire_date;
        $update->save();
        return redirect()->route('admin.vehicle.all-report');
    }
    // Data Delete
    public function destroy($id){
        $delete = Report::find($id);
        $delete->delete();
        return redirect()->route('admin.vehicle.all-report');
    }
    // Data View
    public function view($id){
        $all_reports = DB::table('reports')->where('id', $id)->get();
        return view('admin.vehicle.view', compact('all_reports'));
    }
    // Search Query
    public function SearchQuery(Request $request){
        $to = $request->sticker_printed_date;
        $from = $request->sticker_expire_date;
        $all_reports = DB::table('reports')
            ->where('sticker_expire_date', '>=', $to)
            ->where('sticker_expire_date', '<=', $from)
            ->get();
            // return redirect()->back()->with('all_reports',$all_reports );
            return view('admin.vehicle.report', compact('all_reports'));
    }
    public function report(){
        $all_reports = DB::table('reports')->get();
        return view('admin.vehicle.report',compact('all_reports'));
    }
    public function user(){
        $users = DB::table('users')->get();
        return view('admin.vehicle.user',compact('users'));
    }
    public function user_edit($id){
        $users = DB::table('users')->where('id',$id)->first();
        return view('admin.vehicle.edit-user', compact('users'));
    }
    public function user_upadte(Request $request, $id){
        $users = User::find($id);
        // $users = DB::table('users')->where('id', $id)->first();
        $users->full_name = $request->full_name;
        $users->phone = $request->phone;
        $users->email = $request->email;
        $users->save();
       return redirect()->route('admin.vehicle.user');
    }
    public function user_delete($id){
        $users = User::find($id);
        $users->delete();
       return redirect()->back();
    }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>


}
