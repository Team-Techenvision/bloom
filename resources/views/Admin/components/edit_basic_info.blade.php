
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">
                                       
                <form class="" action="{{url('submit-basic-info')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 
                <input type="hidden" name="basic_info_id"  value="{{$basic_info->id}}">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Add Address</label>
                    <div class="col-sm-9">
                        <div class="form-group">                            
                            <div>
                                <textarea class="form-control" rows="3" name="address" placeholder="Enter Address">{{$basic_info->address}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone no. <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone1" required placeholder="Enter Phone No. " value="{{$basic_info->phone1}}" required/>
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alt Phone no.  <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone2" required placeholder="Enter Alternate Phone No." value="{{$basic_info->phone2}}" required/>
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" required placeholder="Enter Email" value="{{$basic_info->email}}"  required/>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Timing </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="timing" value="{{$basic_info->timing}}" required placeholder="Enter Timing" />
                        </div>
                    </div> 
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Add Google Map</label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea class="form-control" rows="3" name="map" placeholder="Enter Embeded Map link">{{$basic_info->map}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Google Analytics</label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea class="form-control" rows="3" name="google_analytics" placeholder="Enter Google Analytics code here">{{$basic_info->google_analytics}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Facebook Pixel </label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea class="form-control" rows="3" name="facebook_pixel" placeholder="Enter Facebook Pixel Code here">{{$basic_info->facebook_pixel}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">                                    
                                <option value="1" @if($basic_info->status == '1') selected @endif  >Active</option>
                                <option value="0" @if($basic_info->status == '0') selected @endif >De-Active</option>                                     
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


