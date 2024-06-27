<x-app-layout>
     @forelse ($bien as $rowBien)
         {{$rowBien->description}}<br>
     @empty
         
     @endforelse
</x-app-layout>