
<div class="col-12">
    <div class="card">
        <div class="card-body">
            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">                                       
                <form class="" action="{{url('submit-who-we-are')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 
                <input type="hidden" name="id" value="{{$who_we_are->id}}">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Title <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title"  placeholder="Enter Title" value="{{$who_we_are->title}}"  required/>
                        </div>
                    </div>   
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Content</label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea id="elm1"  class="form-control" rows="3" name="content" placeholder="Enter Content">{{$who_we_are->content}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($who_we_are->bg_image)
                    <div class="form-group row ">
                        <label class="form-label col-md-3 p-2">Preview</label>
                        <div class=" col-md-9">                                  
                           <img class="document_img" src="{{asset($who_we_are->bg_image)}}" alt="" width="80" height="80">
                        </div>                                
                    </div>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Background Image </label>
                        <div class="col-md-9">
                            <input type="file" name="new_bg_image">
                        </div>
                    </div>

                    {{-- @if($who_we_are->right_side_video)
                    <div class="form-group row ">
                        <label class="form-label col-md-3 p-2">Preview</label>
                        <div class=" col-md-9">  
                            <video width="100%" height="auto" controls>
                                <source src="{{asset($who_we_are->right_side_video)}}" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>                                 
                        </div>                                
                    </div>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Right Side Video </label>
                        <div class="col-md-9">
                            <input type="file" name="new_right_side_video">
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Video Link <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="right_side_video_link"  placeholder="Enter Video Link" required/>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">                                    
                                <option value="1">Active</option>
                                <option value="0">De-Active</option>                                     
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <div>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
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


