<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Mst_prefecture;
use App\Http\Requests\SearchRequest;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\MstPrefectureStoreFromRequest;
use App\Http\Resources\Mst_prefecture as Mst_prefectureResource;

class MstPrefectureController extends Controller
{
    public function index(SearchRequest $request){
        $name = $request->prefecture_name;
        $cd = $request->prefecture_cd;
        $query = Mst_prefecture::query();
        if(!empty($name)){
            $query->where('prefecture_name','like','%'.$name.'%');
        }
        if(!empty($cd)){
            $query->where('prefecture_cd',$cd);
        }
        $prefectures=$query->orderBy('prefecture_cd','asc')->paginate(10);
        return Mst_prefectureResource::collection($prefectures);
    }
    public function store(MstPrefectureStoreFromRequest $request){
        $request["insert_date"]=Carbon::now()->format('Y-m-d');
        $mst_pre=Mst_prefecture::create($request->only(['prefecture_cd','prefecture_name','insert_date']));
    }
}
