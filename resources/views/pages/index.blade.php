@extends('layouts.rootePage')
@section('body')
<div class="container">
    <div class="row  align-content-around">
    <div class=" row col-md-10 pl-2  pt-0 divH "id="divH">
             <div class="text-center ">la somme des utilusateurs: {{$data[1]}}</div>
        <table class="table-bordered table-striped table-hover table-primary text-center " id="myTable">
            <thead>
            <tr class=" "id="heacder">
            <th colspan="">Matricule</th><th>Connecté</th><th>Date</th>
            </tr></thead>
            <tbody>
                @if ($data[1] > 0)
                    @foreach ($data[0] as $item)
            <tr>
                        <td>{{$item->matricule}}</td>
                        <td>{{$item->loged==1 ?"oui":"non"}}</td>
                        <td>{{$item->created_at}}</td>
                        </tr>
                    @endforeach
                 @else
                   <tr><td colspan="4" class="text-center" style="height:50px">{{$data[2]}}</td></tr>
                 @endif
             </tbody>
        </table>
       <button id="gototop" class="gototopc" onclick="goTop()" title="go to top">Top</button>
    </div>
    {{-- div for test --}}
   
 </div>
</div>
@endsection
@section('navBar')
@include('elements.navBar')
@endsection