<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th colspan="2">Contact Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Full Name: </td>
                <td>{{ $contact->fullname }}</td>
            </tr>
            <tr>
                <td scope="row">Company Name: </td>
                <td>{{ $contact->company }}</td>
            </tr>
            <tr>
                <td scope="row">Email: </td>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <td scope="row">Phone: </td>
                <td>{{ $phone->number }}</td>
            </tr>
            <tr>
                <td scope="row">Question: </td>
                <td>{{ $question->question }}</td>
            </tr>
        </tbody>
    </table>    
</div>