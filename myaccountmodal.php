<div id="myAccountModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="text-start mt-2 mb-4">
                            <h3>Edit Account</h3>
                        </div>

                        <form class="ps-3 pe-3" id="updateAccountForm">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">First Name</label>
                                        <input name="fname" value="<?php echo $userinfo->showFirstName($UserID); ?>" class="form-control" type="text" required placeholder="Enter your first name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Middle Name</label>
                                        <input name="mname" value="<?php echo $userinfo->showMiddleName($UserID); ?>" class="form-control" type="text" required placeholder="Michael Zenaty">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Last Name</label>
                                        <input name="lname" value="<?php echo $userinfo->showLastName($UserID); ?>" class="form-control" type="text" required placeholder="Michael Zenaty">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Grade</label>
                                        <input value="<?php echo $userinfo->showGrade($UserID); ?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Section</label>
                                        <input value="<?php echo $userinfo->showSection($UserID); ?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Birthdate</label>
                                        <input name="birthdate" value="<?php echo $userinfo->showBirthdate($UserID); ?>" class="form-control" type="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Address</label>
                                        <input name="address" value="<?php echo $userinfo->showAddress($UserID); ?>" class="form-control" type="text" placeholder="Enter your current address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Contact Number</label>
                                        <input name="contactNum" value="<?php echo $userinfo->showContactNumber($UserID); ?>" class="form-control" type="number"   placeholder="Enter your contact number" >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Name of Guardian</label>
                                        <input name="nameOfGuardian" value="<?php echo $userinfo->showNameOfGuardian($UserID); ?>" class="form-control" type="text"   placeholder="Enter name of your guardian">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Contact Number of Guardian</label>
                                        <input name="ContactNumOfGuardian" value="<?php echo $userinfo->showContactNumOfGuardian($UserID); ?>" class="form-control" type="number"  placeholder="Enter contact # of your guardian">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input name="email" value="<?php echo $userinfo->showEmail($UserID); ?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Student ID</label>
                                        <input value="<?php echo $userinfo->showuser_id($UserID); ?>" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="mb-3 text-center mt-3">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->