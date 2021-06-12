@if($setting->isclient == 1)
<!-- Client Area Start -->
<section class="myclient-area section-padding">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="section-title ">
                   <h2>{{ $setting->client_title }}</h2>
                   <span>{{ $setting->client_title }}</span>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
               <div class="client-slider">
                   @foreach ($clients as $client)
                       <div class="item">
                           <a href="{{ $client->url }}" target="_blank">
                               <img src="{{ asset('assets/front/img/'.$client->image) }}" alt="">
                           </a>
                       </div>
                   @endforeach
               </div>
           </div>
       </div>
   </div>
</section>
<!-- Client Area End -->
@endif