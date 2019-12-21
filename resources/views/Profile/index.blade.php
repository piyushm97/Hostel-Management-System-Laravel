<link href="{{ asset('css/Profile.index.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="userInfo">
                <img src="" class="rounded-circle" alt="img">
                <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
            </div>
            <form class="profile-index-form">
                @csrf
                <div class="col-lg-6 col-sm-12 profile-index-section-1">
                    <div class="basic-details-wrapper">
                        <hr/>
                        <h4>Basic Details</h4>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text"
                                       class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                       value="{{ $user->first_name }}" required autocomplete="first_name"
                                       placeholder="First name" autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text"
                                       class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                       value="{{ $user->last_name }}" required autocomplete="last_name"
                                       placeholder="Last name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ $user->email }}" readonly required autocomplete="email"
                                       placeholder="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                <input id="male" type="radio"
                                       {{ $user->StudentProfile->gender == 'male' ? 'checked' : null }}
                                       class="@error('gender') is-invalid @enderror" name="gender"
                                       value="male"
                                ><label>Male</label>

                                <input id="female" type="radio"
                                       {{ $user->StudentProfile->gender == 'female' ? 'checked' : null }}
                                       class="@error('gender') is-invalid @enderror" name="gender"
                                       value="female"
                                ><label>Female</label>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date"
                                       class="form-control @error('dob') is-invalid @enderror" name="dob"
                                       value="{{ $user->StudentProfile->dob }}" required
                                       autofocus>

                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cast" class="col-md-4 col-form-label text-md-right">Cast</label>

                            <div class="col-md-6">
                                <select class="form-control" name="cast" id="cast">
                                    <option value="0" selected disabled>Select Cast</option>
                                    <option value="gen">General</option>
                                    <option value="obc">OBC</option>
                                    <option value="sc">SC</option>
                                    <option value="st">ST</option>
                                    <option value="oth">Other</option>
                                </select>

                                @error('cast')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="address-wrapper pt-5">
                        <hr/>
                        <h4>Address</h4>

                        <div class="form-group row">
                            <label for="lane1" class="col-md-4 col-form-label text-md-right">Lane 1</label>

                            <div class="col-md-6">
                                <input id="lane1" type="text"
                                       class="form-control @error('lane1') is-invalid @enderror" name="lane1"
                                       value="{{ $user->StudentProfile->lane1 }}" required autocomplete="lane1"
                                       placeholder="lane1" autofocus>

                                @error('lane1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lane2" class="col-md-4 col-form-label text-md-right">Lane 2</label>

                            <div class="col-md-6">
                                <input id="lane2" type="text"
                                       class="form-control @error('lane2') is-invalid @enderror" name="lane2"
                                       value="{{ $user->StudentProfile->lane2 }}" required autocomplete="lane2"
                                       placeholder="lane2" autofocus>

                                @error('lane2')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lane3" class="col-md-4 col-form-label text-md-right">Lane 3/ Lankmark</label>

                            <div class="col-md-6">
                                <input id="lane3" type="text"
                                       class="form-control @error('lane3') is-invalid @enderror" name="lane3"
                                       value="{{ $user->StudentProfile->lane3 }}" autocomplete="lane3"
                                       placeholder="lane3" autofocus>

                                @error('lane3')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text"
                                       class="form-control @error('city') is-invalid @enderror" name="city"
                                       value="{{ $user->StudentProfile->city }}" required autocomplete="city"
                                       placeholder="city" autofocus>

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
                            <div class="col-md-6">
                                <select class="form-control" name="state" id="state" required>
                                    <option selected disabled>Select State</option>
                                    <option
                                        value="gujarat" {{ $user->StudentProfile->state == 'gujarat' ? 'selected' : null}}>
                                        Gujarat
                                    </option>
                                    <option
                                        value="maharashtra" {{ $user->StudentProfile->state == 'maharashtra' ? 'selected' : null }}>
                                        Maharashtra
                                    </option>
                                    <option>MP</option>
                                    <option>UP</option>
                                    <option>Thats Its</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pincode" class="col-md-4 col-form-label text-md-right">PIN Code</label>

                            <div class="col-md-6">
                                <input id="pincode" type="number"
                                       class="form-control @error('pincode') is-invalid @enderror" name="pincode"
                                       value="{{ $user->StudentProfile->zipcode }}" required autocomplete="pincode"
                                       placeholder="pincode" autofocus>

                                @error('pincode')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 profile-index-section-2">
                    <div class="education-wrapper">
                        <hr/>
                        <h4>Education</h4>

                        <div class="form-group row">
                            <label for="degree" class="col-md-4 col-form-label text-md-right">Pass Out Degree</label>

                            <div class="col-md-6">
                                <select class="form-control" name="degree" id="degree" required>
                                    <option value="0" disabled selected>Select Your Highest Education</option>
                                    <option value="12">12th</option>
                                    <option value="diploma">Diploma</option>
                                    <option value="1st year">1st Year</option>
                                    <option value="2nd year">2nd Year</option>
                                    <option value="3rd year">3rd Year</option>
                                    <option value="4th year">4th Year</option>
                                </select>

                                @error('degree')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="marks" class="col-md-4 col-form-label text-md-right">Marks/Percentage</label>
                            <div class="col-md-6">
                                <input id="marks" type="number"
                                       class="form-control @error('marks') is-invalid @enderror" name="marks"
                                       value="{{ $user->StudentProfile->marks }}" required autocomplete="marks"
                                       placeholder="Enter Marks" autofocus>

                                @error('marks')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">Department</label>
                            <div class="col-md-6">
                                <select class="form-control" name="department" id="department">
                                    <option value="0" selected disabled>Select Department</option>
                                    <option
                                        value="computer" {{ $user->StudentProfile->department == 'computer' ? 'selected' : null }}>
                                        Computer
                                    </option>
                                    <option value="electrical">Electrical</option>
                                    <option value="civil">Civil</option>
                                    <option value="mech">Mechanical</option>
                                    <option value="ec">E.C</option>
                                </select>

                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sem" class="col-md-4 col-form-label text-md-right">Semester</label>
                            <div class="col-md-6">
                                <select class="form-control" name="sem" id="sem">
                                    <option selected disabled>Select Semester</option>
                                    <option value="" {{ $user->StudentProfile->sem == '1' ? 'selected' : null }}>1
                                    </option>
                                    <option value="" {{ $user->StudentProfile->sem == '2' ? 'selected' : null }}>2
                                    </option>
                                    <option value="" {{ $user->StudentProfile->sem == '3' ? 'selected' : null }}>3
                                    </option>
                                    <option value="" {{ $user->StudentProfile->sem == '4' ? 'selected' : null }}>4
                                    </option>
                                    <option value="" {{ $user->StudentProfile->sem == '5' ? 'selected' : null }}>5
                                    </option>
                                    <option value="" {{ $user->StudentProfile->sem == '6' ? 'selected' : null }}>6
                                    </option>
                                    <option value="" {{ $user->StudentProfile->sem == '7' ? 'selected' : null }}>7
                                    </option>
                                    <option value="" {{ $user->StudentProfile->sem == '8' ? 'selected' : null }}>8
                                    </option>
                                </select>

                                @error('sem')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="image-wrapper pt-5 mt-5">
                        <hr/>
                        <h4>Change Profile Image</h4>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file"
                                       class="form-control @error('image') is-invalid @enderror" name="image"
                                       accept="image/*" autofocus>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper p-5 m-5">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
