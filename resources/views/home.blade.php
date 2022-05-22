@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2 class="mb-3" style="text-align: center; color: white">Subscribers emails: {{$emails->count()}} </h2>
        <div class="mb-3" style="text-align: center">
            <a class="btn btn btn-outline-success" href="{{route('exportEmails')}}">Download emails list</a>
        </div>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th class="table-dark">Emails</th>
                    <th class="table-dark">Send at</th>
                    <th class="table-dark">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($emails as $email)
                <tr class="table-dark">
                        <th scope="row">{{$email->id}}</th>
                        <td>{{$email->email}}</td>
                        <td>{{$email->created_at}}</td>
                        <td>
                            <form action="{{route('email.destroy', $email)}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Delete {{$email->email}} ? ')" >Delete</button>
                            </form>
                        </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
