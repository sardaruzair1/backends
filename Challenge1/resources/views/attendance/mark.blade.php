<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendance</title>

    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Mark Attendance</h1>

        <form action="{{ route('attendance.mark') }}" method="post" class="col-md-6 mx-auto">
            @csrf
            <div class="mb-3">
                <label for="employee_id" class="form-label">Select Employee:</label>
                <select name="employee_id" id="employee_id" class="form-select" required>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Mark Attendance</button>
        </form>
    </div>

</body>
</html>
