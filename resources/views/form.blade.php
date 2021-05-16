<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Form</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ asset('/css/contact.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="justify-center bg-light">
                <div class="bgwhite">
                  <div class="mx-auto mwidth">
                    <div class="px-xl-4 px-lg-4 px-md-4 pl-sm-5 px-xs-5">
                      <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h2 class="h2 py-xl-5 py-lg-5 py-md-5 py-sm-5 py-xs-5">Contact Form Demo Project</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="px-xl-5 px-lg-5 px-md-5 px-sm-5 px-xs-5 bgrey">
                  <div class="mx-auto py-0 py-sm-1 mwidth">
                    <div class="row py-2">
                      <div class="col-12 col-md-12 mx-md-4 mx-sm-2">
                        <div class="card-group">
                          <div class="card my-md-5 my-sm-5 mr-md-3">
                            <div class="d-flex flex-row g-0 px-sm-0 py-3 ml-2">
                              <div class="flex-column">
                                <i class="fa fa-play-circle-o fa-5x py-sm-0 py-3" aria-hidden="true"></i>
                              </div>
                              <div class="flex-column">
                                <div class="card-body">
                                  <p class="card-text pl-3 mt-3 mt-sm-0">Text + Right Aligned Image in Two Lines</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card my-md-5 my-sm-5 ml-md-3">
                            <div class="d-flex flex-row g-0 px-sm-0 py-3 ml-2">
                              <div class="flex-column">
                                <i class="fa fa-dot-circle-o fa-5x py-sm-0 py-3" aria-hidden="true"></i>
                              </div>
                              <div class="flex-column">
                                <div class="card-body">
                                  <p class="card-text pl-3 mt-3 mt-sm-0">Text + Right Aligned Image</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bgwhite">
                  <div class="mx-auto px-3 mwidth">
                    <!-- Success message -->
                      @if(Session::has('success'))
                          <div class="alert alert-success">
                              {{Session::get('success')}}
                          </div>
                      @endif
                    <div class="py-5">
                      <form class="row g-3 needs-validation" method="post" action="{{ route('contact.store') }}" novalidate>
                        <!-- CROSS Site Request Forgery Protection -->
                          @csrf

                          <div class="col-md-6 pt-5 position-relative">
                            <label for="validationTooltip_name" class="form-label">Name </label>
                            <input type="text" class="form-control" name="name" id="validationTooltip_name" required>
                            <!-- <div class="valid-tooltip">
                              Looks good!
                            </div> -->
                            <div class="invalid-tooltip">
                              Please provide a valid Name.
                            </div>
                          </div>
                          <div class="col-md-6 pt-5 position-relative">
                            <label for="validationTooltip_email" class="form-label">Email </label>
                            <input type="text" class="form-control" name="email" id="validationTooltip_email" required>
                            <div class="invalid-tooltip">
                              Please provide a valid Email.
                            </div>
                          </div>
                          <div class="col-md-6 pt-5 position-relative">
                            <label for="validationTooltip_phone" class="form-label">Phone </label>
                            <input type="text" class="form-control" name="phone" id="validationTooltip_phone" required>
                            <div class="invalid-tooltip">
                              Please provide a valid Phone.
                            </div>
                          </div>
                          <div class="col-md-6 pt-5 position-relative">
                            <label for="validationTooltip_inquiry" class="form-label">Subject of Inquiry</label>
                            <select class="form-control" name="subject" id="validationTooltip_inquiry" required>
                               <option selected> </option>
                               <option value="website">Website</option>
                               <option value="Branding">Branding</option>
                               <option value="Hosting">Hosting</option>
                               <option value="Marketing">Marketing</option>
                             </select>
                            <div class="invalid-tooltip">
                              Please select a valid Inquiry.
                            </div>
                          </div>
                          <div class="col-md-12 pt-5 position-relative">
                            <label for="validationTooltip_message" class="form-label">Your Message </label>
                            <textarea class="form-control" name="message" id="validationTooltip_message" required></textarea>
                            <!-- <input type="text" class="form-control" id="validationTooltip05" required> -->
                            <div class="invalid-tooltip">
                              Please provide a valid Message.
                            </div>
                          </div>
                          <div class="col-4 pt-5 mt-3">
                            <button class="btn btn-primary px-md-5" type="submit">Submit</button>
                          </div>
                          <div class="col-8 pt-5 mt-3">
                            <p>
                              <span class="text-danger">* Required Fields.</span> Please be aware that we cannot ensure that communications sent over the Internet are secure.  This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form.
                            </p>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="bgrey py-5">
                  <div class="row mx-auto mwidth">
                    <div class="col-lg-10 col-md-10 col-sm-6">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6">
                      <img src="images/ivi-form-desktop.svg" class="img-thumbnail" alt="...">
                    </div>
                  </div>
                </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/validation.js') }}" type="text/javascript"></script>
    </body>
</html>
