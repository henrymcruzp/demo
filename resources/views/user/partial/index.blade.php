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