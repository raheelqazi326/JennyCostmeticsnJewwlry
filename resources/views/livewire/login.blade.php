<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Already a Member? <span class="ct-u-colorGrey">Login</span></h4>
            <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30"></div>
            <form class="form-horizontal ct-u-paddingBottom20" wire:submit.prevent="login">
                @include('layouts.messages')
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" wire:model="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" wire:model="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{-- <div class="pull-left ct-rememberPassword">
                            <div class="checkbox">
                                <input type="checkbox" id="rememberPassword">
                                <label for="rememberPassword">
                                    <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Remember my password</span>
                                </label>
                            </div>
                        </div> --}}
                        <div class="pull-right ct-forgotPassword">
                            {{-- <a href="lost-password.html" class="ct-forgotPassword-text">Lost your Password?</a> --}}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">
                            Login <i class="fa fa-long-arrow-right fa-fw"></i>
                        </button>
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
