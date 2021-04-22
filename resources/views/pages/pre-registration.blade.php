@extends('layouts.auth')

@section('content')
    @include('layouts.menu-auth')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-transparent border-bottom-0">
                        <h5 class="mb-0 h4 font-weight-700">Pre-Registration</h5>
                        <p class="lead text-muted mb-0">You can pre register and able to reserve your set in the school.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student-registration') }}" method="post">
                            @csrf
                            <h6 class="font-weight-bold pb-2 border-bottom">Last School Attended</h6>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="last_school_lrn">Learner Reference Number(LRN):</label>
                                    <input type="text" value="{{old('last_school_lrn')}}"
                                           name="last_school_lrn"
                                           id="last_school_lrn"
                                           class="form-control"/>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputLastSchoolId">Select the school name:</label>
                                    <select id="inputLastSchoolId" name="last_school_id"
                                            class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($high_schools as $high_school)
                                            <option
                                                value="{{$high_school->id}}"
                                                {{ old('last_school_id') === $high_school->id ? 'selected' : null  }}>
                                                {{ strtoupper($high_school->name) }}
                                            </option>
                                        @empty
                                            <option>No schools available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAward">Awards Received:</label>
                                    <input type="text" value="{{old('last_school_award')}}" name="last_school_award" class="form-control" id="inputAward">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="last_school_year_attended">Year Last Attended:</label>
                                    <select name="last_school_year_attended"
                                            id="last_school_year_attended"
                                            class="selectpicker form-control" data-live-search="true">
                                        <?php $now = date('Y'); ?>
                                        @for($y=1990; $y<=$now; $y++ )
                                            <option value="{{$y}}" {{ old('last_school_year_attended') === $y ? 'selected' : null  }}>{{$y}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>{{--////////// LAST SCHOOL ATTENDED INFORMATION ////////////--}}

                            <h6 class="font-weight-bold mt-4 pb-2 border-bottom">Your Personal Information</h6>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputFirstName">First name:</label>
                                    <input type="text" value="{{old('first_name')}}" name="first_name" class="form-control" id="inputFirstName">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputMiddleName">Middle name:</label>
                                    <input type="text" value="{{old('middle_name')}}" name="middle_name" class="form-control" id="inputMiddleName">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputLastName">Last name:</label>
                                    <input type="text" value="{{old('last_name')}}" name="last_name" class="form-control" id="inputLastName">
                                </div>
                            </div>{{--////////// first,middle,last name ////////////--}}

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputSuffixName">Suffix Name:</label>
                                    <select name="suffix_name" id="inputSuffixName" class="custom-select">
                                        <option value="" {{old('suffix_name') === '' ? 'selected' : null}}>None</option>
                                        <option value="Jr" {{old('suffix_name') === 'Jr' ? 'selected' : null}}>Jr</option>
                                        <option value="I" {{old('suffix_name') === 'I' ? 'selected' : null}}>I</option>
                                        <option value="II" {{old('suffix_name') === 'II' ? 'selected' : null}}>II</option>
                                        <option value="III" {{old('suffix_name') === 'III' ? 'selected' : null}}>III</option>
                                        <option value="IV" {{old('suffix_name') === 'IV' ? 'selected' : null}}>IV</option>
                                        <option value="V" {{old('suffix_name') === 'V' ? 'selected' : null}}>V</option>
                                        <option value="VI" {{old('suffix_name') === 'VI' ? 'selected' : null}}>VI</option>
                                        <option value="VII" {{old('suffix_name') === 'VII' ? 'selected' : null}}>VII</option>
                                        <option value="VIII" {{old('suffix_name') === 'VIII' ? 'selected' : null}}>VIII</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputNickName">Nick name:</label>
                                    <input type="text" value="{{old('nick_name')}}" name="nick_name" class="form-control" id="inputNickName">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputBirthday">Birthday:</label>
                                    <input type="date" value="{{old('birthday')}}" name="birthday" class="form-control" id="inputBirthday">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputCivilStatus">Civil Status:</label>
                                    <select name="civil_status" id="inputCivilStatus" class="custom-select">
                                        <option value="1" {{old('civil_status') === 1 ? 'selected' : null}}>Single</option>
                                        <option value="2" {{old('civil_status') === 2 ? 'selected' : null}}>In a Relationship</option>
                                        <option value="3" {{old('civil_status') === 3 ? 'selected' : null}}>Engaged</option>
                                        <option value="4" {{old('civil_status') === 4 ? 'selected' : null}}>Married</option>
                                        <option value="5" {{old('civil_status') === 5 ? 'selected' : null}}>It's complicated</option>
                                        <option value="6" {{old('civil_status') === 6 ? 'selected' : null}}>Open Relationship</option>
                                        <option value="7" {{old('civil_status') === 7 ? 'selected' : null}}>Widowed</option>
                                        <option value="8" {{old('civil_status') === 8 ? 'selected' : null}}>Windowed</option>
                                        <option value="9" {{old('civil_status') === 9 ? 'selected' : null}}>Separated</option>
                                        <option value="10" {{old('civil_status') === 10 ? 'selected' : null}}>Divorced</option>
                                        <option value="11" {{old('civil_status') === 11 ? 'selected' : null}}>Civil-union</option>
                                        <option value="12" {{old('civil_status') === 12 ? 'selected' : null}}>Domestic-partnership</option>
                                        <option value="13" {{old('civil_status') === 13 ? 'selected' : null}}>I dont want to say</option>
                                    </select>
                                </div>
                            </div>{{--////////// SUFFIX, NN, BIR,CI_S ////////////--}}

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputCitizenship">Citizenship:</label>
                                    <input type="text"
                                           value="{{old('citizenship') }}"
                                           name="citizenship"
                                           class="form-control"
                                           id="inputCitizenship"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputReligionId">Select your religion:</label>
                                    <select id="inputReligionId" name="religion_id" class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($religions as $religion)
                                            <option
                                                value="{{$religion->id}}" {{(int)old('religion_id' === $religion->id ? 'selected': null)}}>{{ strtoupper($religion->name) }}</option>
                                        @empty
                                            <option>No religions available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputGender">Gender:</label>
                                    <select name="gender" class="custom-select" id="inputGender">
                                        <option value="1" {{(int)old('gender' === 1 ? 'selected': null)}}>Male</option>
                                        <option value="2"{{(int)old('gender' === 2 ? 'selected': null)}}>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputTribe">Select your tribe:</label>
                                    <select id="inputTribe" name="tribe_id" class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($tribes as $tribe)
                                            <option
                                                value="{{$tribe->id}}"
                                                {{(int)old('tribe_id') === $tribe->id ? 'selected' : null }}>
                                                {{ strtoupper($tribe->name) }}
                                            </option>
                                        @empty
                                            <option>No tribes available</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>{{--////////// Citizenship, Religion, Gender,Tribe ////////////--}}

                            <h6 class="font-weight-bold mt-4 pb-2 border-bottom">Body Index</h6>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputHeight">Height:</label>
                                    <input type="text" value="{{old('height')}}" name="height" class="form-control" id="inputHeight">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputWeight">Weight:</label>
                                    <input type="text" value="{{old('weight')}}" name="weight" class="form-control" id="inputWeight">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputBloodType">Blood Type:</label>
                                    <input type="text" value="{{old('blood_type')}}"  name="blood_type" class="form-control" id="inputBloodType">
                                </div>
                            </div>{{--////////// height, weight, blood type ////////////--}}

                            <h6 class="font-weight-bold mt-4 pb-2 border-bottom">Birth Place</h6>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputProvinceId">Select the Province:</label>
                                    <select id="inputProvinceId" name="birth_province_id"
                                            class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($provinces as $province)
                                            <option
                                                value="{{$province->id}}"
                                                {{(int)old('birth_province_id') === $province->id ? 'selected' : null}}>
                                                {{ strtoupper($province->name) }}
                                            </option>
                                        @empty
                                            <option>No provinces available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputBirthCityId">Select the Municipality/City:</label>
                                    <select id="inputBirthCityId" name="birth_city_id" class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($cities as $city)
                                            <option {{(int)old('birth_city_id') === $city->id ? 'selected' : null}}
                                                value="{{$city->id}}">
                                                {{ strtoupper($city->name) }}
                                            </option>
                                        @empty
                                            <option>No cities available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputBirthBarangayId">Select the Barangay:</label>
                                    <select id="inputBirthBarangayId" name="birth_barangay_id"
                                            class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($barangays as $barangay)
                                            <option {{(int)old('birth_barangay_id') === $barangay->id ? 'selected' : null}}
                                                value="{{$barangay->id}}">{{ strtoupper($barangay->name) }}</option>
                                        @empty
                                            <option>No barangays available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputBirthStreetName">Purok/Sitio/Village/Subdivision:</label>
                                    <input type="text" value="{{old('birth_street')}}" name="birth_street" class="form-control"
                                           id="inputBirthStreetName">
                                </div>
                            </div>{{--////////// BIRTH PLACE ////////////--}}

                            <h6 class="font-weight-bold mt-4 pb-2 border-bottom">Home Address</h6>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputHomeProvinceId">Select the Province:</label>
                                    <select id="inputHomeProvinceId" name="home_province_id"
                                            class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($provinces as $province)
                                            <option  {{(int)old('home_province_id') === $province->id ? 'selected' : null}}
                                                value="{{$province->id}}">{{ strtoupper($province->name) }}</option>
                                        @empty
                                            <option>No provinces available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputBirthCityId">Select the Municipality/City:</label>
                                    <select id="inputBirthCityId" name="home_city_id" class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($cities as $city)
                                            <option {{(int)old('home_city_id') === $city->id ? 'selected' : null}}
                                                value="{{$city->id}}">{{ strtoupper($city->name) }}</option>
                                        @empty
                                            <option>No cities available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputBirthBarangayId">Select the Barangay:</label>
                                    <select id="inputBirthBarangayId" name="home_barangay_id"
                                            class="selectpicker form-control"
                                            data-live-search="true">
                                        @forelse($barangays as $barangay)
                                            <option {{(int)old('home_barangay_id') === $barangay->id ? 'selected' : null}}
                                                value="{{$barangay->id}}">{{ strtoupper($barangay->name) }}</option>
                                        @empty
                                            <option>No barangays available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputBirthStreetName">Purok/Sitio/Village/Subdivision:</label>
                                    <input type="text" name="home_street_name" value="{{ old('home_street_name') }}" class="form-control"
                                           id="inputBirthStreetName">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputHomePostal">Postal Code:</label>
                                    <input type="text" name="home_postal_code" class="form-control"
                                           id="inputHomePostal" value="{{ old('home_postal_code') }}">
                                </div>
                            </div>{{--////////// Home Address ////////////--}}

                            <h6 class="font-weight-bold mt-4 pb-2 border-bottom">Contact Information</h6>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPrimaryContact">Primary Contact:</label>
                                    <input type="text" required name="globe_tm" id="inputPrimaryContact"
                                           class="form-control" value="{{ old('globe_tm') }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputSecondaryContact">Secondary Contact:</label>
                                    <input type="text" name="smart_tnt_sun" id="inputSecondaryContact"
                                           class="form-control" value="{{ old('smart_tnt_sun') }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputLandLineNumber">Landline Number:</label>
                                    <input type="text" name="landline" value="{{ old('landline') }}" id="inputLandLineNumber" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email:</label>
                                    <input type="email" required name="email" value="{{ old('email') }}" id="inputEmail" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputFacebookURL">Facebook Account URL:</label>
                                    <input type="text" name="social_facebook" value="{{ old('social_facebook') }}"  id="inputFacebookURL"
                                           class="form-control">
                                </div>
                            </div>{{--////////// CONTACT INFORMATION ////////////--}}

                            <h6 class="font-weight-bold mt-4 pb-2 border-bottom">Family Contact Person</h6>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputFatherFirstName">Father First Name:</label>
                                    <input type="text" required name="father_first_name" id="inputFatherFirstName"
                                           class="form-control" value="{{ old('father_first_name') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputFatherLastName">Father Last Name:</label>
                                    <input type="text" name="father_last_name" id="inputFatherLastName"
                                           class="form-control" value="{{ old('father_last_name') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputFatherMiddleName">Father Middle Name:</label>
                                    <input type="text" name="father_middle_name" id="inputFatherMiddleName"
                                           class="form-control" value="{{ old('father_middle_name') }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputFatherHomeAddress">Father Home Address:</label>
                                    <textarea required name="father_home_address" rows="3" id="inputFatherHomeAddress"
                                              class="form-control">{{ old('father_home_address') }}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputFatherContactNumber">Father Contact Number:</label>
                                    <input type="text" name="father_contact_no" id="inputFatherContactNumber"
                                           class="form-control" value="{{ old('father_contact_no') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputFatherOccupation">Father Occupation:</label>
                                    <input type="text" name="father_occupation" id="inputFatherOccupation"
                                           class="form-control" value="{{ old('father_occupation') }}">
                                </div>
                            </div>{{--////////// CONTACT PERSON FATHER ////////////--}}

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputMotherFirstName">Mother First Name:</label>
                                    <input type="text" required name="mother_first_name" id="inputMotherFirstName"
                                           class="form-control" value="{{ old('mother_first_name') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputMotherLastName">Mother Last Name:</label>
                                    <input type="text" name="mother_last_name" id="inputMotherLastName"
                                           class="form-control" value="{{ old('mother_last_name') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputMotherMiddleName">Mother Middle Name:</label>
                                    <input type="text" name="mother_middle_name" id="inputMotherMiddleName"
                                           class="form-control" value="{{ old('mother_middle_name') }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputMotherHomeAddress">Mother Home Address:</label>
                                    <textarea required name="mother_home_address" rows="3" id="inputMotherHomeAddress"
                                              class="form-control">{{ old('mother_home_address') }}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputMotherContactNumber">Mother Contact Number:</label>
                                    <input type="text" name="mother_contact_no" id="inputMotherContactNumber"
                                           class="form-control" value="{{ old('mother_contact_no') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputMotherOccupation">Mother Occupation:</label>
                                    <input type="text" name="mother_occupation" id="inputMotherOccupation"
                                           class="form-control" value="{{ old('mother_occupation') }}">
                                </div>
                            </div>{{--////////// CONTACT PERSON MOTHER ////////////--}}

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputContactPersonFirstName">Contact Person First Name:</label>
                                    <input type="text" required name="contact_first_name"
                                           id="inputContactPersonFirstName" value="{{ old('contact_first_name') }}" class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputContactPersonLastName">Contact Person Last Name:</label>
                                    <input type="text" name="contact_last_name" id="inputContactPersonLastName"
                                           class="form-control" value="{{ old('contact_last_name') }}" >
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputContactPersonMiddleName">Contact Person Middle Name:</label>
                                    <input type="text" name="contact_middle_name" id="inputContactPersonMiddleName"
                                           class="form-control" value="{{ old('contact_middle_name') }}" >
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputContactPersonHomeAddress">Contact Person Home Address:</label>
                                    <textarea required name="contact_home_address" rows="3"
                                              id="inputContactPersonHomeAddress"
                                              class="form-control">{{ old('contact_home_address') }}</textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputContactPersonContactNumber">Contact Person Number:</label>
                                    <input type="text" name="contact_contact_no" id="inputContactPersonContactNumber"
                                           class="form-control" value="{{ old('contact_contact_no') }}" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputContactPersonRelation">Contact Person Relation:</label>
                                    <input type="text" name="contact_relation" id="inputContactPersonRelation"
                                           class="form-control" value="{{ old('contact_relation') }}" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputContactForEmergency">For Emergency:</label>
                                    <input type="text" name="contact_for_emergency" id="inputContactForEmergency"
                                           class="form-control" value="{{ old('contact_for_emergency') }}" >
                                </div>
                            </div>{{--////////// OTHER CONTACT PERSON  ////////////--}}

                            <h6 class="font-weight-bold mt-4 pb-2 border-bottom">Education Background</h6>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPrimaryEducation">Primary Name of School:</label>
                                    <input type="text" required name="primary_education" id="inputPrimaryEducation"
                                           class="form-control" value="{{ old('primary_education') }}" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPrimarySchoolYear">Primary School Year:</label>
                                    <input type="text" required name="primary_school_year" id="inputPrimarySchoolYear"
                                           class="form-control" value="{{ old('primary_school_year') }}" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPrimaryHonor">Primary School Honors:</label>
                                    <input type="text" required name="primary_honor" id="inputPrimaryHonor"
                                           class="form-control" value="{{ old('primary_honor') }}" >
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPrimarySchoolAddress">Primary School Address</label>
                                    <textarea type="text" required name="primary_school_address"
                                              id="inputPrimarySchoolAddress" class="form-control" rows="3">{{ old('primary_school_address') }}</textarea>
                                </div>
                            </div><!-- end of primary education -->
                            <hr>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputSecondaryEducation">Secondary Name of School:</label>
                                    <input type="text" required name="secondary_education" id="inputSecondaryEducation"
                                           class="form-control" value="{{ old('secondary_education') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputSecondarySchoolYear">Secondary School Year:</label>
                                    <input type="text" required name="secondary_school_year"
                                           id="inputSecondarySchoolYear" class="form-control" value="{{ old('secondary_school_year') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputSecondaryHonor">Secondary School Honors:</label>
                                    <input type="text" required name="secondary_honor" id="inputSecondaryHonor"
                                           class="form-control" value="{{ old('secondary_honor') }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputSecondarySchoolAddress">Secondary School Address</label>
                                    <textarea type="text" required name="secondary_school_address"
                                              id="inputSecondarySchoolAddress" class="form-control" rows="3">{{ old('secondary_school_address') }}</textarea>
                                </div>
                            </div><!-- end of primary education -->
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
