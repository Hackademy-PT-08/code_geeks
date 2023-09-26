
<x-layout>

<div class="sezione">
            <div class="breadcrumb-option mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__links">
                                <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                                <span>Profilo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

<section id="user" class="vh-100">
  <div class="container h-100 w-100 p-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-12 mb-lg-0">
        <div class="card mb-3 w-100 rounded-4 shadow-lg">
          <div class="row g-0">
            <div class="col-md-4 text-center text-white" style="background-color: black;">
              <img src="{{ asset(auth()->user()->profile_image) }}"class="img-fluid mt-5" style="width: 80px;" />


              <h2 class="mt-3 fs-2" style="color:#ff5114">Benvenuto,</h2>
              <h3 class="fs-3"> {{ Auth::user()->name }}</h3>
              <p class="h-6">Sei già un revisore.</p>
              <i class="far fa-edit fa-lg" style="color: #ff5114;"></i>

            </div>
            <div class="col-md-8">
                <div class="card-body p-4">

                    <h6 class="fs-1">Informazioni<span>.</span></h6>

                    <hr class="mt-0 mb-4"> 

                    <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Email</h6>
                        <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Telefono</h6>
                        <p class="text-muted">{{ Auth::user()->phone_number }}</p>
                    </div>
                    </div>

                    <hr class="mt-0 mb-4">

                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Città</h6>
                            <p class="text-muted">{{ Auth::user()->city }}</p>
                        </div>
                    <div class="col-6 mb-3">
                        <h6>Indirizzo</h6>
                        <p class="text-muted">{{ Auth::user()->address }}</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
      <div class="container">
          <div class="row">
            <div class="col-12">
              <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  @method('PUT')
                    <!-- Campo per l'immagine del profilo -->
                  <div>
                      <label for="profile_image" class="form-label">Immagine del Profilo:</label>
                      <input class="form-control" type="file" name="profile_image" id="profile_image">
                  </div>

                  <!-- Altri campi del profilo -->
                  <div>
                      <label for="phone_number" class="form-label">Numero di Telefono:</label>
                      <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ Auth::user()->phone_number }}">
                  </div>

                  <div>
                      <label for="city" class="form-label">Città di Provenienza:</label>
                      <input class="form-control" type="text" name="city" id="city" value="{{ Auth::user()->city }}">
                  </div>

                  <div>
                      <label for="address" class="form-label">Indirizzo di Casa:</label>
                      <input class="form-control" type="text" name="address" id="address" value="{{ Auth::user()->address }}">
                  </div>

                  <button type="submit" class="btn btn-success">Salva Modifiche</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

</x-layout>
