@extends('layouts.app')
@section('title', 'Reponses - Bigscreen')
@section('custom_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection



@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-2 col-blue" style="background-color:#cfe2f3;">
                @include('admin.navbar')
            </div>
            <div class="col-md-10 col-red">
                <h1>Administration BigScreen - Réponses</h1>
                <hr>
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Numéros</th>
                        <th>Questions</th>
                        <th>Réponses</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    @foreach($answers as $answer)
                        <tr>
                            <td>{{$answer->id}}</td>
                            <td> @foreach($questions as $key => $quest)
                                          <tr>
                                      <td>{{$quest['question']}}</td>
                                     <td>{{$quest['label']}}</td>
                                  <td>{{$answer}}
                                     </tr> 
                                     
                                      @endforeach</td>
                           
                        </tr>
                    @endforeach
                    </tbody>
                    
                </table>

            </div>
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
