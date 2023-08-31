@extends('layouts.app')
@section('title', 'Questions - Bigscreen')
@section('custom_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2" style="background-color:#cfe2f3;">
        @include('admin.navbar')
        </div>
    <div class="col-md-10">
        <h1>Administration BigScreen - Questions</h1>
        <hr>
        <table class="table">
            <thead>
            <tr>
                <th>Numéro</th>
                <th>Questions</th>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($questions as $key => $quest)
                <tr>
                    <td>{{$quest['question']}}</td>
                    <td>{{$quest['label']}}</td>
                    <td>{{$quest['type']}}</td>
                </tr>
                <php>var_dump($quest);</php>
            @endforeach
         
            </tbody>
        </table>
  </div>

</div>

@endsection
@section("scripts")

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('table').DataTable();
    } );
</script>
@endsection
