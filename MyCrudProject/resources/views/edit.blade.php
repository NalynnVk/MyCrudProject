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
        </div>
    </div>
    <div class = "row justify-content-md-center">
        <div class = "col-lg-6">
            {{-- // from view => route (/studentdata/create) => controller (/studentdata/create) => model (\App\Models\Students) => database --}}
            <form action="/studentdata/{{$data_student->id}}/update" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input name = "FirstName" class="form-control" id="exampleFormControlInput1" value="{{$data_student->FirstName}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input name = "SecondName" class="form-control" id="exampleFormControlInput1" value="{{$data_student->SecondName}}">
                </div>
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <select name="Gender" class="form-select" aria-label="Default select example">
                    <option value="M" @if($data_student->Gender == 'M') selected @endif>Male</option>
                    <option value="F" @if($data_student->Gender == 'F') selected @endif>Female</option>
                </select>
                <br>
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <div class="form-floating">
                    <textarea name="Address" class="form-control" placeholder="Leave address here" id="floatingTextarea2"
    style="height: 100px">{{$data_student->Address}}</textarea>

                    <label for="floatingTextarea2">Address</label>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
