@foreach($parents as $parent)
    <li><a href="{{route('store', $parent->id)}}">{{title_case($parent->name)}}</a></li>
@endforeach