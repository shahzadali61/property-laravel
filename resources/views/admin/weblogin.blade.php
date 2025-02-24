@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class=" col-12 pb-5">

        <div class=" border-line py-5 table-header">
            <div class="d-flex align-items-center mb-3 flex-wrap">
                <h5 class="mb-0">Create new applicant</h5>
            </div>

        </div>
    </div>
    <div class="col-lg-10 mx-auto">
        <div class="step-indicator d-flex flex-wrap   mb-4">
            <div class="step-header active"><span class="circle">1</span> General Info. <p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle">2</span> Requirements<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle ">3</span> Internal Info<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle">4</span> Web Login<p class="indicator-line mb-0 ms-2">
                </p>
            </div>
            <div class="step-header"><span class="circle">5</span> Attachments</div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-lg-10 border-line py-5 mb-5 mx-auto">
        <h5>Web Login</h5>
    </div>
    <div class="col-lg-10 mx-auto border-line py-5">
        <div class="card-body">
            <div class="form-check mb-4">
                <input name="account-option" id="doNotCreateAccountRadio" class="form-check-input" type="radio" value="">
                <label class="form-check-label" for="doNotCreateAccountRadio">
                    Do not create a user account
                </label>
            </div>
            <div class="form-check mb-4">
                <input name="account-option" id="createAccountRadio" class="form-check-input" type="radio" value="">
                <label class="form-check-label" for="createAccountRadio">
                    Create a new user account
                </label>
            </div>

            <div class="form-check mb-4">
                <input name="account-option" id="existingUserRadio" class="form-check-input" type="radio" value="">
                <label class="form-check-label" for="existingUserRadio">
                    User already registered, Please enter username
                </label>
            </div>

            <!-- Section for Creating a New User -->
            <div class="collapse" id="createAccountSection" style="background-color: #f8f8f8;">
                <div class="p-5 ">
                    <div class="row">
                        <div class="col-12">
                            <h5>Create new account</h5>
                        </div>

                        <div class="col-md-6">

                            <label for="newUserEmail" class="form-label">Userrname</label>
                            <div class="input-group input-group-merge mb-6 bg-white">

                                <span class="input-group-text"> <i class="ri-user-line ri-20px"></i></span>
                                <input type="text" class="form-control" placeholder="Enter email / username">
                            </div>

                        </div>
                        <div class="col-md-6">

                            <label for="newUserEmail" class="form-label">Password</label>
                            <div class="input-group input-group-merge mb-6 bg-white">
                                <span class="input-group-text"><i class="ri-git-repository-private-line"></i></span>
                                <input type="password" class="form-control" placeholder="***********">
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section for Existing User Login -->
            <div class="collapse" id="existingUserSection" style="background-color: #f8f8f8;">
                <div class="p-5 ">
                    <div class="row">
                        <div class="col-12">
                            <h5>Create new account</h5>
                        </div>

                        <div class="col-md-8">

                            <div>
                                <label for="newUserEmail" class="form-label">Userrname</label>
                                <div class="input-group input-group-merge mb-6 bg-white">

                                    <span class="input-group-text"> <i class="ri-user-line ri-20px"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter email / username">
                                </div>
                            </div>
                            <button class="btn btn-secondary">
                                Check Username
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-10 mx-auto text-end mt-3">
        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
        <a href="" class="btn btn-primary">Attachments <i
            class="ri-arrow-right-circle-line"></i></a>

    </div>

</div>


@push('js')
<script>
   document.addEventListener('DOMContentLoaded', function() {
    let createAccountRadio = document.getElementById('createAccountRadio');
    let existingUserRadio = document.getElementById('existingUserRadio');
    let doNotCreateAccountRadio = document.getElementById('doNotCreateAccountRadio');

    let createAccountSection = document.getElementById('createAccountSection');
    let existingUserSection = document.getElementById('existingUserSection');

    function toggleSections() {
        if (createAccountRadio.checked) {
            createAccountSection.classList.add('show');
            existingUserSection.classList.remove('show');
        } else if (existingUserRadio.checked) {
            existingUserSection.classList.add('show');
            createAccountSection.classList.remove('show');
        } else if (doNotCreateAccountRadio.checked) {
            createAccountSection.classList.remove('show');
            existingUserSection.classList.remove('show');
        }
    }

    createAccountRadio.addEventListener('change', toggleSections);
    existingUserRadio.addEventListener('change', toggleSections);
    doNotCreateAccountRadio.addEventListener('change', toggleSections);
});


</script>
@endpush
@endsection

