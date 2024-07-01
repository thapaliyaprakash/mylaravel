<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


        <style type="text/css">

.div_deg{
    padding: 15px;
}
label{
    display: inline-block;
    width: 180px;
}


</style>
<title></title>
</head>
<body>

<center>

<h1>Update Post</h1>


<form action="{{url('update_post',$data->id)}}" method="Post" enctype="multipart/form-data">
    @csrf

<div class="div_deg">
    <label>Title</label>
    <input type="text" name="title" value="{{$data->title}}">
</div>

<div class="div_deg">
    <label>Description</label>
    <textarea name="description">{{$data->description}}</textarea>
</div>

<div class="div_deg">
    <label>Old Image</label>

<img width="150" src="/post/{{$data->image}}">

    
</div class="div_deg">
<div>
    <label>Change Image</label>
    <input type="file" name="image">
</div>

<div class="div_deg">
    
    <input type="Submit" class="btn btn-secondary" value="Update Post">
</div>






</form>

</center>

</body>
</html>