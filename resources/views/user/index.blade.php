@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body user-list">

                     <table>
                       <tr>
                         <th>id</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>User Name</th>
                         <th>Password</th>
                       </tr>

                       @foreach($users as $user)

                           <tr>
                             <td>{{$user->id}}</td>
                             <td>{{$user->name}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->user_name}}</td>
                             <td>{{$user->password}}</td>
                           </tr>
                        @endforeach

                        {{ $users->links() }}
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
                        $('.user-list').html(data);
                    }).fail(function () {
                        $('.preloader').fadeOut();
                        alert('Hotels could not be loaded.');
                    });
                }
</script>

@endpush


