<div class="products-right-grids-bottom">
    @foreach($products as $product)
        <div class="col-md-4 products-right-grids-bottom-grid">
            <div class="new-collections-grid1 products-right-grid1">
                <div class="new-collections-grid1-image">
                    <a href="{{route('product', $product->id)}}" class="product-image"><img src="{{$product->photo ? $product->photo->photo : "http://www.placehold.it/50X50"}}" alt=" " class="img-responsive"></a>
                    <div class="new-collections-grid1-image-pos products-right-grids-pos">
                        <a href="{{route('product', $product->id)}}">Quick View</a>
                    </div>
                    <div class="new-collections-grid1-right products-right-grids-pos-right">
                        <div class="rating">
                            <div class="rating-left">
                                <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                            </div>
                            <div class="rating-left">
                                <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                            </div>
                            <div class="rating-left">
                                <img src="{{asset("/images/2.png")}}" alt=" " class="img-responsive">
                            </div>
                            <div class="rating-left">
                                <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                            </div>
                            <div class="rating-left">
                                <img src="{{asset("/images/1.png")}}" alt=" " class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="addAlert{{$product->id}} alert alert-success collapse">
                    Product Added
                </div>
                <h4><a href="{{route('product', $product->id)}}">{{$product->title}}</a></h4>
                <div class="simpleCart_shelfItem products-right-grid1-add-cart">
                    <p><span class="item_price">Rs.{{$product->price}}</span><span></span>
                        @if($product->stock <= 0)
                            {!! Form::button('Out Of Stock', ['class' => 'btn btn-warning'])!!}
                        @elseif($product->stock > 0)
                            {!! Form::submit('Add To Cart', ['class' => 'btn btn-warning', 'id' => 'addToCart'.$product->id])!!}
                        @endif
                    </p>
                    <script>
                        $(document).ready(function () {
                            $('#addToCart{{$product->id}}').click(function() {
                                $.ajax({
                                    url:"/add-to-cart/{{$product->id}}",
                                    success:function(responseJson){
                                        responseJson = JSON.parse(responseJson); //Converting string output to JSON format
                                        $('#totalCartPrice').text(responseJson.totalPrice);
                                        $('#totalCartQty').text(responseJson.totalQty);
                                        $('.addAlert{{$product->id}}').show('fade');
                                        setTimeout(function () {
                                            $('.addAlert{{$product->id}}').hide('fade');
                                        }, 3000);
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    @endforeach
    <div class="clearfix"></div>
        {{$products->links()}}
</div>