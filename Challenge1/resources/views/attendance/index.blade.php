<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Information</title>

    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Attendance Information</h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Checkin</th>
                    <th class="text-center">Checkout</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td class="text-center">{{ $attendance->employee->name }}</td>
                        <td class="text-center">{{ $attendance->checkin }}</td>
                        <td class="text-center">{{ $attendance->checkout ?: 'N/A' }}</td>
                        <td class="text-center">
                            <a href="{{ route('ge', $attendance->employee->id) }}" class="btn btn-primary">Mark Attendance</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center mt-3">
            <a href="{{ route('employee.create') }}" class="btn btn-success">Add Employee</a>
            <a href="{{ route('attendance.mark') }}" class="btn btn-warning">Mark Attendance</a>
        </div>
    </div>

</body>
</html>
