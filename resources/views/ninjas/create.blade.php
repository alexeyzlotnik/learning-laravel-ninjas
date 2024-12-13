<x-layout pagaName="Create a New Ninja" title="Create a New Ninja">
   <form action="{{ route('ninjas.store') }}" method="POST">
     <!-- CSRF token for security -->
     @csrf


     <!-- ninja Name -->
     <label for="name">Ninja Name:</label>
     <input
       type="text"
       id="name"
       name="name"
       value="{{ old('name') }}"
       required
     >

     <!-- ninja Strength -->
     <label for="skill">Ninja Skill (0-100):</label>
     <input
       type="number"
       id="skill"
       name="skill"
       value="{{ old('skill') }}"
       required
     >

     <!-- ninja Bio -->
     <label for="bio">Biography:</label>
     <textarea
       rows="5"
       id="bio"
       name="bio"
       required
     >{{ old('bio') }}</textarea>

     <!-- select a color -->
     <label for="color_id">color:</label>
     <select id="color_id" name="color_id" required>
       <option value="" disabled selected>Select a color</option>
       @foreach ($colors as $color)
         <option value="{{ $color->id }}" {{ $color->id == old('color_id') ? 'selected' : '' }}>
           {{ $color->name }}
         </option>
       @endforeach
     </select>

     <button type="submit" class="btn mt-4">Create Ninja</button>

     <!-- validation errors -->
     @if ($errors->any())
       <ul class="px-4 py-2 bg-red-100">
         @foreach ($errors->all() as $error)
           <li class="my-2 text-red-500">{{ $error }}</li>
         @endforeach
       </ul>
     @endif

   </form>
 </x-layout>