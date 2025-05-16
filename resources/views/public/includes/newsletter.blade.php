<section class="section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5 col-12">
                <img src="{{ asset('assets/public/images/rear-view-young-college-student.jpg') }}"
                    class="newsletter-image img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                <form class="custom-form subscribe-form" action="{{ route('newsletter') }}" method="post" role="form">
                    @csrf
                    <h4 class="mb-4 pb-2">Get Newsletter</h4>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" name="email" value="{{ old('email') }}" id="subscribe-email"
                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">

                    <div class="col-lg-12 col-12">
                        <button type="submit" class="form-control">Subscribe</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
