
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">                                       
                <form class="" action="{{url('submit-banner')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 
                <input type="hidden" name="banner_id" value="{{$banner->id}}">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Banner Name <small class="text-danger">*</small></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="banner_name"  placeholder="Enter Banner" value="{{$banner->banner_name}}" required/>
                    </div>
                </div>   
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Banner Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="banner_title"  placeholder="Enter Title" value="{{$banner->banner_title}}" />
                    </div>
                </div>  
                    
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Banner Description</label>
                    <div class="col-sm-9">
                        <div class="form-group">                            
                            <div>
                                <textarea  class="form-control" rows="3" name="description" placeholder="Enter Description">{{$banner->description}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>


                            @if($banner->banner_image)
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">Preview</label>
                                <div class=" col-md-9">                                  
                                   <img class="document_img" src="{{asset($banner->banner_image)}}" alt="" width="80" height="80">
                                </div>                                
                            </div>
                            @endif

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Image </label>
                        <div class="col-md-9">
                            <input type="file" name="new_banner_image">
                        </div>
                        <small class="text-danger mx-auto">Image size must be 1920*370 pixel </small>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">                                    
                                <option value="1" @if($banner->status == '1') selected @endif>Active</option>
                                <option value="0" @if($banner->status == '0') selected @endif>De-Active</option>                                     
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Update
                            </button>
                           
                        </div>

                        <div class="any_message mt-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('alert-danger'))
                                <div class="alert alert-danger">
                                    {{ session()->get('alert-danger') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                                @if(session()->has('alert-success'))
                                <div class="alert alert-success">
                                    {{ session()->get('alert-success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end col -->


