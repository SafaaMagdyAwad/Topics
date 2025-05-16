<section class="section-padding section-bg">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">

            <div class="col-lg-12 col-12">
                <h3 class="mb-4 pb-2">We'd love to hear from you</h3>
            </div>

            <div class="col-lg-6 col-12">
                <form action="{{ route('sendContactMessage') }}" method="post" class="custom-form contact-form"
                    role="form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Name" required="">

                                <label for="floatingInput">Name</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Email address" required="">

                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <div class="form-floating">
                                <input type="text" name="subject" id="name" class="form-control"
                                    placeholder="Name" required="">

                                <label for="floatingInput">Subject</label>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>

                                <label for="floatingTextarea">Tell me about the project</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 ms-auto">
                            <button type="submit" class="form-control">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                <iframe class="google-map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6818.68494839463!2d31.385601390232498!3d31.29427821521099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f76f50fdd79a37%3A0x7ee17d5eaf475af0!2z2KzZhdmK2KfZhtip!5e0!3m2!1sen!2seg!4v1725384091783!5m2!1sen!2seg"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5 class="mt-4 mb-2">Topic Listing Center</h5>

                <p>Bay St &amp;, Larkin St, San Francisco, CA 94109, United States</p>
            </div>

        </div>
    </div>
</section>
