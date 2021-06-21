<div>
<br>
<br>
    @if(Cart::count()>0 && Auth::user())
    <h1 class="text-center">Checkout</h1>
        <div class="container">

            <div class="container">
            <br>
            <br>
                <form wire:submit.prevent = "placeOrder">
                
                    <div class="row g-3">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Nama Depan*</label>
                            <input type="text" class="form-control" placeholder="Nama Depan" aria-label="First name" wire:model = "firstname" required>
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Nama Belakang*</label>
                            <input type="text" class="form-control" placeholder="Nama Belakang" aria-label="Last name" wire:model = "lastname" required>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email*</label>
                            <input type="email" class="form-control" placeholder="Email Address" aria-label="" wire:model = "email" required>
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Nomor HP*</label>
                            <input type="text" class="form-control" placeholder="Phone Number" aria-label="" wire:model = "mobile" required>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Alamat*</label>
                            <input type="text" class="form-control" placeholder="Alamat Lengkap" aria-label="" wire:model = "province" required>
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Kabupaten*</label>
                            <input type="text" class="form-control" placeholder="Kabupaten" aria-label="" wire:model = "country" required>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Kode POS*</label>
                            <input type="text" class="form-control" placeholder="Kode POS" aria-label="" wire:model = "zipcode" required>
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Kecamatan*</label>
                            <input type="text" class="form-control" placeholder="Kecamatan" aria-label="" wire:model = "city" required>
                        </div>
                    </div>
                    <br>
                    
                    
                

                <div class="checkoout_method" >
                    <label for="" class="form-label">Select Checkout Type</label>
                    <br>
                        <input value="cod" type="radio" wire:model = "payment_method">
                        <span>Cash on Delivery</span>
                        <br>
                        
                        <br>
                        <br>
                        <h4 class="lo_go">Total : Rp {{Cart::total()}}</p>
                    <button type="submit" class="btn btn_custom">Order</button>
                </div>

                </form>
            </div>

        </div>
    @else
    <h1 class="text-center">No Items</h1>
    @endif
<br>
<br>
</div>