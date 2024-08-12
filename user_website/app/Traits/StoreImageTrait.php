<?php
namespace App\Traits;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait StoreImageTrait{
    public function storageTraitUpload($request,$fieldname,$folderName){
       if($request->hasFile($fieldname)){
        $file=$request->$fieldname;
        $filenameOrigin = $file->getClientOriginalName();
        $filenameHash=Str::random(20).'.'.$file->getClientOriginalExtension();
        $path = $request->file($fieldname)->storeAs('public/'.$folderName.'/'.auth()->id(),$filenameHash);
        $dataUploadTrait=[
            'file_name'=>$filenameOrigin,
            'file_path'=>Storage::url($path)
        ];
        return $dataUploadTrait;
       } 
        return null;
    }
    public function StoreImageTraitUploadMutiple($file,$folderName){
        $filenameOrigin = $file->getClientOriginalName();
        $filenameHash=Str::random(20).'.'.$file->getClientOriginalExtension();
        $path =$file->storeAs('public/'.$folderName.'/'.auth()->id(),$filenameHash);
        $dataUploadTrait=[
            'file_name'=>$filenameOrigin,
            'file_path'=>Storage::url($path)
        ];
        return $dataUploadTrait;
    }
}
