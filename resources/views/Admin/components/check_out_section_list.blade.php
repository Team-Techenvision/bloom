
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-check-out-section')}}" class="btn btn-info">Add check this out section</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive  text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Title</th>
                        <th>Background Image</th>
                        <th>Left Side Image</th>
                        <th>Content</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($check_this_out as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->title}}</td>  
                        <td><img src="{{$row->bg_image}}" alt="" width="120" height="100"></td>
                        <td><img src="{{$row->left_side_image}}" alt="" width="120" height="100"></td>
                        <td>{!!$row->content!!}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-check-out-section/'.$row->id)}}" class="btn btn-info mr-2 mb-2">Edit</a>
                            <a href="{{url('delete-check-out-section/'.$row->id)}}" class="btn btn-danger mr-2">Delete</a>
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
