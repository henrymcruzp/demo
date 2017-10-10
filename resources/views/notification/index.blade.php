@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notification</div>

                <div class="panel-body">
                     <table>
                       <tr>
                         <th>id</th>
                         <th>Title</th>
                         <th>Message</th>
                       </tr>

                       @foreach($notifications as $notification)

                           <tr>
                             <td>{{$notification->id}}</td>
                             <td>{{$notification->title}}</td>
                             <td>{{$notification->message}}</td>
                           </tr>

                        @endforeach

                     </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
