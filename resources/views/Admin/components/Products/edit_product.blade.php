
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">                                       
                <form class="" action="{{url('submit-product')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 
                <input type="hidden" name="products_id" value="{{ $product->products_id }}">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Name <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_name" required placeholder="Enter Product Name" value="{{$product->product_name}}" required/>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Category <small class="text-danger">*</small></label>
                        <div class="col-sm-9">                          
                            <select class="form-control" name="category_id" aria-readonly="true">  
                                <option value="">Select Product Category</option>
                                @foreach($categories as $item)                                   
                                    <option value="{{ $item->id }}" @if($item->id == $product->category_id) selected @endif >{{ $item->category_name }}</option>  
                                @endforeach                             
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product SKU <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_code"  placeholder="Enter Product Code" value="{{$product->product_code}}" required/>
                        </div>
                    </div>


                    @if($product->product_image)
                    <div class="form-group row ">
                        <label class="form-label col-md-3 p-2">Preview</label>
                        <div class=" col-md-9">                                  
                           <img class="document_img" src="{{asset($product->product_image)}}" alt="" width="80" height="80">
                        </div>                                
                    </div>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"> Main Image </label>
                        <div class="col-md-9">
                            <input type="file" name="product_image_new">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Short Description </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="short_description"  placeholder="Enter Short Description" value="{{$product->short_description}}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Description</label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea id="elm1" class="form-control" rows="3" name="long_description" placeholder="Enter Product Description">{{$product->long_description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">                                    
                                <option value="1" @if($product->status == '1') selected @endif>Active</option>
                                <option value="0" @if($product->status == '0') selected @endif>De-Active</option>                                     
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


