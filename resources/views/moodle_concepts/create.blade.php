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
    
     <form method="POST" action="/moodle_concepts">
        @csrf
         <section>
             <div class="panel panel-header">

             </div>
             <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                         <th>Add Concepts for "{{$course->fullname}}"</th>
                             <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
        <tr>
        <td><input type="text" name="title[]" class="form-control" required=""></td>
        <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
        </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                         </tr>
                     </tfoot>
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
        '<td><input type="text" name="title[]" class="form-control" required=""></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
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
