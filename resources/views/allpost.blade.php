<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style type="text/css">

    table
    {
        border: 1px solid black;
    }

th
{
    padding: 20px;
    text-align: center;
    color: white;
    background-color: darkblue;
    font-size: 15px;

}

td
{
    text-align: center;
    font-size: 13px;
    background-color: purple;
    color: white;
}
</style>
</head>
<body>



<center>
    <h2>All Post</h2>

<table>
    <tr>
        <th> Post Title </th>

        <th> Description </th>

        <th> Image </th>

        <th> Edit </th>

        <th> Delete </th>


    </tr>
    @foreach($post as $post)

    <tr>

    <td>{{$post->title}}</td>

    <td>{{$post->description}}</td>

    <td>
        <img width="200" src="post/{{$post->image}}">
    </td>

    <td>
        <a class="btn btn-primary" href="{{url('edit_post',$post->id)}}">Edit</a>
    </td>

    <td>
        <a class="btn btn-danger" href= "{{url('delete_post',$post->id)}}">Delete</a>
    </td>

    </tr>
    @endforeach
</table>



</center>


</body>
</html>