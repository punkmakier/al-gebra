<div id="syncTestModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Sync Post Test</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Lesson <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="lesson" id="syncLesson">
                                            <option selected>- Select -</option>
                                            <option value="1">Lesson 1</option>
                                            <option value="2">Lesson 2</option>
                                            <option value="3">Lesson 3</option>
                                            <option value="4">Lesson 4</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="syncData">
                            
                            <div class="mb-3 text-center mt-3">
                                <input class="btn btn-primary" id="syncNow" value="Sync">
                            </div>


                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


