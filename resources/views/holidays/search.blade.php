@extends('holidays.layout')

@section('content')
    <main>
        <div class="row">
            <div class="col-lg-12 margin-tb flex">
                <div class="left">
                    <a class="back" href="{{ route('holidays.index') }}"> Back</a>
                </div>
                <div class="push-right">
                    <h2>Results</h2>
                </div>

            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="tbl">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Start</th>
                <th>End</th>
                <th>Action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($holidays as $holiday)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $holiday->h_name }}</td>
                    <td>{{ $holiday->start_date }}</td>
                    <td>{{ $holiday->end_date }}</td>
                    <td>
                        <form class="flexme" action="{{ route('holidays.destroy', $holiday->id) }}" method="POST">



                            <a class="edit-btn" href="{{ route('holidays.edit', $holiday->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </main>
@endsection
