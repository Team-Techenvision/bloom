<table>
    <thead>
    <tr>
        <th>Order Id</th>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Price</th>
        <th>Payment Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sell_details as $sell)
        <tr>
            <td>{{ $sell->order_id }}</td>
            <td>{{ $sell->product_name }}</td>
            <td>{{ $sell->quantity }}</td>
            <td>{{ $sell->sub_total }}</td>
            <td>{{ $sell->payment_status }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>