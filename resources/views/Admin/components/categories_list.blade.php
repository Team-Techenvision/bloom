
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-category')}}" class="btn btn-success">Add Categories</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Categories Name</th>
                        <th>Image</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($Categories as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->category_name }}</td>  
                        <td><img src="{{$row->category_image}}" alt="" width="120" height="100"></td>                          
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-category/'.$row->id)}}" class="btn btn-success mr-2">Edit</a>
                             @if($row->status == 1) <a href="{{url('update-category/'.$row->id.'/'.$deactive)}}" class="btn btn-danger">Deactive</a>@else <a href="{{url('update-category/'.$row->id.'/'.$active)}}" class="btn btn-success">Active</a>@endif </td>                                               
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
