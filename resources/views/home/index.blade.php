<!DOCUMENT html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>WellCome Home!!!!! {{session('x')}}</td>
                    <a href="/logout">Logout</a>

                    <table>
                        <tr>
                            <td>Name :</td>
                            <td>{{$nm}}</td>
                        </tr>
                        <tr>
                            <td>ID :</td>
                            <td>{{$id}}</td>
                        </tr>
                        <tr>
                            <td>CGPA :</td>
                            <td>{{$cgpa}}</td>
                        </tr>
                    </table>
                </tr>
            </table>
        </form>
    </body>
</html>