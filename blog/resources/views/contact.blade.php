<x-layout>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                <div class="contact">
                    <div class="col-md-12">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4554.007632767679!2d37.535115765570104!3d55.747111651713865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bdd017303b9%3A0xd1f63f945a2450c2!2z0JzQvtGB0LrQstCwINCh0LjRgtC4!5e0!3m2!1sru!2sua!4v1643750513818!5m2!1sru!2sua"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="kode-section-title">
                                <h3>Contact Info</h3>
                            </div>
                            <div class="kode-forminfo">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam aliquip..</p>
                                <ul class="kode-form-list">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <p><strong>Address:</strong> 805 consectetur adipiscing elit, sed do eiusmod
                                            tempor</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p><strong>Phone:</strong> 123 456 7890</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <p><strong>Email:</strong> Info@sportyleague.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-us">
                            <h3>Subscribe to our newsletter</h3>
                            <form action="/newsletter" method="POST" id="comments_form" class="form-horizontal1">
                                @csrf
                                <div class="comment-box-field">
                                    <div class=" col-sm-12 col-xs-12">
                                        <div class="comment-box-full">
                            <input
                                id="email" class="form-control4" placeholder="{{ __('Email') }}"
                                name="email" cols="45" rows="3" aria-required="true" required>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="comment-box-submit">
                                            <input id="submit" value="Subscribe" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
