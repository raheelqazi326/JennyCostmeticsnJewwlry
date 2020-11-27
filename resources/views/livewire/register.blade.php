<div class="ct-contentWrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Become a Member</h4>
                <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">It's Easy...</div>
                <form class="form-horizontal" wire:submit.prevent="save">
                    <div class="form-group">
                        <label for="fullname" class="col-sm-2 control-label">Full Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fullname" wire:model.lazy="fullname">
                            @error('fullname')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" wire:model.lazy="email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" wire:model.lazy="password">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="col-sm-2 control-label">Confirm Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="confirm_password" wire:model.lazy="confirm_password">
                            @error('confirm_password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <input type="checkbox" id="newsletter" wire:model="notify" checked>
                                <label for="newsletter">
                                    <span class="ct-u-size14 ct-u-colorGrey">Send me future news and offers from Jenny's Jewellery</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">
                                Register <i class="fa fa-long-arrow-right fa-fw"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="ct-privacy">
                                By creating an account, you agree to <a href="product-policies.html">Jenny's Jewellery Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a>.
                            </div>
                        </div>
                    </div>
                </form>
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
                <div class="tweets_display">

                </div>
            </div>
        </div>
    </div>