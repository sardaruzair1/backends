
    <h1>{{ $employee->name }}'s Attendance Information</h1>

    <table>
        <thead>
            <tr>
                <th>Checkin</th>
                <th>Checkout</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->checkin }}</td>
                    <td>{{ $attendance->checkout ?: 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

