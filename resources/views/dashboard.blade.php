<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <form action="http://crm.alluresystem.site/api/login" method="post">
    @csrf
    <button type="submit" onclick="dataUser()"> CRM</button>
    </form>
</body>
<script>
    function dataUser() {
        $.ajax(function () {
            url: 'http://crm.alluresystem.site/api/login',
            type: 'POST',
            data: {
                halo: "halo",
                _token: "{{ csrf_token() }}"
            }
        })
    }
</script>
</html>