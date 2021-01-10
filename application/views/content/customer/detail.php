<div class="row">
    <div class="offset-3 col-6">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url() . 'assets/dist/img/avatar3.png' ?>" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $customers->fullname ?></h3>

                <p class="text-muted text-center"><?= $customers->username ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right"><?= $customers->email ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>No NPWP</b> <a class="float-right"><?= $customers->no_npwp ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Address</b> <a class="float-right"><?= $customers->address ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>Phone Number</b> <a class="float-right"><?= $customers->phone_number ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>No KTP</b> <a class="float-right"><?= $customers->no_ktp ?></a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>