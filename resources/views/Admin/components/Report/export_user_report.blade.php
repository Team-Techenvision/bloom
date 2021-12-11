<table>
    <thead>
    <tr>
        <th>Customer Name</th>
        <th>plan</th>
        <th>Start Date</th>
        <th>End date</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($user_details as $items)
        <tr>
            <td>{{ $items->name }}</td>
            <td>{{ $items->plan_name }}</td>
            <td>{{ $items->plan_start }}</td>
            <td>{{ $items->plan_end }}</td>
            <td>{{ $items->price }}</td>
            <td>@if($items->status == 1) Active @else Deactive @endif</td>
        </tr>
    @endforeach
    </tbody>
  </table>