
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">                                       
                <form class="" action="{{url('submit-blogs')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 
                <input type="hidden" name="blog_id" value="{{$blogs->id}}">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Title <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="blog_title"  placeholder="Enter Title" value="{{$blogs->blog_title}}" required/>
                        </div>
                    </div>   
                    @php
                        // $date  =  $blogs->blog_date->format('Y-m-d');
                        $date1 = $blogs->updated_at->format('Y-m-d');
                    @endphp
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Blog Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="blog_date" value="{{$blogs->blog_date}}"/>
                        </div>
                    </div>  
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Blog Content</label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea  class="form-control" rows="3" name="blog_content" placeholder="Enter Content">{{$blogs->blog_content}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                            @if($blogs->blog_images)
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">Preview</label>
                                <div class=" col-md-9">                                  
                                   <img class="document_img" src="{{asset($blogs->blog_images)}}" alt="" width="80" height="80">
                                </div>                                
                            </div>
                            @endif

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Image </label>
                        <div class="col-md-9">
                            <input type="file" name="new_blog_image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">                                    
                                <option value="1" @if($blogs->status == '1') selected @endif>Active</option>
                                <option value="0" @if($blogs->status == '0') selected @endif>De-Active</option>                                     
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


