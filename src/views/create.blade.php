<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div>
    <div class="content">
        <div class="title m-b-md">
            Laravel
            <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{route('user.add')}}" id="createForm" name="createForm">
                {{ csrf_field() }}
                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        First Name: *
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="User_First_Name" name="User_First_Name" value="{{ old('User_First_Name') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Last Name: *
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="User_Last_Name" name="User_Last_Name" value="{{ old('User_Last_Name') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Short Name:*
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="User_Short_Name" name="User_Short_Name" value="{{ old('User_Short_Name') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Long Name: *
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="User_Long_Name" name="User_Long_Name" value="{{ old('User_Long_Name') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Email: *
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="email" name="email" value="{{ old('email') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Contact Number:
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="User_Contact" name="User_Contact" value="{{ old('User_Contact') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Country:
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="country" name="country" value="{{ old('country') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        City:
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="City" name="City" value="{{ old('City') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Zip:
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="text" id="User_Zip" name="User_Zip" value="{{ old('User_Zip') }}" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Password: *
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="password" id="password" name="password" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-search-input" class="col-md-2 col-form-label">
                        Confirm Password: *
                    </label>
                    <div class="col-md-6">
                        <input class="form-control m-input" type="password" id="confirm_password" name="confirm_password" >
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-email-input" class="col-md-2 col-form-label">
                        Description:
                    </label>
                    <div class="col-md-6">
                        <textarea class="form-control m-input" id="User_Description" rows="3" name="User_Description">{{ old('User_Description') }}</textarea>
                    </div>
                </div>

                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                                <a href="{{ URL::previous()}}" class="btn m-btn--pill btn-primary m-btn">
                                    Back
                                </a>
                                <button type="submit" class="btn m-btn--pill m-btn btn-success">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
