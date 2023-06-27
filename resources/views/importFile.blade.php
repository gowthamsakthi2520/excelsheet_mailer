<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload For CSV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
       <div style="width=300px;">
       <h2 class="mb-4">
            Import Export Excel & CSV file
            <!-- <a href="https://techvblogs.com/blog/laravel-import-export-excel-csv-file?ref=repo" target="_blank">TechvBlogs</a> -->
        </h2>
        <form action="{{route('file-upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import Users</button>

        </form>
       </div>
    </div>
</body>

</html>