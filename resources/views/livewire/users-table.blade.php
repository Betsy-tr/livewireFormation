<!-- component -->
<div x-data="{selection : []}">
<!-- <div x-data="{selection : @entangle('selection').defer}"> -->
@include('partials.search')

  @if(session()->has('success'))
    <article class="message-is-primary">
      <div class="message-body">
        {{sesssion('success')}}
      </div>
    </article>
  @endif

  <button class="h-10 p-2 bg-red-700 rounded-sm text-white font-serif" x-show="selection.length >0" x-on:click:="$wire.deleteUsers(selection)" >Supprimer</button>

  <table class="mx-auto table-auto">
    <thead>
      <tr class="bg-teal-500">

        <th></th>
        <th class="px-5 py-2">
          <span class="text-gray-100 font-semibold">Avatar</span>
        </th>
        <th wire:click="setOrderField('name')" class="px-5 py-2">
          <span class="text-gray-100 font-semibold">Name</span>
        </th>
        <th wire:click="setOrderField('job')" class="px-5 py-2">
          <span class="text-gray-100 font-semibold">Title</span>
        </th>

        <th class="px-5 py-2">
          <span class="text-gray-100 font-semibold">Statut</span>
        </th>

        <th wire:click="setOrderField('role')" class="px-5 py-2">
          <span class="text-gray-100 font-semibold">Role</span>
        </th>

        <th></th>
        
      </tr>
    </thead>
    <tbody class="bg-gray-200">
        @foreach($users as $user)
      <tr class="bg-white border-b-2 border-gray-200">
        <td>
          <input type="checkbox" x-model="selection" value="{{$user->id}}">
        </td>
        <td>
            <div class="is-flex">
                <figure class="rounded-sm items-center justify-center">
                <img class="image 10x10" src="https://eu.ui-avatars.com/api/?name={{$user->name}}&background=random"/>
                </figure>
            </div>
        </td>

        <td class="px-5 py-2">
            <div class="ml-4">
                    <span class="has-text-black font-semibold font-serif">{{$user->name}}</span><br/>
                    <span class="text-black font-serif">{{$user->email}}</span>
            </div>
        </td>

        <td class="px-5 py-2">
          <span class="has-text-black font-semibold font-serif">{{$user->job}}</span><br/>
          <span class="text-black font-serif">{{$user->group}}</span>
        </td>

        <td class="px-5 py-2">
          <span>Actif</span>
        </td>

        <td>
            {{$user->role}}
        </td>

        <td class="px-16 py-2">
          <button wire:click="startEdit({{$user->id}})" class="button">Editer</button>
        </td>
      </tr>

        @if($editId == $user->id)
          <tr class="bg-white border-b-2 border-gray-200">
            <livewire:user-form :user="$user" :key="$user->id"/>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table> 
  <div class="py-4">
     {{$users->links()}}
  </div>
 
</div>
