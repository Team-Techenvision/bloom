
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-product-images/'.$products_id)}}" class="btn btn-info">Add Images</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Product Id </th>
                        <th>Product Image</th> 
                        <th>Image Type </th>                                         
                        <th>Action</th>                                                               
                    </tr>
                </thead>

                <tbody>
                    {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
                    <?php $i = 1; ?>
                    @foreach($product_images as $row)                  
                   <tr>
                       <td>{{$i++}}</td>
                       <td>{{$row->products_id}}</td>                                                 
                       <td> <img src="{{ asset($row->product_image)}}" alt="" width="100" height="100"></td>  
                       <td>@if($row->type == 2 ) Main Image @else Sub Images @endif</td></td>                                                 
                      <td> 
                          {{-- <a href="{{url('edit-product/'.$row->products_id)}}" class="btn btn-info mb-2">Edit</a> --}}
                          @if($row->type == 1 ) <a href="{{url('delete-product-images/'.$row->product_images_id)}}" class="btn btn-danger mb-2">Delete</a> @endif
                     </td>
                    </tr>
                    @endforeach 
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .dt-buttons
    {
        display:none!important;
    }
 </style>   
<!-- end col -->
