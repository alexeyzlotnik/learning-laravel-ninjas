@props([
   'name' => 'Ninja Name',
   'skill' => 0,
   'id' => 0,
   'color' => 'red'
])

<div class="card flex items-center justify-between !border-l !border-l-4" style="border-left-color: {{ $color }}">
   <div class="flex flex-col">
      <h2>{{ $name }} </h2>
      <p>Skill: {{ $skill }}</p>
      <p>Color: {{ $color }}</p>
   </div>
   <div class="flex gap-2">
      <a href="{{ route('ninjas.show', $id) }}" class="btn">View Ninja</a>
      <form action="{{ route('ninjas.destroy', $id) }}" method="POST">
         @csrf
      @method('DELETE')

         <button type="submit" class="bg-red-500 text-white p-2 rounded-md">Delete</button>
      </form>
   </div>
</div>

