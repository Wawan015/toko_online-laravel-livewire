<div>
    
<br>
<br>
<br>
<h1 class="text-center">Add Product</h1>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
<form wire:submit.prevent="addProduct">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Produk" wire:model="name" wire:keyup="generateSlug">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Slug</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Slug" wire:model="slug">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi Pendek</label>
    <textarea cols="60" rows="4" class="form-control" id="exampleFormControlTextarea1" placeholder="Short Description" wire:model="short_description"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
    <textarea cols="60" rows="4" class="form-control" id="exampleFormControlTextarea1"placeholder="Description" wire:model="description"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga Asli</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Asli" wire:model="reguler_price">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Discount</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Discount" wire:model="discount">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga Jual</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Jual" wire:model="sale_price">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stock Status</label>
    <select class="form-control" wire:model="stock_status">
        <option value="instock">Instock</option>
        <option value="outofstock">Out Of Stock</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantity" wire:model="quantity">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Image</label>
    <input type="file" class="input-file" wire:model="image">
    @if($image)
        <img src="{{$image->temporaryUrl()}}" alt="" width="100" height="100">
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category</label>
    <select class="form-select" wire:model="category_id">
        
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn_custom">Submit</button>
</form>
    </div>
    <div class="col">
    
    </div>
  </div>
</div>
<br>
<br>



</div>