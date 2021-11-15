
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="row">
                <div class="col-md-9"> 
                        {{-- <form action="#" method="post">
                        @csrf                 
                            <div class="d-flex">
                                <label class="control-label mr-1 mt-2 h5">Form </label>
                                <input type="date" name="f_date" class="form-control" id="form_date1" placeholder="Form Date" required>
                                <label class="control-label ml-3 mt-2 h5 mr-3">To </label>
                                <input type="date" name="t_date" class="form-control" id="to_date1" placeholder="To Date" required>
                                <input type="submit" name="search" value="Search" class="btn btn-outline-primary ml-2" >
                            </div>                 
                        </form>                  --}}
                </div>  
                    <div class="col-md-3 text-right mb-3">
                        <a class="btn btn-warning" href="{{ route('sell-export') }}">Export</a>
                    </div> 
            </div> 
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>           
                        <th>Customer Name</th>                                    
                        <th class="product-name">Order Id</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Status</th>
                        {{-- <th class="product-subtotal">Shipping</th> --}}
                        <th class="product-subtotal">Date</th>
                        {{-- <th class="product-delete">action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sell_details as $item)
                    <tr>
                        <th>{{$item->name}}</th>
                        <td>{{$item->order_id}}</td>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->sub_total}}</td>
                        <td>{{$item->payment_status}}</td>
                        {{-- <td>{{date('d-m-Y', strtotime($item->from_date))}}</td> --}}
                        <td>{{$item->shipping_charge}}</td>
                        {{-- <td></td>                                                --}}
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
