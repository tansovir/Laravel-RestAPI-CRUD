<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personbasic;
use DB;
class PersonBasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getData = Personbasic::all();
        return array(
            'PersonBasic' => $getData
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $data = array();
        $data['id'] = $request->id;
        $data['age'] = $request->age;
        $data['birthday'] = $request->birthday;
        $data['charityDonor'] = $request->charityDonor;
        $data['children'] = $request->children;
        $data['education'] = $request->education;
        $data['estimatedIncome'] = $request->estimatedIncome;
        $data['gender'] = $request->gender;
        $data['lengthOfResidenc'] = $request->lengthOfResidenc;
        $data['maritalStatus'] = $request->maritalStatus;
        $data['ownOrRent'] = $request->ownOrRent;
        $data['singleParent'] = $request->singleParent;
        $data['vehicle'] = $request->vehicle;
        $data['wealth'] = $request->wealth;
        $data['yearHomeBuilt'] = $request->yearHomeBuilt;
        DB::table('personbasics')->insert($data);
        return response("Your data has been store successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $displayData = Personbasic::where('id',$id)->get();
        return array(
            'PersonBasic' => $displayData
        );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $updateData = Personbasic::where('id',$id)->get();
        $data = array();
        $data['age'] = $request->age;
        $data['birthday'] = $request->birthday;
        $data['charityDonor'] = $request->charityDonor;
        $data['children'] = $request->children;
        $data['education'] = $request->education;
        $data['estimatedIncome'] = $request->estimatedIncome;
        $data['gender'] = $request->gender;
        $data['lengthOfResidenc'] = $request->lengthOfResidenc;
        $data['maritalStatus'] = $request->maritalStatus;
        $data['ownOrRent'] = $request->ownOrRent;
        $data['singleParent'] = $request->singleParent;
        $data['vehicle'] = $request->vehicle;
        $data['wealth'] = $request->wealth;
        $data['yearHomeBuilt'] = $request->yearHomeBuilt;
        DB::table('personbasics')->insert($data);
        echo "Your data has been update id = ". $id;
        return array(
            'PersonBasic' => $data
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deleteData = Personbasic::find($id);
        if($deleteData == True){
            $deleteData->delete();
            $data = Personbasic::all();
            echo "Your data ( id = ". $id. " ) has been delete..";
            return array(
                'PersonBasic' => $data
            );
        }else{
            return "There is not available this id = ". $id;
        }
    }
}
