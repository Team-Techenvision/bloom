
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-testimonial')}}" class="btn btn-success">Add Testimonail</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive  text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Customer Name</th>   
                        <th>Image</th>  
                        <th>Description</th> 
                        <th>Status</th>                    
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($Testimonial as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->customer_name}}</td>                          
                        <td><img src="{{$row->images}}" alt="" width="120" height="100"></td>  
                        <td>{!!$row->description!!}</td>                        
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-testimonial/'.$row->id)}}" class="btn btn-success mr-2 mb-2">Edit</a>
                            <a href="{{url('delete-testimonial/'.$row->id)}}" class="btn btn-danger mr-2">Delete</a>
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
