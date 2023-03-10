<!-- start contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>MAHJOUB</span></h2>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>NAME</label>
                    <input name="name" type="text" class="form-control" id="fullname">

                    <label>EMAIL</label>
                    <input name="email" type="email" class="form-control" id="email">

                    <label>SUBJECT</label>
                    <input name="subject" type="text" class="form-control" id="subject">

                    <label>Attachment</label>
                    <input name="attachment" type="file" class="form-control" id="subject">

                    <label>MESSAGE</label>
                    <textarea name="body" rows="4" class="form-control" id="message"></textarea>

                    <input type="submit" class="form-control">
                </form>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                <address>
                    <p class="address-title">MY ADDRESS</p>
                    <span>You can contact us via phone number, e-mail, or by sending a message through the contact
                        form.</span>
                    <p><i class="fa fa-phone"></i>{{ env('SITE_PHONE') }}</p>
                    <p><i class="fa fa-envelope-o"></i> {{ env('SITE_EMAIL') }}</p>
                    <p><i class="fa fa-map-marker"></i> {{ env('SITE_ADDRESS') }}</p>
                </address>
                <ul class="social-icon">
                    <li>
                        <h4>MY SOCIAL</h4>
                    </li>
                    <li><a href="{{ env('FACEBOOK') }}" class="fa fa-facebook"></a></li>
                    <li><a href="{{ env('TWITTER') }}" class="fa fa-twitter"></a></li>
                    <li><a href="{{ env('INSTGRAM') }}" class="fa fa-instagram"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end contact -->
