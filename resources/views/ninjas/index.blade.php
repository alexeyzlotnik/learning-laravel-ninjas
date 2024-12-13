<x-layout pageName="Ninjas Index" title="All Ninjas" description="Ninjas Index Page">
   @if(session('success'))
      <x-flash-message type="success" :message="session('success')"/>
   @endif

   <a href="{{ route('ninjas.create') }}" class="btn mt-4">Add a new</a>
    <ul>
      @foreach ($ninjas as $ninja)
         <li>
            <x-ninjas.card :name="$ninja->name" :skill="$ninja->skill" :id="$ninja->id" :color="$ninja->color->hex"/>
         </li>
      @endforeach
    </ul>

    {{ $ninjas->links() }}
</x-layout>
