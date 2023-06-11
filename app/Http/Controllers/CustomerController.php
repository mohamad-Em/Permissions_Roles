<?php

namespace App\Http\Controllers;

use App\Http\Requests\customer\StoreRequest;
use App\Http\services\sms;
use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public $sendSMS;
    public function __construct(sms $sendSMS)
    {
        $this->sendSMS = $sendSMS;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.customers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $verification = [];
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            $Customer = Customer::create($data);
            $verification['customer_id'] = $Customer->id;
            $this->sendSMS->sendSMSCode($verification);
            return redirect()->back();
            DB::commit();
        } catch(Exception $e)
        {
            DB::rollBack();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
