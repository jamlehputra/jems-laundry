
                  
                    <!doctype html>
                    <html lang="en" class="fullscreen-bg">
                    
                    <head>
                        <title>Login | Jems Laundry</title>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
                        <!-- VENDOR CSS -->
                        <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
                        <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
                        <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
                        <!-- MAIN CSS -->
                        <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
                        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
                        <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
                        <!-- GOOGLE FONTS -->
                        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
                        <!-- ICONS -->
                        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
                        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/images.png')}}">
                    </head>
                    
                    <body>
                        <!-- WRAPPER -->
                        <div id="wrapper">
                            <div class="vertical-align-wrap">
                                <div class="vertical-align-middle">
                                    <div class="auth-box ">
                                        <div class="left">
                                            <div class="content">
                                                <div class="header">
                                                    <div class="logo text-center"><h1>Jems Laundry</h1></div>
                                                    <p class="lead">Login to your account</p>
                                                </div>
                                                <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                
                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email  ') }}</label>
                                
                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                
                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                                <div class="col-md-4 col-form-label text-md-right">
                                                                        
                                                                </div>
                                    
                                                                <div class="col-md-6">
                                                                        <button type="submit" class="btn btn-primary col-md-12">
                                                                                login
                                                                            </button>
                                                                </div>
                                                            </div>
                                
                                                        
                                
                                                        <div class="form-group row mb-">
                                                            <div class="col-md-11 offset-md-6">
                                                                
                                                                                                
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class=""></div>
                                            <div class="content text">
                                                <h1 class="heading"></h1>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WRAPPER -->
                    </body>
                    
                    </html>
                    