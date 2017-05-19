<ul class="treeview-menu">
    @foreach($children as $child)
        <li><a href="#">{{ $child->name }}
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            @if(count($child->children))
                @include('admin.categories.manageChild',['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>