

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <script>
            $.ajax({url: 'http://172.16.0.22:80',
                data: {p: 'biblioteca'},
                success: function (status) {
                    alert(status);
                }
            });
           
        </script>
    </body>
</html>
