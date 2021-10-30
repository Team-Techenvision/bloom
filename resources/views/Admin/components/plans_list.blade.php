
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-plans')}}" class="btn btn-info">Add Plans</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($plans as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->plan_name}}</td> 
                        <td>{{$row->price}}</td>                           
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-plans/'.$row->id)}}" class="btn btn-info mr-2">Edit</a>
                             @if($row->status == 1) <a href="{{url('update-plans/'.$row->id.'/'.$deactive)}}" class="btn btn-danger">Deactive</a>@else <a href="{{url('update-plans/'.$row->id.'/'.$active)}}" class="btn btn-info">Active</a>@endif </td>                                               
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
