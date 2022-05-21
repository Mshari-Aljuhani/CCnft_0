@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2 class="mb-5" style="text-align: center; color: white">Subscribers emails: {{$emails->count()}} </h2>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th class="table-dark">Emails</th>
                    <th class="table-dark">Send at</th>
                </tr>
            </thead>
            <tbody>
            @foreach($emails as $email)
                <tr class="table-dark">
                        <th scope="row">{{$email->id}}</th>
                        <td>{{$email->email}}</td>
                        <td>{{$email->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection