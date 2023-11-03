<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @extends('layouts.navbar')

    @section('content')
    <section class="container w-80">
        <form method="POST" action="{{ route('user.update', $data->id) }}" class="mt-4">
            @csrf <!-- CSRF token -->
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input value="{{ $data->name }}" type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $data->email }}" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City:</label>
                <input type="text" name="city" id="city" class="form-control" value="{{ $data->city }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier User</button>
        </form>
    </section>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    @endsection
</body>

</html>