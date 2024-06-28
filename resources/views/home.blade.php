<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<style type="text/css">

.div_deg{
    padding: 15px;
}
label{
    display: inline-block;
    width: 180px;
}


</style>
</head>
<body>

<center>

<h1 class="div_deg">Add Post</h1>

<form action="{{url('add_post')}}" method="Post" enctype="multipart/form-data">


@csrf


<div class="div_deg">
<label>Title</label>
<input type="text" name="title">
</div>

<div class="div_deg">
<label>Description</label>
<textarea name="description"></textarea>
</div>

<div class="div_deg">
<label>Image</label>
<input type="file" name="image">
</div>

<div class="div_deg">

<input type="submit" class="btn btn-primary" value="Add Post">
</div>

</form>



</center>


</body>
</html>