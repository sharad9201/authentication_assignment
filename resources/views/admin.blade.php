@extends('layouts.app')

@section('content')
<div class="card-body">
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
        </tr>
        {{-- @foreach ($users as $user )
            <tr>
                <td>{{$user['name']}}</td> --}}
                {{-- <td>{{$user['email']}}</td>

            </tr>
        @endforeach --}}
    </table>
</div>
@endsection