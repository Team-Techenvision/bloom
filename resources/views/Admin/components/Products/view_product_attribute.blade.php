
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-product-attribute/'.$products_id)}}" class="btn btn-info">Add Product Attributes</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Product Name</th>
                        <th>Product Size</th>
                        <th>Product Color</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>                            
                        <th>Action</th>                                         
                    </tr>
                </thead>

                <tbody>
                    {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
                    <?php $i = 1; ?>
                     @foreach($product_attribute as $row)                    
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->product_name}}</td>                          
                        <td>{{$row->product_size}}</td>   
                        <td>{{$row->product_color}}</td>  
                        <td>{{$row->price}}</td>                        
                         <td>{{$row->quantity}}</td>  
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        <td> <a href="{{url('edit-product-attribute/'.$row->id)}}" class="btn btn-info mb-2">Edit</a> 
                           <a href="{{url('delete-product-attribute/'.$row->id)}}" class="btn btn-danger mb-2">Delete</a> </td>
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
