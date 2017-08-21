@extends('layouts.admin')

@section('content')


    <div class="box box-primary">
        <div class="box-header with-border">

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{$review->id}}</td>
                        <td>{{$review->product->title}}</td>
                        <td>{{$review->user ? $review->user->name : "Anonymous"}}</td>
                        <td>{{$review->rating}}</td>
                        <td>{{$review->subject}}</td>
                        <td>{{$review->message}}</td>
                        <td><a class="btn btn-block btn-primary btn-xs" href="{{route('approve', $review->id)}}">Approve</a></td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>
@stop