<?php $i = 0; ?>
@foreach($parentCategories as $parent)
    <div class="col-sm-4">
        <ul class="multi-column-dropdown">
            <h6><a href="{{route('store', $parent->id)}}">{{title_case($parent->name)}}'s Wear</a></h6>
            <?php $i++; ?>
            <li><a href="#">Clothing</a></li>
            <li><a href="#">Wallets</a></li>
            <li><a href="#">Shoes</a></li>
            <li><a href="#">Watches</a></li>
            <li><a href="#">Accessories</a></li>
        </ul>
    </div>
@endforeach