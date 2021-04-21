

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->lastname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->gender}}</td>
        </tr>
        @endforeach
    </tbody>
</table>