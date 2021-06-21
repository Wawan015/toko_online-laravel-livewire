<div>
<div class="container">
   <br>
   <br>
   <br>
    <h1 class="text-center">All Order</h1>
    <br>
    <br>
    <div class="table-responsive">
    <table class="table align-middle">
    <thead class="admin_table">
        <tr>
        <th scope="col">Order Id</th>
        <th scope="col">Subtotal</th>
        <th scope="col">Pajak</th>
        <th scope="col">Total</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
        <th scope="col">No HP</th>
        <th scope="col">Email</th>
        <th scope="col">Kode POS</th>
        <th scope="col">Status</th>
        <th scope="col">Order Date</th>
        <th scope="col">Details</th>
        <th scope="col">Change Status</th>
        </tr>
    </thead>
    <tbody>

    @foreach($orders as $order)
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>Rp {{$order->subtotal}}</td>
            <td>Rp {{$order->tax}}</td>
            <td>Rp {{$order->total}}</td>
            <td>{{$order->firstname}}</td>
            <td>{{$order->lastname}}</td>
            <td>{{$order->mobile}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->zipcode}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->created_at}}</td>
            <td><a class="btn btn_custom" href="{{route('user.orderdetails',['id'=>$order->id])}}">Details</a></td>
            <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn_custom dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Change Status
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" wire:click.prevent = "changeorderStatus({{$order->id}},'delivered')">Deliverd</a></li>
                            <li><a class="dropdown-item" href="#" wire:click.prevent = "changeorderStatus({{$order->id}},'canceled')">Cancel</a></li>
                        </ul>
                    </div>
            </td>
        </tr>
    @endforeach

    </tbody>
    </table>
    
    
    </div>
   </div>
   
   <br>
   <br>
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
