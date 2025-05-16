 <!-- popular topics -->
 <section class="section-padding">
     <div class="container">
         <div class="row">

             <div class="col-lg-12 col-12 text-center">
                 <h3 class="mb-4">Popular Topics</h3>
             </div>
             @foreach ($popular as $item)
                 <div class="col-lg-8 col-12 mt-3 mx-auto">
                     <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                         <div class="d-flex">
                             @if ($item->image)
                                 <img src="{{ asset('assets/admin/images/topics/' . $item->image) }}"
                                     class="custom-block-image img-fluid" alt="">
                             @else
                                 <img src="https://www.ifioque.com/assets/img/core/Diplo-Topic.webp"
                                     class="custom-block-image img-fluid" alt="">
                             @endif

                             <div class="custom-block-topics-listing-info d-flex">
                                 <div>
                                     <h5 class="mb-2">{{ $item->title }}</h5>

                                     <p class="mb-0">{{ Str::limit($item->content, 40, '...') }}</p>

                                     <a href="{{ route('topicsDetail', $item) }}"
                                         class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                 </div>

                                 <span class="badge bg-design rounded-pill ms-auto">{{ $item['views'] }}</span>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach

             <div class="col-lg-12 col-12">
                 <nav aria-label="Page navigation example">
                     <ul class="pagination justify-content-center mb-0">
                         {{ $popular->links() }}
                     </ul>
                 </nav>
             </div>

         </div>
     </div>
 </section>
