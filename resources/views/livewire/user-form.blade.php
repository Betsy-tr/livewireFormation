<td colspan="6">
    <form action="" wire:submit.prevent="save">
        <div wire:loading>Chargement</div>
        <div class="field py-2">
            <label for="name" class="label font-serif">Name</label>
            <input type="text" wire:model="user.name" class="bg-gray-50 border border-gray-300 text-gray-900 font-serif">
            <div>
                @error('user.name')<span class="text-red-500">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="py-2">
            <button type="submit" class="h-10 p-2 bg-teal-500 rounded-sm text-white font-serif" wire:loading.attr="disabled" >Sauvegarder</button>
        </div>
    </form>
</td>