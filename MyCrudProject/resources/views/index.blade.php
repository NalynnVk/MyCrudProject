<!DOCTYPE html>
<html>

<head>
    <title>Student Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class='container'>
        @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class='row'>
            <div class='col-6'>
                <h1>Data Student</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Add User
                </button>


            </div>

            <table class = "table table-hower">
                <tr>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Operation</th>
                </tr>
                @foreach ($data_student as $student)
                    <tr>
                        <td>{{ $student->FirstName }}</td>
                        <td>{{ $student->SecondName }}</td>
                        <td>{{ $student->Gender }}</td>
                        <td>{{ $student->Address }}</td>
                        <td><a href="studentdata/{{ $student->id }}/update">Edit</a></td>
                        <td><a href="studentdata/{{ $student->id }}/delete"
                                onclick="return confirm('Are You Sure?')">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Student Information</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- // from view => route (/studentdata/create) => controller (/studentdata/create) => model (\App\Models\Students) => database --}}
                    <form action="/studentdata/create" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">First Name</label>
                            <input name = "FirstName" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nalynn">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                            <input name = "SecondName" class="form-control" id="exampleFormControlInput1"
                                placeholder="Sharma">
                        </div>
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select name = "Gender" class="form-select" aria-label="Default select example">

                            <option selected>Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <br>
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <div class="form-floating">
                            <textarea name = "Address" class="form-control" placeholder="Leave address here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Address</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
