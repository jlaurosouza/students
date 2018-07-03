@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">            
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Lista de Todos os Estudantes</strong></div>
                <div class="panel-body">
                    <table id="myTable" class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th>NOME COMPLETO</th>
                                <th>EMAIL</th>
                                <th>ANIVERSÁRIO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->firstname}} {{$student->lastname}} </td>
                                <td>{{$student->email}}</td>
                                <td>{{date('d/m/Y', strtotime($student->birthday))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.dataTables.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
    } );
</script>
@endsection

