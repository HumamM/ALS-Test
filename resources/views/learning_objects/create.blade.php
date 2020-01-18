<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>
<body>

<div class="container">
    
     <form method="POST" action="/learning_objects">
        @csrf
         <section>
                <h3>Add Learning Objects for "{{$course->title}}"</h3>
            <div class="panel panel-header"></div>
            <div class="panel panel-header">
                <div class="row">
            </div></div>
            <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead><tr>
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Language</th>
                            <th class="text-center">Media format</th>
                            <th class="text-center">Learning Goal</th>
                            <th class="text-center">Difficulty level</th>
                            <th class="text-center">Learning Time (min)</th>
                            <th class="text-center"><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                     </tr></thead>
                     <tbody>
        <tr>
        <td width="5%"><input type="text" name="title[]" class="form-control" required="" placeholder="'LO1'"></td>
        <td><input type="text" name="description[]" class="form-control" required=""></td>
        <td><input type="text" name="language[]" class="form-control" required=""></td>
        <td width="12%"><select class='form-control select2' name='media_format[]'>
            <option  disabled selected value></option>
            @foreach ($media_format as $format)
                <option value="{{$format}}">{{$format}}</option>
            @endforeach</select></td>
        <td width="16%"><select class='form-control select2' name='learning_goal[]'>
            <option  disabled selected value></option>
            @foreach ($learning_goal as $goal)
                <option value="{{$goal}}">{{$goal}}</option>
            @endforeach</select></td>
        <td width="13%"><select class='form-control select2' name='difficulty_level[]'>
            <option  disabled selected value></option>
            @foreach ($difficulty_level as $level)
                <option value="{{$level}}">{{$level}}</option>
            @endforeach</select></td>
        <td width="7%"><input type="text" name="typical_learning_time[]" class="form-control" required=""></td>
        <td width="1%"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
        </tr>
                         </tr>
                     </tbody>
                     <tfoot><tr>
                             <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                     </tr></tfoot>
                 </table>
             </div>
        
         </section>
     </form>
</div>
<script type="text/javascript">
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td width="5%"><input type="text" name="title[]" class="form-control" required="" placeholder="LO1"></td>'+
        '<td><input type="text" name="description[]" class="form-control" required=""></td>'+
        '<td><input type="text" name="language[]" class="form-control" required=""></td>'+
        '<td width="12%"><select class="form-control select2" name="media_format[]"><option  disabled selected value></option>@foreach ($media_format as $format)<option value="{{$format}}">{{$format}}</option>@endforeach</select></td>'+
        '<td width="16%"><select class="form-control select2" name="learning_goal[]"><option  disabled selected value></option>@foreach ($learning_goal as $goal)<option value="{{$goal}}">{{$goal}}</option>@endforeach</select></td>'+
        '<td width="13%"><select class="form-control select2" name="difficulty_level[]"><option  disabled selected value></option>@foreach ($difficulty_level as $level)<option value="{{$level}}">{{$level}}</option>@endforeach</select></td>'+
        '<td width="7%"><input type="text" name="typical_learning_time[]" class="form-control" required=""></td>'+
        '<td width="1%"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
             $(this).parent().parent().remove();
        }
     
    });
</script>
</body>
</html>