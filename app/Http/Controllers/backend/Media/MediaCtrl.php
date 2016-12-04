<?php

namespace App\Http\Controllers\backend\Widget;

use App\Models\Media\Media;
use App\Http\Controllers\Controller;
use App\Http\Requests\backend\Media\ImageRequest;
use Config,Entrust,Storage,Image,Request;

class MediaCtrl extends Controller {

    public function __construct() {

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

    }
    /**
     * Get list image.
     *
     * @return Response
     */
    public function getImage() {
        $input = Request::except('_token');
        $slideId = $input['slideId'];
        $itype = $input['itype'];
        $this->data['images'] = Media::where('id_obj', $slideId)->where('type','=', $itype)->get();
        //var_dump($this->data['images']);exit;
        return view('backend.slideshow.image', $this->data);
    }
    
    public function addImage() {
        $input = Request::except('_token');
        $this->data['sub_title'] = 'Add image';
        $this->data['slideid'] = $input['slideId'];
        $this->data['itype'] = $input['itype'];
        return view('backend.slideshow.addimage', $this->data);
    }
    
    public function editImage() {
        $input = Request::except('_token');
        //var_dump($input);exit
        $this->data['sub_title'] = 'Add image';
        $id = $input['imageId'];
        //$this->data['imageId'] = $input['imageId'];
        $this->data['image'] = Media::find($id);
        return view('backend.slideshow.editimage', $this->data);
    }
    
    public function storeImage(ImageRequest $request) {
        $input = $request->all();
        if(!empty($input['id'])){
            $id = $input['id'];
            $cat = Media::find($id);
            if ($cat->update($input)) {
                return '1';
            }
        } else {
            $cat = new Media($input);
            if ($cat->save()) {
                return '1';
            }
        }
        return '0';
    }

    public function deleteImage() {
        $input = Request::except('_token');
        $media = Media::find($input['id']);
        if ($media->delete()) {
            return '1';
        }
        return '0';
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }
}