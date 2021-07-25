<!DOCTYPE html>
<html lang="en">

<head>
    <title>Queries - DinoPHP Framework</title>
    <style>

        .menu-link {
            font-weight: bold;
        }
        ul {
            list-style: none;
        }
        .menu-docs {
            line-height: 2em;
        }

    </style>
    @include('links')
</head>

<body>
@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('docs-menu')
        </div>
        <div class="col-lg">
            <a href="#query"><h3 style="font-weight: bold"><span class="hashtag">#</span> Query Builder</h3></a>
            <div id="query" style="margin-top: 5%;">

                <a href="#introduction"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    DinoPHP's database query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your application and works perfectly with all of DinoPHP's supported database systems.
                </p>

                <a href="#queries"><h3 style="font-weight: bold"><span class="hashtag">#</span> Database Queries</h3></a>
                <a href="#queries"><h4 style="font-weight: bold"><span class="hashtag">#</span> Check if database is exist</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    You can check if the database exists with the data you set in <b>config/database</b> file and return Exception from your controller:
                </p>

                <div class="code">
					<?php
					highlight_string("
<?php
return Database::instance();
?>
                        ");
					?>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>

@include('footer')
</body>
@include('scripts')

</html>