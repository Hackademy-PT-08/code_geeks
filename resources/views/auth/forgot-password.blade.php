<x-layout>

<x-session/>


<section id="register" class="bg-auth" style="background-image:url({{ asset ('img/background/bg-create.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">


    @if(session('status'))
    <div class="alert alert-success mt-5 fixed-top alert-dismissible fade show d-flex align-items-center" role="alert" style="margin-top:100px !important">
    <i class="fa-solid fa-circle-check me-3" style="color: #0f5132;"></i>  
        {{ session('status') }} 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    
    <!-- form recupero password -->
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 my-5">
                <form method="POST" action="/forgot-password" class="form_main_login rounded-5">
                @csrf

                <h2 class="text-center">RECUPERA PASSWORD<span style="color: #ff5114">.</span></h2>
                <div class="inputContainer mt-5">
                <input type="email" name="email" id="email" class="inputField form-control rounded-4 w-lg-50" placeholder="Inserisci la tua email" required>
                </div>
                <input class="rounded-4 button-form-login mt-5" type="submit" value="Cambia password">
            </form>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
    </section>

</x-layout>
