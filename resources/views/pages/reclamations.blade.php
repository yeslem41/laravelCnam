@extends('layouts.rootePage')
@section('body')

<div class="position-absolute alertRecla ">
    <form method="POST" action="{{route('reponse')}}">@csrf
        <div class="form-group shadow-textarea">
        <textarea required class="text_area form-control " name="reponse" placeholder="votre reponse">{{old('reponse')}}</textarea>
        </div>
        <div class="">
            <input type="radio" name="etat" value="resolu">résolu <br>
            <input type="radio" name="etat"  value="cours du traitement">cours du traitement <br>
            <input type="radio" name="etat"  value="en atente du traitement">en atente du traitement<br>
            {{-- <select name="selectEtat" id="">
                <option>resolu</option>
                <option>est recu</option>
            </select> --}}
        </div>
        <div class="text-center">
            <input type="hidden" id="rId" name="rId" value="{{old('rId')}}">
            <input type="hidden" id="rUser" name="rUser" value="{{old('rUser')}}">
            <input class="butonHoversub " type="submit" value="submmit" onclick="onclickF()">
        </div>
    </form>
</div>
<div class="container ">
   <div class="row ">
   <div class="col-8"><p class="text-center fontSize">toutes le reclamation ici : {{$data[1]}}</p></div> </div>    
    <div class="row  align-content-around">
            <div class=" row col-md-12 pl-2  pt-0 divH " id="divH" >
                
                <table class="table-bordered table-striped table-hover table-primary text-center " id="myTable">
                    <thead>
                    <tr class=" "id="heacder">
                        <th >type</th><th >reclamation</th><th>NNI</th><th>date</th><th>état</th>
                    </tr></thead>
                    <tbody>
                        @if ($data[1] > 0)
                            @foreach ($data[0] as $item)
                    <tr> <!--td><a href="macnam/{{--$item->id--}}/edit">edit</a></td-->
                                <td class="text-dark">{{$item->type}}</td>
                                <td style="max-width: 600px">{{$item->body}}</td>
                                <td>{{$item->nni}}</td>
                                <td>{{$item->time}}</td>
                                {{--<td>{{$item->repondre? 'déjà répondu' : 'non répondu'}}</td>--}}
                    <td>@if (!$item->repondre)<button class="butonHover  reponde" data-user="{{$item->superUser}}" data-id="{{$item->id}}" data-nni="{{$item->nni}}" id="reponde">repondre</button>@else déjà répondu @endif</td>
                                </tr>
                            @endforeach
                        @else
                        <tr><td colspan="5" class="text-center" style="height:50px">aucun reclamations</td></tr>
                        @endif
                    </tbody>
                </table>
            <button id="gototop" class="butonHover gototopc " onclick="goTop()" title="go to top">Top</button>
            </div>
   
  
 </div>
</div>

@endsection
@section('navBar')
    @include('elements.navRecla')
@endsection
