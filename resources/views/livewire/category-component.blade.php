
<main>
  <div class="product_type">
  <div class="dropdown">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        All Categories
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      @foreach ($categories as $category)
        <li><a class="dropdown-item" href="{{route('product.category',['category_slug'=>$category->slug])}}">{{$category->name}}</a></li>
      @endforeach
      </ul>
  </div>
  <div class="p_w50">
    <select name="" class="sort_product" wire:model="sorting">
      <option value="default" selected>Default Sorting</option>
      <option value="date">Sort by NewItem</option>
      <option value="price_desc">Sort by price(High to Low)</option>
      <option value="price">Sort by price(Low to high)</option>
    </select>
  </div>
  <div>
  <select name="" class="sort_product" wire:model="pagesize">
      <option value="16" selected>16 item per page</option>
      <option value="12">12 item per page</option>
      <option value="8">8 item per page</option>
      <option value="20">20 item per page</option>
      <option value="28">28 item per page</option>
    </select>
  </div>
  </div>

  <div class="container"> 
    <div class="row">

        @foreach($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}">
                        <img class="pic-1" src="{{asset('image')}}/{{$product->image}}">
                        
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">{{$product->stock_status}}</span>
                    <span class="product-discount-label">20%</span>
                </div>
                
                <div class="product-content">
                    <h3 class="title"><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></h3>
                    <div class="price">Rp {{$product->sale_price}}
                        <span>Rp {{$product->reguler_price}}</span>
                    </div>
                    <a class="add-to-cart" href="" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">+ Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
        
    
    </div>
    <div class="wrap-pagination-info">
        {{$products->links()}}
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
</main>