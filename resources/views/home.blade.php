@extends('layouts.app')

@section('content')
    <script>
        function modify(student_id, name, profile_pic, routine_id){
            $("#modificationArea").show();
            $('input[name=student_id]').val(student_id);
            $('input[name=name]').val(name);
            $('input[name=profile_pic]').val(profile_pic);
            $('input[name=routine_id]').val(routine_id);
        }
    </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-primary"
                            style="float: right" onclick="$('#modificationArea').toggle();$('form[id=addForm]').get(0).reset();">
                        Add Student</button>
                    <div id="modificationArea" style="display: none">
                        <form class="form-inline" id="addForm" action="">
                            <div class="form-group">
                                <label for="student_id">Student ID:</label>
                                <input type="number" name="student_id" class="form-control" id="student_id"/>
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" id="name"/>
                            </div>
                            <div class="form-group">
                                <label for="profile_pic">Profile Pic:</label>
                                <input type="text" class="form-control" name="profile_pic" id="profile_pic"/>
                            </div>
                            <div class="form-group">
                                <label for="routine_id">Routine:</label>
                                <input type="number" class="form-control" name="routine_id" id="routine_id"/>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>


                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Profile Pic</th>
                                    <th>Routine ID</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>17201010</td>
                                    <td>Robin Mollah</td>
                                    <td>robin.jpg</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn" onclick="modify(17201010, 'Robin Mollah', 'robin.jpg',5)"><i class="fa fa-pencil-alt fa-lg"></i></button>
                                    </td>
                                    <td>
                                        <!--- Will instantly remove this entry and reload this page -->
                                        <button class="btn"><i class="fa fa-trash fa-lg"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
