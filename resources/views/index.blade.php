<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>immogest</title>
    @vite("resources/css/app.css")
</head>


<body>
    <!-- component -->
<div class=" w-screen h-screen flex  items-center">
    <div class="container mx-auto ">
      <div class="card flex flex-wrap w-full gap-4 p-10 bg-white rounded-lg shadow-2xl">
        @foreach ($biens as $rowBien)
        {{-- <div class="prod-title m-4" >
          <p class="text-2xl uppercase text-gray-900 font-bold">{{$rowBien->name}}</p>
          <p class="uppercase text-sm text-gray-400">
            {{$categories[$rowBien->category_id-1]->name}}
          </p>
        </div> --}}
        <div class="w-80 ">
          <div class="prod-img">
          <img src="{{$rowBien->image}}"
               class="w-full object-cover object-center" />
        </div>
        <div class="prod-info grid gap-10">
          <div>
            <span>
                <a href="{{route('show',$rowBien)}}">detail</a>
            </span>
          </div>
              
          <div class="flex flex-col md:flex-row justify-between items-center text-gray-900">
              <p class="font-bold text-xl">{{number_format ($rowBien->price,2) }} €</p>
            
          </div>
        </div>
        </div>
        
        @endforeach
        <div class="text-center w-full">
          {{ $biens->links() }}
        </div>
      </div>
    </div>
  </div>
    

</body>
</html>
