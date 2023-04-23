<div id="createConceptModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Create Concept</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">

                        <form class="ps-3 pe-3" id="addConceptModal" enctype="multipart/form-data" method="POST" action="Controller/CreateConcept.php">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Lesson <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="lesson" required>
                                            <option selected>- Select -</option>
                                            <option value="1">Lesson 1</option>
                                            <option value="2">Lesson 2</option>
                                            <option value="3">Lesson 3</option>
                                            <option value="4">Lesson 4</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Concept <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="concept" required>
                                            <option selected>- Select -</option>
                                            <option value="1">Concept 1</option>
                                            <option value="2">Concept 2</option>
                                            <option value="3">Concept 3</option>
                                            <option value="4">Concept 4</option>
                                            <option value="5">Concept 5</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Learning Methods <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="learningmethod" id="learningMethods">
                                            <option selected>- Select -</option>
                                            <option value="1">Reading</option>
                                            <option value="2">Audio</option>
                                            <option value="3">Visual</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Set Attempt <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3" name="attempt" id="attempts">
                                            <option selected>- Select -</option>
                                            <option value="1">For Attempt 1</option>
                                            <option value="2">For Attempt 2</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col" id="insertBodyHere">
                                    
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="col" id="insertBodyHere1">
                                        
                                    </div>
                                </div>
                            </div>
                        
                            
                            
                            <div class="mb-3 text-center mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>