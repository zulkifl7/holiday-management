@extends('holidays.layout')

@section('content')
    <div class="search pull-right">
        <form action="" class="search-form">
            <input class="search-bar" type="placeholder" placeholder="Search">
            <input class="search-button " type="submit" value="Search">
        </form>
    </div>
    <main>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Aj's Holiday Management</h2>
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
        <div class="pull-right">
            <a class="create-btn" href="{{ route('holidays.create') }}"> Create New Holiday</a>
        </div>
    </main>
    {!! $holidays->links() !!}
@endsection
