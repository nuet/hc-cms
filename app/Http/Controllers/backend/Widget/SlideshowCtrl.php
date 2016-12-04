<?php

namespace App\Http\Controllers\backend\Widget;

use App\Models\Widget\Slideshow;
use App\Models\Media\Media;
use App\Http\Controllers\Controller;
use App\Http\Requests\backend\Widget\SlideshowRequest;
use App\Http\Requests\backend\Widget\ImageRequest;
use Config,Entrust,Storage,Image,Request;

class SlideshowCtrl extends Controller {

    public function __construct() {
        $this->data['title'] = 'Slideshow';
    }

    public function getSlide() {
        $this->data['slideshow'] = Slideshow::wherelang(getLang())->get();
        return view('backend.slideshow.lists', $this->data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        if (!Entrust::can('slideshow-read')) {
            return redirect('');
        }
        $this->data['sub_title'] = 'List Slideshow';
        return view('backend.slideshow.index', $this->data);
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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        if (!Entrust::can('slideshow-create')) {
            return redirect('');
        }
        $this->data['slide_type'] = Config::get('constants.slidetype');
        //dd($this->data['slide_type']);exit;
        $this->data['sub_title'] = 'Create Slideshow';
        return view('backend.slideshow.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SlideshowRequest $request) {
        $input = $request->all();
        $input['ss_status'] = $request->get('ss_status') == 'on' ? 1 : 0;
        $input['lang'] = getLang();
        $cat = new Slideshow($input);
        if ($cat->save()) {
            return langRedirectRoute('backend.slideshow.index');
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        if (!Entrust::can('slideshow-update')) {
            return redirect('');
        }
        $this->data['sub_title'] = 'Edit Slideshow';
        $this->data['slide_type'] = Config::get('constants.slide_type');
        $this->data['slide'] = Slideshow::find($id);
        return view('backend.slideshow.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(SlideshowRequest $request, $id) {
        $input = $request->all();
        $input['ss_status'] = $request->get('ss_status') == 'on' ? 1 : 0;
        $input['lang'] = getLang();
        $cat = Slideshow::find($id);
        if ($cat->update($input)) {
            return langRedirectRoute('backend.slideshow.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
        if (!Entrust::can('slideshow-delete')) {
            $this->data['slideshow'] = Slideshow::all();
            return view('backend.slideshow.lists', $this->data);
        }
        $slideshow = Slideshow::find($id);
        if (Storage::exists('slideshows/thumb/' . $slideshow->ss_image)) {
            Storage::delete('slideshows/thumb/' . $slideshow->ss_image);
        }
        if (Storage::exists('slideshows/full/' . $slideshow->ss_image)) {
            Storage::delete('slideshows/full/' . $slideshow->ss_image);
        }
        if ($slideshow->delete()) {
            $this->data['slideshow'] = Slideshow::all();
            return view('backend.slideshow.lists', $this->data);
        }
    }
}