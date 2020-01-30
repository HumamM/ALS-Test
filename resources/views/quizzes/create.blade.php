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
            <h3>Add Quizz for "{{$course->title}}"</h3>
            <div class="panel panel-header"></div>
            <div class="panel panel-header">
                <div class="row">
                </div></div>
            <div class="panel panel-footer" >
                <table class="table table-bordered">
                    <thead><tr>
                        <th class="text-center">Q number</th>
                        <th class="text-center">The Question</th>
                        <th class="text-center">A - choice</th>
                        <th class="text-center">B - choice</th>
                        <th class="text-center">C - choice</th>
                        <th class="text-center">D - choice</th>
                        <th class="text-center">Mark</th>
                        <th class="text-center"><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                    </tr></thead>
                    <tbody>
                    <tr>
                        <td width="5%">
                            <input type="text" name="title[]" class="form-control" required="" placeholder="'LO1'">
                        </td>

                        <td>
                            <input type="text" name="description[]" class="form-control" required="">
                        </td>

                        <td>
                            <input type="text" name="language[]" class="form-control" required="">
                        </td>

                        <td>
                            <input type="text" name="language[]" class="form-control" required="">
                        </td>
                        <td>
                            <input type="text" name="language[]" class="form-control" required="">
                        </td>
                        <td>
                            <input type="text" name="language[]" class="form-control" required="">
                        </td>
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