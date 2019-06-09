
@extends('index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="/create_event" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" name="name">
                <input type="text" class="form-control" name="description">
                <input type="date" class="form-control" name="from">
                <input type="date" class="form-control" name="to">
                <input type="date" class="form-control" name="deadline_date">
                <input type="text" class="form-control" name="location">
                <input type="text" class="form-control" name="location_name">
                <input type="text" class="form-control" name="facility">
                <input type="text" class="form-control" name="max_bookings">
                <input type="file" class="form-control" name="photo">
                <button type="submit" class="btn btn-primary">ADD EVENT</button>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- for the session messages --}}
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session()->get('success')) }}</div>
            @elseif (session()->has('danger'))
            <div class="alert alert-danger" role="alert" id="show">{{ session()->get('danger')) }}</div>
            @else 
            <div></div>
            @endif
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection