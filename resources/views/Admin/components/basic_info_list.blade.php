
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-basic-info')}}" class="btn btn-success">Add Basic Info</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive  text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Address</th>   
                        <th>Phone No.1</th>
                        <th>Phone No.2</th> 
                        <th>Email</th>
                        <th>timing</th>
                        <th>Status</th>                    
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($basic_info as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->address}}</td>
                        <td>{{$row->phone1}}</td> 
                        <td>{{$row->phone2}}</td> 
                        <td>{{$row->email}}</td>  
                        <td>{{$row->timing}}</td>                                              
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-basic-info/'.$row->id)}}" class="btn btn-success mr-2  mb-2">Edit</a>
                            <a href="{{url('delete-basic-info/'.$row->id)}}" class="btn btn-danger mr-2">Delete</a>
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
