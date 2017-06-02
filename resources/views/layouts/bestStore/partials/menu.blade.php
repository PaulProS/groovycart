@foreach($Categories as $parent)
    <div class="col-sm-4">
        <ul class="multi-column-dropdown">
            <a href="{{route('store', $parent->id)}}">{{title_case($parent->name)}}</a>
        </ul>
    </div>
@endforeach