@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notification</div>

                <div class="panel-body notification-list">

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

                        {{ $notifications->links() }}
                     </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer-scripts')
<script type="text/javascript">
$('body').on('click', '.pagination a', function(e) {
            e.preventDefault();
            console.log('pagination');
            $('.preloader').fadeIn();
            var url = $(this).attr('href');
            getHotels(url);
            window.history.pushState("", "", url);
    });

    function getHotels(url) {
                    $.ajax({
                        url : url
                    }).done(function (data) {
                        $('.preloader').fadeOut();
                        $('.notification-list').html(data);
                    }).fail(function () {
                        $('.preloader').fadeOut();
                        alert('Hotels could not be loaded.');
                    });
                }
</script>

@endpush


