<div>
    <br><br><br><br>
    <br><br>

@if ($errors->any())
    <div class="alert alert-danger my-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="alert text-success mt-5 fixed-top">
    <p class="h4">{{$message}}</p>
</div>
<div class="container mt-5 ">
    <div class="row myform w-50 my-5 mx-auto">
        <div class="col-12 mt-5">    
        <p><h2>Crea il tuo annuncio</h2></p>
            <div class="mt-5 mb-3">
                <label for="text" class="form-label">Titolo</label>
                <input wire:model="title" type="text" class="form-control shadow">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Descrizione</label>
                <textarea wire:model="description" cols="10" rows="10"class="form-control shadow"></textarea>
            </div>
            <div class="mb-3">
                <label for="text">Categorie</label>
               <select wire:model.defer="category" class="form-control text-dark">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
               </select>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Prezzo</label>
                <input wire:model="price" placeholder="€ 1234.00" type="text" class="form-control shadow">
            </div>

            <button type="button" class="button-register" wire:click="store">Crea</button>
        </div>
    </div>
</div>


</div>