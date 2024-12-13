
<x-layout pageName="Single Ninja" :title="$ninja->name" :description="$ninja->bio">

   @if(session('success'))
      <x-flash-message type="success" :message="session('success')"/>
   @endif

   <div class="flex">
      <p class="font-bold">Skill: </p>
      <p>{{ $ninja->skill }}</p>
   </div>
   <div class="flex flex-col">
      <p class="font-bold">About ninja:</p>
      <p>{{ $ninja->bio }}</p>
   </div>

   <div class="bg-white p-4 mt-4">
      <div class="flex">
         <p class="font-bold">Color name: </p>
         <p>{{ $ninja->color->name }}</p>
      </div>
      <div class="flex">
         <p class="font-bold">Color hex: </p>
         <p>{{ $ninja->color->hex }}</p>
      </div>
      <div class="flex flex-col">
         <p class="font-bold">Image: </p>
         <img src="{{ $ninja->color->image }}"/>
      </div>
   </div>

   <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST">
      @csrf
      @method('DELETE')

      <button type="submit" class="bg-red-500 text-white p-2 rounded-md">Delete</button>
   </form>

</x-layout>
