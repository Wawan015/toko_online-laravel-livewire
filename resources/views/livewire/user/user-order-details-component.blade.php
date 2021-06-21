<div>
<div class="container">
    <br>
    <br>
    <br>
    @foreach($order as $ordr)
    @if($ordr->user_id == Auth::user()->id)
    <h1 class="text-center">Details Order</h1>
    <br>
    <br>
    @foreach($transactions as $transaction)
        <h5>Order Id: <span class="lo_go">{{$transaction->order_id}}</span></h5>
        <h5>Metode Order : <span class="lo_go">{{$transaction->mode}}</span></h5>
        <h5>Status Order : <span class="lo_go">{{$transaction->status}}</span></h5>
        <h5>Tanggal Order : <span class="lo_go">{{$transaction->created_at}}</span></h5>
       
        <br>
        <br>

    @endforeach
    
    <div class="table-responsive">
    <table class="table align-middle">
    <thead class="admin_table">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Order Id</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
   
    @foreach($orderdetails as $orderdetail)
        <tr>
            <th scope="row">{{$orderdetail->id}}</th>
            <td><img src="{{asset('image')}}/{{$orderdetail->product->image}}" alt="" width="60" height="60"></td>
            <td>{{$orderdetail->order_id}}</td>
            <td>Rp {{$orderdetail->price}}</td>
            <td>{{$orderdetail->quantity}}</td>
            <td>{{$orderdetail->created_at}}</td>
        </tr>
    @endforeach
    @else
     <h1 class="text-center">Not Your Order</h1>
    @endif
    @endforeach
    </tbody>
    </table>
    <br>
    <br>
    
    </div>
    </div>
    <div class="conn">
        <h5 class="connh1">keep connected with us</h5>
        <div class="conn_ico">
          <i class="connec fab fa-facebook"></i>
          <i class="connec fab fa-twitter"></i>
          <i class="connec fab fa-whatsapp"></i>
          <i class="connec fab fa-instagram"></i>
        </div>
      </div>
</div>
