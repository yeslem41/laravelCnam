<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{env('APP_NAME')}}</title>
<link rel="icon" href="{{asset('images/cnam.png')}}" type="image/x-icon">
    <style>
      body{
        /* background-color: rgb(84.8, 41.6, 65.6) */
        /* url({{asset('images/cnamii.jpg')}}); */
        /* background-repeat:no-repeat;
        background-size:cover; */
      }
      .butonHover{background-color:#fa0787;
        display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;
        border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
      .butonHover:hover{
         background-color: #49c3c5;
      } 
      .butonHoversub{background-color:#fa0787;
        display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;
        border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
      .butonHoversub:hover{
         background-color: #303998;
      }    
      .bgcol{color:white;}
      .bgcolors{background-color:rgb(18.0, 22.4, 51.8);}
      .fontSize{font-size: 23px;}
      table{width: 100%;}
      body{direction: ltr;}
      .directLTR{direction: ltr;} 
      .divH{
            max-height: 500px;
            overflow-y: auto;
            scrollbar-base-color: red
        }
        .shadow-textarea textarea.form-control::placeholder {
         font-weight: 300;
       }
        .shadow-textarea textarea.form-control {
         padding-left: 0.8rem;
         height: 150px;
         width: 270px;
         margin-left:5px; 
         margin-right:5px; 
         margin-top:5px; 
        }
      #header{
          position:fixed;
          background:blue;
          z-index:1;
         }
     
     
      .widthP{width:100%;} 

    .gototopc{
      display: none;
      position: sticky;
      margin-right: 10px;
      padding: 10px;
      bottom: 20px;
      outline: none;
      border: none;
      border-radius: 10px;
    }
    .fixedNavbar{
      position: fixed;
      right: 0!important;
      left: 0!important;
      top: 0!important;
      margin-top:0!important;
      z-index: 1012;
    }
    .alertRecla{
      display: none;
      right:45%;
      top:200px;
      z-index: 999;
      width:280px;
      height: 280px;
      background: #49c3c5;
    }
    /* .text_area{
      width: 275px;
      height: 150px;
    } */
    </style>

</head>
<body>
@yield('navBar')
<div class="mt-2">
  @include('elements.flash')
   @yield('body')
</div>
  
<script src="{{asset('js/jquery.js')}}" ></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
<script>

 window.onscroll=function(){fixedbar()}
 function fixedbar(){$('.topNav').addClass('fixedNavbar');
   if(document.body.scrollTop > 10 || document.documentElement.scrollTop > 10){
        $('.topNav').addClass('fixedNavbar');}
   else  
        $('.topNav').removeClass('fixedNavbar');
 }

// 129219520179-v

 $('#submitbutton').click(function(){
         if($('#monthspecific').val()){
            window.location.href='http://localhost:8000/monthspecif/'+$('#monthspecific').val();
             console.log($('#monthspecific').val());
          }else
             return null;   
           });

$('#submitbuttonyear').click(function(){
    if($('#yearspecific').val() > 2019)
           window.location.href = 'http://localhost:8000/year/'+$('#yearspecific').val();
    else
       console.log('faux');       
});
function goTop(){
  var divH = document.getElementById('divH');
  divH.scrollTop = 0;
}
document.getElementById('divH').onscroll = onScroll;
function onScroll(){
  if(document.getElementById('divH').scrollTop >70){
  $('#gototop').css("display","block");
}else
$('#gototop').css("display","none");

}
$('#submitNNI').click(function(){
         if($('#NNI').val()>=1000000000){
            window.location.href='http://localhost:8000/reclamations/search/'+$('#NNI').val();
             console.log($('#NNI').val());
          }else
             return alert('NNI incorrect!!');   
           });

$('.reponde').click(function(){
var id = this.dataset.id;
$('#rId').val(id);
var user = this.dataset.user;
$('#rUser').val(user);
$('.alertRecla').css("display","block")
});//alertRecla  data-user

</script>
</html>