<x-layout>



<section id="register" class="bg-auth p-0" style="background-image:url({{ asset ('img/background/bg-create.png') }});">

    <div class="container p-5" >
        <div class="row mt-5">
            <div id="text" class="col-lg-6">
     
                    
                    <h2 class="my-5">Iscriviti al nostro sito e pubblica subito il tuo primo annuncio!</h2>

                    <img src="{{ asset ('img/storyset/register.png') }}" alt="" srcset="">
              
            
            
            </div>

            <div class="col-lg-6 p-5">


            <form action="/register" method="post" class="my-5 form_main_register form-main rounded-5" >

            @csrf

                <h1 class="text-center fw-semibold fs-1 my-5">REGISTRATI<span style="color: #ff5114">.</span></h1>
                <div class="inputContainer">
                    
                <svg class="inputIcon ms-2" viewBox="0 0 8 6" xmlns="http://www.w3.org/2000/svg">
	            <path d="m0 0h8v6h-8zm.75 .75v4.5h6.5v-4.5zM0 0l4 3 4-3v1l-4 3-4-3z"/>
                </svg>

                <input type="text" name="name" id="nameRegister" class="inputField form-control rounded-4" placeholder=" Inserisci Nome e Cognome">
                </div>
                
                <div class="inputContainer">
                
                <svg class="inputIcon ms-2" viewBox="0 0 8 6" xmlns="http://www.w3.org/2000/svg">
	            <path d="m0 0h8v6h-8zm.75 .75v4.5h6.5v-4.5zM0 0l4 3 4-3v1l-4 3-4-3z"/>
                </svg>

                <input type="email" name="email" id="emailRegister" class="inputField form-control rounded-4" placeholder=" Inserisci la tua email">
                </div>

            <div class="inputContainer">
               
                <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>

                <input type="password" name="password" id="passwordRegister" class="inputField form-control rounded-4" placeholder=" Inserisci la tua password">
            </div>

            <div class="inputContainer">
                

                <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>

                <input  type="password" name="password_confirmation" id="password_confirmationRegister" class="inputField form-control rounded-4" placeholder=" Conferma la tua password">

            </div>
                        
                    
            <input type="submit" id="button" class="rounded-4 button-form-register" value="Registrati"/>

            <a class="text-dark mt-3" href="/login">Hai già un'account? Accedi.</a>

            </form>


                        
            </div>
        </div>
    </div>
</section>


</x-layout>