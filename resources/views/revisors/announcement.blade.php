
<x-layout>
    
<section >

        <div class="sezione">
            <div class="breadcrumb-option mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__links">
                                <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                                <a href="{{ route('revisors.index') }}">{{__('traduzioni.ZonaRevisore')}}</a>
                                <span>{{__('traduzioni.Dettaglio')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div id="details_announcement" >
            <div class="card">
                <nav class="d-flex align-items-end">
                <svg class="arrow" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 " stroke="#727272"/></svg>
                <!-- <a href="/annunci"> </a>  -->
                    <a class="text-dark" href="{{ route('revisors.index') }}">TORNA ALLA ZONA REVISORE</a>
                <!-- <svg class="heart" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" stroke="#727272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z" stroke="#727272"/></svg> -->
                </nav>
        
                <div class="row">
                    <div class="col-sm-12 col-md-4" style="padding: 0px 0px 0px 20px;">
                        <div class="photo">
                      

                            <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                            @if($announcement->images->count() > 0)
                                <div class="carousel-inner rounded-4">
                                @foreach($announcement->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{$image->getUrl(150, 150)}}" class="d-block w-100" alt="...">
                                        
                                    </div>
                                        @endforeach
                                </div>
                                    @else
                                    
                                <div class="carousel-inner rounded-4">
                                    <div class="carousel-item active">
                                        <img src="{{asset('img/logo/code_geeks.png')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('img/logo/logo.png')}}" class="d-block w-100" alt="...">
                                    </div>
                                    
                                </div>
                                    @endif

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                      
                        </div>
                    </div>
            

                    <div class="col-sm-12 col-md-6">
                        <div class="description">

                        <h6 style="color:#ff5114; text-transform: uppercase; font-size: 40px;">Informazioni</h6>

                            <h2 class= "card-title">{{$announcement->title}}</h2>
                            <h3 class= "card-text mt-2" style="color:#ff5114; font-size: 15px;">{{$announcement->category->title}}</h3>
                            <h3 class= "card-text mt-2">{{$announcement->price}} €</h1>
                            <p class= "card-text mt-2">{{$announcement->description}}</p>

                        </div>
                    </div>

                </div>
        </div>
</div>





            @if($announcement->images->count() > 0)
                    @foreach($announcement->images as $image)
<div class="container">
    <div class="row">
    <div class="col-12 col-md-6 mb-5">
                        
                        <img src="{{$image->getUrl(150, 150)}}" alt="" srcset="" class="d-block w-50 rounded-4">



                  
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="description">
                        
                        <h6 style="color:#ff5114; text-transform: uppercase;">Revisione immagini</h6>   
                           
                           <h4 class= "text-dark dettaglio-revisore">Adulti: <span class="{{$image->adult}}"><i class="fa fa-circle"></i></span></h4>
                           <h4 class= "text-dark dettaglio-revisore">Satira: <span class="{{$image->spoof}}"><i class="fa fa-circle"></i></span></h4>
                           <h4 class= "text-dark dettaglio-revisore">Medicina: <span class="{{$image->medical}}"><i class="fa fa-circle"></i></span> </h4>
                           <h4 class= "text-dark dettaglio-revisore">Violenza: <span class="{{$image->violence}}"><i class="fa fa-circle"></i></span></h4>
                           <h4 class= "text-dark dettaglio-revisore">Contenuto Ammiccante: <span class="{{$image->racy}}"><i class="fa fa-circle"></i></span> </h4>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="description">
                                          
                            <h6 style="color:#ff5114; text-transform: uppercase;">Tags</h6>
                            <div>
                                @if($image->labels)
                                    @foreach($image->labels as $label)
                                    <li class="text-dark dettaglio-revisore">{{$label}}</li>
                                    @endforeach
                                @endif
                            </div>
                    </div>
                </div>
        
               
    </div>

</div>

@endforeach
@endif
                    



    </section>
        
</x-layout>