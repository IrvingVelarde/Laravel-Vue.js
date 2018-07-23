<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & Vue.js</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <div id="main" class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Lista VUEjs - AJAX</h1>
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Nick</th>
                                        <th>Email</th>
                                        <th>Ciudad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="item in lists">
                                        <td>@{{ item.id }}</td>
                                        <td>@{{ item.name }}</td>
                                        <td>@{{ item.username }}</td>
                                        <td>@{{ item.email }}</td>
                                        <td>@{{ item.address.city }}</td>
                                    </tr>
                                </tbody>
                        </table>
                </div>
                <div class="col-sm-6">
                        <h1>JSON</h1>
                        <pre>
                            @{{ $data }}
                        </pre>
                    </div>
                </div>
        </div>
    </head>
    <body>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
