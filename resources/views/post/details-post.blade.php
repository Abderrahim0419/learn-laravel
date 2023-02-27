<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post détail</title>
    <style>
        .w-100{
            width: 100%;
        }
        .page-break {
            page-break-after: always;
        }
        .text-center{
            text-align: center;
        }
        .carree{
            height: .5cm;
            width: .5cm;
            border: 1px solid grey;
        }
        .border{
            border: 1px solid black;
        }
        .padding_td{
            padding: 0 10px;
        }
    </style>
</head>
<body>
    <div class="page-1">
        <div class="w-100 text-center">
            <h2>Details Post</h2>
        </div>
        <table class="w-100">
            <tr>
                <td>
                    <h3>Post réf.: {{$post->id}}</h3>
                </td>
                <td style="text-align: right;"><p>{{\Carbon\Carbon::now()->toDayDateTimeString()}}</p></td>
            </tr>
            <tr>
                <p>
                    <strong>User</strong>: {{$post->user->name}}
                    <br>
                    <strong>Role</strong>: {{$post->user->role->name}} <br>
   
                </p>
   
            </tr>
           
        </table>
        <table border="1" class="w-100">
            <tr>
                <td>
                    id
                </td>
                <td>
                    title
                </td>
                <td>
                    content
                </td>
               
            </tr>
            <tr style="text-align: center">
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
               
            </tr>
           
        </table>
       
    </div>   
</body>
</html>