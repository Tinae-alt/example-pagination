<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Search with pagination</title>
    <link href="{{ asset('bootstrap-4.1.3/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
 <div class ="container">
     <div class="row">
          <div class="col-md-6" style="margin-top: 40px">
              <h4>Search Everything</h4><hr>
              <form action="" method="get">
                  <div class="form-group">
                      <label for="">Enter Keyword</label>
                      <input type="text" class="form-control" name="query" placeholder="Search here.....">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Search</button>
                  </div>
              </form>
              <br>
              <br>
              <br>
              <br>
              @if(isset($countries))
              <table class="table table-hover ">
                  <thead>
                  <tr>
                      <th> Name</th>
                      <th>Independence Year</th>
                      <th>Continent</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(count($countries) >0)
                        @foreach($countries as $countrie)
                  <tr>
                      <td>{{ $countrie->Name }}</td>
                      <td>{{ $countrie->IndepYear }}</td>
                      <td>{{ $countrie->Continent }}</td>
                  </tr>
                        @endforeach
                  @else
                        <tr><td>No result found</td></tr>
                  @endif
                  </tbody>
              </table>
                  <div class="pagination-block">
                      {{ $countries->links('layouts.paginationlinks') }}
                  </div>
              @endif
          </div>
    </div>
 </div>
</body>
</html>
