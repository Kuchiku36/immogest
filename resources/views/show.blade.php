<img src="{{$rowBien->image}} " alt=""> <br>
{{$rowBien->name}} <br>
{{$rowBien->description}} <br>
{{$rowBien->city}} <br>
{{$rowBien->created_at}} <br>
<h1>{{number_format ($rowBien->price,2) }} €</h1>

@foreach ($similar as $rowSimilar)
{{$rowSimilar->name}}
<h1>{{number_format ($rowSimilar->price,2) }} €</h1>
<img src="{{$rowSimilar->image}}" alt=""> <br> 
{{-- une image est un lien, affiché une image nécessité de rentré le lien dans une balise image  --}}
@endforeach