<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <title>Edit {{ $holiday->h_name }}</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body background="{{ asset('img/back.jpg') }}">
    <main>
        <div class="1">
            <div class="top">
                <div>
                    <a class="back" href="{{ route('holidays.index') }}"> Back</a>
                </div>
                <div class="topic">
                    <h2>Edit {{ $holiday->h_name }}'s Details</h2>
                </div>

            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('holidays.update', $holiday->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Holiday Name</h2>
                        <input class="placeholder" type="text" name="h_name" value="{{ $holiday->h_name }}"
                            class="form-control" placeholder="Holiday Name">
                    </div>
                </div>
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Start Date</h2>
                        <input class="placeholder" type="date" name="start_date" value="{{ $holiday->start_date }}"
                            class="form-control" placeholder="Start Date">
                    </div>
                </div>
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>End date</h2>
                        <input class="placeholder" type="date" name="end_date" value="{{ $holiday->end_date }}"
                            class="form-control" placeholder="End Day">
                    </div>
                </div>

                <div class="add_">
                    <button type="submit" class="add">Submit</button>
                </div>
            </div>

        </form>

    </main>
</body>

</html>
