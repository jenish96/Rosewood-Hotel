<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    //
    public function viewOffer()
    {
        $offerData =Offer::all();
        return view("admin.offer.viewOffer",compact('offerData'));
    }

    public function addOffer()
    {
        return view("admin.offer.addOffer");
    }

    public function insertOffer(Request $request)
    {
        
        $title =$request->txttitle;
        $discription =$request->txtdiscription;
        $status= $request->txtstatus;
        $coupen= $request->txtcoupen;
        $discount= $request->txtdiscount;
        $expire= $request->txtExpire;
        $minAmount= $request->txtminamount;

    
        $obj= new offer;
        $obj->title=$title;
        $obj->discription=$discription;
        $obj->is_active=$status;
        $obj->coupon_code=$coupen;
        $obj->discount=$discount;
        $obj->is_expire=$expire;
        $obj->min_amount=$minAmount;
        $obj->save();

        return redirect('admin/addOffer')->with("message","Offer Inserted successfully");
    }
    public function editOffer($id)
    {
        $singleData = offer::select("*")->where("offer_id",$id)->first();
        return view('admin.offer.updateOffer',compact('singleData'));
    }
    public function updateOffer(Request $request)
    {
        $fid =$request->offerid;
        $title =$request->txttitle;
        $discription =$request->txtdiscription;
        $status= $request->txtstatus;
        $coupen= $request->txtcoupen;
        $discount= $request->txtdiscount;
        $expire= $request->txtExpire;
        $minAmount= $request->txtminamount;

    
        $obj=offer::select("*")->where("offer_id",$fid)->first();
        $obj->title=$title;
        $obj->discription=$discription;
        $obj->is_active=$status;
        $obj->coupon_code=$coupen;
        $obj->discount=$discount;
        $obj->is_expire=$expire;
        $obj->min_amount=$minAmount;
        $obj->save();

        return redirect("/admin/viewOffer")->with("message","Offer is Updated Sucessfully");
    }
    public function deleteOffer(Request $request)
    {
        $offerid = $request->deleteid;
        
        Offer::where("offer_id",$offerid)->delete();

        return redirect('/admin/viewOffer')->with("message","Offer deleted successfully");

    }
    public function offerIsActive($id,$status)
    {
        $obj=Offer::where("offer_id",$id)->first();
        $obj->is_active = $status;
        $obj->save();
        return redirect('/admin/viewOffer');
    }
}
