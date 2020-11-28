<div class="ct-contentWrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Contact Us</h4>
                <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">Questions? Comments? We Would Love to Hear From You!</div>

                <ul class="ct-contactAddress list-unstyled ct-u-size16 ct-u-paddingBottom20">
                    <li>
                        <div class="ct-addressReference"><i class="fa fa-location-arrow"></i> Mailing Address:</div>
                        <div class="ct-addressDataReference">
                            <span>Jenny Jewelry & Cosmetics</span><br>
                            <span>P.O. Box 1234</span><br>
                            <span>Chesterfield, NY 23456</span>
                        </div>
                    </li>
                    <li>
                        <div class="ct-addressReference"><i class="fa fa-phone"></i> Phone Number:</div>
                        <div class="ct-addressDataReference">
                            <span>(012) 345-6789</span>
                        </div>
                    </li>
                    <li>
                        <div class="ct-addressReference"><i class="fa fa-envelope"></i> Email Address:</div>
                        <div class="ct-addressDataReference">
                            <a href="#"><span>info@jeenyshop.com</span></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Follow Us</h4>
                <div class="ct-u-paddingBottom20 ct-u-paddingTop30">
                    <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                          <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ct-googleMap" data-location="New York" data-zoom="12" data-height="500"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom40 ct-u-paddingTop50">All Fields With * Are Required.</div>
                <div class="ct-contactForm">
                    <div class="successMessage alert alert-success" style="display: none">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Thank You!
                    </div>
                    <div class="errorMessage alert alert-danger" style="display: none">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Ups! An error occured. Please try again later.
                    </div>

                    <form class="form-horizontal" wire:submit.prevent="save">
                        @include('layouts.messages')
                        <div class="form-group">
                            <label for="fullname" class="col-sm-2 control-label">Full Name*: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fullname" wire:model.lazy="fullname" placeholder="Full Name">
                                @error('fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company" class="col-sm-2 control-label">Company:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" wire:model.lazy="company" id="company" placeholder="Company">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email*:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" wire:model.lazy="email" id="email" placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" wire:model.lazy="phone" id="phone" placeholder="Phone">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message*:</label>
                            <div class="col-sm-10">
                                <textarea id="message" class="form-control" wire:model.lazy="message" rows="6" placeholder="Message"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-long-arrow-right"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
