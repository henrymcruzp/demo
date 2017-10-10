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
