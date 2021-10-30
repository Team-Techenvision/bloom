
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-sub-category')}}" class="btn btn-success">Add Sub Categories</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Categories Name</th>
                        <th>Sub Categories Name</th>                        
                        <th>Image</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($Sub_Categories as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        @php
                            $category_name =  DB::table('category')->where('id',$row->category_id)->pluck('category_name')->first();
                        @endphp
                        <td>{{$category_name }}</td>
                        <td>{{$row->sub_category_name }}</td>  
                        <td><img src="{{$row->sub_category_image}}" alt="" width="120" height="100"></td>                          
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-sub-category/'.$row->id)}}" class="btn btn-success mr-2">Edit</a>
                             @if($row->status == 1) <a href="{{url('update-sub-category/'.$row->id.'/'.$deactive)}}" class="btn btn-danger">Deactive</a>@else <a href="{{url('update-sub-category/'.$row->id.'/'.$active)}}" class="btn btn-success">Active</a>@endif </td>                                               
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
